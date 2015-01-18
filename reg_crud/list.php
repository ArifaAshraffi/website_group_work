


<?php

$link = mysqli_connect("localhost",
    "root",
    "allah@03",
    "project");

$query = "select * from registration;";

$result = mysqli_query($link, $query);

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body >
<section class="container">
    <div class="row">
        <div class="col-md-12">

            <table  class="table table-striped">
                <tr>
                    <td>ID</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>Gender</td>
                    <td>Birthday</td>
                    <td>Hobby</td>
                    <td>City</td>
                    <td>Comment</td>
                    <td>Created</td>
                    <td>Modified</td>
                    <td>Action</td>
                </tr>
                <?php
                foreach($result as $row){
                    ?>

                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['first_name']?></td>
                        <td><?php echo $row['last_name']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['password']?></td>
                        <td><?php echo $row['gender']?></td>
                        <td><?php echo $row['bday']?></td>
                        <td><?php echo $row['hobby']?></td>
                        <td><?php echo $row['city']?></td>
                        <td><?php echo $row['comment']?></td>
                        <td><?php echo $row['created']?></td>
                        <td><?php echo $row['modified']?></td>

                        <td> <a href="view.php?id=<?php echo $row['id']?>">View</a> |<a href="edit.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
                    </tr>

                <?php
                }
                ?>

            </table>

        </div>
    </div>



</section>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>


