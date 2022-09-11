<?php

 include("../include/connection.php");

if(isset($_POST['apply'])){

	$leave_type = mysqli_real_escape_string($connect, $_REQUEST['leave_type']);
    $visiting_place = mysqli_real_escape_string($connect, $_REQUEST['visiting_place']);
    $reason = mysqli_real_escape_string($connect, $_REQUEST['reason']);
    $from_date = mysqli_real_escape_string($connect, $_REQUEST['from_date']);
    $time_from = mysqli_real_escape_string($connect, $_REQUEST['time_from']);
    $to_date = mysqli_real_escape_string($connect, $_REQUEST['to_date']);
    $time_to = mysqli_real_escape_string($connect, $_REQUEST['time_to']);
     
	$error=array();

	if(empty($leave_type)){

		$error['ac']="Enter leave type";

	}else if(empty($visiting_place)){

		$error['ac']="Enter visiting place";

	}else if(empty($reason)){

		$error['ac']="Enter reason";

	}else if(empty($from_date)){

		$error['ac']="Enter date of leaving";

	}else if(empty($time_from)){

		$error['ac']="Enter time of leaving";

	}else if(empty($to_date)){

		$error['ac']="Enter date of returning";

	}else if(empty($time_to)){

		$error['ac']="Enter time of returning";

	}

	if ($connect == false) {

    die("ERROR: Could not connect. ".mysqli_connect_error());

    }

  
    $sql = "INSERT INTO leaver(leave_type,visiting_place,reason,from_date,time_from,to_date,time_to) VALUES('$leave_type','$visiting_place','$reason','$from_date','$time_from','$to_date','$time_to')";

    if (mysqli_query($connect, $sql))

    {
    echo "You have successfully applied.";

    }else{

    echo "Failed to apply ".mysqli_error($connect);
    }
  
    mysqli_close($connect);

    if(isset($error['ac'])){

	$s = $error['ac'];

	$show= "<h5 class='text-center alert alert-danger'>$s</h5>";

    }else{

	$show="";

    }

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Leave Request !!</title>
</head>
<body>
	<?php 

      include("../include/header.php");
     
     ?>

	 <div class="container-fluid">
		 <div class="col-md-12">
			 <div class="row">
				 <div class="col-md-3"></div>
				 <div class="col-md-6 my-2 jumbotron">
					 <h5 class="text-center text-info">Leave Request Page</h5>

					 <form method="post">
						 <div class="form-group">
							 <label>Select Leave Type</label>
							 <select name="leave_type" class="form-control">
								 <option value="">Select leave type</option>
								 <option value="Outing">Outing</option>
								 <option value="special outing">Special Outing</option>
								 <option value="leave to home">Leave to home</option>
							 </select>
						 </div>

						 <div class="form-group">
							 <label>Visiting Place</label>
							 <input type="text" name="visiting_place" class="form-control" autocomplete="off" placeholder="Enter Visiting Place">
						 </div>

						 <div class="form-group">
							 <label>Reason</label>
							 <textarea  name="reason" class="form-control" autocomplete="off" placeholder="Enter Reason"></textarea>
						 </div>
						 <div class="form-group">
							 <label>Date From</label>
							 <input type="date" name="from_date" class="form-control" autocomplete="off" placeholder="Enter Date of leaving">
						 </div>
						 <div class="form-group">
							 <label>Time From</label>
							 <input type="time" name="time_from" class="form-control" autocomplete="off" placeholder="Enter Time of leaving">
						 </div>
						 <div class="form-group">
							 <label>Date To</label>
							 <input type="date" name="to_date" class="form-control" autocomplete="off" placeholder="Enter Date of returning">
						 </div>
						 <div class="form-group">
							 <label>Time To</label>
							 <input type="time" name="time_to" class="form-control" autocomplete="off" placeholder="Enter time of returning">
						 </div>

						 <input type="submit" name="apply" value="Apply leave" class="btn btn-info">
						 
					 </form>
				 </div>

				 <div class="col-md-3">
					
				 </div>
			 </div>
		 </div>
	 </div>

</body>
</html>