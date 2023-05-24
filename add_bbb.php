<?php
session_start();
$_SESSION["tab"] = "Add_Blood bank";

if($_SESSION["login"] != 1)
    echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
    include_once('adminheader.php');
    $bbid =  $_POST['bb_id']; 
    $group = $_POST['blood_group'];  
    $loc = $_POST['location'];  
     $quant =  $_POST['quantity'];  
      
     $check3 = "SELECT * from blood_bank  where bb_id = '$bbid' and blood_group ='$group'";
  
    $result3 = mysqli_query($con, $check3);
    if (mysqli_num_rows($result3) <= 0) {


        $sql = "insert into blood_bank(bb_id,blood_group,quantity,location) values('$bbid','$group', '$quant','$loc')";
        if ($con->query($sql) === TRUE) {
            $sql = "select bb_id from blood_bank where  bb_id = '$bbid' and  location = '$loc'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            $count = mysqli_num_rows($result);
            $bbid = $row['bb_id'];
        } else
            echo "Error: " . $sql . "<br>" . $con->error;
        ###########contents of div goes here###########
        if ($count == 1) {

            echo 'Your registration is succesful..<br><br>';
            echo 'Blood Bank  Id : ' . $bbid . '<br><br>';
            echo 'location : ' . $loc . '<br><br>';



            echo '<div style ="color:red;">NB:Please keep this Id for future reference!!!';
        }
    }
    else{
        echo "<h2> ERROR!!!This Blood Bank Already exist with same blood group </h2><br>"; 
    }
        ##################################################
    include_once('footer.php');
}
?>