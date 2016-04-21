<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Login and Registration with CodeIgniter">
	<title>Home</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="page-header">
			<h2>Hello, <?= $this->session->userdata('first_name') ?></h2>
			<a href="/Sessions/destroy">Log Off</a>
		</div>
		<div class="row">
			<div class="col-md-8">
				<h4>Your Trip Schedules</h4>
			</div>
		</div><!-- end of row -->
		<div class="row">
			<div class="cold-md-11">
				<h4>Other User's Travel Plans</h4>
			</div>
		</div><!-- end of row -->
		<div class="row">
			<div class="col-md-12">
				<a class="add_travel_plan_link" href="/Travels/add">Add Travel Plan</a>
			</div>
		</div>
	</div><!-- end of container -->
</body>
</html>