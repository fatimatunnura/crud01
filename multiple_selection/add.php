
<?php
/*
$full_name = $_POST['full_name'];
$hobby = $_POST['hobby'];
$location = $_POST['location'];


$h_gardening = $_POST['h_gardening'];
$h_travelling = $_POST['h_travelling'];
$h_reading = $_POST['h_reading'];
$h_other= $_POST['h_other'];*/



/*
print_r($_POST['h_gardening']);
print_r($_POST['h_travelling']);
print_r($_POST['h_reading']);
print_r($_POST['h_other']);
exit();*/


echo '<pre>';
print_r($_POST);
echo '</pre>';

$hobby='';
{

    if (isset($_POST['h_gardening']) && !empty($_POST['h_gardening'])) {
        $hobby = $hobby .$_POST['h_gardening'];
    }

    if (isset($_POST['h_travelling']) && !empty($_POST['h_travelling'])) {
        $hobby = $hobby .','. $_POST['h_travelling'];
    }
    if (isset($_POST['h_reading']) && !empty($_POST['h_reading'])) {
        $hobby = $hobby .','. $_POST['h_reading'];



    }
    if (isset($_POST['h_other']) && !empty($_POST['h_other'])) {
        $hobby = $hobby .','. $_POST['h_other'];
    }
}
echo $hobby ;




/*
$link = mysqli_connect("localhost","root","lict@2","multiple");


$query = "INSERT INTO `multi_selection`.`information` (

`full_name` ,
`hobby` ,
`location` ,
`created` ,

`modified`

)
VALUES ('$full_name', '$hobby', '$location', NOW( ) , NOW( ));";

mysqli_query($link, $query);
*/?><!--
<a href="create.html">Go Back</a>



-->









