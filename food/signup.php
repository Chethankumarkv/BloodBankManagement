
<?php
 Include('pages/connection.php');
  if(isset($_POST['submit'])){
    $first_name = mysqli_real_escape_string($conn, $_POST['firstName']);
    
    $last_name= mysqli_real_escape_string($conn, $_POST['lastName']);
    
    $email = mysqli_real_escape_string($conn, $_POST['email_id']);
     $pwd = mysqli_real_escape_string($conn, $_POST['password']);
     if (empty( $first_name)){
        echo "<script type='text/javascript'>alert('firstname required !');</script>";
    header('location:signup.php');
      }
      if (empty($last_name)){
        echo "<script type='text/javascript'>alert('lastname  required !');</script>";
        header('location:signup.php');
      }

     if (empty($email)){
        echo "<script type='text/javascript'>alert('email required !');</script>";
    header('location:signup.php');
      }
      if (empty($pwd)){
        echo "<script type='text/javascript'>alert('password required !');</script>";
        header('location:signup.php');
      }

    $select = "SELECT * FROM users WHERE email = '$email' && pwd = '$pwd' ";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) !=  0)
    {
        
        echo "<script type='text/javascript'>alert('you are already have an account please login');</script>";
           exit;
    }
    else{
        $insert = "INSERT INTO users(firstName,lastName,email,pwd) values ('$first_name','$last_name','$email','$pwd') ";
        mysqli_query($conn, $insert);
        header("location:login.php");
    }

}
;

 

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodYaga</title>
    <link rel="stylesheet" href="bootstrap.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/signin.css">


</head>

<body>
     <?php include 'nav.php';?>
   

    <form class="box" action="signup.php" method="POST">
        <h1>
            Sign up
        </h1>
        <?php
      
        
        ?>
        <input type="text" name="firstName" placeholder="Enter Your First name" id="firstName" Required>
        <input type="text" name="lastName" placeholder="Enter Your Last name" id="lastName" Required>
        <input type="email" name="email_id" placeholder="Enter Your email" id="email_id"  Required>
        <input type="password" name="password" placeholder="Enter Your Password" id="password" Required>
        <input type="submit" name="submit" value="submit">
        <h3> already have an account..?</h3>
        <a href="login.php" target="_self">Login in </a>
        
    </form>
   
    <script src="bootstrap.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>


</html>