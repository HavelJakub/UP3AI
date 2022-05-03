<?php
function getCategory($name)
{
    $conn = $GLOBALS['conn'];

    $mysql = "SELECT name,image_url From Category;
    $stmt = $conn ->prepare($mysql);
    $stmt -> bind_param("s", $name);
    $stmt -> execute();
    $stmt -> store_result();
    $stmt -> bind_result($name, $image_url);
    $stmt ->fetch();
    $stmt->close();

"    $categoryArray = array("name"=>$name, "image_url"=>$image_url );

    return $categoryArray;

function getAllCategories()
{
    $conn = $GLOBALS['conn'];

    $categoryArray = array();
    $mysql = "SELECT id FROM Category";
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

funcition



?>