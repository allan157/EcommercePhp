<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Gifsa inc.</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=material+icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script type="text/javascript">
			
		<script>
			var theDays = new Array();

theDays[0]="Sunday";
theDays[1]="Monday";
theDays[2]="Tuesday";
theDays[3]="Wednesday";
theDays[4]="Thursday";
theDays[5]="Friday";
theDays[6]="Saturday";



/* Callout: The array of months */ 
var theMonths = new Array();

theMonths[0]="January";
theMonths[1]="February";
theMonths[2]="March";
theMonths[3]="April";
theMonths[4]="May";
theMonths[5]="June";
theMonths[6]="July";
theMonths[7]="August";
theMonths[8]="September";
theMonths[9]="October";
theMonths[10]="November";
theMonths[11]="December";




function showTime(){
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
    
    var timeValue = "" + ((hours > 12) ? hours - 12 : hours);
    ((timeValue == 0) ? timeValue = 12 : timeValue);
    timeValue  += ((minutes < 10) ? ":0" : ":") + minutes;
    timeValue  += ((seconds < 10) ? ":0" : ":") + seconds;
    timeValue  += (hours >= 12) ? " PM" : " AM";
    
    var greeting = "";
    if (hours <= 24) { greeting = "Good evening."; }
    if (hours <= 17) { greeting = "Good afternoon."; }
    if (hours <= 11) { greeting = "Good morning."; }
    if (hours <= 4) { greeting = "Isn't it past your bedtime?"; }
    
 
 
    /* Callout: Use getFullYear() to get the 4-digit year */
    var theyear = now.getFullYear();
    var themonth = now.getMonth();
    var thedate = now.getDate();
    var theday = now.getDay();
    
    var theLongDate = theDays[theday] + ", ";
    theLongDate += thedate + " " + theMonths[themonth];
    theLongDate += ", " + theyear;
    
    document.getElementById('dateandtime').innerHTML = theLongDate + " " + timeValue;
    document.getElementById('description').innerHTML = greeting;
}
		</script>
</head>
<body id="home" class="scrollspy">
	<div class="navbar-fixed">
		<nav class="teal">
			<div class="container">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo">Gifsa Inc.</a>
					<a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li>
							<a href="about.php">About</a>
						</li>
						<li>
							<a href="products.php">Products</a>
						</li>
						<li>
							<a href="cart.php">View Cart</a>
						</li>
						<li>
							<a href="orders.php">My Orders</a>
						</li>
						<li>
							<a href="contact.php">Contact</a>
						</li>
						<li>
							<a href="login.php">Login</a>
						</li>
						<li>
							<a href="register.php">Register</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
        </ul>
      </section>
    </nav>
	<div class="container">
    <div onload="clock">
    	<script type="text/javascript">
    		document.getElementById('dateandtime').innerHTML
    		=Date();
    	</script>
    </div>
</div>
<!--section: slider-->
	<section class="slider">
		<ul class="slides">
			<li>
				<img src="images/slider1.jpg">
				<div class="caption center-align">
					<h2>Anywhere Anytime!</h2>
					<h5 class="light grey-text text-lighten-3">Your Comfort Our Priority Just at the Tips of your Finger</h5>
				</div>
			</li>
			
			<li>
				<img src="images/slider2.jpg">
				<div class="caption left-align">
					<h2>Its a Class on its OWN</h2>
					<h5 class="light grey-text text-lighten-3">We understand to the last detail your needs we work with all budgets</h5>
				</div>
			</li>

			<li>
				<img src="images/slider3.jpg">
				<div class="caption right-align">
					<h2>Perfection</h2>
					<h5 class="light grey-text text-lighten-3">Custom built to your preference and to match your expectations and beyond</h5>
				</div>
			</li>
			<li>
				<img src="images/slider4.jpg">
				<div class="caption center-align">
					<h2>Gifsa</h2>
					<h5 class="light grey-text text-lighten-3">Where magic happens</h5>
				</div>
			</li>

		</ul>
		
	</section>
<!--search bar-->
	<section id="search" class="section section-search teal darken-1 white-text center scrollspy">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h3>Search Item</h3>
					<div class="input-field">
						<input type="text" class="white grey-text autocomplete" id="autocomplete-input" placeholder="tv, laptop, home theatre, etc..">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--dialog boxes-->
	<section class="section section-icons grey lighten-4 center">
		<div class="container">
			<div class="row">
				<div class="col s12 m4">
					<div class="card-panel">
						<i class="material-icons teal-text">location</i>
						<h4>located at</h4>
						<p>We have agents in every neighbourhood thus easy to reach us </p>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card-panel">
						<i class="material-icons teal-text">Store</i>
						<h4>Customer care</h4>
						<p>Our doors are opened every day of the week and call center available 24 hours </p>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card-panel">
						<i class="material-icons teal-text">Delivery</i>
						<h4>Deliveries</h4>
						<p>We deliver within the hour for local customers and for shipping we deliver within three days of purchase </p>
					</div>
				</div>		
			</div>
		</div>
	</section>

	<!--social media section-->
	<section class="section section-follow teal darken-2 white-text center">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h4>Follow Gifsa Inc</h4>
					<p>Follow us on social media for special offers</p>
					<a href="#" class="white-text">
						<i class="fab fa-facebook fa-4x"></i>
					</a>
				</div>
			</div>
		</div>	
	</section>


	<script type="text/javascript" src="js/materialize.min.js"></script>
		<script>
			const slider = document.querySelector('.slider');
			M.Slider.init(slider, {
				indicators: false,
				height: 500,
				transition: 500,
				interval: 6000,
			});

			//Autocomplete
			const ac = document.querySelector('.autocomplete');
			M.Autocomplete.init(ac, {
				data: {
					"tv": null,
					"subwoofer": null,
					"fridge": null,
					"microwave": null,
					"blender": null,
					"oven": null,
					"cooker": null,
					"home theatre": null,
					"dvd": null,
				}
			});
		</script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
