<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Leave</title>
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
	 					<h5 style="margin-top: 10px;">Leave</h5>
	 					<div class="col-md-12">
	 						<div class="row">
	 							<div class="col-md-3 mx-2 my-2 bg-info" style="height: 150px;">

	 								<div class="col-md-12">
	 									<div class="row">
	 										<div class="col-md-8">
	 											<h5 class="text-white my-4">Leave </h5>
	 											<h5 class="text-white">Request</h5>
	 										</div>
	 										<div class="col-md-4">
	 											<a href="request.php"><i class="fa fa-user-circle fa-3x my-3" style="color: white;"></i></a>
	 										</div>
	 									</div>
	 								</div>
	 							</div>
	 							<div class="col-md-3 mx-2 my-2 bg-warning" style="height: 150px;">
	 								<div class="col-md-12">
	 									<div class="row">
	 										<div class="col-md-8">
	 											<h5 class="text-white my-4">Leave</h5>
	 											<h5 class="text-white">Status</h5>
	 										</div>
	 										<div class="col-md-4">
	 											<a href="#"><i class="fa fa-solid fa-info-circle fa-3x my-3" style="color: white;"></i></a>
	 										</div>
	 									</div>
	 								</div>
	 							</div>
	 							<div class="col-md-3 mx-2 my-2 bg-success" style="height: 150px;">
	 								<div class="col-md-12">
	 									<div class="row">
	 										<div class="col-md-8">
	 											<h5 class="text-white my-4">Leave</h5>
	 											<h5 class="text-white">History</h5>
	 										</div>
	 										<div class="col-md-4">
	 											<a href="#"><i class="fa fa-sharp fa-solid fa-user-tie fa-3x my-3" style="color: white;"></i></a>
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