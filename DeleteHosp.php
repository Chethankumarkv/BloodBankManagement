<?php
session_start();
$_SESSION["tab"] = "Delete Hospital";

if($_SESSION["rlogin"] != 1)
	echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
	include_once('recptheader.php');
    echo '				<form name="deletehospital" action = "deletehosps.php"  method = "POST">
	<h2>Check list of Hospital</h2>
	<br>


	
	<p>  
	<label>Blood bank ID: </label>  
	<br>
	<input type = "text" name  = "bb_id" class="input" />  
	</p>  

	<p>
	<button class="btn">Submit</button>
	</p>
	</form>';
		###########contents of div goes here###########
	// include_once('deletepatients.php');

		##################################################
	include_once('footer.php');
}
?>