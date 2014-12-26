<?php

$presentadd= $_POST['presentadd'];


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "Contact_info1");



$query = "INSERT INTO `Contact_info1`.`student` (
`id`,
`presentadd`

)
VALUES (
     '$presentadd',


);";

mysqli_query($link, $query);
echo $query;

header('location:list.php');

