<?php

	//Page title and path nesting
	$page = "Downtown";
	$path = "./";


	//Specify content to populate reusable template included before unique content of the page
	// $about_img = "";
	$about_img = "assets/img/banner.jpg";
	$about_alt = "A picture of the town of Skaneateles that was taken from the lake";

	$about_h2 = "Downtown in a Nutshell";
	$about_p = "Downtown Skaneateles has lots of great options for dining and shopping. Overall there are (X) shops, and (X) restaurants. Be careful crossing Genesee Street though, locals won't stop for you if you are crossing the street where you shouldn't be (some of us are just trying to get to work!). If you are looking for nightlife, check out the Lakehouse Pub, or head to Auburn (15 minutes west of downtown Skaneateles) for more options.";

	$btn1_name = "Shopping";
	$btn1_link = "shopping.php";
	$btn1_img = "assets/img/shopping.jpg";

	$btn2_name = "Food";
	$btn2_link = "food.php";
	$btn2_img = "assets/img/food.jpg";

	$map_title = "Map of Downtown Skaneateles";
	$map_img = "assets/img/downtown-map.png";
	$map_alt = "A screenshot of google maps zoomed in on downtown Skaneateles";

	
	//Basic page setup
	include($path . "assets/inc/nav.php");
	include($path . "assets/inc/header.php");

		//Specify template(s)
		include($path . "assets/inc/about.php");
		include($path . "assets/inc/buttons.php");
		include($path . "assets/inc/map.php");
		
	include($path . "assets/inc/footer.php");

?>