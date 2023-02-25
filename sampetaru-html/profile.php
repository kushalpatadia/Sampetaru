
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="design.css">
	
</head>
<body>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<img src="image/logo.png" class="navbar-brand" alt="logo">
		</div>
		<ul class="nav navbar-nav navbar-left">
			<li class="active"><a href="Home.php">Home</a></li>
			<li><a href="aboutus.php">About us</a></li>
			<li><a href="contactus.php">Contact Us</a></li>
			<li>
			<form class="navbar-form" action="" method="get">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search Products" name="query">
				<div class="input-group-btn">
					<button class="btn btn-default" type="submit" value="Search">
					<span class="glyphicon glyphicon-search"></span>
					</button>
				</div>
			</div>
			</form>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href=""><b>Hi: </b><b><!-- <?php echo $login_session; ?> --></b></a></li>
			<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
		</ul>
	</div>
</nav>

	<div>
		<div class="container" style="border: solid; border-color: grey">
		<div class="row">
			<div class="col-sm-3">
			<div class="verticalLine">
				<table class="table table-hover">
					<tbody>
						<tr>
							<td><a href=""><span class="glyphicon glyphicon-user">&nbspProfile</a></td>
						</tr>
						<tr>
							<td><a href=""><span class="glyphicon glyphicon-hourglass">&nbspHistory</a></td>
						</tr>
						<tr>
							<td><a href="">Post Request</a></td>
						</tr>
						<tr>
							<td><a href="">View Package</a></td>
						</tr>
						<tr>
							<td>
								<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Save Package Details</button>

								<div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog">
    
								<!-- Modal content-->
								<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Save Package Details</h4>
								</div>
								<div class="modal-body">
									<!-- <?php
										include("getimage.php");
									?> -->									
									</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
								</div>
								</div>
								</div>      
							</td> 
						</tr>
						</tbody>
					</table>
			</div>	
			</div>
			<div class="col-sm-9">
				<!-- <?php include("showprofile.php"); ?> -->
			</div>
		</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
<footer>
	<div class="self1">
		<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<table class="table1">
					<tr>
						<th colspan="2">ANY QUESTATION?</th>
					</tr>
					<tr>
						<td>How it works</td>
						<td>How it works</td>
					</tr>
					<tr>
						<td>FAQ</td>
						<td>FAQ</td>
					</tr>
					<tr>
						<td>Contact Us</td>
						<td>Contact Us</td>
					</tr>
					<tr>
						<td>How it works</td>
						<td>How it works</td>
					</tr>
					<tr>
						<td>FAQ</td>
						<td>FAQ</td>
					</tr>
					<tr>
						<td>Contact Us</td>
						<td>Contact Us</td>
					</tr>
					<tr>
						<td>How it works</td>
						<td>How it works</td>
					</tr>
					<tr>
						<td>FAQ</td>
						<td>FAQ</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-4">
				<table class="table1">
					<tr>
						<th colspan="2">COMPANY INFO</th>
					</tr>
					<tr>
						<td>About us</td>
						<td>About us</td>
					</tr>
					<tr>
						<td>Tearms and conditions</td>
						<td>Tearms and conditions</td>
					</tr>
					<tr>
						<td>Privacy Policy</td>
						<td>Privacy Policy</td>
					</tr>
					<tr>
						<td>About us</td>
						<td>About us</td>
					</tr>
					<tr>
						<td>Tearms and conditions</td>
						<td>Tearms and conditions</td>
					</tr>
					<tr>
						<td>Privacy Policy</td>
						<td>Privacy Policy</td>
					</tr>
					<tr>
						<td>About us</td>
						<td>About us</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-4">
				<table class="table1">
					<tr>
						<th>CONTACT US</th>
					</tr>
					<tr>
						<td>
							<a href="#"><span class="glyphicon glyphicon-envelope"></span>info@sitename.com</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="#"><span class="glyphicon glyphicon-phone-alt"></span>+911234567890.</a>
						</td>
					</tr>
					
					<tr>
						<td>
							<h5 id="ok">WHERHER ANY QUESTIONS, COMPLIMENTS OR REPORT A PROBLEM?</h5>
						</td>
					</tr>
					<tr>
						<td>
							<button type="button" class="btn btn-primary btn-lg btn-block">CONTACT US</button>
						</td>
					</tr>
				</table>
			</div>
		</div>
		</div>
		<div class="self2">
			<div class="container">
				<div class="row">
				<div class="col-sm-8">
					<img src="image/footer-logo.png" alt="footer-logo">
					<br>
					<span>Copyright <span class="glyphicon glyphicon-copyright-mark"></span> 2016 Lifester, all rights reserved.</span>
				</div>
				<div class="col-sm-4">
					<div class="right">	
						<a href="#"><img src="image/ficon.png" id="icon1" class="img-circle" alt="icon1"></a>
						<a href="#"><img src="image/twitter.png" id="icon2" class="img-circle" alt="icon2"></a>
						<a href="#"><img src="image/inicon.png" id="icon3" class="img-circle" alt="icon3"></a>
						<a href="#"><img src="image/googleicon.png" id="icon4" class="img-circle" alt="icon4"></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	</footer>
</body>