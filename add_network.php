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
								<i class="fa fa-reorder"></i> Add Network
							</div>
							
						</div>
						<div class="portlet-body form">
							<form role="form">
									<div class="form-group">
										<label for="exampleInputEmail1">Network Name</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter text" name="networkName">									
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Percent Revenue</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter text" name="percentRevenue">									
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Email Login</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter text" name="appImgurl">									
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Payment to:</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter text" name="appPrice">									
						
								</div>
								<div class="form-actions">
									<button type="submit" class="btn blue">Submit</button>
									<button type="button" class="btn default">Cancel</button>
								</div>
							</form>
						</div>
					</div>
