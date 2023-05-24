<?php
session_start();
$_SESSION["tab"] = "Delete_Receptionalist";

if ($_SESSION["login"] != 1)
    echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else {
    include_once('adminheader.php');
    echo '				<form name="Delete_Receptionalist" action = "deleterecpt.php"  method = "POST" class="formback">
	
   <h2 class="head">Enter Blood Bank id</h2>
    <p>  
	<label class="lb">Blood bank ID: </label>  
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