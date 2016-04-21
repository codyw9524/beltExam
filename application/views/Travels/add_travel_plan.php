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
	<script>
		$(document).ready(function(){
			$("#start_date").datepicker();
		})
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Add a Trip</h1>
			</div>
		</div><!-- end of row-->
		<div class="row">
			<div class="col-md-6">
				<form class="form-horizontal" action="" method="post">
					<div class="form-group">
						<label for="destination" class="col-sm-3 control-label">Desitnation</label>
						<div class="col-sm-9">
							<input type="text" id="destination" name="destination" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="description" class="col-sm-3 control-label">Start Date</label>
						<div class="col-sm-9">
							<input type="text" id="start_date" name="start_date" class="form-control">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div><!-- end of container -->
</body>
</html>