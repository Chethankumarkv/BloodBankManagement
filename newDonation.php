<?php
session_start();
$_SESSION["tab"] = "New Donation";

if($_SESSION["rlogin"] != 1)
    echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
    include_once('recptheader.php'); 
    $b_id = $_POST['b_id'];
    $pid = $_POST['d_id'];  
   
    $bb_id = $_SESSION['bb_id'];
    $group =$_POST['blood_group'];
    $units = $_POST['units']; 
    // date_default_timezone_set("Asia/Calcutta"); 
    // $date = date('y-m-d');
    // $time = date('h:i');
    $check1 = "SELECT * from donor where d_id='$pid'";
    $result = mysqli_query($con, $check1);
    while ($row1 = $result->fetch_assoc()) {
        $d_blood_group = $row1['blood_group'];
        if($d_blood_group==$group){
            break;
        }
    }
        $check2 = "SELECT * from blood_bank where bb_id = '$bb_id' ";
        $check3 = "SELECT * from blood  where b_id = '$b_id' ";
        $result2 = mysqli_query($con, $check2);
        $result3 = mysqli_query($con, $check3);

        if (mysqli_num_rows($result2) > 0 && mysqli_num_rows($result3) <= 0 ) {

            if ($group == $d_blood_group) {
                $sql_1 = "insert into blood (b_id, bb_id, d_id,blood_group,units) values('$b_id', '$bb_id','$pid','$group','$units')";
                $sql_2 = "update  blood_bank SET quantity = quantity + '$units' where blood_bank.blood_group = (select b.blood_group FROM blood b where b_id = '$b_id')";

                if (($con->query($sql_1) === TRUE) and ($con->query($sql_2) === TRUE)) {
                    ###########contents of div goes here###########
                    echo '<h1>your donation is succesfull...🩸❤️<h1>';
                    ###############################################
                } else {
                    echo "Error: " . $sql . "<br>" . $con->error;
                }
            } else {
                echo "<h2> ERROR!!! Donor Blood is not matching </h2><br>";
            }
        } else {
            if(mysqli_num_rows($result2) <=0 )
            echo "<h2> ERROR!!! Blood bank doesn't exist</h2><br>";
            else
               echo "<h2> ERROR!!! Blood id already  exist</h2><br>";

        }


    
    
    include_once('footer.php');
}
?>