<?php
session_start();
$_SESSION["tab"] = "Delete Patient";

if($_SESSION["hlogin"] != 1)
    echo '<h2>Authentication Error!!!</h2>';
else{
    include_once('hospheader.php');
    $h_id = $_SESSION["hosp_id"];
    $sql = "select * from patient  where patient.hosp_id = '$h_id'";  
    
    
        $result = mysqli_query($con, $sql);  
        ###########contents of div goes here###########



    
if ($result->num_rows > 0) {
    echo "<h2>Patients</h2><br>";    
            echo "<table>
            <tr><th>Patient name</th>
            <th>patient Id</th>
            <th>Hospital Id</th>
            <th>Blood Group</th>
            <th>contact</th>
            <th>Delete</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
            $id = $row["p_id"];
        echo "<tr>";
        echo "<td>" . $row["p_name"]. "</td>";
        echo "<td>" . $row["p_id"]. "</td>";
        echo "<td>" . $row["hosp_id"]."</td>";
       echo"<td>" . $row["blood_group"]. "</td>";
        echo"<td>" . $row["contact"]. "</td>";
        echo'<td><a href="delete.php?id='.$id.'"><button class="btn delete">
        DELETE
        </button></a></td>';

        echo "</tr>";
        
       
        
    }
    echo "</table> <br><br>";
} else
        echo "<h2>No record found in the DataBase!!!</h2>";
include_once('footer.php');
}
  
?>