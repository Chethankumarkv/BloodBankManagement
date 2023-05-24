<?php
session_start();
$_SESSION["tab"] = "Receive Blood";

if($_SESSION["hlogin"] != 1)
    echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else {
     include_once('hospheader.php');
    if (isset($_GET['id'])) {
        $p_id = $_GET['id'];

        include 'connection.php';


        $units = "SELECT p.units_needed,p.blood_group from blood_bank b ,hospital h , patient p where p.hosp_id=h.hosp_id and h.bb_id = b.bb_id and p.blood_group =b.blood_group and p.p_id='$p_id' and b.quantity >= p.units_needed";
        $quant = "SELECT b.quantity from blood_bank b ,patient p ,hospital h where b.bb_id =h.bb_id and h.hosp_id = p.hosp_id and p.p_id='$p_id' and b.blood_group = p.blood_group";
        $qry1 = mysqli_query($con, $units);
        
        $qry2 = mysqli_query($con, $quant);
       
        if(mysqli_num_rows($qry1)> 0){
            while ($row1 = $qry1->fetch_assoc()) {
                $row2 = $qry2->fetch_assoc();
               
                $p_quantity = $row1['units_needed'];
                $p_blood = $row1['blood_group'];

                $avail_quantity = $row2['quantity'];
                
                $update = "UPDATE blood_bank b ,patient p, hospital h set quantity = '$avail_quantity' - '$p_quantity' where  b.bb_id =h.bb_id and h.hosp_id = p.hosp_id and p.p_id='$p_id' and b.blood_group = p.blood_group and quantity >= '$p_quantity' ";
                // $result = mysqli_query($con, $update);
               
                if ($result = mysqli_query($con, $update) ) {
                   
                    $update2 = "UPDATE blood_bank b ,patient p, hospital h set units_needed = 0 where  b.bb_id =h.bb_id and h.hosp_id = p.hosp_id and p.p_id='$p_id' and b.blood_group = p.blood_group and quantity >= '$p_quantity'";
                    if ($result2 = mysqli_query($con, $update2)) {
                        echo 'Blood Received by the Patient succesfully..<br><br>';
                        echo ' Id : ' . $p_id . '<br><br>';
                        echo 'Received Blood: ' . $p_quantity . ' units<br><br>';

                        echo 'Blood Group : ' . $p_blood . '<br><br>';




                        echo '<div style ="color:red;">NB:Please keep details for future reference!!!';
                    }else{
                        
                    }
                }
            }

        }
        else {
            echo "<h2> ERROR!!! This blood group is not available in Registered Blood Bank or  Required units greater than the stock</h2><br>"; 
        }
    }
     include_once('footer.php');
}
?>