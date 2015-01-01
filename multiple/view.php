<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "multi_selection");

$query = "select * from users WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
//print_r($row);
?>
<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Hobby</td>
        <td>Location</td>
        <td>Created</td>
        <td>Modified</td>

        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['fname']?></td>
            <td><?php echo $row['hobby']?></td>
            <td><?php echo $row['location']?></td>
            <td><?php echo $row['created']?></td>
            <td><?php echo $row['modified']?></td>




            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>
    <?php }
    ?>
</table>
<a href="list.php">Go to Home</a>