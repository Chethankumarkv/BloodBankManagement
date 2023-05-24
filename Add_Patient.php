<?php
session_start();
$_SESSION["tab"] = "Add Patient";
if($_SESSION["hlogin"] != 1)
{
	echo '';
header('location:index.php');
}
else{
	include_once('hospheader.php');
?>

	<form name="addpatient" action = "addpatient.php"  method = "POST" class="formback">
	<h2 class="head">New Registration</h2>
	<br>

	<?php
	if(isset($_SESSION["entry_error"])){
		echo "<p class='error'>" .$_SESSION["entry_error"]. "</p>";
		unset($_SESSION["entry_error"]);
	}
	?>
	
	<p>  
	<label class="lb">Name: </label>  
	<br>
	<input type = "text" name  = "p_name" class="input" />  
	</p>  

	<p>  
	<label class="lb">Patient Id: </label>  
	<br>
	<input type = "text" name  = "p_id" maxlength=10 class="input" required />  
	</p>  

	


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
	<label class="lb">contact </label>  
	<br>
	<input type = "tel" minlength="10" maxlength="10" name  = "contact" class="input" required/>  
	</p>  

	<p>
	<label class="lb">units of blood needed: </label>  
	<br>
	<input type = "Number" name  = "units_needed" class="input" required/>  
	</p>  


   
	<p>
	<button class="btn">Register</button>
	</p>
	</form>

<?php
	include_once('footer.php');
}
?>