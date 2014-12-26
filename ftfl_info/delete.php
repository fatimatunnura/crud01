<?php
$id= $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "rini07",
    "FTFL01");

$query ="DELETE FROM `FTFL01` . `information` WHERE `information` . `id`=$id";

mysqli_query($link, $query);

header('location:list.php');
?>
