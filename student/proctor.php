<?php
   session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Proctor details</title>
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
                <div class="col-md-10 ">
                    <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 mx-3">
                                    <?php

                                    $sql = "SELECT * FROM student";

                                    $result = $connect->query($sql);

                                    $row = $result->fetch_assoc()

                                    ?>

                                    <div class= "col-md-12">
                                        <h5 class="text-center my-3 " style="background-color: darkgrey;">View Proctor Details</h5>
                                        <table class="table table-bordered table-striped">
                                            <tr>
                                                <td style="background-color:lightgrey;" rowspan="8"> 
                                                <img src="https://vtop.vitbhopal.ac.in/vtop/assets/img/navatar.png" class="img-rounded" alt="Image Not Available" width="150" height="180" style="border: solid 2px #3c8dbc; margin-left: 40px;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">Faculty Id</td>
                                                <td><?php echo $row['faculty_id']; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">Faculty Name</td>
                                                <td><?php echo $row['faculty_name']; ?></td>
                                            </tr>
                                            <tr>
                                                <td style=" font-weight:bold;">Faculty Designation</td>
                                                <td><?php echo $row['designation']; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">Cabin</td>
                                                <td><?php echo $row['cabin']; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">Faculty Department</td>
                                                <td><?php echo $row['faculty_dep']; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">Faculty Email</td>
                                                <td><?php echo $row['faculty_email']; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">Faculty Phone</td>
                                                <td><?php echo $row['faculty_phone']; ?></td>
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