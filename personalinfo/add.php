<?php

$fullname = $_POST['fullname'];
$fathername=$_POST['fathername'];
$mothername=$_POST['mothername'];
$religion=$_POST['religion'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$hometown=$_POST['hometown'];


$link = mysqli_connect("localhost",
    "root",
    "rini07",
    "FTFL");



$query = "INSERT INTO `FTFL`.`personalinfo` (

`fullname`,
`fathername`,
`mothername`,
`religion`,
`contact`,
`gender`,
`hometown`

)
VALUES (
     '$fullname',
     '$fathername',
     '$mothername',
     '$religion',
     '$contact',
     '$gender',
     '$hometown'

);";

mysqli_query($link, $query);
echo $query;

header('location:list.php');

