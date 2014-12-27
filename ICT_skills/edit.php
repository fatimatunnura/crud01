<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "lict@2", "FTFL05");

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

    <label>Field_of_specification</label>
    <input type="text" name="field_of_specification" value="<?php echo $row['field_of_specification'];?>" />

    <label>Skill_description</label>
    <input type="text" name="skill_description" value="<?php echo $row['skill_description'];?>" />


    <label>Extracurricular_activites</label>
    <input type="txt" name="extracurricular_activites" value="<?php echo $row['extracurricular_activites'];?>" />





    <button type="submit">Update</button>
</form>
</body>
</html>

