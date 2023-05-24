<?php
session_start();
$_SESSION["tab"] = "Donation History";

if($_SESSION["rlogin"] != 1)
    echo '<h2>Authentication Error!!!</h2>';
else{
    include_once('recptheader.php');
    // $bb_id = $_POST['bb_id']; 
    
    $sql = "select * from blood ";  
    $result = mysqli_query($con, $sql);  
        ###########contents of div goes here###########

    echo "<h2>Donation History</h2><br>";            

    if ($result->num_rows > 0) {
        echo "<table>
        <tr>
        <th>Blood ID</th>
        <th>Donar Id</th>
        <th>Blood bank ID</th>
        <th>Blood Group</th>
        
        <th>Units of Blood</th>
        </tr>";
        while($row = $result->fetch_assoc()) {
            echo "
            <tr>
            <td>" . $row["b_id"]. "</td>
            <td>" . $row["d_id"]."</td>
            <td>" .$row["bb_id"] ."</td>
            <td>" . $row["blood_group"]. "</td>
            
            <td>" . $row["units"]. "</td>
            </tr>";
        }
        echo "</table> <br><br>";
    }
    else
        echo "No record found in the specified intervel";
    include_once('footer.php');
}
?>  