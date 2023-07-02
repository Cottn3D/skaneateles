
<?php

	//Page title and path nesting
	$page = "Explore";
	$path = "./";


	//Specify content to populate reusable template included before unique content of the page
	$about_img = "assets/img/town-pier.jpg";
	$about_alt = "A picture of the pier in downtown Skaneateles";

	$about_h2 = "Ready to do some exploring?";
	$about_p = "If the dining, shopping, and lake-faring weren't enough, Skaneateles has some great places to visit for their scenery and atmosphere. The Judge Ben Wiles is a historic boat that makes regular sightseeing tours around the lake, and is probably the most popular option for sightseeing in general. There are, however, some alternative ways to see the beauty of Skaneateles listed below.";

	$features = "Some Great Options for the Explorers Out There";

	$card_title1 = "The Pier";
	$card_img1 = $path . "assets/img/town-pier2.jpg";
	$card_alt1 = "A picture of the pier in Skaneateles covered in snow";
	$card_p1 = "This attraction is found downtown in Thayer park, which is situated right on the edge of the lake. The pier extends about a quarter of a mile into the lake. It runs parallel to a public boat docking area if you wanted to take a trip into town the way the locals do! Dock attendants man the dock during regular business hours, and will assist you in docking your vessel if you allow them. If you ask for their help with docking, don't forget to tip!";

	$card_title2 = "Historic";
	$card_img2 = $path . "assets/img/lake-sights.jpg";
	$card_alt2 = "A picture of the Judge Ben Wiles tour boat";
	$card_p2 = "Want to know more about our town's heritage? Look no further than this tour on the water! It has enough details on our town to satisfy even the most curious of minds";

	$card_title3 = "Booze";
	$card_img3 = $path . "assets/img/anyelas.jpg";
	$card_alt3 = "A picture of sign outside of Anyela's winery";
	$card_p3 = "Come check out Anyelas' terrace which has a beautiful elevated view of the lake. You can get a bite to eat too, and of course, wine! This is a highly recommended venue for viewing the fall foliage. Check out their website to see if you can catch some live music while you are there.";

	
	//Basic page setup
	include($path . "assets/inc/nav.php");
	include($path . "assets/inc/header.php");

		//Specify template(s)
		include($path . "assets/inc/about.php");
		include($path . "assets/inc/triple-horiz.php");
	
	include($path . "assets/inc/footer.php");

?>