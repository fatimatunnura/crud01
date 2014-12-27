<?php
$id= $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "rini07",
    " ict_skills01");

$query ="DELETE FROM ` ict_skills01` . `information` WHERE `information` . `id`=$id";

mysqli_query($link, $query);

header('location:list.php');
?>
