<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'connection.php';
   

$qry="delete from patient where p_id='$id'";
$result=mysqli_query($con,$qry);

if($result){
    echo"DELETED";
    header('Location:deletepatients.php');
}else{
    echo"ERROR!!";
}

}
?>