<?php

	//Page title and path nesting
	$page = "Shopping";
	$path = "./";


	//Specify content to populate reusable template included before unique content of the page
	$about_img = "assets/img/shopping.jpg";
	$about_alt = "A picture of the town of Skaneateles that was taken from the lake";

	$about_h2 = "Craving Some Retail Therapy Today?";
	$about_p = "Downtown Skaneateles is well known for having a diverse group of boutiques, there is something for everyone here! With shopping options including: vacation mementos, jewelry, clothing, and many others, you can always find some great stuff in Skaneateles. See the list below to see some great shopping options!";

	$double_title = "Check Out Some of the Shopping Options!";
	$type = "shopping";
	$recs = "Editor's Shopping Favorites";

	$card_title1 = "Imagine";
	$card_img1 = $path . "assets/img/imagine.jpg";
	$card_alt1 = "A picture of the exterior of Imagine";
	$card_p1 = "Imgaine is a wonderful boutique filled with enough treasures to please even the most crow-like shoppers out there that have an affinity for shiny objects (myself included). More than just jewelry, Imagine has a diverse selection of offerings for those seeking something more meaningful than some plastic keepsake that will be forgotten in a week.";

	$card_title2 = "Tops";
	$card_img2 = $path . "assets/img/tops.jpg";
	$card_alt2 = "A picture of the exterior of Tops";
	$card_p2 = "Tops is by far the best supermarket in town... It also happens to be the only one. Lack of competition aside, Tops still offers a wide selection of reasonably priced food and convenience-type items. This store includes a bakery, pharmacy, and specialty-beer area.";

	$card_title3 = "Vermont Green Mountain";
	$card_img3 = $path . "assets/img/vermont.jpg";
	$card_alt3 = "A picture of the interior of Vermont Green Mountain";
	$card_p3 = "Vermont Green Mountain, typically referred to as just 'Green Mountain' has some mouth-watering goodies for those of you -like me- who have an insatiable sweet tooth. There is a wide variety of chocolates, cakes, fudges, and more to be selected from. This, perhaps, is not the best option for those of you on a diet.";

	
	//Basic page setup
	include($path . "assets/inc/nav.php");
	include($path . "assets/inc/header.php");

		//Specify template(s)
		include($path . "assets/inc/about.php");
		// include($path . "assets/inc/dbconf.php"); // UNCOMMENT FOR WORKING MYSQL
		include($path . "assets/inc/double.php");
	
	include($path . "assets/inc/footer.php");

?>