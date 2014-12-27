<?php
$id= $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "academic");

$query ="DELETE FROM `academic` . `student` WHERE `student` . `id`=$id";

mysqli_query($link, $query);

header('location:lict.php');
?>
