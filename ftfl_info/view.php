<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "rini07", "FTFL01");
$query = "SELECT * FROM information WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
//print_r($row);
?>
<html>
<head>
    <title></title>
</head>
<body style="text-align: center;">
<ul>
    <li><a href="create.html">Create New Record</a> </li>
    <li><a href="list.php">View Full List</a> </li>
</ul>
<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>Training_title</td>
        <td>Description</td>
        <td>Institute</td>
        <td>Address</td>
        <td>Start_date</td>
        <td>End_date</td>
        <td>Course_title</td>



    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['training_title']?></td>
            <td><?php echo $row['description']?></td>
            <td><?php echo $row['institute']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['start_date']?></td>
            <td><?php echo $row['end_date']?></td>
            <td><?php echo $row['course_title']?></td>

            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |
                <a href="view.php?id=<?php echo $row['id']?>">View</a></td>
        </tr>
    <?php
    }
    ?>
</table>
</body>
</html>