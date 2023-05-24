<?php
session_start();
$_SESSION["tab"] = "Add_Blood bank";
if($_SESSION["login"] != 1)
	echo '<h2>Access denied!!!</h2>';
else{
	include_once('adminheader.php');
?>

	<form name="addbb" action = "add_bbb.php"  method = "POST" class="formback">
	<h2 class="head">New Registration</h2>
	<br>

	<?php
	if(isset($_SESSION["entry_error"])){
		echo "<p class='error'>" .$_SESSION["entry_error"]. "</p>";
		unset($_SESSION["entry_error"]);
	}
	?>
	
    <p>  
        <label class="lb"> Blood Bank ID:</label>  
        <br>
        <input type = "text" name  = "bb_id" class="input" /> 
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
	<label class="lb">Location:  </label>  
	<br>
	<input type = "text" name  = "location" class="input" required/>  
	</p> 

	<p>
	<label class="lb">Quantity:  </label>  
	<br>
	<input type = "Number" name  = "quantity" class="input" required/>  
	</p> 

   

    

    <p>
	

	<p>
	<button class="btn">Register</button>
	</p>
	

	</form>

<?php
	include_once('footer.php');
}
?>