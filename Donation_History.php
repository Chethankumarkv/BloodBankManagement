<?php
session_start();
$_SESSION["tab"] = "Donation History";

if($_SESSION["rlogin"] != 1)
	echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
	include_once('recptheader.php');

		###########contents of div goes here###########
	echo '				<form name="donationHistory" action = "donationHistory.php"  method = "POST">
	<h2>Donation History</h2>
	<br>
	

	

	

	</form>';

		##################################################
	include_once('footer.php');
}
?>