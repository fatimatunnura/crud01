<?php

$link = mysqli_connect("localhost",
    "root",
    "rini07",
    "reference");

$query = "SELECT * FROM `information` ";

$result = mysqli_query($link, $query);
?>
<ul>
    <li><a href="create.html">Create New Record</a> </li>
</ul>


<table border="2" width="100%">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Organization</td>
        <td>Address</td>
        <td>Phone_(Office)</td>
        <td>Phone_(Home)</td>
        <td>Mobile</td>
        <td>Email</td>
        <td>Relation</td>



    </tr>



    <?php

    foreach($result as $row){


        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['organization']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['phone_office']?></td>
            <td><?php echo $row['phone_home']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['relation']?></td>









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

