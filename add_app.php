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
							<form role="form">
								<div class="form-body">
									<div class="form-group">
										<label for="exampleInputEmail1">Id</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter text" name="appId">									
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Name</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter text" name="appName">									
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Tracking URL</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter text" name="appUrl">									
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Image URL</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter text" name="appImgurl">									
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Real Price</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter text" name="appPrice">									
									</div>
									<div class="form-group">
										<label>Network</label>
										<select multiple class="form-control" name="appNet">
											<option>Option 1</option>
											<option>Option 2</option>
											<option>Option 3</option>
											<option>Option 4</option>
											<option>Option 5</option>
										</select>
									</div>
									<div class="form-group">
										<label>Device</label>
										<select multiple class="form-control" name="appDevice">
											<option>iOS</option>
											<option>iPhone</option>
											<option>iPad</option>
											<option>Android</option>
										</select>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Short Description</label>
										<textarea class="form-control" rows="3" name="appDes"></textarea>								
									</div>
									
								</div>
								<div class="form-actions">
									<button type="submit" class="btn blue">Submit</button>
									<button type="button" class="btn default">Cancel</button>
								</div>
							</form>
						</div>
					</div>
<?php
