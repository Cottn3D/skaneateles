<?php

	//Page title and path nesting
	$page = "Food";
	$path = "./";


	//Specify content to populate reusable template included before unique content of the page
	$about_img = "assets/img/food.jpg";
	$about_alt = "A picture of different foods on a table";

	$about_h2 = "The Best Eats in Skaneateles";
	$about_p = "Our town has lots of great options when your stomach is growling at you. If you are looking for a classy Tuscan option, check out Rosalies. Doug's Fish Fry is another great option, it is world famous, but the Skaneateles location is the original one! Want to kick back and relax with a couple scoops of ice cream? Check out Skan Scoops! Take a look at the list below to see other options!";

	$double_title = "Check Out Some of the Dining Options!";
	$type = "food";
	$recs = "Editor's Favorite Places to Eat";

	$card_title1 = "Rosalie's Cucina";
	$card_img1 = $path . "assets/img/rosalies.jpg";
	$card_alt1 = "A picture of the interior of Rosalie's Cucina";
	$card_p1 = "Rosalie's is one of the more expensive options in town, but it is well worth your hard-earned money! The restaurant has a wonderful atmosphere, a professional wait-staff, and a truly amazing menu of italian food.";

	$card_title2 = "Doug's Fish Fry";
	$card_img2 = $path . "assets/img/dougs.jpg";
	$card_alt2 = "A picture of a fish sandwich from Doug's Fish Fry";
	$card_p2 = "Doug's is a favorite of tourists an locals alike. This locally-sourced fried fish joint is a low-cost option that you don't have to sacrifice quality for. I personally recommend the chicken tenders, but then again, I am not the biggest fan of fish!";

	$card_title3 = "Valentine's Delicatessen";
	$card_img3 = $path . "assets/img/valentines.jpg";
	$card_alt3 = "A picture of the owner of Valentine's holding a pizza";
	$card_p3 = "Valentines' chicken wing pizza is a local delicacy. Although there are plenty of other options here ranging from subs to salads- even gyros, I would be remiss not to recommend the chicken wind pizza.";

	
	//Basic page setup
	include($path . "assets/inc/nav.php");
	include($path . "assets/inc/header.php");

		//Specify template(s)
		include($path . "assets/inc/about.php");
        // include($path . "assets/inc/dbconf.php"); // UNCOMMENT FOR WORKING MYSQL
		include($path . "assets/inc/double.php");
	
	include($path . "assets/inc/footer.php");

?>