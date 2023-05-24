<?php
session_start();
$_SESSION["tab"] = "Add_Hospital";
if($_SESSION["rlogin"] != 1)
	{
		echo '';
	header('location:index.php');
	}
else{
	include_once('recptheader.php');
?>

	<form name="addhosp" action = "addhosp.php"  method = "POST" class="formback">
	<h2 class="head">New Registration</h2>
	<br>

	<?php
	if(isset($_SESSION["entry_error"])){
		echo "<p class='error'>" .$_SESSION["entry_error"]. "</p>";
		unset($_SESSION["entry_error"]);
	}
	?>
	
    <p>  
        <label class="lb"> Hospital id:</label>  
        <br>
        <input type = "text" name  = "hosp_id" class="input" /> 
    </p>  
    
	
    <p>  
    <label class="lb">Hospital Name: </label>  
    <br>
    <input type = "text" name  = "hosp_name" class="input" />  
    </p>  

	<p>
	<label class="lb">Address:  </label>  
	<br>
	<input type = "text" name  = "address" class="input" required/>  
	</p> 

   

    <p>
	<label class="lb">Phone no:  </label>  
	<br>
	<input type = "Number" name  = "contact_no" class="input" required/>  
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