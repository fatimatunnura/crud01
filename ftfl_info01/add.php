<?php

$company_name = $_POST['company_name'];
$company_business = $_POST['company_business'];
$company_location = $_POST['company_location'];
$position = $_POST['position'];
$department = $_POST['department'];
$responsibility = $_POST['responsibility'];
$duration = $_POST['duration'];





$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "FTFL02");



$query = "INSERT INTO `FTFL02`.`information` (

`company_name`,
`company_business`,
`company_location`,
`position`,
`department`,
`responsibility`,
`duration`


)
VALUES (
     '$company_name',
     '$company_business',
     '$company_location',
     '$position',
     '$department',
     '$responsibility',
     '$duration'

)";

mysqli_query($link, $query);
echo $query;

header('location:list.php');
