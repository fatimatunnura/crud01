<?php

$email = $_POST['email'];
$link = mysqli_connect("localhost", "root", "rini07", "crud03");

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = "INSERT INTO `crud03`.`emails`(`id`, `email`, `created`) VALUES ('', '$email',NOW( ));";
mysqli_query($link, $query);
//header('location:created_email.php');
?>
