<?php

$field_of_specification = $_POST['field_of_specification'];
$skill_description = $_POST['skill_description'];
$extracurricular_activites = $_POST['extracurricular_activites'];





$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "FTFL05");



$query = "INSERT INTO `FTFL05`.`information` (

`field_of_specification`,
`skill_description`,
`extracurricular_activites`



)
VALUES (
     '$field_of_specification',
     '$skill_description',
     '$extracurricular_activites',


)";

mysqli_query($link, $query);
echo $query;

header('location:list.php');
