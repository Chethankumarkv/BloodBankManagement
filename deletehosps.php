<?php
session_start();
$_SESSION["tab"] = "Delete Hospital";

if($_SESSION["rlogin"] != 1)
    echo '<h2>Authentication Error!!!</h2>';
else{
    include_once('recptheader.php');
    $bb_id = $_SESSION['bb_id'];  
    $sql = "select * from hospital where hospital.bb_id = '$bb_id'";  
    
    
        $result = mysqli_query($con, $sql);  
        ###########contents of div goes here###########



    
if ($result->num_rows > 0) {
    echo "<h2>Hospitals</h2><br>";    
            echo "<table>
            <tr><th>Hospital name</th>
            <th>Hospital Id</th>
            <th>Blood Bank Id</th>
            <th>Address</th>
            <th>contact</th>
            <th>Delete</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
            $id = $row["hosp_id"];
        echo "<tr>";
        echo "<td>" . $row["hosp_name"]. "</td>";
        echo "<td>" . $row["hosp_id"]. "</td>";
        echo "<td>" . $row["bb_id"]."</td>";
       echo"<td>" . $row["address"]. "</td>";
        echo"<td>" . $row["contact_no"]. "</td>";
        echo'<td><a href="deletehospital.php?id='.$id.'"><button class="btn delete">
       DELETE
        </button></a></td>';

        echo "</tr>";
        
       
        
    }
    echo "</table> <br><br>";
} else
        echo "<h2>No record found in the specified intervel!</h2>";
include_once('footer.php');
}
  
?>