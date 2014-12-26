<?php
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



$query = "INSERT INTO `student` (

`presentadd`,
`permanentadd`,
`district`,
`homephone`,
`mobile`,
`emergencycontact`,
`email`,
`alternate_email`

)
VALUES (
     '$presentadd',
     '$permanentadd',
     '$district',
     '$homephone',
     '$mobile',
     '$emergencycontact',
     '$email',
      '$alternate_email'


);";

mysqli_query($link, $query);
echo $query;

header('location:list.php');
?>

