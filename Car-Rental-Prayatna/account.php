<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Find Your Dream Cars For A Ride</h2>
				<h3 class="properties" style="text-align: center">Get Dive Into The World Of Luxury</h3>
			</section>
	</section>


	<section class="search">
		<div class="wrapper">
		<div id="fom">
			<form method="post">
			<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline">Client Login Area</h3>
				<table height="100" text-align="center">
					<tr>
						<td>Email Address:</td>
						<td><input type="email" name="email" placeholder="Enter Email Address" required></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" placeholder="Enter ID Number" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="log" value="Login Here"></td>
						<td style="text-align:right;"><a href="signup.php">Sigup Here</a></td>
					</tr>
				</table>
			</form>
			<?php
				if(isset($_POST['log'])){
					include 'includes/config.php';
					
					$uname = $_POST['email'];
					$pass = $_POST['pass'];
					
					$qy = "SELECT * FROM client WHERE email = '$uname' AND id_no = '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $row['email'];
						$_SESSION['pass'] = $row['id_no'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"account.php\")
									</script>";
					}
				}
			?>
			</div>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

	</section><!--  end search section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="aboutUs.php">About Us</a></li>
						<li><a href="policy.html">Terms&Condition</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				

				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">LUXURY CARS</a></li>
						<li><a href="#">SUPER CARS</a></li>
						<li><a href="#">SUV's</a></li>
						<li><a href="#">HYPER CARS</a></li>
						<li><a href="#">VINTAGE</a></li>
					</ul>
				</li>
		