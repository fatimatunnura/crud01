<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "multi_selection");

$query = "DELETE FROM `multi_selection`.`users` WHERE `users`.`id` = $id";
mysqli_query($link, $query);
header('location:list.php');
?>