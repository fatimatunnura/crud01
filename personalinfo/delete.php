<?php
$id= $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "FTFL");

$query ="DELETE FROM `FTFL` . `personalinfo` WHERE `personalinfo` . `id`=$id";

mysqli_query($link, $query);

header('location:list.php');
?>
