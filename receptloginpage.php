<!DOCTYPE html>
<html>

<head>
	<title>
		Blood Bank Management System
	</title>
	
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- MetisMenu CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/metismenu/dist/metisMenu.min.css">

<!-- Custom CSS -->
<link href="css/startmin.css" rel="stylesheet">

<link rel="stylesheet" href="/bloodbank se/icofont/icofont.min.css">

<!-- Custom Fonts -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
  <?php
  include('navbar.php');
  ?>

	<div class="title">
		<center>
			<img src="res/images/logo.png" height="100" width="100" align="top">
			<h1>BLOOD BANK MANAGEMENT SYSTEM</h1><br>
		</center>
	</div>

	<form name="f1" action="recptionalistLogin.php" method="POST">
		<h1>Receptionist Login</h1>
		

		<?php
            session_start();
            if (isset($_SESSION["login_error"])) {
	            echo "<p class='error'>" . $_SESSION["login_error"] . "</p>";
	            unset($_SESSION["login_error"]);
            }
            ?>


		<p>
			<label> UserName: </label><br><br>
			<input type="text" class="input" name="r_name" placeholder="Enter UserName" required />
		</p>
		<p>
			<label> Id: </label>
			<br><br>
			<input type="password" class="input" name="r_id" placeholder="Enter ID" required />
		</p>
		<p>
			<input type="submit" id="btn" value="Login" name="submit" />
		</p>
	</form>
</body>

</html>