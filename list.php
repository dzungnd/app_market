<div class="margin-top-10">
									<ul class="mix-filter">
										<a href="./home.php?device="><li class="filter">
											 All
										</li></a>
										<a href="./home.php?device=iphone"><li class="filter" >
											 iPhone
										</li></a>
										<a href="./home.php?device=ipad"><li class="filter" >
											 iPad
										</li></a>
										<a href="./home.php?device=android"><li class="filter">
											 Android
										</li></a>
										
									</ul>
</div>
<div class="containholder">

					<div class="lst-card">
						<div class="lst-wpr ">
							<div class="padr10">
								<h2 class="subh2">
									<span class="subwpr"><a
										title="Download Trending Games for free"
										href="#"><?php echo $getCategory; ?></a></span>
								</h2>
							
							</div>
							<ul class="lst-ul">

							<?php 
							$showApps = showApps(NULL , $getDevice, "arr", $connection);

							foreach ($showApps as $value) {
								
							?>
								<li class="lst-li il_normal      " data_val=""><div
										class="lst-cnt">
										<div class="lst-cnt-h">
											<a title="<?php echo $value['name']?>"
												href="#"
												class="cnt-a "><div class="imgh">
													<div class="appimg">
														<div class="imgwpr">
															<div class="image">
																<img alt="<?php echo $value['name']?>"
																	class="img lazy "
																	src="<?php echo $value['img']?>"
																	style="display: inline-block;">
															</div>
														</div>
													</div>
												</div>
												<div class="cnth">
													<h3 class="title">
														<?php echo $value['name']?><span class="dotdot"></span>
													</h3>
													<p class="subcategory">
														Arcade<span class="dotdot"></span>
													</p>
													<p>
														<i class="stars star5"><i class="stars starP0"></i></i><span
															class="dct"><i class="aic sic aic-download"></i>
															4K</span>
													</p>
												</div></a>
										</div>
										<div class="lst-act">
											<div class="lst-like">
												<a
													href="#"
													rel="nofollow" class="btn btn-link"><i
													class="aic sic  aic-like"></i><span class="liketxt">Like&nbsp;</span><span
													class="likes" data_val="460">460</span></a>
											</div>
											<div class="lst-download">
												<a
													href="<?php echo $value['url']?>"
													rel="nofollow" class="btn btn-orange cursorp stmClk"
													data-plugin="modal" data_fileid="1907140"
													data_title="<?php echo $value['name']?>"><span class="stmcdtxt">GET</span>&nbsp;<i class="fa fa-download"></i></a>
											<?php } ;?>
											</div>
										</div>
									</div></li>
								
							</ul>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>
	