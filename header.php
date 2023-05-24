<?php      
include('connection.php');

echo '
<!DOCTYPE html>
<html>
<head>
<title>
Blood Bank Management System
</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="header">
<div class ="title">
<img src="res/images/logo.png" height = "45" width="45" align="top">
&nbsp;
BLOOD BANK MANAGEMENT SYSTEM

</div><br>
<a href="logout.php">
<button class="btn logout">
Logout
</button></a>
</div>

<div class="container">
<center>
<ul class="tabsWraper">
<li class="tabs">';

if  ($_SESSION["tab"] == "Home")
	echo'<a href="adminHome.php" class = "active">Home</a>';
else
	echo'<a href="Home.php">Home</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Add_Person")
	echo'<a href="Add_Person.php" class = "active">Add Person</a>';
else
	echo'<a href="Add_Person.php">Add Person</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Search_Person")
	echo'<a href="Search_Person.php" class = "active">Search Person</a>';
else
	echo'<a href="Search_Person.php">Search Person</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "New_Donation")
	echo'<a href="New_Donation.php" class = "active">New Donation</a>';
else
	echo'<a href="New_Donation.php">New Donation</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "New_Receive")
	echo'<a href="New_Receive.php" class = "active">New Receive</a>';
else
	echo'<a href="New_Receive.php">New Receive</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Check_Stock")
	echo'<a href="Check_Stock.php" class = "active">Check Stock</a>';
else
	echo'<a href="Check_Stock.php">Check Stock</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Donation_History")
	echo'<a href="Donation_History.php" class = "active">Donation History</a>';
else
	echo'<a href="Donation_History.php">Donation History</a>';
echo '</li><li class="tabs">';

if  ($_SESSION["tab"] == "Receiving_History")
	echo'<a href="Receiving_History.php" class = "active">Receiving History</a>';
else
	echo'<a href="Receiving_History.php">Receiving History</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Add_User")
	echo'<a href="Add_User.php" class = "active">Add User</a>';
else
	echo'<a href="Add_User.php">Add User</a>';
echo '</li><li class="tabs">';
?>
</ul>
</center>

<div class="contents">