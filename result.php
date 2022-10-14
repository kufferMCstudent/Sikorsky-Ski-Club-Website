<!-- Katherine G Uffer-->
<!-- Web Programming Spring 2021 - Manhattan College-->
<!-- Final Project: The aim of this project is to create a multi-page website using all that we have learned-->
<!-- File Description: This is the initial landing page for loging in or creating a new account-->
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

            <?php
                $read = file_get_contents("users.txt");
                //print($read);
                $allUsers = explode("\n", $read);
                //print_r($allUsers);
                $new = true;
                $found = false;
                $pass = false;
                $name = "";
                $password = $_POST["password"];
                for($i = 0; $i < count($allUsers); $i++) //for loop to try and find the user in the txt file
                {
                    $test = explode(",", $allUsers[$i]);
                    //print_r($test);
                    if(strcmp($_POST["email"],$test[1])==0)//if strings are the same
                    {
                        $name = $test[0];
                        $new = false;
                        $found = true;
                        if(strcmp($password,$test[2])==0)
                        {
                            $pass = true;
                        }
                    }
                }

                if($new && $_POST["name"]!="")//if the user is new (they are new and a name was passed). returing users so not submit a name
                {
                    $name = $_POST["name"];
                    $test2 = $_POST["name"].",".$_POST["email"].",".$_POST["password"]."\n";
                    //print($test2);
                    file_put_contents("users.txt", $_POST["name"].",".$_POST["email"].",".$_POST["password"]."\n", FILE_APPEND);
                    $found = true;
                    $pass = true;
                }

                if($found && $pass) //if the user is found and their password is correct
                {
            ?>
			<h1> Welcome <?=$name?> </h1>

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
		<br/><br/>

		<div class = "body">
            <?php
                $read = file_get_contents("booked.txt");
                //print($read);
                $allBooking = explode("\n", $read);
                //print_r($allBooking);
                $count = 0;
                $arr = array();
                foreach($allBooking as $book)
                {
                    $test = explode(",", $book);
                    //print_r($test);
                    if(strcmp($test[1],$_POST["email"])==0) //if the user has a booking already
                    {
                        //print($test[0]);
                        $arr[$count] = $test[0];
                        $count++;
                    }
                }

                if($count == 0)
                {
            ?> 
            <h2>
                You currently have 0 bookings.
            </h2>
            <?php
                }
                else
                {
            ?>
            <h2>
                Your Current Bookings Are:
            </h2>
            <ul>
            <?php
                    foreach($arr as $book)
                    {
            ?>
                <li>
                        <?=$book?>
                </li>
            <?php
                    }
                }
            ?>
            </ul>
            <h2>
                When would you like to book the lodge?
            </h2>

            <form action = "booking.php" method= "post">
				<fieldset>
					<legend>Select Date:</legend>
					<strong>Date:</strong>
					<input type = "date" name = "date" size= "16"/> <br/><br/>
                    <input type = "hidden" name = "email" value = "<?=$_POST["email"]?>"/>
                    <input type = "hidden" name = "name" value = "<?=$name?>"/>
                    <input type = "hidden" name = "password" value = "<?=$password?>"/>
					<input type = "submit"/>
				</fieldset>
			</form>

        </div>
        <?php
                }
                else if ($found && !$pass) //if the user is found and the password is not correct
                {
        ?>
            <h1> Sikorsky Ski Club </h1>
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
		<br/><br/>

		<div class = "body">
            <h2>
                Your password is incorrect.
            </h2>
            <p>
                <a href = "Login.php" >>Go back to log in again.</a>
            </p>
            <p>
                <a href = "NewUser.php" >>Don't have an account? Make a new one here.</a>
            </p>
        </div>
        <?php
                }
                else //otherwise the user is not found
                {
        ?>
            <h1> Sikorsky Ski Club </h1>
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
		<br/><br/>

		<div class = "body">
            <h2>
                That user was not found.
            </h2>
            <p>
                <a href = "Login.php" >>Go back to log in again.</a>
            </p>
            <p>
                <a href = "NewUser.php" >>Don't have an account? Make a new one here.</a>
            </p>
        </div>
        <?php
                }
        ?>

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