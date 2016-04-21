<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Login and Registration with CodeIgniter">
	<title>Destination Details</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
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
			<div class="col-md-7">
				<h2><?= $destinations['destination'] ?></h2>
				<?php
					if(isset($destinations))
					{
						echo "<table class='table'>\n";
						echo "<tr>\n";
						echo "<td>Planned by:</td>\n";
						echo "<td>" . $destinations['name'] . "</td>\n";
						echo "</tr>\n";
						echo "<tr>\n";
						echo "<td>Description:</td>\n";
						echo "<td>" . $destinations['description'] . "</td>\n";
						echo "</tr>\n";
						echo "<tr>\n";
						echo "<td>Start Date:</td>\n";
						echo "<td>" . $destinations['start_date'] . "</td>\n";
						echo "</tr>\n";
						echo "</tr>\n";
						echo "<tr>\n";
						echo "<td>End Date:</td>\n";
						echo "<td>" . $destinations['end_date'] . "</td>\n";
						echo "</tr>\n";
						echo "</table>\n";
					}
				?>
			</div>
		</div><!-- end of row-->
		<div class="row">
			<div class="col-md-7">
				<h2>Other users joining the trip</h2>
				<?php
					//make a table to show other users on the same destination trip
				?>
			</div>
		</div>
	</div><!-- end of container -->
</body>
</html>