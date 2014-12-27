<?php
//print_r($_POST);

$id = $_POST['id'];
$training_title = $_POST['field_of_specification'];
$description = $_POST['skill_description'];
$institute = $_POST['extracurricular_activites'];



$link = mysqli_connect("localhost", "root", "lict@2", "FTFL05");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
$query = "UPDATE `FTFL05`.`information` SET


        `field_of_specification` = '".$field_of_specification."',
`skill_description` = '".$skill_description."',
`extracurricular_activites` = '".$extracurricular_activites."',


WHERE `information`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');
?>