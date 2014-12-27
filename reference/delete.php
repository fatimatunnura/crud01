<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftflbatch3");
$query = "DELETE FROM `ftflbatch2`.`reference` WHERE `reference`.`id` = $id";
mysqli_query($link, $query);
header('location:list.php');
?>