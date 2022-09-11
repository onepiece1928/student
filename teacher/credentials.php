<?php
   session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Credentials page</title>
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
                                <div class="col-md-6 my-4">
                                <h5 class="text-center my-4 ">Credentials</h5>
                                    <?php 

                                    $query="SELECT * FROM teacher";

                                    $result=mysqli_query($connect,$query);

                                    $row =mysqli_fetch_array($result);
                                     ?>
                                    <table class='table table-bordered table-striped'>
                                        <tr>
                                            <th colspan='2'>Username</th>
                                            <td><?php echo $row["username"]; ?></td>
                                        </tr>
                                        <tr>
                                            <th colspan='2'>Password</th>
                                            <td><?php echo $row["password"]; ?></td>
                                        </tr>
                                        <tr>
                                            <th colspan='2'>Email</th>
                                            <td><?php echo $row["faculty_email"]; ?></td>
                                        </tr>
                                    </table>
                                    <div class="col-md-12 my-3">
                                        <?php    

                                            if(isset($_POST['uname'])){

                                                $stu = $_SESSION['teacher'];
    
                                                $uname= $_POST['uname'];

                                                if(empty($uname)){

                                                }else{

                                                    $query= "UPDATE teacher SET username='$uname' WHERE username='$stu'";

                                                    $res= mysqli_query($connect,$query);

                                                    if($res){

                                                        $_SESSION['teacher']=$uname;
                                                    }
                                                }
                                            }

                                        ?>
                                        <form method="POST">
                                        <h5 class="text-center my-4">Change Username</h5>
                                            <label>Change Username</label>
                                            <input type="text" name="uname" class="form-control" autocomplete="off"><br>
                                            <input type="submit" name="change" class="btn btn-info" value="Change">
                                        </form>
                                        <br>
                                    </div>
                                </div>
                                <div class="col-md-6 my-4">
                                    <?php
                                    
                                        if(isset($_POST['update_pass'])){

                                            $stu = $_SESSION['teacher'];

                                            $old_pass = $_POST['old_pass'];
                                            $new_pass = $_POST['new_pass'];
                                            $con_pass = $_POST['con_pass'];

                                            $error= array();

                                            $old= mysqli_query($connect,"SELECT * FROM teacher WHERE username='$stu'");

                                            $row= mysqli_fetch_array($old);

                                            $pass =$row['password'];

                                            if(empty($old_pass)){
                                            $error['p']="Enter old password";
                                            }else if(empty($new_pass)){
                                            $error['p']="Enter new password";
                                            }else if(empty($con_pass)){
                                            $error['p']="Confirm password";
                                            }else if ($old_pass != $pass) {
                                            }else if($new_pass != $con_pass){
                                            $error['p']= "Both password do not match";
                                            }

                                            if(count($error)==0){

                                                $query="UPDATE teacher SET password='$new_pass' WHERE username='$stu'";
                                                mysqli_query($connect,$query);


                                            }
                                        }

                                        if(isset($error['p'])){

                                            $e=$error['p'];

                                            $show= "<h5 class='text-center alert alert-danger'>$e</h5>";
                                        }else{

                                            $show="";
                                        }


                                     ?>

                                    <form method="POST">
                                        <h5 class="text-center my-4">Change Password</h5>

                                        <?php 

                                        echo $show;

                                        ?>
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" name="old_pass" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" name="new_pass" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="con_pass" class="form-control">
                                        </div>

                                        <input type="submit" name="update_pass" value="update password" class="btn btn-info">
                                    </form>
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