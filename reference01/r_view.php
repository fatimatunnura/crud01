<?php
include('connection.php');
$id = $_GET['id'];

$query = "SELECT * FROM `training`.`reference` WHERE `reference`.`id` = $id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
//print_r($row);
?>
<br />
<a href="r_list.php">Goto List</a>

<html>
<head>
    <title></title>
</head>
<body>
<table width="100%">
   <!-- <tr>
        <td>ID:</td><br />
        <td>Reference Name: </td>
        <td>Organization</td>
        <td>Address</td>
        <td>Relation</td>
        <td>Phone (Office)</td>
        <td>Phone (Home)</td>
        <td>Mobile</td>
        <td>Email</td>
        <!-- <td>Action</td>-->
    </tr>-->

    <?php foreach($result as $row){ ?>
        <tr align="center">
            <td><?php echo "ID: ".$row['id']."<br />" ?></td>
            <td><?php echo "Reference Name: ".$row['full_name']."<br />" ?></td>
            <td><?php echo "Organization: ".$row['organization']."<br />" ?></td>
            <td><?php echo "Address: ".$row['address']."<br />" ?></td>
            <td><?php echo "Relation: ".$row['relation']."<br />" ?></td>
            <td><?php echo "Phone (Office): ".$row['phoneo']."<br />" ?></td>
            <td><?php echo "Phone (Home): ".$row['phoneh']."<br />" ?></td>
            <td><?php echo "Mobile: ".$row['mobile']."<br />" ?></td>
            <td><?php echo "Email: ".$row['email']."<br />" ?></td>
            <!--<td><a href="r_view.php?id=<?php /*echo $row['id']*/?>">View</a> | <a href="r_update.php?id=<?php /*echo $row['id']*/?>">Edit</a> | <a href="r_delete.php?id=<?php /*echo $row['id'] */?>" onclick="return confirm('Are you sure want to delete id = <?php /*echo $row['id'] */?> ?');">Delete</a></td>-->

        </tr>
    <?php
    }
    ?>
</table>
</body>
</html>