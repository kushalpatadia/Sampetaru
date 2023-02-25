<?php
	$date = date('Y-m-d');
	// echo ;
?>
<div class="banner">	
	<div class="banner-info" style="margin: 0px;">
		<div class="container">
		<br><br>
			<h1>Book Your Best Trip</h1>
			<div class="sap_tabs">	
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab" style="width: 32%;"><span><i class="glyphicon glyphicon-home" aria-hidden="true"></i>Send</span></li>
						<li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab" style="width: 33.35%;"><span><i class="glyphicon glyphicon-search" aria-hidden="true"></i>Search</span></li>
						<li class="resp-tab-item grid3" aria-controls="tab_item-2" role="tab" style="width: 33.35%;"><span><i class="glyphicon glyphicon-send" aria-hidden="true"></i>Post</span></li>
						<div class="clear"></div>
					</ul>				  	 
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<form>
							<div class="facts">
								<div class="booking-form">
									<div class="online_reservation">
										<div class="b_room">
											<div class="booking_room">
												<div class="reservation">
													<ul>		
														<li  class="span1_of_1 desti">
															<div class="book_date">
																<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																<input type="text" placeholder="Departure City or Hotel" class="typeahead1 input-md form-control tt-input" required="">
															</div>					
														</li>
													</ul>
												</div>
												<div class="reservation">
													<ul>	
														<li  class="span1_of_1">
															<h5>Check In</h5>
															<div class="book_date">
																<div class="book_date">
																	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																	<input class="date" id="datepicker1" type="text" value="<?php echo $date;?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $date;?>';}" required="">
																</div>	
															</div>		
														</li>
														<li  class="span1_of_1 left">
															<h5>Check Out</h5>
															<div class="book_date">
																<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																<input class="date" id="datepicker2" type="text" value="<?php echo $date;?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $date;?>';}" required="">
															</div>					
														</li>
														<div class="clearfix"></div>
													</ul>
												</div>
												<div class="reservation">
													<ul>	
														<li class="span1_of_3">
															<div class="date_btn">
																<input type="submit" value="Submit" />
															</div>
														</li>
														<div class="clearfix"></div>
													</ul>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>	
							</div>
						</form>
						</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
								<div class="facts">
									<div class="flights">
										<div class="reservation">
											<ul>		
												<li  class="span1_of_1 desti1">
													<form action="{SITE_MOD}searchpost-nct/" method="POST">
													<div class="book_date">
														<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
														<input type="text" placeholder="From" class="typeahead1 input-md form-control tt-input" required="" id="from_city" name="l_from" name="start">
													 </div>					
												 </li>
												 <li  class="span1_of_1 desti1">
													 <div class="book_date">
														<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
														<input type="text" placeholder="To" class="typeahead1 input-md form-control tt-input" required="" name="l_to">
													 </div>		
												 </li>
												 <div class="clearfix"> </div>
											</ul>
										</div>
										<div class="reservation">
										<br>
											<h4 style="padding-left: 40%;">Date Between</h4>
											<ul>	
												 <li  class="span1_of_1">
													 <h5 style="padding-left: 40%;">Start Date</h5>
													 <div class="book_date">
														<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
														<input class="date" name="d_from" id="s_datepicker1" type="text" value="<?php echo $date;?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $date;?>';}" required="">
													 </div>		
												 </li>
												 <li  class="span1_of_1 left">
													 <h5 style="padding-left: 40%;">End Date</h5>
													 <div class="book_date">
														<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
														<input class="date" name="d_to" id="s_datepicker2" type="text" value="<?php echo $date;?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $date;?>';}" required="">
													 </div>					
												 </li>
												 <div class="clearfix"> </div>
											</ul>
										</div>
										<br>
										<div class="reservation">
											<ul>	
												 <li class="span1_of_3">
														<div class="date_btn">
															<input type="submit" value="Get Your Search" name="search" />
														</div>
												 </li>
												 </form>
												 <div class="clearfix"></div>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
								<div class="facts">
									<div class="cars">
										<div class="reservation">
											<ul>		
												<li  class="span1_of_1 desti1">
													<form name="post_form" id="post_form" method="POST" action="">
													<div class="book_date">
															<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
															<input type="text" placeholder="Pick Up Location" class="typeahead1 input-md form-control tt-input" required="" name="l_start">
													</div>					
												</li>
												<li  class="span1_of_1 desti1">
													<div class="book_date">
														<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
														<input type="text" placeholder="Drop Off Location" class="typeahead1 input-md form-control tt-input" required="" name="l_end">
													</div>					
												</li>
												<div class="clearfix"> </div>
											</ul>
										</div>
										<div class="reservation">
											<ul>	
												<li  class="span1_of_1">
													<h5>Pick Up Date</h5>
													<div class="book_date">
														<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
														<input class="date" name="d_start" id="p_datepicker1" type="text" value="<?php echo $date;?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $date;?>';}" required="">
													</div>		
												</li>
												<li  class="span1_of_1 left">
													<h5>Drop Off Date</h5>
													<div class="book_date">
														<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
														<input class="date" name="d_end" id="p_datepicker2" type="text" value="<?php echo $date;?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $date;?>';}" required="">
													</div>					
												 </li>
												 <div class="clearfix"> </div>
											</ul>
										</div>
										<div class="reservation">
											<ul>	
												<li class="span1_of_3">
													<div class="date_btn date_car">
														<input type="submit" value="Post Me" name="btn_post_form" />
													</div>
													</form>
												</li>
												 <div class="clearfix"></div>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
								<div class="facts">
									<div class="destination">
										<div class="reservation">
											<ul>		
												<li  class="span1_of_1 desti">
													 <div class="book_date">
														 <form>
															<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
															<input type="text" placeholder="City ,Region Or Country" class="typeahead1 input-md form-control tt-input" required="">
														 </form>
													 </div>					
												 </li>
											</ul>
										</div>
										<div class="reservation">
											<ul>	
												 <li class="span1_of_3">
														<div class="date_btn date_car">
															<form>
																<input type="submit" value="Reach Destinations" />
															</form>
														</div>
												 </li>
												 <div class="clearfix"></div>
											</ul>
										</div>
									</div>
								</div>
							</div> -->
						</div>
				</div>
			</div>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			</script>
			<?php
				if (isset($_SESSION['login_user']) && isset($_SESSION['username'])) {
				}
				else
				{
					$html = "<div class='login'><a href='{SITE_MOD}login-nct'>Login</a></div>";
					echo $html;
				}
			?>
		</div>
	</div>
