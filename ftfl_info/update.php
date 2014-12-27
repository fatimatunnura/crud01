<?php
//print_r($_POST);

$id = $_POST['id'];
$training_title = $_POST['training_title'];
$description = $_POST['description'];
$institute = $_POST['institute'];
$address = $_POST['address'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$course_title = $_POST['course_title'];


$link = mysqli_connect("localhost", "root", "lict@2", "FTFL01");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
$query = "UPDATE `FTFL01`.`information` SET


        `training_title` = '".$training_title."',
`description` = '".$description."',
`institute` = '".$institute."',
`address` = '".$address."',
`start_date` = '".$start_date."',
`end_date` = '".$end_date."',
`course_title` = '".$course_title."',


WHERE `information`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');
?>