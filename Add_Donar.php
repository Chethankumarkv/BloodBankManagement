<?php
session_start();
$_SESSION["tab"] = "Add_Donar";
if($_SESSION["rlogin"] != 1)
{
	echo '';
	header('location:index.php');

}
	
else{
	include_once('recptheader.php');
?>

	<form name="addDonar" action = "adddonar.php"  method = "POST" class="formback">
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
	<input type = "text" name  = "d_name" class="input" />  
	</p>  

	<p>  
	<label class="lb">Phone Number: </label>  
	<br>
	<input type = "Number" name  = "contact" maxlength="10"   class="input" required />  
	</p>  

	

	<p>
	<label class="lb">Date of birth: </label>  
	<br>
	<input type = "date" name  = "dob" class="input" required/>  
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
	<label class="lb">Address:</label><br>
	<input type = "text" name  = "address" class="input" required/>  
	</p>

    <p>
	<label class="lb">Donor_id</label>
	<br>
	
	<input type = "text" name  = "d_id" class="input" required/>

	</p>
    <p>
	<label class="lb">Receptionalist id</label>
	<br>
    <input type = "text" name = "r_id" class="input" required/>

	</p>

    <p>
	<label class="lb">Medical Issues(if any):</label>
	<br>
	<textarea rows="5" cols="30" name="medical_issue" class="input area"></textarea>

	</p>
	<p>
	<button class="btn">Register</button>
	</p>
	</form>

<?php
	include_once('footer.php');
}
?>