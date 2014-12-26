<?php

$training_title = $_POST['training_title'];
$description = $_POST['description'];
$institute = $_POST['institute'];
$address = $_POST['address'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$course_title = $_POST['course_title'];





$link = mysqli_connect("localhost",
    "root",
    "rini07",
    "FTFL01");



$query = "INSERT INTO `FTFL01`.`information` (

`training_title`,
`description`,
`institute`,
`address`,
`start_date`,
`end_date`,
`course_title`


)
VALUES (
     '$training_title',
     '$description',
     '$institute',
     '$address',
     '$start_date',
     '$end_date',
     '$course_title'

)";

mysqli_query($link, $query);
echo $query;

header('location:list.php');

