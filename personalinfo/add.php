<?php

$fullname = $_POST['fullname'];



$link = mysqli_connect("localhost",
    "root",
    "rini07",
    "FTFL");



$query = "INSERT INTO `FTFL`.`personalinfo` (

`fullname`

)
VALUES (
     '$fullname'

);";

mysqli_query($link, $query);
echo $query;

header('location:list.php');

