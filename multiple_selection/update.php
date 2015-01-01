
<?php
//print_r($_POST);

$id = $_POST['id'];
$full_name = $_POST['full_name'];


$link = mysqli_connect("localhost", "root", "lict@2", "multiple");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
$query = "UPDATE `multiple`.`information` SET


        `full_name` = '".$full_name."',


WHERE `information`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');
?>