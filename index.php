<?php
include 'functions.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GSM Security App</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<h1 class="text-center">GSM Security</h1>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-offset-4 col-md-offset-4 col-lg-4 col-md-4" style="background-color:#f2f2f2;margin-top:10px;padding:10px;">
			<form>
				<div class="form-group">
					<label for="msisdn">Mobile Number:</label>
						<div class="input-group">
							<div class="input-group-addon">+91</div>
							<input type="text" class="form-control" name="msisdn" id="msisdn" placeholder="Enter Mobile Number" required="required">
						</div>
				</div>
				<button class="btn btn-primary" id="submitButton">Authenticate</button>
			</form>
		</div>
	</div>
	<div class="row" style="margin-top:10px;">
		<div class="col-lg-5 col-md-5" style="background-color:#f2f2f2;margin-top:10px;padding:10px;">
				<h3 class="text-center"><img src="sim-card.svg" height="40" width="40">SIM</h3>
				<h4 id="sim1"></h4>
				<h4 id="sim2"></h4>
				<h4 id="sim3"></h4>
				<h4 id="sim4"></h4>
				<h4 id="sim5"></h4>

		</div>
		<div class="col-lg-offset-2 col-md-offset-2 col-lg-5 col-md-5" style="background-color:#f2f2f2;margin-top:10px;padding:10px;">
				<h3 class="text-center"><img src="tower-transmissions.svg" height="40" width="40">MSC</h3>
				<h4 id="msc1"></h4>
				<h4 id="msc2" style="width:100%;"></h4>
				<h4 id="msc3"></h4>
				<h4 id="msc4"></h4>
		</div>
		<div class="col-lg-offset-4 col-md-offset-4 col-lg-4 col-md-4" style="margin-top:20px;">
			<h1 id="sim6" class="text-center"></h1>
		</div>
	</div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/functions.js"></script>
</body>
</html>