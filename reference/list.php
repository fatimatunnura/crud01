
<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftflbatch3");
$query = "select * from reference";
$result = mysqli_query($link, $query);
?>
<ul>
    <li><a href="create.html">Create New</a> </li>
</ul>
<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Organiation</td>
        <td>Address</td>
        <td>Phone(Office)</td>
        <td>Phone(Home)</td>
        <td>Mobile</td>
        <td>Email</td>
        <td>Relation</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['organiation']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['phoneoffice']?></td>
            <td><?php echo $row['phonehome']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['relation']?></td>
            <td>
                <a href="view.php?id=<?php echo $row['id']?>">View</a> |
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>