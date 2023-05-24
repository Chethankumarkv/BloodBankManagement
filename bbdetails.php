<?php
session_start();
$_SESSION["tab"] = "VIEW Blood Bank details";

if($_SESSION["login"] != 1)
    echo '<h2>Authentication Error!!!</h2>';
else{
    include_once('adminheader.php');
    
    $sql = "CALL get_bloodbank()";  
    
    
        $result = mysqli_query($con, $sql);  
        ###########contents of div goes here###########

    if ($result->num_rows > 0) {

        echo "<h2>BLOOD BANK DETAILS :</h2><br>";    
        echo "<table>
            <tr><th>BLOOD  bank ID</th>
            <th>Blood Group</th>
            
            <th>Quantity</th>
            <th>LOCATION</th>
            </tr>";

            // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["bb_id"]. "</td><td>" . $row["blood_group"]."</td><td>"  . $row["quantity"]."</td><td>"  . $row["location"]."</td></tr>";
        }
        echo "</table>";
    }
    else {
        echo "<h2> ERROR!!!NO Such Blood Bank exits..!!!</h2><br>";
    }
}
  
?>