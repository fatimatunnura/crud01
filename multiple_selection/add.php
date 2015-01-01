
<?php

$full_name = $_POST['full_name'];
$location = $_POST['location'];
$food = $_POST['food'];
$hobby = $_POST['hobby'];




$h_gardening = $_POST['h_gardening'];
$h_travelling = $_POST['h_travelling'];
$h_reading = $_POST['h_reading'];
$h_other= $_POST['h_other'];







echo '<pre>';
print_r($_POST);
echo '</pre>';

$hobby='';


    if(array_key_exists('h_gardening' , $_POST) && !empty($_POST['h_gardening']))

    {
        $hobby = $_POST['h_gardening'].',';
    }

    if (array_key_exists('h_travelling' , $_POST) && !empty( $_POST['h_travelling']))
    {
        $hobby = $_POST['h_travelling'].',';
    }
    if (array_key_exists('h_reading' ,$_POST ) && !empty( $_POST['h_reading']))
    {
        $hobby = $_POST['h_reading'].',';
    }
    if (array_key_exists('h_other' , $_POST) && !empty($_POST['h_other']))
    {
        $hobby =  $_POST['h_other'].',';
    }







echo $hobby ;

echo"<br/>";

$food=implode(",",$_POST['food']);
echo $food;




$link = mysqli_connect("localhost","root","lict@2","multiple");


$query = "INSERT INTO `multiple`.`information` (

`full_name` ,
`hobby` ,
`location` ,
`created` ,
`food`,

`modified`

)
VALUES ('$full_name', '$hobby', '$location','$food', NOW( ) , NOW( ));";

mysqli_query($link, $query);
?>
<a href="create.html">Go Back</a>












