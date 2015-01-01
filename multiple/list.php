<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "multi_selection");
$query = "select * from users;";
$result = mysqli_query($link, $query);
?>
<ul>
    <li><a href="multiple.html">Create New</a> </li>
</ul>
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



            <td><a href="view.php?id=<?php echo $row['id']?>">View</a> |
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
