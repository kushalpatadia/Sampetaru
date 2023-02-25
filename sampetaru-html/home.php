<!DOCTYPE html>
<html>
<head>
	<title>Sampetaru</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="jquery-1.8.0.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="home.css"> -->
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<section id="land" class="parallax text-center dark_section">
  <div class="tb">
        <div class="tb-cell">
            <div id="header-title-1">                        
                <h3 class="line">we provide</h3>                        
                <div class="clear"></div>
                <h2> freight services <br> quickly and qualitatively</h2>
            </div>
        </div>
    </div>   
</section>
<section>
	<div style="background-color: lightgreen">
		<br><br>
		<div class="col-sm-8" style="background-color: red;height: 100vh;">
			
		</div>
		<div class="col-sm-4" style="border: 2px solid blue;height: 100vh;background-image: url('courier.jpg');">
			<h1 class="h11" align="center">LogIn</h1>
			<br><br><br>
			<form action="" method="post" id="f2" name="f2">
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="Email" placeholder="Email" name="email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="Password" placeholder="Password" name="password">
				</div>
				<span style="color: red"><?php echo $error; ?></span>
				<br>
				<button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
				<br>
			</form>
			<button type="button" class="btn btn-warning">register me</button>
		</div>
	</div>
</section>
</body>
</html>