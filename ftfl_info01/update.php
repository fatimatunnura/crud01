<?php
//print_r($_POST);

$company_name = $_POST['company_name'];
$company_business = $_POST['company_business'];
$company_location = $_POST['company_location'];
$position = $_POST['position'];
$department = $_POST['department'];
$responsibility = $_POST['responsibility'];
$duration = $_POST['duration'];


<<<<<<< HEAD
$link = mysqli_connect("localhost", "root", "rini07", "FTFL02");
=======
$link = mysqli_connect("localhost", "root", "lict@2", "FTFL02");
>>>>>>> d0efdbdf9d36fb2d4f8bbf5159614091d8f83271

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
$query = "UPDATE `FTFL02`.`information` SET


        `company_name` = '".$company_name."',
`company_business` = '".$company_business."',
`company_location` = '".$company_location."',
`position` = '".$position."',
`department` = '".$department."',
`responsibility` = '".$responsibility."',
`duration` = '".$duration."',


WHERE `information`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');
?>