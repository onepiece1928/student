<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Academic corner</title>
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
	 					<h5 style="margin-top: 10px;">Academic Record</h5>
	 					<div class="col-md-12">
	 						<div class="row">
	 							<div class="col-md-3 mx-2 my-2 bg-info" style="height: 150px;">

	 								<div class="col-md-12">
	 									<div class="row">
	 										<div class="col-md-8">
	 											<h5 class="text-white my-4">Class</h5>
	 											<h5 class="text-white">Attendance </h5>
	 										</div>
	 										<div class="col-md-4">
	 											<a href="#"><i class="fa fa-solid fa-list fa-3x my-3" style="color: white;"></i></a>
	 										</div>
	 									</div>
	 								</div>
	 							</div>
	 							<div class="col-md-3 mx-2 my-2 bg-warning" style="height: 150px;">
	 								<div class="col-md-12">
	 									<div class="row">
	 										<div class="col-md-8">
	 											<h5 class="text-white my-4">Time</h5>
	 											<h5 class="text-white">Table</h5>
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
	 											<h5 class="text-white my-4">Marks</h5>
	 										</div>
	 										<div class="col-md-4">
	 											<a href="#"><i class="fa fa-solid fa-graduation-cap fa-3x my-3" style="color: white;"></i></a>
	 										</div>
	 									</div>
	 								</div>
	 							</div>
	 							<div class="col-md-3 mx-2 my-2 bg-warning" style="height: 150px;">
	 								<div class="col-md-12">
	 									<div class="row">
	 										<div class="col-md-8">
	 											<h5 class="text-white my-4">Grades</h5>
	 										</div>
	 										<div class="col-md-4">
	 											<a href="#"><i class="fa fa-solid fa-pen fa-3x my-3" style="color: white;"></i></a>
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