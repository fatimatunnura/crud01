<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "lict@2", "FTFL01");

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

    <label>Training_title</label>
    <input type="text" name="training_title" value="<?php echo $row['training_title'];?>" />

    <label>Description</label>
    <input type="text" name="description" value="<?php echo $row['description'];?>" />


    <label>Start_date</label>
    <input type="int" name="start_date" value="<?php echo $row['start_date'];?>" />

    <label>End_date</label>
    <input type="int" name="end_date" value="<?php echo $row['end_date'];?>" />

    <label>Course_title</label>
    <input type="txt" name="course_title" value="<?php echo $row['course_title'];?>" />













    <label>Institute</label>
    <select name="institute">
        <option <?php if ($row['institute'] == "Oxford_University") echo 'selected'; ?> value="Oxford_University">Oxford_University</option>
        <option <?php if ($row['institute'] == "Princeton_University") echo 'selected'; ?> value="Princeton_University">Princeton_University</option>
        <option <?php if ($row['institute'] == "Yale_University") echo 'selected'; ?> value="Yale_University">Yale_University</option>
        <option <?php if ($row['institute'] == "Stanford_University") echo 'selected'; ?> value="Stanford_University">Stanford_University</option>
    </select>
    <br>



    <label>Address </label>
    Dhaka<input type="radio" name="address" <?php if($row['address'] == "Diploma") echo 'checked'; ?> value="Dhaka">
    Khulna<input type="radio" name="address" <?php if($row['address'] == "Bachelor") echo 'checked'; ?> value="Khulna">
    Rajshahi<input type="radio" name="address" <?php if($row['address'] == "Masters") echo 'checked'; ?> value="Rajshahi">
    Chittagong<input type="radio" name="address" <?php if($row['address'] == "Doctoral") echo 'checked'; ?> value="Chittagong">
    <br>





    <button type="submit">Update</button>
</form>
</body>
</html>

