<?php
$id= $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "Contact_info1");

$query ="DELETE FROM `Contact_info1` . `student` WHERE `student` . `id`=$id";

mysqli_query($link, $query);

header('location:list.php');
?>
