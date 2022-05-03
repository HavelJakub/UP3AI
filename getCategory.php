<?php
function getCategory($name)
{
    $conn = $GLOBALS['conn'];

    $mysql = "SELECT name,photo,gif FROM Category WHERE slug = ?";
    $stmt = $conn ->prepare($mysql);
    $stmt -> bind_param("s", $name);
    $stmt -> execute();
    $stmt -> store_result();
    $stmt -> bind_result($name, $photo, $gif);
    $stmt ->fetch();
    $stmt->close();

    $categoryArray = array("name"=>$name, "photo"=>$photo, "gif"=> $gif );

    return $categoryArray;

function getAllCategories()
{
    $conn = $GLOBALS['conn'];

    $categoryArray = array();
    $mysql = "SELECT idCategory FROM Category";
    $stmt = $conn ->prepare($mysql);
    $stmt -> execute();
    $stmt -> store_result();
    $stmt -> bind_result($id);
    while ($stmt ->fetch())
    {
        array_push($categoryArray, $id);
    }
    $stmt->close();

    return $categoryArray;
}
