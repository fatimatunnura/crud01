
<?php
//print_r($_POST);

$id = $_POST['id'];
$result = $_POST['result'];
$duration = $_POST['duration'];
$achievement = $_POST['achievement'];
$completion_status = $_POST['completion_status'];
$level_of_education  = $_POST['identity'];
$degree_name = $_POST['degree_name'];
$group = $_POST['group'];
$institute = $_POST['institute'];
$year = $_POST['year'];

$link = mysqli_connect("localhost", "root", "rini07", " academic_info");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
$query = "UPDATE `academic_info`.`information` SET


        `result ` = '".$result ."',
        `duration` = '".$duration."',
         `achievement` = '".$achievement."',
         `completion_status` = '".$completion_status."',
        `identity` = '".$identity."',
         `degree_name` = '".$degree_name."',
         `group ` = '".$group ."',
        `institute` = '".$institute."',
         `year` = '".$year."',




WHERE `information`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');
?>