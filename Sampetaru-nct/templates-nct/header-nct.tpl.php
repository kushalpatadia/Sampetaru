<header>
	<!-- banner -->
	<div class="banner1">
		<div class="navigation">
			<div class="container-fluid">
				<nav class="pull">
					<ul class="nav">
						<li><a href="{SITE_URL}" class="active"> Home</a></li>
						<li><a href="{SITE_MOD}aboutus-nct/"> About Us</a></li>
						<li><a href="">Popular Places</a></li>
						<li><a href="">Events</a></li>
						<li><a href="{SITE_MOD}contactus-nct/">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="header-top">
			<div class="container">
				<div class="head-logo">
					<a href="{SITE_URL}"><span>S</span>ampetaru<i><p>Soch Mat Bhej De</p></i></a>
				</div>
				<div class="top-nav">
					<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<!-- <a href=""> --><img src="{SITE_IMG}menu.png" alt=""><!-- </a> -->
					</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
					<?php 
						if (isset($_SESSION['login_user']) && isset($_SESSION['username'])) {
							echo "
								<div class='dropdown' style='color : #ff5a10;'>
								<button class='btn btn-default btn-xs dropdown-toggle' type='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
								".$_SESSION['username']."
								<span class='caret'></span></button>
								<ul class='dropdown-menu'>
								  <li><a href='{SITE_MOD}profile-nct/'>Profile</a></li>
								  <li><a href='{SITE_MOD}wishlist-nct/'>My Wishlist</a></li>
								  <li><a href='{SITE_MOD}cart-nct/'>My Cart</a></li>
								  <li><a href='{SITE_MOD}mypost-nct/'>My Post</a></li>
								  <li><a href='{SITE_MOD}logout-nct/'>Logout</a></li>
								</ul>
								</div>
							";
						}
					?>
				</div>	
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- banner -->
</header>