<!-- Katherine G Uffer-->
<!-- Web Programming Spring 2021 - Manhattan College-->
<!-- Final Project: The aim of this project is to create a multi-page website using all that we have learned-->
<!-- File Description: This is the about us page-->
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
		
		<div class = "body">

			<table>
				<thead>
					<tr>
						<th><a class = "menu2" href=#story>Our Story</a></th>
						<th><a class = "menu2" href=#Photos>Photos</a></th>
						<th><a class = "menu2" href=#Schedule>Hours</a></th> 
						<th><a class = "menu2" href=#Accommodations>Accommodations</a></th> 
						<th><a class = "menu2" href=#Activities>Activities</a></th> 
					</tr>
				</thead>
			</table>

			<div id = "story">
				<h2>
					Story
				</h2>
				<p>
					The Sikorsky Ski Club has been in existence since the late 1960s and jointly operated a ski lodge in Ludlow, 
					Vermont known as “The Meetin’ Place” with the Sikorsky Club since the early 1970s.  In 2003 the Sikorsky Ski 
					Club, Inc., was formed as a not for profit entity and purchased the lodge from the Sikorsky Club.In addition 
					to the winter sports of downhill and cross country skiing, snow boarding and snowmobiling, other recreational 
					activities like golf, fishing, hiking, biking, camping, boating, canoeing, hunting, antique shopping and 
					sightseeing are convenient from the Ludlow location.   Club membership provides low-cost lodging and many 
					amenities in a friendly and social setting. The Lodge is within walking distance from the center of Ludlow
					and is located on the shuttle bus route for Okemo Mountain.  It is also within a 45 minute drive to Ascutney,
					Killington, Pico, Magic and Bromley Mountain Ski Areas.  Slightly further are Stratton, Haystack, Mt Snow and 
					Sugarbush Ski Areas. 
				</p>
			</div>
		
			<div id = "Photos">
				<h2>
					Photos
				</h2>
				<img src = "images/Lodge-entrance-snow.jpg" alt = "Sikorsky Ski Club" width = "150">
				<img src = "images/Sign-snow.jpg" alt = "Sikorsky Ski Club" width = "150">
				<img src = "images/Lodge-Summer-Front3.jpg" alt = "Sikorsky Ski Club" width = "150">
				<br/>
				<img src = "images/Lodge-living-room.jpg" alt = "Sikorsky Ski Club" width = "150">
				<img src = "images/Lodge-Summer-Front1.jpg" alt = "Sikorsky Ski Club" width = "150">
				<img src = "images/Sign.jpg" alt = "Sikorsky Ski Club" width = "150">
			</div>

			<div id = "Schedule">
				<h2>
					Schedule
				</h2>
				<table>
				<tbody>
					<tr>
						<td>Monday</td>
							<td>closed</td>
						</tr>
						<tr>
						<td>Tuesday</td>
						<td>9am-10pm</td>
						</tr>
						<tr>
						<td>Wednesday</td>
						<td>9am-10pm</td>
						</tr>
						<tr>
						<td>Thursday</td>
						<td>9am-10pm</td>
						</tr>
						<tr>
						<td>Friday</td>
						<td>9am-10pm</td>
						</tr>
						<tr>
						<td>Saturday</td>
						<td>9am-12am</td>
						</tr>
						<tr>
						<td>Sunday</td>
						<td>10am-10pm</td>
					</tr>
				</table>
			</div>
				
			<div id = "Accommodations">
				<h2>
					Accomodations
				</h2>
				<p>
					Our bunks can comfortably house between 4-8 people each, with 4 bathrooms with 6 showers/toilets in total.
					All Members also have access to all of the following: 			
				</p>
				<ul>
					<li> Two Lounge Areas equipped with Game Rooms and TVs.</li>
					<li>A Modern Wood-Burning Stove</li>
					<li>Full Kitchens with fully stocked cookware</li>
					<li>An Outdoor Gas Grill</li>
					<li>Three Refrigerators</li>
					<li>2 Full Electric Ranges</li>
					<li>2 Large dining tables</li>
				</ul>	
			</div>

			<div id = "Activities">
				<h2>
					Activities
				</h2>
				<p>
					Our Summer and Fall Activities include golf, mountain biking, hiking, mountain climbing, and fall foliage.
					We are also an hour away from several cross country Ski Areas and Golf Courses.
				</p>
			</div>

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
</body>