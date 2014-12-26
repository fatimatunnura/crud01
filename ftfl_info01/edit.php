<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "rini07", "FTFL02");

$query = "select * from information WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<html>
<head>
    <title></title>
</head>

<body style="text-align: center; width: 100%; height: 100%;">

<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />





    <label>Company_name</label>
    <input type="text" name="company_name" value="<?php echo $row['company_name'];?>" />

    <label>Company_business</label>
    <input type="text" name="company_business" value="<?php echo $row['company_business'];?>" />


    <label>Company_location</label>
    <input type="tXT" name="company_location" value="<?php echo $row['company_location'];?>" />

    <label>Position</label>
    <input type="tXT" name="position" value="<?php echo $row['position'];?>" />

    <label>Department</label>
    <input type="txt" name="department" value="<?php echo $row['department'];?>" />


    <label>Responsibility</label>
    <input type="txt" name="responsibility" value="<?php echo $row['responsibility'];?>" />

    <label>Duration</label>
    <input type="txt" name="duration" value="<?php echo $row['duration'];?>" />






    <button type="submit">Update</button>
</form>
</body>
</html>


