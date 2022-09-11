<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Hostel corner</title>
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
	 				 ?>
	 			</div>
	 			<div class="col-md-10">
	 				<div class="container-fluid">
	 					<h5 style="margin-top: 10px;">Hostel Records</h5>
	 					<div class="col-md-12">
	 						<div class="row">
	 							<div class="col-md-3 mx-2 my-2 bg-info" style="height: 150px;">

	 								<div class="col-md-12">
	 									<div class="row">
	 										<div class="col-md-8">
	 											<h5 class="text-white my-4">Leave</h5>
	 										</div>
	 										<div class="col-md-4">
	 											<a href="leaverequest.php"><i class="fa fa-solid fa-arrow-up fa-3x my-3" style="color: white;"></i></a>
	 										</div>
	 									</div>
	 								</div>
	 							</div>
	 							<div class="col-md-3 mx-2 my-2 bg-warning" style="height: 150px;">
	 								<div class="col-md-12">
	 									<div class="row">
	 										<div class="col-md-8">
	 											<h5 class="text-white my-4">Room</h5>
	 											<h5 class="text-white">Details</h5>
	 										</div>
	 										<div class="col-md-4">
	 											<a href="#"><i class="fa fa-solid fa-table fa-3x my-3" style="color: white;"></i></a>
	 										</div>
	 									</div>
	 								</div>
	 							</div>
	 							<div class="col-md-3 mx-2 my-2 bg-info" style="height: 150px;">
	 								<div class="col-md-12">
	 									<div class="row">
	 										<div class="col-md-8">
	 											<h5 class="text-white my-4">Counselling</h5>
	 											<h5 class="text-white">Registration</h5>
	 										</div>
	 										<div class="col-md-4">
	 											<a href="#"><i class="fa fa-solid fa-graduation-cap fa-3x my-3" style="color: white;"></i></a>
	 										</div>
	 									</div>
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

