<?php

$fullname = $_POST['fullname'];
$fathername=$_POST['fathername'];


$link = mysqli_connect("localhost",
    "root",
    "rini07",
    "FTFL");



$query = "INSERT INTO `FTFL`.`personalinfo` (

`fullname`,
`fathername`


)
VALUES (
     '$fullname',
     '$fathername',

);";

mysqli_query($link, $query);
echo $query;

header('location:list.php');