</div>
<!-- <div class="row"> -->
	<br>
	<div class="container">
		<div class="col-md-4">
			<hr>
		</div>
		<div class="col-md-4">
			<center><b><h3>How it works?</h3></b></center>
		</div>
		<div class="col-md-4">
			<hr>
		</div>
	</div><br>
	<div class="container">
		<div class="col-md-4">
			<img src="{SITE_IMG}slider_2.jpg">
			<center><h1 style="color:green;">Send</h1></center><br>
			<center><h4>Our system makes booking your delivery a breeze.</h4></center><br>
		</div>
		<div class="col-md-4">
			<img src="{SITE_IMG}slider_1.jpg">
			<center><h1 style="color:green;">Compare</h1></center><br>
			<center><h4><center><h4>Our system makes booking your delivery a breeze.</h4></center><br></h4></center><br>
		</div>
		<div class="col-md-4">
			<img src="{SITE_IMG}slider_3.jpg">
			<center><h1 style="color:green;">Save</h1></center><br>
			<center><h4>With lots of choice at a great price you'll save a bundle.</h4></center><br>
		</div>
	</div>
<!-- </div> -->



<!---strat-date-piker-- -->
	<link rel="stylesheet" href="{SITE_CSS}jquery-ui.css" />
	<script src="{SITE_JS}js/jquery-ui.js"></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script> -->
<script>
	  $(function() {
	  	var dateToday = new Date();
		$( "#datepicker1,#datepicker2,#s_datepicker1,#s_datepicker2,#p_datepicker1,#p_datepicker2" ).datepicker(
			{
				dateFormat: 'yy-mm-dd',
				minDate: dateToday,
			});

	  });
</script>
<!---/End-date-piker-- -->