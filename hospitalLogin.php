<?php      
session_start();
include('connection.php'); 

// checks whether the submit is set or not
if(isset($_POST['submit'])){

    // prevents little sql injection possibilities(not prevented fully)
    $hospname = stripcslashes($_POST['hosp_name']);  
    $hospname = mysqli_real_escape_string($con, $hospname);  
    $ID = stripcslashes($_POST['hosp_id']);  
    $ID = mysqli_real_escape_string($con, $ID);  

   
    if($hospname === '' or $ID === ''){
        $_SESSION["login_error"] = 'Hospital name  or ID cannot be empty';
        header('Location: index.php');
    }

    else{
        // query processed to check whether the user is present or not
        $sql = "select * from hospital where hosp_name = '$hospname' and hosp_id = '$ID'";  
        $result = $con->query($sql);

        // user is present
        if($result->num_rows > 0){  
            $row = $result->fetch_assoc();
            $_SESSION["hlogin"] = 1;
           
            $_SESSION["hosp_id"] = $row["hosp_id"];
            $_SESSION["hosp_name"] = $row["hosp_name"];
            header('Location: hospHome.php');
        }  

        // user is not present
        else{
            $_SESSION["hlogin"] = 0;
            $_SESSION["login_error"] = 'invalid login credentials';
            header('Location: hospitalloginpage.php');
        }
    }
} 

// submit is not set.directed to homepage
else
    header('Location: index.php');
?>