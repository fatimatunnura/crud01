
<?php
//print_r($_POST);

$id = $_POST['id'];
$field_of_specialization = $_POST['speciality'];
$skill_description = $_POST['skill_description'];
$extracurricular_activities = $_POST['extracurricular_activities'];








$link = mysqli_connect("localhost", "root", "rini07", " ict_skills01");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
$query = "UPDATE `reference`.`information` SET


        `speciality` = '".$speciality."',
        `skill_description` = '".$skill_description."',
         `extracurricular_activities` = '".$extracurricular_activities."',




WHERE `information`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');
?>