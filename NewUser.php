<!DOCTYPE html>
<html lang = "en">

	<head>
		<meta name = "description" content = "Sikorsky Ski Club Homepage" />
        <meta name = "keywords" content = "Okemo, Ludlow VT, places to stay, ski lodge, skii, skiing, lodge, skii lodge, Sikorsky, Sikorsky Ski Club" />
        <meta name="author" content = "Katherine Uffer" />
		<meta name="author" content = "Rund Qasem" />
		<meta charset="utf-8" />
		<title>Sikorsky Ski Club</title>  
		<link type = "text/CSS" rel = "stylesheet" href = "ski.css"/>
	</head>  
	<body>
		<div class = "header">
			<p id = "center">
				<img id = "logo" src = "images/Logoasset.png" alt = "Sikorsky Ski Club Logo" width = "150">	
			</p>

			<h1> Sikorsky Ski Club </h1>

			<table>
				<thead>
					<tr>
						<th><a class = "menu" href="Homepage.php">Homepage</a></th>
						<th><a class = "menu" href="AboutUs.php">About Us</a></th>
						<th><a class = "menu" href="Rates.php">Rates</a></th> 
						<th><a class = "menu" href="Login.php">Booking</a></th> 
						<th><a class = "menu" href="Contact.php">Contact us</a></th> 
					</tr>
				</thead>
			</table>

		</div>
		<br/><br/>

		<div class = "body">
			<form action = "result.php" method= "post">
				<fieldset>
					<legend>New User Signup:</legend>
					<strong>Name:</strong>
					<input type = "text" name = "name" size= "16"/> <br/><br/>
					<strong>Email: </strong> 
					<input type = "email" name = "email" /> <br/><br/>
					<strong> Password </strong>
					<input type = "password" name = "password" /> <br/><br/>
					<input type = "submit"/>
				</fieldset>
			</form>
		</div>

		<div class = "footer">
			<h3>
				<a href = "https://www.facebook.com/sikorskyskiclub/"><img id = "logo" src = "images/facebook.png" alt = "Facebook Logo" width = "30"> Follow us on Facebook!</a>
			</h3>
			<p>
				©2021 Sikorsky Ski Club, Inc.
			</p>
		</div>
	</body>
</html>