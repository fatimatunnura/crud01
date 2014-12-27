
<?php
//print_r($_POST);

$id = $_POST['id'];
$name = $_POST['name'];
$organization = $_POST['organization'];
$address = $_POST['address'];
$phone_office = $_POST['phone_office'];
$phone_home = $_POST['phone_home'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$relation = $_POST['relation'];







$link = mysqli_connect("localhost", "root", "rini07", "reference");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
$query = "UPDATE `reference`.`information` SET


        `name` = '".$name."',
        `organization` = '".$organization."',
         `address` = '".$address."',
          `phone_office` = '".$phone_office."',
          `phone_home` = '".$phone_home."',
           `mobile` = '".$mobile."',
            `email` = '".$email."',
             `relation` = '".$relation."',




WHERE `information`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');
?>