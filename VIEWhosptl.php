


<?php
session_start();
$_SESSION["tab"] = "view Hospital";

if($_SESSION["rlogin"] != 1)
	echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
	include_once('recptheader.php');

		###########contents of div goes here###########
	echo '				<form name="Hospital_history" action = "viewhosp.php"  method = "POST">
	<h2>OUR REGISTERED HOSPITALS</h2>
	<br>
	


	</form>';

		##################################################
	include_once('footer.php');
}
?>