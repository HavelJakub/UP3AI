<?php

function getMenu($prefix, $startIndex, $stopIndex)

$conn = $GLOBALS["conn"];

$menuHTML = "";
    $mysql = "SELECT COUNT(*) FROM Menu WHERE idNavigation BETWEEN ? AND ?";
    $stmt = $conn ->prepare($mysql);
    $stmt -> bind_param("ii", $startIndex, $stopIndex);
    $stmt -> execute();
    $stmt -> store_result();
    $stmt -> bind_result($count);
    $stmt ->fetch();
