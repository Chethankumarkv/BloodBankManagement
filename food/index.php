<?php

include('pages/connection.php');
if (isset($_POST['submit'])) {
  $user_email = mysqli_real_escape_string($conn, $_POST['email']);

  $content = mysqli_real_escape_string($conn, $_POST['content']);



  $select = "SELECT * FROM mailed WHERE email = '$user_email' &&  content= '$content' ";
  $result = mysqli_query($conn, $select);
  if (mysqli_num_rows($result) == 0) {
    $insert = "INSERT INTO mailed(email,content) values ('$user_email','$content') ";
    mysqli_query($conn, $insert);



    echo "<script type='text/javascript'>alert('your message has been recieved we will reply you as soon as possible ');</script>";

  } 
else{

    echo "<script type='text/javascript'>alert('we already recieved the same question from you ');</script>";
   
    
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
  <title>FOOD</title>

  <link rel="stylesheet" href="bootstrap.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/home.css">

</head>

<body>
  <?php include 'nav.php'; ?>

  <div class="titleHeader">
    <h1>" A Healthy Life Requires Healthy Food...❤️" </h1>
    <h3>-Roger Williams</h3>
  </div>
  <div class="welcome">
    <p> Welcome to the FoodYaga's Food Preservation web page. We are providing methods and ideas for you to preserve
      your food and keep you healthy ..... pls Dont waste food your one time waste may be the day food for some others
      ... </p>
  </div>


  <div class="how">
    <h1>How it works??</h1>
  </div>
  <div class="cont">


    <div class="card1 card">
      <a href="#"><img class="img" src="images/login.png" alt="log"></a>
      <div class="heads">
        <h3>Sign in and choose from our menu.</h3>
      </div>
    </div>
    <div class="card2 card">
      <a href="#"><img class="img" src="images/help2.png" alt="foodlogo"></a>
      <div class="heads">
        <h3>We will Help you..!!</h3>
      </div>
    </div>
    <div class="card3 card">
      <a href="#"><img class="img" src="images/food2.png" alt=""></a>
      <div class="heads">
        <h3>Preserve Your food..!!</h3>
      </div>
    </div>

  </div>
  <!-- Trigger the modal with a button -->
  <div class="btn"> <a href="signup.php">
      <button class="bt">Subscribe</button>
    </a></div>






  <script src="bootstrap.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="bootstrap.bundle.js"></script>
</body>
<footer class="foot">
  <div class="main-content">
    <div class="left box">
      <h2>About us </h2>
      <div class="content">
        we are Engineering student at canaa Engineering college . we want to create awareness among the people about
        food . please dont waste food instead you can preserve it by using the preservation methods that we specifies in
        our website
      </div>
      <div class="social">
        <a href="https://www.facebook.com/chethan.poojari.1048" target="_blank"> <span
            class="fa-brands fa-facebook"></span>
        </a>
        <a href="https://www.instagram.com/invites/contact/?i=2nrhg0l7v8th&utm_content=3wl3vzt" target="_blank"> <span
            class="fa-brands fa-instagram"></span> </a>
        <a href="#" target="_blank"> <span class="fa-brands fa-twitter"></span> </a>
        <a href="#"><span class="fa-brands fa-youtube"></span></a>
      </div>



    </div>
    <div class="center box">
      <h2>Address </h2>
      <div class="content">
        <div class="place">
          <span class="fa-sharp fa-solid fa-location-dot"> </span>
          <span class="text"> Canara Engineering college Managlore Benjanapadavu Bantwal 577418</span>
        </div>
        <div class="phone">
          <span class="fa-solid fa-phone"> </span>
          <span class="text">

          </span>
        </div>
        <div class="email">
          <span class="fa-solid fa-envelope"> </span>
          <span class="text">poojarichethan2@gmail.com </span>

        </div>
      </div>

    </div>
    <div class="right box">
      
      <div class="content">
        <form method="post">
          <div class="text"> Email *</div>
          <input type="email" name="email" class="email_user" placeholder="Enter Your Email" id="email_id">
          <div class="text">Message *</div>
          <textarea id="message" name="content" cols="35" rows="3" required placeholder="enter your query"></textarea>
          <input type="submit" name="submit" value="submit">
        </form>

      </div>

    </div>


    <script src="bootstrap.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="bootstrap.bundle.js"></script>
</footer>

</html>