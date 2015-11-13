<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once('global.php');
require_once('function.php');
?>
<div class="row">
				<div class="col-md-9 ">
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i> Add Apps
							</div>
							
						</div>
						<div class="portlet-body form">
							<form role="form" method="POST" action="">
								<div class="form-body">
									<div class="form-group">
										<label for="exampleInputEmail1">Username</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter text" name="userName">									
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Password</label>
										<input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter text" name="userPassword">									
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Email</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter text" name="userEmail">									
									</div>
								
								<div class="form-actions">
									<button type="submit" class="btn blue">Submit</button>
									<button type="button" class="btn default">Cancel</button>
								</div>
							</form>
						</div>
					</div>
<?php
if(isset($_POST['userName']) && isset($_POST['userPassword']) && isset($_POST['userEmail'])){
	addUsers($_POST['userName'], $_POST['userPassword'], $_POST['userEmail'], $connection);
}
?>