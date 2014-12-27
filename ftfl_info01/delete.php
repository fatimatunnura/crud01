<?php
$id= $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
<<<<<<< HEAD
    "rini07",
=======
    "lict@2",
>>>>>>> d0efdbdf9d36fb2d4f8bbf5159614091d8f83271
    "FTFL02");

$query ="DELETE FROM `FTFL02` . `information` WHERE `information` . `id`=$id";

mysqli_query($link, $query);

header('location:list.php');
<<<<<<< HEAD
?>
=======
?>
>>>>>>> d0efdbdf9d36fb2d4f8bbf5159614091d8f83271
