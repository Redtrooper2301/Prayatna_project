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
				<h2 class="caption" style="text-align: center">Find You Dream Cars For A Ride</h2>
				<h3 class="properties" style="text-align: center">Get Dive Into The World Of Luxury</h3>
			</section>
	</section><!--  end hero section  -->



	<section class="listings">
		<div class="wrapper">
		<h2 style="text-decoration:underline">Message Admin Here</h2>
			<ul class="properties_list">
			<form method="post">
				<table>
					<tr>
						<td style="color: #003300; font-weight: bold; font-size: 24px">Enter Your Message Here:</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>
							<textarea name="message" placeholder="Enter Message Here" class="txt"></textarea>
						</td>
					</tr>
					<tr>
						<td><input type="submit" name="send" value="Send Message"></td>
					</tr>
				</table>
			</form>
				<?php
					if(isset($_POST['send'])){
						include 'includes/config.php';
						
						$message = $_POST['message'];
						
						$qry = "INSERT INTO message (message,client_id,time,status)
							VALUES('$message','$_SESSION[email]',NOW(),'Unread')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Message Successfully Send\");
											window.location = (\"success.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Message Not Send. Try Again\");
											window.location = (\"message_admin.php\")
											</script>";
							}
					}
				?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="aboutUs.php">About Us</a></li>
						<li><a href="policy.html">Terms&Condition</a></li>
						<li><a href="contactUs.php">Contact</a></li>
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
