<?php
   session_start();

   error_reporting(0);

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student profile page</title>
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

                                    $sql = "SELECT * FROM student";

                                    $result = $connect->query($sql);

                                    $row = $result->fetch_assoc()

                                    ?>

                                    <div class= "my-3 mx-2">
                                        <h5 class="text-center my-3 " style="background-color: darkgrey;">Personal Information</h5>
                                        <table class='table table-bordered table-striped'>
                                            <tr>
                                                <th colspan='2'>Registration number</th>
                                                <td><?php echo $row["reg_num"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan='2'>Student Name</th>
                                                <td><?php echo $row["student_name"]; ?></td>
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
                                                <th colspan="2">Pincode</th>
                                                <td><?php echo $row["pincode"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Phone</th>
                                                <td><?php echo $row["phone"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan='2'>Gender</th>
                                                <td><?php echo $row["gender"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan='2'>Language</th>
                                                <td><?php echo $row["lan"]; ?></td>
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
                                    <h5 class="text-center my-3" style="background-color:darkgrey;">College Information</h5>
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th colspan="2">Email</th>
                                            <td><?php echo $row["email"]; ?></td>
                                        </tr>
                                        <tr>
                                            <th colspan='2'>Hosteller</th>
                                            <td><?php echo $row["hosteller"]; ?></td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Program</th>
                                            <td><?php echo $row["program"]; ?></td>
                                        </tr>
                                       <tr>
                                            <th colspan="2">Branch</th>
                                            <td><?php echo $row["branch"]; ?></td>
                                        </tr>
                                        
                                            <th colspan="2">School</th>
                                            <td><?php echo $row["school"]; ?></td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Proctor Name</th>
                                            <td><?php echo $row["faculty_name"]; ?></td>
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