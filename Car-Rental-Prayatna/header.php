<?php
$access_key='2b2960ba-954c-4e9d-8893-ca71fbf98ccf';
$api_url='http://13.48.136.54:8000/api/api-code/';
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$api_url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($ch,CURLOPT_HTTPHEADER,array('Authorization:Bearer '.$access_key));
$response=curl_exec($ch);
if(curl_errno($ch)){
	echo'Error:'.curl_error($ch);
	}else{
		echo'Response:'.$response;
	}
curl_close($ch);

?>
<header>
			<div class="wrapper">
				<h1 class="logo">Sparkling Ride</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!isset($_SESSION['email']) && !isset($_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php">Rent Cars</a></li>
						<li><a href="aboutUs.php">About</a></li>
						<li><a href="contactUs.php">Contact</a></li>
					</ul>
					<a href="account.php">Client Login</a><br>
					<a href="login.php">Admin Login</a>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">View Status</a></li>
								<li><a href="message_admin.php">Message Admin</a></li>
							</ul>
					<a href="admin/logout.php">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>