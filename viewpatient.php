

<?php
session_start();
$_SESSION["tab"] = "view patients";

if($_SESSION["hlogin"] != 1)
    echo '<h2>Authentication Error!!!</h2>';
else{
    include_once('hospheader.php');
    $h_id = $_SESSION['hosp_id'];  
    $sql = "select * from patient where hosp_id='$h_id'";  
    
    
        $result = mysqli_query($con, $sql);  
        ###########contents of div goes here###########
        echo "<h2>OUR REGISTERED PATIENTS</h2><br>";            

            if ($result->num_rows > 0) {
                echo "<table>
                <tr>
                <th>patient  ID</th>
                
                
                <th>patient  Name</th>
              
                <th>Blood group </th>
                <th>contact </th>
                </tr>";
                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                    <td>" . $row["p_id"]. "</td>
                   
                    <td>" . $row["p_name"]."</td>
                    <td>" . $row["blood_group"]. "</td>
                    
                    
                    <td>" . $row["contact"]. "</td>
                    </tr>";
                }
                echo "</table> <br><br>";
            }
            else
                echo "No record found in the specified intervel";
            include_once('footer.php');
   
}
  
?>