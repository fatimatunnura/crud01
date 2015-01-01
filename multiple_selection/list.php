<?php

$link = mysqli_connect("localhost",
        "root",
    "lict@2",
    "multiple");

$query = "SELECT * FROM `information` ";

$result = mysqli_query($link, $query);
?>
<ul>
    <li><a href="create.html">Create New Record</a> </li>
</ul>


<table border="2" width="100%">
    <tr>
        <td>ID</td>
        <td>Full_name</td>

        </tr>



        <?php
    </tr>



    <?php

    foreach($result as $row){


        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['full_name']?></td>





        <td>
            <td>
                <a href="view.php?id=<?php echo $row['id']?>">View</a> |
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |

                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |

            </td>
        </tr>


    <?php
    }



    ?>

