<!-- Katherine G Uffer-->
<!-- Web Programming Spring 2021 - Manhattan College-->
<!-- Final Project: The aim of this project is to create a multi-page website using all that we have learned-->
<!-- File Description: This is the page to book things-->
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
            <h1> Welcome <?=$_POST["name"]?> </h1>

            <table>
                <thead>
                    <tr>
                        <th><a class = "menu" href="Homepage.php">Homepage</a></th>
                        <th><a class = "menu" href="AboutUs.php">About Us</a></th>
                        <th><a class = "menu" href="">Rates</a></th> 
                        <th><a class = "menu" href="Login.php">Booking</a></th> 
                        <th><a class = "menu" href="">Contact us</a></th> 
                    </tr>
                </thead>
            </table>
        </div>  
        
        <div class = "body">
            <?php
                    $today = date("Y-m-d");
                    $components = explode("-",$today);
                    $check = $_POST["date"];
                    $try = explode("-",$check);
                    //print_r($components);
                    //print_r($try);
                    //          if year is behind               if year is same but date and month are before
                    if( strcmp($today, $check) > 0) //if the attempted date is in the past
                    {
            ?>
            <h2>
                The date you are looking for has already passed. Please select a date after today:
            </h2>
            <form action = "booking.php" method= "post">
				<fieldset>
					<legend>Select Date:</legend>
					<strong>Date:</strong>
					<input type = "date" name = "date" size= "16"/> <br/><br/>
                    <input type = "hidden" name = "email" value = "<?=$_POST["email"]?>"/>
                    <input type = "hidden" name = "name" value = "<?=$_POST["name"]?>"/>
                    <input type = "hidden" name = "password" value = "<?=$_POST["password"]?>"/>
					<input type = "submit"/>
				</fieldset>
			</form>
            <?php
                    }
                    else
                    {
                        //print("HERE");
                        $read = file_get_contents("booked.txt");
                        $allBooking = explode("\n", $read);
                        $booking = true;
                        //print_r($allBooking);
                        foreach($allBooking as $book)
                        {   
                            //print("HERE");
                            $test = explode(",", $book);
                            if(strcmp($test[0],$check)==0)
                            {
                                //print("NOT BOOKING");
                                $booking = false;
            ?>
            <h2>
                The date you are looking for has already been booked. Please select another date:
            </h2>
            <form action = "booking.php" method= "post">
				<fieldset>
					<legend>Select Date:</legend>
					<strong>Date:</strong>
					<input type = "date" name = "date" size= "16"/> <br/><br/>
                    <input type = "hidden" name = "email" value = "<?=$_POST["email"]?>"/>
                    <input type = "hidden" name = "name" value = "<?=$_POST["name"]?>"/>
                    <input type = "hidden" name = "password" value = "<?=$_POST["password"]?>"/>
					<input type = "submit"/>
				</fieldset>
			</form>
            <?php
                                break;
                            }
                        }

                        if($booking)
                        {
                            //print("BOOKING");
                            file_put_contents("booked.txt", $check.",".$_POST["email"]."\n", FILE_APPEND);
            ?>
            <h2>
                You have reserved the Lodge for <?=$_POST["date"]?>!
            </h2>
            <p>
                Please save this page for your own personal records.
            </p>
            <form action = "result.php" method= "post">
				<fieldset>
					<legend>If you would like to book another date, please press here:</legend>
                    <input type = "hidden" name = "email" value = "<?=$_POST["email"]?>"/>
                    <input type = "hidden" name = "password" value = "<?=$_POST["password"]?>"/>
					<input type = "submit"/>
				</fieldset>
			</form>
            <?php

                        }
                    }
            ?>
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