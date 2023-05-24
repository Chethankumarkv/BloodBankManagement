<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'connection.php';
   

$qry="delete from hospital where hosp_id='$id'";
$result=mysqli_query($con,$qry);

if($result){
    echo"DELETED";
    header('Location:deletehosps.php');
}else{
    echo"ERROR!!";
}

}
?>