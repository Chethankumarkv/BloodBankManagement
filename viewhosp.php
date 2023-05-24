 

<?php
session_start();
$_SESSION["tab"] = "view Hospital";

if($_SESSION["rlogin"] != 1)
    echo '<h2>Authentication Error!!!</h2>';
else{
    include_once('recptheader.php');
    $bb_id = $_SESSION['bb_id'];  
    $sql = "select * from hospital  where bb_id = '$bb_id'";  
    
    
        $result = mysqli_query($con, $sql);  
        ###########contents of div goes here###########
        echo "<h2>OUR REGISTERED HOSPITALS</h2><br>";            

            if ($result->num_rows > 0) {
                echo "<table>
                <tr>
                <th>Hospital ID</th>
                
                
                <th>Hospital Name</th>
                <th>Address</th>
                
                <th>contact </th>
                </tr>";
                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                    <td>" . $row["hosp_id"]. "</td>
                   
                    <td>" . $row["hosp_name"]."</td>
                    <td>" . $row["address"]. "</td>
                    
                    <td>" . $row["contact_no"]. "</td>
                    </tr>";
                }
                echo "</table> <br><br>";
            }
            else
                echo "No record found in the specified intervel";
            include_once('footer.php');
   
}
  
?>