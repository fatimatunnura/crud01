<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 12/25/14
 * Time: 4:04 PM
 */
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

$query = "UPDATE `academic`.`student` SET

`level_of_education` = '".$level_of_education."',

`exam_title` = '".$exam_title."',

`group_subject` = '".$group_subject."',

`institution` = '".$institution."',

`result_type` = '".$result_type."',

`result` = '".$result."',

`scale` = '".$scale."',

`passing_year` = '".$passing_year."',

`duration` = '".$duration."',

`achievement` = '".$achievement."',

WHERE `student`.`id` = $id;";

mysqli_query($link, $query);
header('location:lict.php');