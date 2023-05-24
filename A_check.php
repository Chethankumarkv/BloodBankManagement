<?php
session_start();
$_SESSION["tab"] = "Check_Stock";

if($_SESSION["login"] != 1)
	echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
	include_once('adminheader.php');
    echo '				<form name="checkstock" action = "acheck.php"  method = "POST" class="formback">
	<h2 class="head">CHECK STOCK IN BLOOD BANK</h2>
	<br>


	
	<p>
	<label class="lb">Enter blood bank id:</label>  
	<br>
	<input type = "text" name  = "bb_id" class="input" required/>  
	</p>  


	<p>
	<button class="btn">Search</button>
	</p>

	</form>';
		###########contents of div goes here###########
	// include_once('checkStock.php');

		##################################################
	include_once('footer.php');
}
?>