<?php

$link = mysqli_connect("localhost",
    "root",
<<<<<<< HEAD
    "rini07",
=======
    "lict@2",
>>>>>>> d0efdbdf9d36fb2d4f8bbf5159614091d8f83271
    "FTFL01");

$query = "SELECT * FROM `information` ";

$result = mysqli_query($link, $query);
?>
<ul>
    <li><a href="create.html">Create New Record</a> </li>
</ul>


<table border="2" width="100%">
    <tr>
        <td>ID</td>
        <td>Training_title</td>
        <td>Description</td>
        <td>Institute</td>
        <td>Address</td>
        <td>Start_date</td>
        <td>End_date</td>
        <td>Course_title</td>

<<<<<<< HEAD
        </tr>



        <?php
=======
    </tr>



    <?php
>>>>>>> d0efdbdf9d36fb2d4f8bbf5159614091d8f83271

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






<<<<<<< HEAD
        <td>
=======
            <td>
>>>>>>> d0efdbdf9d36fb2d4f8bbf5159614091d8f83271
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
