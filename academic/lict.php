<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "academic");

$query = "SELECT * FROM `student` ";

$result = mysqli_query($link, $query);
?>



<table border="2" width="100%">
    <tr>
        <td>id</td>
        <td>Level_of_education:</td>
        <td>Exam_title:</td>
        <td>Group_Subject:</td>
        <td>Institution:</td>
        <td>Result_type:</td>
        <td>Result:</td>
        <td>Scale:</td>
        <td>Passing_year:</td>
        <td>Duration:</td>
        <td>Achievement:</td>

    </tr>

    <?php

    foreach($result as $row){


        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['level_of_education']?></td>
            <td><?php echo $row['exam_title']?></td>
            <td><?php echo $row['group_subject']?></td>
            <td><?php echo $row['institution']?></td>
            <td><?php echo $row['result_type']?></td>
            <td><?php echo $row['result']?></td>
            <td><?php echo $row['scale']?></td>
            <td><?php echo $row['passing_year']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['achievement']?></td>






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

