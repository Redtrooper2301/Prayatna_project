
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div id="top">
			<h1><a href="#"><strong>Welcome To Sparkling Ride</strong></a></h1>
			<div id="top-navigation">
				<a href="#"><strong>Administrator</strong></a><br>
				<a href="logout.php"><strong>logout</strong></a>
			</div>
		</div>
<div id="navigation">
			<ul>
			   
			    <li><a href="add_vehicles.php"><span><strong>Vehicle Management</strong></span></a></li>
				<li><a href="client_requests.php"><span><strong>Booking Requests</strong></span></a></li>
				<li><a href="index.php"><span><strong>Dashboard</strong></span></a></li>
			    <li><a href="index.php"><span><strong>Messages</strong></span></a></li>
			</ul>
	
		</div>