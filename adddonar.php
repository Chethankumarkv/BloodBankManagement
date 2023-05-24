<?php
session_start();
$_SESSION["tab"] = "Add_Donar";

if($_SESSION["rlogin"] != 1)
    echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
    include_once('recptheader.php');
    $name = $_POST['d_name'];  
    $phone = $_POST['contact'];  
    $d_id = $_POST['d_id'];
    $r_id = $_POST['r_id'];
  
    $dob = $_POST['dob'];
    $blood_group = $_POST['blood_group'];
    $address = $_POST['address'];
    $med_issues = $_POST['medical_issue'];
    $check2 = "SELECT * from donor where r_id = '$r_id'  ";
    $check3  = "SELECT d_id from donor where d_id = '$d_id' ";
    
    $result2 = mysqli_query($con, $check2);
    $result3 = mysqli_query($con, $check3);
  
    if (mysqli_num_rows($result2) <= 0) {
        echo "<h2> ERROR!!! Receptionalist id doesnt exists...!!! </h2><br>";
    }else if (mysqli_num_rows($result3) > 0){
        echo "<h2> ERROR!!!donor   id already exists...!!! </h2><br>";
    }

  else {
   
        $sql = "insert into donor (d_id,r_id,d_name,address, contact, blood_group, dob,medical_issue) values( '$d_id','$r_id','$name','$address ','$phone','$blood_group', '$dob' , '$med_issues')";  
        if ($con->query($sql) === TRUE) {
            $sql = "select d_id from donor where d_name ='$name' and contact = '$phone'  and address = '$address'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result);  
            $count = mysqli_num_rows($result);  
            $pid = $row['d_id'];  
        }
      else {
            
            echo "Error: " . $sql . "<br>" . $con->error;
            ###########contents of div goes here###########
        }
        if($count == 1){  
            echo'<h2>' .$name .'</h2><br><br>';
            echo 'Your registration is succesfully..<br><br>';
            echo'Donor Id : '.$pid .'<br><br>';
            echo'Name : '.$name .'<br><br>';
            echo 'Phone Number: ' .$phone .'<br><br>';
            echo 'DOB : ' .$dob .'<br><br>';
            echo 'Blood Group : ' .$blood_group .'<br><br>';
    
           
            echo 'Medical Issues :'.$med_issues .'<br><br>';
            if ($med_issues === "")
                echo 'None<br><br>';
            echo '<div style ="color:red;">NB:Please keep your Personal Id for future reference!!!';
        
     }

  
}

   
        ##################################################
    include_once('footer.php');
}
?>