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
	echo'<a href="hospHome.php" class = "active">Home</a>';
else
	echo'<a href="hospHome.php">Home</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Add_Patient")
	echo'<a href="Add_Patient.php" class = "active">Add Patient</a>';
else
	echo'<a href="Add_Patient.php">Add Patient</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Delete Patient")
	echo'<a href="deletepatients.php" class = "active">Delete Patient</a>';
else
	echo'<a href="deletepatients.php">Delete Patient</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Receive  Blood")
	echo'<a href="RequestBlood.php" class = "active">Receive Blood</a>';
else
	echo'<a href="RequestBlood.php">Receive Blood</a>';
echo '</li><li class="tabs">';





if  ($_SESSION["tab"] == "Check_Stock")
	echo'<a href="Hcheck_Stock.php" class = "active">Check Stock</a>';
else
	echo'<a href="HCheck_Stock.php">Check Stock</a>';
echo '</li><li class="tabs">';

if  ($_SESSION["tab"] == "View Patients")
	echo'<a href="viewpatient.php" class = "active">View Patients</a>';
else
	echo'<a href="viewpatient.php">View Patients</a>';
echo '</li><li class="tabs">';

if  ($_SESSION["tab"] == "View deleted patients")
	echo'<a href="viewdeletepatients.php" class = "active">View deleted patients</a>';
else
	echo'<a href="viewdeletepatients.php">View deleted patients</a>';
echo '</li><li class="tabs">';







?>
</ul>
</center>s

<div class="contents">