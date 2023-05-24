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
<li class="tabs" >';

if  ($_SESSION["tab"] == "Home")
	echo'<a href="recptHome.php" class = "active">Home</a>';
else
	echo'<a href="recptHome.php">Home</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Add_Donar")
	echo'<a href="Add_Donar.php" class = "active">Add Donar</a>';
else
	echo'<a href="Add_Donar.php">Add Donar</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "New_Donation")
	echo'<a href="New_Donation.php" class = "active">New Donation</a>';
else
	echo'<a href="New_Donation.php">New Donation</a>';
echo '</li><li class="tabs">';

if  ($_SESSION["tab"] == "Donation History")
	echo'<a href="Donationhistory.php" class = "active">Donation History</a>';
else
	echo'<a href="Donationhistory.php">Donation History</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Add_Hospital")
	echo'<a href="Add_Hospital.php" class = "active">Add Hospital</a>';
else
	echo'<a href="Add_Hospital.php">Add_Hospital</a>';
echo '</li><li class="tabs">';

if  ($_SESSION["tab"] == "view Hospital")
	echo'<a href="viewhosp.php" class = "active">view hospital</a>';
else
	echo'<a href="viewhosp.php">view hospital</a>';
echo '</li><li class="tabs">';




if  ($_SESSION["tab"] == "Check_Stock")
	echo'<a href="checkStock.php" class = "active">Check Stock</a>';
else
	echo'<a href="checkStock.php">Check Stock</a>';
echo '</li><li class="tabs">';
if  ($_SESSION["tab"] == "Delete Hospital")
	echo'<a href="deletehosps.php" class = "active">Delete Hospital</a>';
else
	echo'<a href="deletehosps.php">Delete Hospital</a>';
echo '</li><li class="tabs">';


// if  ($_SESSION["tab"] == "Receiving_History")
// 	echo'<a href="Receiving_History.php" class = "active">Receiving History</a>';
// else
// 	echo'<a href="Receiving_History.php">Receiving History</a>';
// echo '</li><li class="tabs">';



?>
</ul>
</center>

<div class="contents">