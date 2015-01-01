<?php
$id= $_GET['id'];

$link = mysqli_connect("localhost",
        "root",
    "lict@2",
    "multiple");

$query ="DELETE FROM `multiple` . `information` WHERE `information` . `id`=$id";

mysqli_query($link, $query);

header('location:list.php');
?>
?>
