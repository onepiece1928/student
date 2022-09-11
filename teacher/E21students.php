<?php

  session_start();
  error_reporting(0);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Total Students</title>
</head>
<body>

	<?php

      include("../include/header.php");
      include("../include/connection.php");

	 ?>

	 <div class="container-fluid">
	 	<div class="col-md-12">
	 		<div class="row">
	 			<div class="col-md-2" style="margin-left:-30px";>
	 				<?php

                     include("sidenav.php");

	 				 ?>
	 			</div>
	 			<div class="col-md-10">
	 				   <h5 class="text-center">Total Students</h5>
	 				<?php

                       $query="SELECT * FROM student WHERE slot_id='a11+a12+a13'";

                       $res= mysqli_query($connect,$query);


$output ="";

$output .="

     <table class='table table-bordered'>
        <tr>
           <td>Registration Number</td>
           <td>Student Name</td>
           <td>Student Email</td>
           <td>Program</td>
           <td>Branch</td>
           <td>Phone</td>
           <td>Gender</td>
        </tr>



";

if(mysqli_num_rows($res) <1) {

	$output .="
	   
	   <tr>
	   <td colspan='10' class='text-center'>No students Yet.</td>
	   </tr>

	";
}


while($row = mysqli_fetch_array($res)) {

	$output .="

        <tr>
            <td>" .$row['reg_num']."</td>
            <td>" .$row['student_name']."</td>
            <td>" .$row['email']."</td>
            <td>" .$row['program']."</td>
            <td>" .$row['branch']."</td>
            <td>" .$row['phone']."</td>
            <td>" .$row['gender']."</td>

	";
}
    $output .="
        </tr>
        </table> 
    ";

    echo $output;
	 				 ?>
	 			</div>
	 		</div>
	 	</div>
	 </div>
      
</body>
</html>