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
	<link rel="stylesheet" href="/assets/css/style.css">
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
				<?php
					$travels = [];
					if(isset($session_user_trips))
					{
						echo "<table class='table'>\n";
						echo "<thead>\n";
						echo "<tr>\n";
						echo "<th>Destination</th>\n";
						echo "<th>Start Date</th>\n";
						echo "<th>End Date</th>\n";
						echo "<th>Plan</th>\n";
						echo "</thead>\n";
						echo "<tbody>\n";
						foreach ($session_user_trips as $trip) 
						{
							array_push($trip['travels_id'], $travels);
							echo "<tr>\n";
							echo "<td><a href='/Travels/show/" . $trip['travels_id'] . "'>" . $trip['destination'] . "</td>\n";
							echo "<td>" . $trip['start_date'] . "</td>\n";
							echo "<td>" . $trip['end_date'] . "</td>\n";
							echo "<td>" . $trip['description'] . "</td>\n";
							echo "</tr>\n";
						}
						echo "</tbody>\n";
						echo "</table>\n";
					}
				?>
			</div>
		</div><!-- end of row -->
		<div class="row">
			<div class="cold-md-11">
				<h4>Other User's Travel Plans</h4>
				<?php
					if(isset($session_user_trips))
					{
						echo "<table class='table'>\n";
						echo "<thead>\n";
						echo "<tr>\n";
						echo "<th>Name</th>\n";
						echo "<th>Destination</th>\n";
						echo "<th>Start Date</th>\n";
						echo "<th>End Date</th>\n";
						echo "<th>Do You Want to Join?</th>\n";
						echo "</thead>\n";
						echo "<tbody>\n";
						foreach ($all_user_trips as $trip) 
						{
							echo "<tr>\n";
							echo "<td>" . $trip['name'] . "</a></td>\n";
							if(in_array($travels, $trip['travels_id']) === TRUE)
							{
								echo "<td>Joined!</td>\n";
							}
							else
							{
								echo "<td><a href='/Travels/show/" . $trip['travels_id'] . "'>" . $trip['destination'] . "</td>\n";
							}
							echo "<td>" . $trip['start_date'] . "</td>\n";
							echo "<td>" . $trip['end_date'] . "</td>\n";
							echo "<td><a href='/Travels/join/" . $trip['travels_id'] . "'>Join</a></td>\n";
							echo "</tr>\n";
						}
						echo "</tbody>\n";
						echo "</table>\n";
					}

				?>
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