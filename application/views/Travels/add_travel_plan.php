<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Login and Registration with CodeIgniter">
	<title>Add Travel Plan</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/assets/css/style.css">
	<script>
		$(document).ready(function(){
			$("#start_date").datepicker({
				minDate : -0,
				onClose: function(selectedDate) {
					$("#end_date").datepicker("option", "minDate", selectedDate);
			 	}
			});
			$("#end_date").datepicker({
				onClose: function(selectedDate){
					$("#start_date").datepicker("option", "maxDate", selectedDate)
				}
			});
		});
	</script>
</head>
<body>
	<div class="container">
		<div class="page-header">
			<h2>Hello, <?= $this->session->userdata('first_name') ?></h2>
			<a href="/Sessions/destroy">Log Off</a>
			<a href="/Travels/">Home</a>
		</div><!-- end of page-header -->
		<div class="row">
			<div class="col-md-12">
				<h1>Add a Trip</h1>
			</div>
		</div><!-- end of row-->
		<div class="row">
			<div class="col-md-6">
				<form class="form-horizontal" action="/Travels/create" method="post">
					<div class="form-group">
						<label for="destination" class="col-sm-3 control-label">Desitnation</label>
						<div class="col-sm-9">
							<input type="text" id="destination" name="destination" class="form-control">
							<?= $this->session->flashdata('destination') ?>
						</div>
					</div>
					<div class="form-group">
						<label for="description" class="col-sm-3 control-label">Description</label>
						<div class="col-sm-9">
							<input type="text" id="description" name="description" class="form-control">
							<?= $this->session->flashdata('description') ?>
						</div>
					</div>
					<div class="form-group">
						<label for="start_date" class="col-sm-3 control-label">Start Date</label>
						<div class="col-sm-9">
							<input type="text" id="start_date" name="start_date">
							<?= $this->session->flashdata('start_date') ?>
						</div>
					</div>
					<div class="form-group">
						<label for="end_date" class="col-sm-3 control-label">End Date</label>
						<div class="col-sm-9">
							<input type="text" id="end_date" name="end_date">
							<?= $this->session->flashdata('end_date') ?>
							<?= $this->session->flashdata('date error') ?>
						</div>
					</div>
					<button id="add_plan_btn" type="submit" class="btn btn-primary">Add Plan</button>
					<div style="clear: both;"></div>
				</form>
			</div>
		</div>
	</div><!-- end of container -->
</body>
</html>