<?php
session_start();
$_SESSION["tab"] = "Add_Receptionalist";
if($_SESSION["hlogin"] != 1)
{
	echo '';
header('location:index.php');
}
else{
	include_once('adminheader.php');
?>

	<form name="addrecept" action = "addReceptionalist.php"  method = "POST" class="formback">
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
	<input type = "text" name  = "r_name" class="input" />  
	</p>  

	<p>  
	<label class="lb">Phone Number: </label>  
	<br>
	<input type = "Number" name  = "contact" maxlength=10 class="input" required />  
	</p>  

	<p>  
	<label class="lb">Id: </label>  
	<br>
	<input type = "text" name  = "r_id" class="input" /> 
	</p>  

	<p>
	<label class="lb">Blood Bank Id :  </label>  
	<br>
	<input type = "text" name  = "bb_id" class="input" required/>  
	</p>  
	<p>
	<button class="btn">Register</button>
	</p>
	

	</form>

<?php
	include_once('footer.php');
}
?>