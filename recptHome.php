<?php
session_start();
$_SESSION["tab"] = "Home";

if($_SESSION["rlogin"] != 1)
	echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
	include_once('recptheader.php');

		###########contents of div goes here###########
		echo "
		<h2>
		ABOUT US
		</h2> 
		<br>
		<br>
		
		<p>
		Our blood bank is a non-profit organization dedicated to collecting, processing, and distributing blood and blood products to hospitals and other healthcare facilities. We are committed to meeting the needs of our community by providing a reliable and safe source of blood products.
	
		Our team consists of highly trained professionals, including phlebotomists, laboratory technicians, and support staff, who work together to ensure that every unit of blood we collect meets the highest standards of safety and quality. We follow strict guidelines set by regulatory agencies to ensure that our blood products are safe and effective for use in medical procedures.
		
		In addition to collecting and processing blood, we also educate the community about the importance of blood donation and host blood drives to encourage more people to become donors. We believe that every person has the power to save a life through blood donation, and we are proud to play a role in connecting donors with those in need.
		
		Thank you for choosing our blood bank for your blood product needs. We are committed to providing the best possible service to our patients, donors, and the community.
		</p>
		
		
		";


		##################################################
	include_once('footer.php');
}
?>