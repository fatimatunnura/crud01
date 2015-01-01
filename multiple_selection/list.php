
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
        <td>Full_name</td>
        <td>Location</td>
        <td>Created</td>
        <td>Modified</td>
        <td>Food</td>
        <td>Hobby</td>

    </tr>



    <?php

    foreach($result as $row){


        ?>

        <tr>
            <td><?php echo $row['full_name']?></td>
            <td><?php echo $row['location']?></td>
            <td><?php echo $row['created']?></td>
            <td><?php echo $row['modified']?></td>
            <td><?php echo $row['food']?></td>
            <td><?php echo $row['hobby']?></td>







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

