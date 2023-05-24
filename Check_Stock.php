<?php
session_start();
$_SESSION["tab"] = "Check_Stock";

if($_SESSION["rlogin"] != 1)
	echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
	include_once('recptheader.php');
    echo '				<form name="checkstock" action = "checkstock.php"  method = "POST">
	<h2>CHECK STOCK IN BLOOD BANK</h2>
	<br>


	
	
	<button class="btn">Search</button>
	</p>

	</form>';
		###########contents of div goes here###########
	// include_once('checkStock.php');

		##################################################
	include_once('footer.php');
}
?>