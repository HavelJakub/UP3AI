<?php
session_start();

if (!isset($_SESSION["id"]))
{
    header("Location:");
    die();
}
require "../conn.php";

 $id = "0";
 $username = "";
 $password = "";
 $email = "";
 $telephone = "";
 $first_name = "";
 $last_name = "";
 $adress_id = "" ;

 if (isset($_POST["email"]))
 {
     $id = $_POST["id"];
     $username = $_POST["username"];
     $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
     $email = $_POST["email"];
     $telephone = $_POST["telephone"];
     $first_name = $_POST["first_name"]
     $last_name = $_POST["last_name"]
     $adress_id = $_POST["adress_id"];
 }

 $sql = "INSERT INTO User(id, username, password, email, telephone, firsts_name, last_name adress_id) VALUES (?,?,?,?,?,?,?,?)";
 $stmt = $conn -> prepare($sql);
 $stmt -> bind_param("sssi", $id, $username, $password, $email, $telephone, $first_name, $last_name, $adress_id);
 $stmt -> execute();
 $stmt ->close();

 
 

header("location:");