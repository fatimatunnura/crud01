<?php

$link = mysqli_connect("localhost",
    "root",
<<<<<<< HEAD
    "rini07",
    "FTFL02");

=======
    "lict@2",
    "FTFL02");



>>>>>>> d0efdbdf9d36fb2d4f8bbf5159614091d8f83271
$query = "SELECT * FROM `information` ";

$result = mysqli_query($link, $query);
?>
<ul>
    <li><a href="create.html">Create New Record</a> </li>
</ul>


<table border="2" width="100%">
    <tr>
        <td>Company_name</td>
        <td>Company_business</td>
        <td>Company_location</td>
        <td>Position</td>
        <td>Department</td>
        <td>Responsibility</td>
        <td>Duration</td>

    </tr>



    <?php

    foreach($result as $row){


        ?>

        <tr>
            <td><?php echo $row['company_name']?></td>
            <td><?php echo $row['company_business']?></td>
            <td><?php echo $row['company_location']?></td>
            <td><?php echo $row['position']?></td>
            <td><?php echo $row['department']?></td>
            <td><?php echo $row['responsibility']?></td>
            <td><?php echo $row['duration']?></td>







            <td>
                <a href="view.php?id=<?php echo $row['id']?>">View</a> |
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |

                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |

            </td>
        </tr>


    <?php
    }



    ?>

</table>
<<<<<<< HEAD

=======
>>>>>>> d0efdbdf9d36fb2d4f8bbf5159614091d8f83271
