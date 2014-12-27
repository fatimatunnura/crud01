<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "contact_info");

$query = "SELECT * FROM `student` ";

$result = mysqli_query($link, $query);
?>



<table border="2" width="100%">
    <tr>
        <td>id</td>
        <td>presentadd</td>
        <td>permanentadd</td>
        <td>district</td>
        <td>homephone</td>
        <td>mobile</td>
        <td>emergencycontact</td>
        <td>email</td>
        <td>alternate_email</td>

    </tr>

    <?php

    foreach($result as $row){


        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['presentadd']?></td>
            <td><?php echo $row['permanentadd']?></td>
            <td><?php echo $row['district']?></td>
            <td><?php echo $row['homephone']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['emergencycontact']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['alternate_email']?></td>





            <td>
                <a href="view.php?id=<?php echo $row['id']?>">View</a> |
                <a href="edit.php?id=<?php echo $row['id']?> ">Edit</a> |

                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |

            </td>
        </tr>


    <?php
    }



    ?>

</table>

