<?php

$link = mysqli_connect("localhost",
    "root",
    "rini07",
    " academic_info");

$query = "SELECT * FROM `information` ";

$result = mysqli_query($link, $query);
?>
<ul>
    <li><a href="create.html">Create New Record</a> </li>
</ul>


<table border="2" width="100%">
    <tr>
        <td>ID</td>
        <td>Result</td>
        <td>Duration</td>
        <td>Achievement</td>
        <td>Completion Status</td>
        <td>Level_of_Education</td>
        <td>Degree_Name</td>
        <td>Group</td>
        <td>Institute</td>
        <td>Year</td>




    </tr>



    <?php

    foreach($result as $row){


        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['result']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['achievement']?></td>
            <td><?php echo $row['completion_status']?></td>
            <td><?php echo $row['identity']?></td>
            <td><?php echo $row['degree_name']?></td>
            <td><?php echo $row['group']?></td>
            <td><?php echo $row['institute']?></td>
            <td><?php echo $row['year']?></td>









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

