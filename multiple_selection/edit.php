
<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "lict@2", "multiple");
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

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>Full_name</label>
    <input type="text" name="full_name" value="<?php echo $row['full_name'];?>" />


    <button type="submit">Update</button>
</form>
</body>
</html>


