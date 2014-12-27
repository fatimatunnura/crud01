<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "rini07", "reference");

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

    <label>Name</label>
    <input type="text" name="name" value="<?php echo $row['name'];?>" />

    <label>Organization</label>
    <input type="text" name="organization" value="<?php echo $row['organization'];?>" />

    <label>Address</label>
    <input type="text" name="address" value="<?php echo $row['address'];?>" />

    <label>Phone_(Office)</label>
    <input type="text" name="phone_office" value="<?php echo $row['phone_office'];?>" />



    <label>Mobile</label>
    <input type="text" name="phone_home" value="<?php echo $row['phone_home'];?>" />

    <label>Email</label>
    <input type="text" name="email" value="<?php echo $row['email'];?>" />


    <label>Relation</label>
    <input type="text" name="relation" value="<?php echo $row['relation'];?>" />












    <button type="submit">Update</button>
</form>
</body>
</html>


