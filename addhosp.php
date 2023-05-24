<?php
session_start();
$_SESSION["tab"] = "Add_Hospital";

if($_SESSION["rlogin"] != 1)
    echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
    include_once('recptheader.php');
    $name = $_POST['hosp_name'];  
    $phone = $_POST['contact_no'];  
     $ID =  $_POST['hosp_id'];  
     $bbid =  $_SESSION['bb_id'];
    $Address = $_POST['address'];
    $check2 = "SELECT * from blood_bank where bb_id = '$bbid' ";
    $check3 = "SELECT * from hospital  where hosp_id = '$ID' ";
    $result2 = mysqli_query($con, $check2);
    $result3 = mysqli_query($con, $check3);
    if (mysqli_num_rows($result2) > 0 && mysqli_num_rows($result3) <= 0) {

        $sql = "insert into hospital (hosp_id,bb_id,hosp_name,address,contact_no) values('$ID', '$bbid','$name','$Address' ,'$phone')";
        if ($con->query($sql) === TRUE) {
            $sql = "select hosp_id from hospital where hosp_name ='$name' and contact_no = '$phone' and bb_id = '$bbid' and  hosp_id = '$ID' and address = '$Address' ";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            $count = mysqli_num_rows($result);
            $hid = $row['hosp_id'];
        } else
            echo "Error: " . $sql . "<br>" . $con->error;
        ###########contents of div goes here###########
        if ($count == 1) {
            echo '<h2>' . $name . '</h2><br><br>';
            echo 'Your registration is succesful..<br><br>';
            echo 'Hospital Id : ' . $hid . '<br><br>';
            echo 'Hospital Name : ' . $name . '<br><br>';
            echo 'Contact Number: ' . $phone . '<br><br>';
            echo 'Blood Bank id : ' . $bbid . '<br><br>';


            echo '<div style ="color:red;">NB:Please keep  this Personal Id for future reference!!!';
        }
    }
    else{ 
         if(mysqli_num_rows($result2) < 0 )
              echo "<h2> ERROR!!! Blood bank  doesn't exist</h2><br>"; 
         else 
             echo "<h2> ERROR!!! hospital  already  exist</h2><br>"; 
    }
        ##################################################
    include_once('footer.php');
}
?>