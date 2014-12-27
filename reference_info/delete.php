<?php
$id= $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "rini07",
    "reference");

$query ="DELETE FROM `reference` . `information` WHERE `information` . `id`=$id";

mysqli_query($link, $query);

header('location:list.php');
?>
