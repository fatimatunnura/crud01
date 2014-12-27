
<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "contact_info");
$query = "select * from student WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">






    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />


    <label>Present_add:</label>
    <input type="text" name="presentadd" value="<?php echo $row['presentadd'];?>" />

    <label>Permanent_add:</label>
    <input type="text" name="permanentadd" value="<?php echo $row['permanentadd'];?>" />

    <label>District:</label>
    <input type="text" name="district" value="<?php echo $row['district'];?>" />


    <label>District:</label>
    <input type="text" name="district" value="<?php echo $row['district'];?>" />














    <button type="submit">Submit</button>








</form>
