<?php
$level_of_education= $_POST['level_of_education'];
$exam_title=$_POST['exam_title'];
$group_subject=$_POST['group_subject'];
$institution=$_POST['institution'];
$result_type=$_POST['result_type'];
$result=$_POST['result'];
$scale=$_POST['scale'];
$passing_year=$_POST['passing_year'];
$duration=$_POST['duration'];
$achievement=$_POST['achievement'];



$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "academic");



$query = "INSERT INTO `academic`.`student` (

`level_of_education`,
`exam_title`,
`group_subject`,
`institution`,
`result_type`,
`result`,
`scale`,
`passing_year`,
`duration`,
`achievement`

)
VALUES (
     '$level_of_education',
     '$exam_title',
     '$group_subject',
     '$institution',
     '$result_type',
     '$result',
     '$scale',
      '$passing_year',
      '$duration',
      '$achievement'


)";

mysqli_query($link, $query) or mysql_error();
echo $query;

header('location:lict.php');
?>
