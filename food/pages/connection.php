<?php
    $host='localhost';
    $USER='root';
    $pass='';
    $db_name='food';
    $conn= mysqli_connect($host,$USER,$pass,$db_name);
    // Check connection
    if(mysqli_connect_errno())  
    {
        echo " Failed to connect to database " . mysqli_connect_error();;
       
    }
    if(!$conn){
        die("Connection Failed");
    }
?>
