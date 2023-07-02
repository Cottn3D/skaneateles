<?php

	//Page title and path nesting
	$page = "Addons";
	$path = "./";


	//Specify content to populate reusable template included before unique content of the page
	$about_img = "assets/img/food.jpg";
	$about_alt = "A picture of different foods on a table";

	$about_h2 = "My Addons";
	$about_p = "Here are some of the extras in this project that you should know about";

	$item1 = "Addon - Great Design";
    $info1 = "The banner spanning the header was custom made for this project. I feel that this is great design because it is nice to look at, but also well suited to the subject of a lake town such as Skaneateles.";

	$item2 = "Addon - Responsive Design";
    $info2 = "This site was designed such that it works just as well for mobile as it is does for desktop. All body content is resized and re-laid out so it works better on mobile. The button that move the sailboat at the top of the page is also removed for a more appealing layout as a result.";

	$item3 = "DHTML + JS";
    $info3 = "When viewed in desktop mode, there is a sailboat icon seen at the top of each page, with a button directly above it. Pushing the button triggers a javascript function that animates the icon to move across the page, also satisfying the DHTML requirement. Please also note that any pages not found in the nav at the top of the page are linked to buttons included in on the 'downtown' and 'lake' pages.";


	
	//Basic page setup
	include($path . "assets/inc/nav.php");
	include($path . "assets/inc/header.php");

		//Specify template(s)
		include($path . "assets/inc/about.php");
		include($path . "assets/inc/documentation2.php");
	
	include($path . "assets/inc/footer.php");

?>