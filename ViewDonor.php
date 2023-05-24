


<?php
session_start();
$_SESSION["tab"] = "view Donor";

if($_SESSION["rlogin"] != 1)
	echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
	include_once('recptheader.php');

		###########contents of div goes here###########
	echo '				<form name="Donor_history" action = "viewdonors.php"  method = "POST">
	<h2>OUR REGISTERED DONORS</h2>
	<br>
	

	<p>
	<label>Enter Receptionist id:</label>  
	<br>
	<input type = "text" name  = "r_id" class="input" required/>  
	</p>  

	<p>
	<button class="btn">Search</button>
	</p>

	

	</form>';

		##################################################
	include_once('footer.php');
}
?>