<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Login and Registration with CodeIgniter">
	<title>Login &amp; Register</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1 class="text-center">BELT EXAM!</h1>
		</div>
		<div class="row">
			<div class="col-md-6">
				<fieldset>
					<legend>Register</legend>
				</fieldset>
				<form class="form-horizontal" action="/Users/create" method="post">
					<div class="form-group">
						<label for="first_name" class="col-sm-3 control-label">First Name</label>
						<div class="col-sm-9">
							<input type="text" id="first_name" name="first_name" class="form-control">
							<?= $this->session->flashdata('first_name') ?>
						</div>
					</div>
					<div class="form-group">
						<label for="last_name" class="col-sm-3 control-label">Last Name</label>
						<div class="col-sm-9">
							<input type="text" id="last_name" name="last_name" class="form-control">
							<?= $this->session->flashdata('last_name') ?>
						</div>
					</div>
					<div class="form-group">
						<label for="username" class="col-sm-3 control-label">Username</label>
						<div class="col-sm-9">
							<input type="text" id="username" name="username" class="form-control">
							<?= $this->session->flashdata('username') ?>
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-3 control-label">Password</label>
						<div class="col-sm-9">
							<input type="password" id="password" name="password" class="form-control">
							<?= $this->session->flashdata('password') ?>
						</div>
					</div>
					<div class="form-group">
						<label for="pass_confirm" class="col-sm-3 control-label">Confirm Password</label>
						<div class="col-sm-9">
							<input type="password" id="pass_confirm" name="pass_confirm" class="form-control">
							<?= $this->session->flashdata('pass_confirm') ?>
						</div>
					</div>
					<button id="register" type="submit" class="btn btn-default">Register</button>
					<div style="clear: both;"></div>
				</form>
			</div>
			<div class="col-md-6">
				<fieldset>
					<legend>Log In</legend>
				</fieldset>
					<form class="form-horizontal" action="/Sessions/create" method="post">
					<div class="form-group">
						<label for="email2" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="text" id="email2" name="email" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="password2" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" id="password2" name="password" class="form-control">
							<?= $this->session->flashdata('error') ?>
							<?= $this->session->flashdata('registration_confirmed') ?>
						</div>
					</div>
					<button id="login" type="submit" class="btn btn-default">Log In</button>
					<div style="clear: both;"></div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>