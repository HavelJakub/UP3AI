<?php
    require "conn.php";

    function getCategoryArray()
    {
        $categoryArray = array();

        $sql = "SELECT name, image_url, description FROM Category";
        $stmt = $conn ->prepare($sql);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($name, $image_url, $description);
        while ($stmt->fetch())
        {
            array_push($categoryArray, array($name, $image_url, $description));
        }

        return $categoryArray;
    }

    function getUser()
    {
        $conn = $GLOBALS["conn"];

        $users = array();

        $sql = "SELECT password, email FROM User";
        $stmt = $conn ->prepare($sql);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($password, $email);
        while ($stmt->fetch())
        {
            array_push($users, array("password" => $password, "email" => $email));
        }

        return $users;
    }

    function isUserInDB($email)
    {
        $conn = $GLOBALS["conn"];

        $sql = "SELECT COUNT(email) FROM User WHERE email = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("s", $email);
        $stmt -> execute();
        $stmt -> store_result();
        $stmt -> bind_result($count);
        $stmt -> fetch();

        if ($count == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function getPasswordHashFromDB($email)
    {
        if (isUserInDB($email))
        {
            $sql = "SELECT password FROM User WHERE email = ?";
            $stmt = $conn ->prepare($sql);
            $stmt -> execute();
            $stmt -> store_result();
            $stmt -> bind_result($hash);
            $stmt -> fetch();

            return $hash;
        }
        else
        {
            return false;
        }
    }
?>