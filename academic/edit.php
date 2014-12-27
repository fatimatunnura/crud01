
<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "academic");
$query = "select * from student WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">






    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />


    <label>Level_of_education:</label>
    <input type="text" name="level_of_education" value="<?php echo $row['level_of_education'];?>" />

    <label>Exam_title:</label>
    <input type="text" name="exam_title" value="<?php echo $row['exam_title'];?>" />

    <label>Group_Subject:</label>
    <input type="text" name="group_subject" value="<?php echo $row['group_subject'];?>" />






    <label>Institution:</label>
    <input type="text" name="institution" value="<?php echo $row['institution'];?>" />

    <label>Result_type:</label>
    <input type="text" name="result_type" value="<?php echo $row['result_type'];?>" />

    <label>Result:</label>
    <input type="text" name="result" value="<?php echo $row['result'];?>" />

    <label>Scale:</label>
    <input type="text" name="scale" value="<?php echo $row['scale'];?>" />


    <label>Passing_year:</label>
    <input type="text" name="passing_year" value="<?php echo $row['passing_year'];?>" />

    <label>Duration(in year):</label>
    <input type="text" name="duration" value="<?php echo $row['duration'];?>" />


    <label>Achievement:</label>
    <input type="text" name="achievement" value="<?php echo $row['achievement'];?>" />


































    <button type="submit">Submit</button>








</form>
