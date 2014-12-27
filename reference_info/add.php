<?php

$name = $_POST['name'];
$organization = $_POST['organization'];
$address = $_POST['address'];
$phone_office = $_POST['phone_office'];
$phone_home = $_POST['phone_home'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$relation = $_POST['relation'];





$link = mysqli_connect("localhost",
    "root",
    "rini07",
    "reference");



$query = "INSERT INTO `reference`.`information` (

`name`,
`organization`,
`address`,
`phone_office`,
`phone_home`,
`mobile`,
`email`,
`relation`







)
VALUES (
     '$name',
      '$organization',
       '$address',
       '$phone_office',
       '$phone_home',
       '$mobile',
        '$email',
         '$relation'






)";

mysqli_query($link, $query);
echo $query;

header('location:list.php');

