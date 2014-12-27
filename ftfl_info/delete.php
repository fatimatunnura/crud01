<?php
$id= $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "FTFL01");

$query ="DELETE FROM `FTFL01` . `information` WHERE `information` . `id`=$id";

mysqli_query($link, $query);

header('location:list.php');
?>