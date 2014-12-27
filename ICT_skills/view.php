<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "lict@2", "FTFL05");
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

        <td>Field_of_specification</td>
        <td>Skill_description</td>
        <td>Extracurricular_activites</td>



    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['field_of_specification']?></td>
            <td><?php echo $row['skill_description']?></td>
            <td><?php echo $row['extracurricular_activites']?></td>

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