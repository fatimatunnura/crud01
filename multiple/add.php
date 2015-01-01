
<?php
print_r($_REQUEST);

$fname = $_POST['fname'];
$hobby = $_POST['hobby'];
$location = $_POST['location'];

$link = mysqli_connect("localhost","root","lict@2","multi_selection");


$query = "INSERT INTO `multi_selection`.`users` (

`fname` ,
`hobby` ,
`location` ,
`created` ,
`modified`
)
VALUES ('$fname', '$hobby', '$location', NOW( ) , NOW( ));";

mysqli_query($link, $query);
?>
<a href="multiple.html">Go Back</a>













