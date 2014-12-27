<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "rini07", " academic_info");

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

    <label>Result</label>
    <input type="text" name="result" value="<?php echo $row['result'];?>" />

    <label>Duration</label>
    <input type="text" name="duration" value="<?php echo $row['duration'];?>" />

    <label>Achievement</label>
    <input type="text" name="achievement" value="<?php echo $row['achievement'];?>" />


    <label>Completion Status</label>
    <input type="text" name="completion_status" value="<?php echo $row['completion_status'];?>" />

    <label>Level_of_Education</label>
    <input type="text" name="identity" value="<?php echo $row['identity'];?>" />

    <label>Degree_Name</label>
    <input type="text" name="degree_name" value="<?php echo $row['degree_name'];?>" />


    <label>Group</label>
    <input type="text" name="group" value="<?php echo $row['group'];?>" />

    <label>Institute</label>
    <input type="text" name="institute" value="<?php echo $row['institute'];?>" />

    <label>Year</label>
    <input type="text" name="year" value="<?php echo $row['year'];?>" />











    <button type="submit">Update</button>
</form>
</body>
</html>


