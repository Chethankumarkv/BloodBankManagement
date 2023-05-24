<?php
session_start();
$_SESSION["tab"] = "New Donation";

if($_SESSION["rlogin"] != 1)
	echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
	include_once('recptheader.php');

		###########contents of div goes here###########
	echo '
	<form name="newDonation" action = "newDonation.php"  method = "POST" class="formback">
	<h2 class="head">New Donation</h2>
	<br>
     
	<p>  
	<label class="lb">Blood  Id:</label>  
	<br>
	<input type = "text" name  = "b_id" class="input" required/>  
	</p>
	<p>  
	<label class="lb">Donar Id:</label>  
	<br>
	<input type = "text" name  = "d_id" class="input" required/>  
	</p>  
    <p>  
	
	
	<p>
	<label class="lb">Blood Group:</label>
	<br>
	<select name="blood_group" class="input" required>
	<option value="A+">A+</option>
	<option value="A-">A-</option>
	<option value="B+">B+</option>
	<option value="B-">B-</option>
	<option value="O+">O+</option>
	<option value="O-">O-</option>
	<option value="AB+">AB+</option>
	<option value="AB-">AB-</option>

	</select>
	</p>

	<p>  

	<label class="lb">Units of blood donated:</label>  
	<br>
	<input type = "Number" name  = "units" class="input" required/>  
	</p>  

	<p>
	<button class="btn">Submit</button>
	</p>
	</form>';

		##################################################
	include_once('footer.php');
}
?>