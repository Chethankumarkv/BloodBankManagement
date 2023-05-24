<?php
session_start();
$_SESSION["tab"] = "Delete_Receptionalist";

if($_SESSION["login"] != 1)
    echo '<h2>Authentication Error!!!</h2>';
else{
    include_once('adminheader.php');
    $bb_id = $_POST['bb_id']; 
    $sql = "select * from receptionist where bb_id='$bb_id'  ";  
    
    
        $result = mysqli_query($con, $sql);  
        ###########contents of div goes here###########



    
if ($result->num_rows > 0) {
        echo '<h2> list of Receptionalist</h2><br><br>';
            echo "<table>
            <tr>
            <th>receptionist Id</th>
            <th>Blood Bank Id</th>
            
            <th>Name</th>
            <th>contact</th>
            <th>Delete</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
            $id = $row["r_id"];
        echo "<tr>";
       
        echo "<td>" . $row["r_id"]."</td>";
        echo "<td>" . $row["bb_id"]."</td>";
        echo"<td>" . $row["r_name"]. "</td>";
       echo"<td>" . $row["contact"]. "</td>";
        
        echo'<td><a href="deleterecpts.php?id='.$id.'"><button class="btn delete">
        DELETE
        </button></a></td>';

        echo "</tr>";
        
       
        
    }
    echo "</table> <br><br>";
} else
        echo "<h2>No Receptionalist in this Blood Bank</h2>";
include_once('footer.php');
}
  
?>