<?php
session_start();
$_SESSION["tab"] = "Add Patient";

if($_SESSION["hlogin"] != 1)
    echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
    include_once('hospheader.php');
    $name = $_POST['p_name'];  
    
    $p_id = $_POST['p_id'];
    $hosp_id = $_SESSION['hosp_id'];
    
    $blood_group = $_POST['blood_group'];
    $phone = $_POST['contact'];  
    $units = $_POST['units_needed'];  
    $check3 = "SELECT * from patient  where p_id = '$p_id' ";
  
    $result3 = mysqli_query($con, $check3);
    if (mysqli_num_rows($result3) <= 0) {
        $sql = "insert into patient(p_id,hosp_id,p_name,  blood_group,contact,units_needed) values( '$p_id','$hosp_id','$name','$blood_group','$phone','$units')";
        if ($con->query($sql) === TRUE) {
            $sql = "select p_id from patient where p_name ='$name' and contact = '$phone'  and hosp_id = '$hosp_id'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            $count = mysqli_num_rows($result);
            $pid = $row['p_id'];
        } else
            echo "Error: " . $sql . "<br>" . $con->error;
        ###########contents of div goes here###########
        if ($count == 1) {

            echo 'Patient registration is succesful..<br><br>';
            echo 'Patient  Id : ' . $pid . '<br><br>';
            echo 'Name : ' . $name . '<br><br>';
            echo 'Phone Number: ' . $phone . '<br><br>';

            echo 'Blood Group : ' . $blood_group . '<br><br>';

            echo 'units of blood Needed : ' . $units . '<br><br>';


            echo '<div style ="color:red;">NB:Please keep this patient  Id for future reference!!!';
        }
    }
    else{
        echo "<h2> ERROR!!! patients   id  already  exist</h2><br>"; 
    }
        ##################################################
    include_once('footer.php');
}
?>