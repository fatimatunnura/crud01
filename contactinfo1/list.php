<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "Contact_info1");

$query = "SELECT * FROM `student` ";

$result = mysqli_query($link, $query);
?>



<table border="2" width="100%">
    <tr>
        <td>id</td>
        <td>Present_add.</td>


    </tr>

    <?php

    foreach($result as $row){


        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['presentadd']?></td>





            <td>
                <a href="view.php?id=<?php echo $row['id']?>">View</a> |
                <a href="edit.php">Edit</a> |

                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |

            </td>
        </tr>


    <?php
    }



    ?>

</table>

