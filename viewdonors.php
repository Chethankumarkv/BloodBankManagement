

<?php
session_start();
$_SESSION["tab"] = "view Donor";

if($_SESSION["rlogin"] != 1)
    echo '<h2>Authentication Error!!!</h2>';
else{
    include_once('recptheader.php');
    $r_id = $_POST['r_id'];  
    $sql = "select distinct d.d_id,d.d_name,d.address,d.contact,d.blood_group from donor d  ,receptionist r  where d.r_id = '$r_id' and r.r_id=d.r_id";  
    
    
        $result = mysqli_query($con, $sql);  
        ###########contents of div goes here###########
        echo "<h2>OUR REGISTERED DONORS</h2><br>";            

            if ($result->num_rows > 0) {
                echo "<table>
                <tr>
                <th>Donor ID</th>
                
                
                <th>Donor Name</th>
                <th>Address</th>
                
                <th>contact </th>
                <th>Blood group </th>
                </tr>";
                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                    <td>" . $row["d_id"]. "</td>
                   
                    <td>" . $row["d_name"]."</td>
                    <td>" . $row["address"]. "</td>
                    
                    <td>" . $row["contact"]. "</td>
                    <td>" . $row["blood_group"]. "</td>
                    </tr>";
                }
                echo "</table> <br><br>";
            }
            else
                echo "No record found in the specified intervel";
            include_once('footer.php');
   
}
  
?>