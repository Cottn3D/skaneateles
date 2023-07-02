<?php

	//Page title and path nesting
	$page = "All About Skaneateles";
	$path = "./";


	//Specify content to populate reusable template included before unique content of the page
	$about_img = "assets/img/town2.jpg";
	$about_alt = "A picture of the town of Skaneateles that was taken from the lake";
	$about_h2 = "Overview";
	$about_p = "Skaneateles is a small, quiet lake-town in a region of Central NY known as the 'Fingerlakes' region. The lake is famously beautiful, with some of the cleanest water in the world! The quaint town of Skaneateles sits at the north end of the lake with plenty of dining and shopping options with great views of the water.";

	$btn1_name = "The Lake";
	$btn1_link = "the-lake.php";
	$btn1_img = "assets/img/banner3.jpg";

	$btn2_name = "Downtown";
	$btn2_link = "downtown.php";
	$btn2_img = "assets/img/banner.jpg";


	//Basic page setup
	include($path . "assets/inc/nav.php");
	include($path . "assets/inc/header.php");

		//Specify template(s)
		include($path . "assets/inc/about.php");
		include($path . "assets/inc/buttons.php");

?>

<div class="main">
	<h2>ORIGINS</h2>
	<p>
		Skaneateles Lake is just one of 11 lake in the Central New York area which are commonly referred to as the 'Finger Lakes'. The name of Skaneateles was given by the indiginous people that lived here before settlers laid claim. In Iriquois, 'Skaneateles' roughly translates to 'Long Lake' which is a fitting name since the lake is so extensive yet narrow.
	</p>

	<h2>STATS</h2>
	<p>- Size of Skaneateles Lake: 16mi long, 1mi wide, 300ft deep</p>
	<p>- Skaneateles population size: 2600</p>
	<p>- Has been visited by 3 U.S. presidents, a national news host, a famous actor, and... Justin Bieber (yay).</p>
		<!-- 
			
			ORIGINS
			- Skaneateles Lake is just one of 11 lake in the Central New York area which are commonly referred to as the 'Finger Lakes'.
			- The name of Skaneateles was given by the indiginous people that lived here before settlers laid claim. In Iriquois, 'Skaneateles' roughly translates to 'Long Lake' which is a fitting name since the lake is so extensive yet narrow.

			CLEAN AND CLEAR
			- It is surrounded by steep slopes to its east and west as a result of an iceberg gouging out a long, deep, and narrow area that we know today as Skaneateles Lake. Since the surrounding watershed area is so minute, less debris is carried into the lake when it rains compared to other lakes.
			- In fact, the water is so clean that the municipal water supply sourced from the lake isn't even filtered before being sent onward to local residents. There are only 5 other lakes in the U.S. that have water clean enough to accomplish this.

			STATS
			- Size of lake (16mi long, 1mi wide, 300ft deep)
			- Skaneateles population size (2600)
			- Has been visited by 3 presidents, a national news host, a famous actor, and... Justin Bieber (yay). (Clinton, Obama, Biden, David Muir, Alec Baldwin, Justin Bieber)

		-->
		<!-- <img src="<//?php $path ?> assets/img/temp.png" alt="..."> -->
</div>

<?php
	include($path . "assets/inc/footer.php");
?>