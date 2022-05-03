<?php
    $servername = "localhost";
    $username = "shop";
    $password = "5itsE3ay8Qh8XlVR";
    $dbname = "shop";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_query($conn,"SET NAMES utf8");
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>