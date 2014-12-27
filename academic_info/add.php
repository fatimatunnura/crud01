<?php

$result = $_POST['result'];
$duration = $_POST['duration'];
$achievement = $_POST['achievement'];
$completion_status = $_POST['completion_status'];
$level_of_education = $_POST['identity'];
$degree_name = $_POST['degree_name'];
$group = $_POST['group'];
$institute = $_POST['institute'];
$year = $_POST['year'];






$link = mysqli_connect("localhost",
    "root",
    "rini07",
    " academic_info");



$query = "INSERT INTO `academic_info`.`information` (

`result`,
`duration`,
`achievement`,
`completion_status`,
`identity`,
`degree_name`
`group`,
`institute`,
`year`









)
VALUES (
     '$result',
      '$duration',
       '$achievement',
        '$completion_status',
      '$identity',
       '$degree_name',
       '$group',
      '$institute',
       '$year'








)";

mysqli_query($link, $query);
echo $query;

header('location:list.php');

