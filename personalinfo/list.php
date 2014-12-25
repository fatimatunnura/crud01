<?php

$link = mysqli_connect("localhost",
    "root",
    "rini07",
    "FTFL");

$query = "SELECT * FROM `personalinfo` ";

$result = mysqli_query($link, $query);
?>



<table border="2" width="100%">
    <tr>
        <td>id</td>
        <td>Full_Name</td>
        <td>Father's_Name</td>
        <td>Mother's_Name</td>
        <td>Religion</td>
        <td>Mobile_No.</td>
        <td>Gender</td>
        <td>Hometown</td>
    </tr>

    <?php

    foreach($result as $row){


        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['fullname']?></td>
            <td><?php echo $row['fathername']?></td>
            <td><?php echo $row['mothername']?></td>
            <td><?php echo $row['religion']?></td>
            <td><?php echo $row['contact']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['hometown']?></td>





            <td>
                <a href="view.php?id=<?php echo $row['id']?>">View</a> |
                <a href=" ">Edit</a> |

                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |

            </td>
        </tr>


    <?php
    }



    ?>

</table>

