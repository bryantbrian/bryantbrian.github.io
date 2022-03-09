<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => mama
		$conn = mysqli_connect("localhost", "root", "", "mama");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$number = $_REQUEST['number'];
		$message = $_REQUEST['message'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO mboga VALUES ('$name',
			'$email','$number','$message')";
		
		if(mysqli_query($conn, $sql)){
			echo "done";

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
	<nav id="nav">
						<ul class="links">
							<li class="active"><a href="index.html">HOME</a></li>
							<li><a href="generic.html">ORDER</a></li>
							
						</ul>
						
					</nav>
	<footer id ="footer">
		<div>
						<h2 style="margin-top:50px; padding:30px;">Thank you, your order was placed successfully,
						 our contact team will get back to you!</h2>

						<h4 style="margin-top:50px; padding:30px;">Check out our socials for reviews and various selections in the mean time.</h4>
						
					</div>
		
	<section class="split contact">
							<section class="alt">
								<h3>Address</h3>
								<p>1234 Nakuru Road <br />
								</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="#">(+254) 700-00-00</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">info@mamamboga.com</a></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li> <a href="https://twitter.com/bri_mumo" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href= "https://twitter.com/bri_mumo" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href= "https://twitter.com/bri_mumo" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									
								</ul>
							</section>
						</section>

					</footer>

</body>

</html>
