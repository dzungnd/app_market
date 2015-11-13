<?php error_reporting(E_ALL ^ E_NOTICE);
require_once('global.php');
require_once('function.php');

?>
<div class="row profile">
					<div class="col-md-12"> 
						<!--BEGIN TABS-->
						<div class="tabbable tabbable-custom tabbable-full-width">
							<ul class="nav nav-tabs">
								<li> <a href="#tab_1_3" data-toggle="tab"> Account </a> </li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tab_1_3">
									<div class="row profile-account">
										<div class="col-md-3">
											<ul class="ver-inline-menu tabbable margin-bottom-10">
												<li class="active"> <a data-toggle="tab" href="#tab_1-1"> <i class="fa fa-cog"></i> Personal info </a> <span class="after"> </span> </li>
												<li> <a data-toggle="tab" href="#tab_3-3"> <i class="fa fa-lock"></i> Change Password </a> </li>
											</ul>
										</div>
										<div class="col-md-9">
											<div class="tab-content">
												<div id="tab_1-1" class="tab-pane active">
													<form role="form" action="#">
														<div class="form-group">
															<label class="control-label">Username</label>
															<input type="text" placeholder="" class="form-control" value="<?php echo userInfo("userName", $connection);?>"/>
														</div>
														<div class="form-group">
															<label class="control-label">Email</label>
															<input type="text" class="form-control" rows="3" placeholder="" value="<?php echo userInfo("userEmail", $connection);?>"/>
														</div>
														<div class="form-group">
															<label class="control-label">Role</label>
															<input type="text" placeholder="" class="form-control" value="<?php echo userInfo("userRole", $connection); ?>"/>
														</div>
														
													</form>
												</div>
												<div id="tab_3-3" class="tab-pane">
													<form action="#" method="POST">
														<div class="form-group">
															<label class="control-label">Current Password</label>
															<input type="password" class="form-control" name="currentPass" value=""/>
														</div>
														<div class="form-group">
															<label class="control-label">New Password</label>
															<input type="password" class="form-control" name="newPass" value=""/>
														</div>
														<div class="form-group">
															<label class="control-label">Re-type New Password</label>
															<input type="password" class="form-control" name="retypePass" value=""/>
														</div>
														<div class="margin-top-10">
															<input type="submit" class="btn green" value="Change password"/>
															<input type="cancel" class="btn green" value="Cancel"/>
														</div>
													</form>
												</div>
											</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
							<!--END TABS--> 
						</div>

					</div>
					<!-- END PAGE CONTENT--> 
<?php

if(isset($_POST["currentPass"]) && isset($_POST['retypePass']) && isset($_POST['newPass']) ){
	changePass($_POST['newPass'], $_POST['currentPass'], $_POST['retypePass'], $connection);
}

?>			