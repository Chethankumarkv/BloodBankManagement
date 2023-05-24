<?php      
session_start();
include('connection.php'); 

// checks whether the submit is set or not
if(isset($_POST['submit'])){

    // prevents little sql injection possibilities(not prevented fully)
    $username = stripcslashes($_POST['r_name']);  
    $username = mysqli_real_escape_string($con, $username);  
    $ID = stripcslashes($_POST['r_id']);  
    $ID = mysqli_real_escape_string($con, $ID);  

   
    if($username === '' or $ID === ''){
        $_SESSION["login_error"] = 'username or ID cannot be empty';
        header('Location: index.php');
    }

    else{
        // query processed to check whether the user is present or not
        $sql = "select * from receptionist where r_name = '$username' and r_id = '$ID'";  
        $result = $con->query($sql);

        // user is present
        if($result->num_rows > 0){  
            $row = $result->fetch_assoc();
            $_SESSION["rlogin"] = 1;
            $_SESSION["username"] = $row["r_name"];
         

            $_SESSION['bb_id'] = $row["bb_id"];
            $_SESSION["rid"] = $row[$ID];
            header('Location: recptHome.php');
        }  

        // user is not present
        else{
            $_SESSION["rlogin"] = 0;
            $_SESSION["login_error"] = 'invalid login credentials';
            header('Location: receptloginpage.php');
        }
    }
} 

// submit is not set.directed to homepage
else
    header('Location: index.php');
?>