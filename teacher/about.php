<?php
   session_start();

   error_reporting(0);

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Teacher profile page</title>
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

                                    $sql = "SELECT * FROM teacher";

                                    $result = $connect->query($sql);

                                    $row = $result->fetch_assoc()

                                    ?>

                                    <div class= "my-3 mx-2">
                                        <h5 class="text-center my-3 " style="background-color: darkgrey;">Personal Information</h5>
                                        <table class='table table-bordered table-striped'>
                                            <tr>
                                                <th colspan='2'>Faculty Id</th>
                                                <td><?php echo $row["faculty_id"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan='2'>Faculty Name</th>
                                                <td><?php echo $row["faculty_name"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan='2'>Designation</th>
                                                <td><?php echo $row["designation"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan='2'>Cabin</th>
                                                <td><?php echo $row["cabin"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan='2'>Faculty Department</th>
                                                <td><?php echo $row["faculty_dep"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan='2'>Faculty Email</th>
                                                <td><?php echo $row["faculty_email"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan='2'>Date of Birth</th>
                                                <td><?php echo $row["dob"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Address</th>
                                                <td><?php echo $row["address"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Faculty Phone</th>
                                                <td><?php echo $row["faculty_phone"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan='2'>Gender</th>
                                                <td><?php echo $row["gender"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan='2'>Language</th>
                                                <td><?php echo $row["language"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan='2'>State</th>
                                                <td><?php echo $row["state"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan='2'>Country</th>
                                                <td><?php echo $row["country"]; ?></td>
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