<?php

session_start();
include("connection.php");
include("functions.php");
if(isset($_POST['submit'])) {
    $user_data = check_login($con);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railবন্ধু</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
<!--This part for navigation-->
<marquee behavior="" direction="left" style="background-color: orange;"  > <h2> 💦 Welcome To Rail Bondhu Website.🌷 👉 Your Dream World💦 </h2></marquee>
	<div class="navigation">
			<nav>
				<div class="nav-icon">
				  <a href="#"><img src="Screenshot 2023-04-03 232707.png" alt="" srcset="" height="40px" style="clip-path:circle(50% at 50% 50%)"</i></a>
				</div>
				<div class="nav-menu">
				  <ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="logout.php"> Logout </a></li>
				  </ul>
				</div>
			  </nav>
	</div> 
<!--This part for slider-->	

	<div class="slider">
		<div class="slider1">
			<img src="img/slider/download (2).jpg" alt="img3">
			<img src="img/slider/download.jpg" alt="img1">
			<img src="img/slider/download (1).jpg" alt="img2">
		</div>
		<div class="slider2">
			<img src="img/slider/download (1).jpg" alt="img2">
			<img src="img/slider/download (2).jpg" alt="img3">
			<img src="img/slider/download.jpg" alt="img1">
		</div>
		<div class="slider3">
			
			<img src="img/slider/download.jpg" alt="img1">
			<img src="img/slider/download (1).jpg" alt="img2">
			<img src="img/slider/download (2).jpg" alt="img3">
		</div>
	</div>
<!--This part for service-->
	<div class="service">
		<h1>Our servive</h1>
		<table align="center">
			<tr >
				<td style="padding: 20px; height: 230px; width: 230px;">
					<a href="servicefood.html" target="_blank"><img src="img/slider/download (1).jpg" height="200px" width="200px" alt="Food Order"></a>
				</td>
				<td style="padding: 20px; height: 230px; width: 230px;">
					<a href="servicemedicin.html" target="_blank"><img src="img\slider\download.jpg" height="200px" width="200px" alt=""></a>
				</td>
			</tr>

			<tr>
				<td>
					<input type="radio" name="service" value="Food">Food
				</td>
				<td>
					<input type="radio" name="service" value="Medicin">Medicin
				</td>
			</tr>
		</table>	
	</div>
<!--This part for shop information-->
	<div class="shop">
		<h2>Our Partner Shop</h2>
		<div class="shop_left">
			<table align="center">
				<th>Store Name</th>
				<th>Rating</th>
				<tr>
					<td>
					 	<a href="Rejuanstore.html"> <strong>1. Ariful Islam Rejuan Store</strong> </a> 
					</td>
					<td>
						👑👑👑
					</td>
				</tr>
				<tr>
					<td>
						<a href="Rakibstore.html"> <strong> 2. Abdur Rakib Medicine Corner</strong></a>
					</td>
					<td>
						👑👑👑
					</td>
				</tr>
				<tr>
					<td>
						<a href="sadistore.html"> <strong>3. Sheikh Sadi Bondhon Fast Food </strong> </a>
					</td>
					<td>
						👑👑👑
					</td>
				</tr>
				<tr>
					<td>
						<a href="store1.html">4. Akisita Food  Store</a>
					</td>
					<td>
						👑👑
					</td>
				</tr>
				<tr>
					<td>
						<a href="store1.html">5. Dola Food Store</a>
					</td>
					<td>
						👑
					</td>
				</tr>

				
			</table>
			<button class="btn1">See more...</button>
		</div>
		<div class="shop_right">
		</div>

	</div>
	<footer>
		<p>&copy; 2023 Team Robix Cube. All rights reserved.</p>
		<p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
	  </footer>

	<script src="home.js"></script>
    
</body>
</html>