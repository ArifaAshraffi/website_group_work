
<?php

session_start();

$id = $_SESSION['id'];

$link = mysqli_connect("localhost",
    "root",
    "allah@03",
    "project");

$query = "select * from registration WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

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

            <table class="table table-striped">

                <tr>
                    <td>Field Name</td>
                    <td>Description</td>
                </tr>

                <?php
                foreach($result as $row) {
                    ?>

                    <tr>
                        <td>First Name</td>
                        <td><?php echo $row['first_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><?php echo $row['last_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $row['email'] ?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><?php echo $row['password'] ?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><?php echo $row['gender'] ?></td>
                    </tr>
                    <tr>
                        <td>Birthday</td>
                        <td><?php echo $row['bday'] ?></td>
                    </tr>
                    <tr>
                        <td>Hobby</td>
                        <td><?php echo $row['hobby'] ?></td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td><?php echo $row['city'] ?></td>
                    </tr>
                    <tr>
                        <td>Comment</td>
                        <td><?php echo $row['comment'] ?></td>
                    </tr>
                    <tr>
                        <td>Created</td>
                        <td><?php echo $row['created'] ?></td>
                    </tr>
                    <tr>
                        <td>Modified</td>
                        <td><?php echo $row['modified'] ?></td>
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


