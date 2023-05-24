<?php
session_start();
$_SESSION["tab"] = "Check_Stock";

if($_SESSION["hlogin"] != 1)
    echo '<h2>Authentication Error!!!</h2>';
else{
    include_once('hospheader.php');
    $bb_id = $_POST['bb_id'];  
    $sql = "select * from blood_bank where blood_bank.bb_id = '$bb_id'";  
    
    
        $result = mysqli_query($con, $sql);  
        ###########contents of div goes here###########

    if ($result->num_rows > 0) {

        echo "<h2>BLOOD BANK </h2><br>";    
        echo "<table><tr><th>Blood Group</th><th>Units of blood</th></tr>";

            // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["blood_group"]. "</td><td>" . $row["quantity"]."</td></tr>";
        }
        echo "</table>";
    }else {
        echo "<h2> ERROR!!!NO Such Blood Bank exits..!!!</h2><br>";
    }
}
  
?>