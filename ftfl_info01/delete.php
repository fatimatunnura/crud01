<?php
$id= $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "rini07",
    "FTFL02");

$query ="DELETE FROM `FTFL02` . `information` WHERE `information` . `id`=$id";

mysqli_query($link, $query);

header('location:list.php');
?>
