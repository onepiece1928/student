<?php
   session_start();

   error_reporting(0);

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Doctor profile page</title>
</head>
<body>

    <?php

    include("../include/header.php");

     ?>

     <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left:-30px;">
                    <?php

                    include("sidenav.php");
                    include("../include/connection.php");
                     ?>
                </div>
                <div class="col-md-10">
                    <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 my-3">
                                    <?php

                                    $sql = "SELECT * FROM doctor";

                                    $result = $connect->query($sql);

                                    $row = $result->fetch_assoc()

                                    ?>

                                    <div class= "my-3 mx-2">
                                        <h5 class="text-center my-3 " style="background-color: darkgrey;">Personal Information</h5>
                                        <table class='table table-bordered table-striped'>
                                            <tr>
                                                <th colspan='2'>Doctor Name</th>
                                                <td><?php echo $row["name"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan='2'>Email</th>
                                                <td><?php echo $row["email"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan='2'>Gender</th>
                                                <td><?php echo $row["gender"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan='2'>Phone</th>
                                                <td><?php echo $row["phone"]; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>

</body>
</html>