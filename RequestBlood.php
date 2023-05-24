<?php
session_start();
$_SESSION["tab"] = "Receive Blood";

if($_SESSION["hlogin"] != 1)
    echo '<h2>Authentication Error!!!</h2>';
else{
    include_once('hospheader.php');
    $hosp_id =$_SESSION["hosp_id"]; 
    $sql = "select p.p_id,p.p_name,p.blood_group,p.units_needed,hospital.bb_id from hospital ,patient p where hospital.hosp_id = '$hosp_id' and p.hosp_id = hospital.hosp_id ";  
    
    
        $result = mysqli_query($con, $sql);  
        ###########contents of div goes here###########



    
if ($result->num_rows > 0) {
    echo "<h2>Hospitals</h2><br>";    
            echo "<table>
            <tr><th>patient name</th>
            <th>patient Id</th>
            <th>Blood Bank Id</th>
            <th>Blood group</th>
            <th>units needed</th>
            <th>Request Blood</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
            $id = $row["p_id"];
            
        echo "<tr>";
        echo "<td>" . $row["p_name"]. "</td>";
        echo "<td>" . $row["p_id"]. "</td>";
        echo "<td>" . $row["bb_id"]."</td>";
        echo "<td>" . $row["blood_group"]."</td>";
       echo"<td>" . $row["units_needed"]. "</td>";
        
        echo'<td><a href="request.php?id='.$id.'"><button class="btn delete">
       REQUEST
         </button></a></td>';

        echo "</tr>";
        
       
        
    }
    echo "</table> <br><br>";
} else
        echo "<h2>No record found in the specified intervel!</h2>";
include_once('footer.php');
}
  
?>