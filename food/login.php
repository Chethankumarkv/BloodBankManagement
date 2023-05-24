
<?php
session_start();

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
    <link rel="stylesheet" href="css/login.css">


</head>

<?php

 

Include('pages/connection.php');


    if (isset($_POST['submit'])) {


        $email = mysqli_real_escape_string($conn, $_POST['email_id']);
        $pwd = mysqli_real_escape_string($conn, $_POST['Password']);
   
          if (empty($email)){
            echo "<script type='text/javascript'>alert('email required !');</script>";
        header('location:login.php');
          }
          if (empty($pwd)){
            echo "<script type='text/javascript'>alert('password required !');</script>";
            header('location:login.php');
          }

            $select = "SELECT * FROM users WHERE email = '$email' && pwd = '$pwd' ";

            $result = mysqli_query($conn, $select);


            if (mysqli_num_rows($result) != 0) {
                $row = mysqli_fetch_array($result);
                if ($row['email'] == $email && $row['pwd'] == $pwd) {
                    $_SESSION['logged-in'] = true;
                    $_SESSION['EMAIL'] = $email_id;
                    header('location:fruit.php');
                }


            } else {
                $_SESSION['logged-in'] = false;


                echo "<script type='text/javascript'>alert('login failed  ... username & password didnot match!!');</script>";
              
            }



        

    }

;

 ?>



<body>
    <?php include 'nav.php';?>
    <form class="box" action="login.php" method="post">
        <h1>
          Login
        </h1>
        <input type="email" name="email_id" placeholder="Enter Your Email" id="email_id">
        <input type="password" name="Password" placeholder="Enter Your Password" id="password">
        <input type="submit" name="submit" value="Login">
        <h3> Don't have  an account..?</h3>
        <a href="signup.php" target="_self">Sign up</a>
        
    </form>
   
    <script src="bootstrap.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>