<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "rini07", " ict_skills01");

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

    <label>Field_of_Specialization</label>
    <input type="text" name="speciality" value="<?php echo $row['speciality'];?>" />

    <label>Skill_description</label>
    <input type="text" name="skill_description" value="<?php echo $row['skill_description'];?>" />

    <label>Extracurricular_Activities</label>
    <input type="text" name="extracurricular_activities" value="<?php echo $row['extracurricular_activities'];?>" />










    <button type="submit">Update</button>
</form>
</body>
</html>


