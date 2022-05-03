<?php

session_start();


require "conn.php";


 $username = "";
 $password = "";
 $email = "";
 $telephone = "";
 $first_name = "";
 $last_name = "";



 if (isset($_POST["email"]))
 {
     $username = $_POST["username"];
     $password = password_hash($_POST["password1"], PASSWORD_DEFAULT);
     $email = $_POST["email"];
     $telephone = $_POST["telephone"];
     $first_name = $_POST["first_name"];
     $last_name = $_POST["last_name"];
 }

echo "$username <br> $password <br> $email <br> $telephone <br> $first_name <br> $last_name";
 $sql = "INSERT INTO User(username, password, email, telephone, first_name, last_name) VALUES (?,?,?,?,?,?)";
 $stmt = $conn -> prepare($sql);
 $stmt -> bind_param("sssiss", $username, $password, $email, $telephone, $first_name, $last_name);
 $stmt -> execute();
 $stmt ->close();

//header("location:login.php");

?>