<?php

$speciality = $_POST['speciality'];
$skill_description = $_POST['skill_description'];
$extracurricular_activities = $_POST['extracurricular_activities'];





$link = mysqli_connect("localhost",
    "root",
    "rini07",
    " ict_skills01");



$query = "INSERT INTO ` ict_skills01`.`information` (

`speciality`,
`skill_description`,
`extracurricular_activities`







)
VALUES (
     '$speciality',
      '$skill_description',
       '$extracurricular_activities'






)";

mysqli_query($link, $query);
echo $query;

header('location:list.php');

