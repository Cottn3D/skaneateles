<?php

	//Page title and path nesting
	$page = "The Lake";
	$path = "./";


	//Specify content to populate reusable template included before unique content of the page
	// $about_img = "";
	$about_img = "assets/img/banner3.jpg";
	$about_alt = "A picture of the town of Skaneateles that was taken from the lake";

	$about_h2 = "What to Know About the Lake";
	$about_p = "Tourists come from all over the world just to gander at Skaneateles Lake. When you see it for yourself, you will understand! The Lake is especially pretty (and popular) for viewing when accompanied by New York's entrancing fall foliage. It is truly a sight to behold!";

	$btn1_name = "Explore";
	$btn1_link = "explore.php";
	$btn1_img = "assets/img/town-pier.jpg";

	$btn2_name = "Recreation";
	$btn2_link = "recreation.php";
	$btn2_img = "assets/img/recreation.jpg";

	$map_title = "Map of Skaneateles Lake";
	$map_img = "assets/img/map-lake.jpg";
	$map_alt = "A map of Skaneateles Lake";

	
	//Basic page setup
	include($path . "assets/inc/nav.php");
	include($path . "assets/inc/header.php");

		//Specify template(s)
		include($path . "assets/inc/about.php");
		include($path . "assets/inc/buttons.php");
		include($path . "assets/inc/map.php");
		
	include($path . "assets/inc/footer.php");

?>