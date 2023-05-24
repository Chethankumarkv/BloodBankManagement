<?php
session_start();
$_SESSION["tab"] = "Add_Receptionalist";

if($_SESSION["login"] != 1)
    echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
    include_once('adminheader.php');
    $name = $_POST['r_name'];  
    $phone = $_POST['contact'];  
     $ID =  $_POST['r_id'];  
     $bbid =  $_POST['bb_id'];  
    
    
    $check3 = "SELECT * from receptionist  where r_id = '$ID' ";
  
    $result3 = mysqli_query($con, $check3);
    if (mysqli_num_rows($result3) <= 0) {
        $sql = "insert into receptionist (r_id,bb_id,r_name,contact) values('$ID', '$bbid','$name', '$phone')";
        if ($con->query($sql) === TRUE) {
            $sql = "select r_id from receptionist where r_name ='$name' and contact = '$phone' and bb_id = '$bbid' and  r_id = '$ID'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            $count = mysqli_num_rows($result);
            $rid = $row['r_id'];
        } else
            echo "Error: " . $sql . "<br>" . $con->error;
        ###########contents of div goes here###########
        if ($count == 1) {
            echo '<h2>' . $name . '</h2><br><br>';
            echo 'Your registration is succesful..<br><br>';
            echo 'Receptionalist Id : ' . $rid . '<br><br>';
            echo 'Name : ' . $name . '<br><br>';
            echo 'Phone Number: ' . $phone . '<br><br>';
            echo 'Blood Bank id : ' . $bbid . '<br><br>';


            echo '<div style ="color:red;">NB:Please keep your Personal Id for future reference!!!';
        }
    }
    else{
        echo "<h2> ERROR!!! receptionist  id  already  exist</h2><br>"; 
    }
        ##################################################
    include_once('footer.php');
}
?>