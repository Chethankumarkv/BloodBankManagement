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
	echo'<a href="adminHome.php">Home</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Add_Receptionalist")
	echo'<a href="Add_Receptionalist.php" class = "active">Add Receptionalist</a>';
else
	echo'<a href="Add_Receptionalist.php">Add Receptionalist</a>';
echo '</li><li class="tabs">';

if  ($_SESSION["tab"] == "Delete_Receptionalist")
	echo'<a href="Delete_Receptionalist.php" class = "active">Delete Receptionalist</a>';
else
	echo'<a href="Delete_Receptionalist.php">Delete Receptionalist</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Add_Blood bank")
	echo'<a href="Add_bb.php" class = "active">Add_Blood bank</a>';
else
	echo'<a href="Add_bb.php">Add_Blood bank</a>';
echo '</li><li class="tabs">';





if  ($_SESSION["tab"] == "Check_Stock")
	echo'<a href="A_check.php" class = "active">Check Stock</a>';
else
	echo'<a href="A_check.php">Check Stock</a>';
echo '</li><li class="tabs">';
if  ($_SESSION["tab"] == "VIEW Blood Bank Details")
	echo'<a href="bbdetails.php" class = "active">VIEW Blood Bank Details</a>';
else
	echo'<a href="bbdetails.php">VIEW Blood Bank Details </a>';
echo '</li><li class="tabs">';






?>
</ul>
</center>

<div class="contents">