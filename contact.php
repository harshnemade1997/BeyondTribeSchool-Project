<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
	<div>
	<h1 class="text-center">Let's Connect</h1>
	<h3 class="text-center">We'd Love To Help You</h3><hr>
	</div>
	<div class="row">
		<div class="col-md-6">
			<form method="POST">

				<div class="text-center"><i class="fa fa-envelope fa-3x" style="color: #963930; "></i>
				</div><hr>
				<div style="padding-left: 5%;">
				  	<div class="row">
				    	<div class="col">
				    		<label>Name</label>
				      		<input type="text" class="form-control" name="name" placeholder="Enter Name" required="">
				    	</div>
				  	</div>
					<div class="form-group">
					    <label for="email">Email address</label>
					    <input type="email" class="form-control" name="email" placeholder="Enter email">
					</div>
					<div class="form-group">
					    <label for="number">Mobile Number</label>
					    <input type="number" class="form-control" name="number" placeholder="Enter mobile number" size="10">
					</div>
				</div>
				<div class="text-center">
					<button type="submit" class="btn" name="submit" style="width: 30%; background-color: #963930; color: white">Send Message</button>
				</div>
			</form>
		</div>
		<div class="col-md-6">
			<div class="text-center"><i class="fa fa-phone fa-3x" style="color: #963930 "></i>
			</div><hr>
			<div class="text-center" style="padding-top: 10%" >
				<h4 style="color: #963930;">Phone Number:</h4><h4><b>+91 9579213125</b></h4>
				<h4 style="color: #963930;">Location:</h4><b>Deurwadi Shivar Mahuli, Manora, District Washim.</b></h4>
			</div>
			
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
