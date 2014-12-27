<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 12/25/14
 * Time: 4:04 PM
 */
$presentadd= $_POST['presentadd'];
$permanentadd=$_POST['permanentadd'];
$district=$_POST['district'];
$homephone=$_POST['homephone'];
$mobile=$_POST['mobile'];
$emergencycontact=$_POST['emergencycontact'];
$email=$_POST['email'];
$alternate_email=$_POST['alternate_email'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "contact_info");

$query = "UPDATE `contact_info`.`student` SET `presentadd` = '".$presentadd."',
`permanentadd` = '".$permanentadd."',
WHERE `student`.`id` = $id;";

mysqli_query($link, $query);
header('location:list.php');