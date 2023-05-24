<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'connection.php';
   

$qry="delete from receptionist where r_id='$id'";
$result=mysqli_query($con,$qry);

if($result){
    echo"DELETED";
    header('Location:Delete_Receptionalist.php');
}else{
    echo"ERROR!!";
}

}
?>