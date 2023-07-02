<?php

	//Page title and path nesting
	$page = "References";
	$path = "./";


	//Specify content to populate reusable template included before unique content of the page
	$about_img = "assets/img/food.jpg";
	$about_alt = "A picture of different foods on a table";

	$about_h2 = "My References";
	$about_p = "These are the sources that I got my images from.";

	$item1 = "<img src='assets/img/anyelas.jpg'>";
    $info1 = "<a>xxx</a>";

	$item2 = "<img src='assets/img/banner.jpg'>";
    $info2 = "<a>https://i2.wp.com/www.fingerlakesphotography.com/photo/wp-content/uploads/2019/03/SkaneatelesStoresSunset-1.jpg?fit=1920%2C1200</a>";

	$item3 = "<img src='assets/img/banner3.jpg'>";
    $info3 = "<a>http://www.fingerlakesphotography.com/photo/wp-content/uploads/2019/03/SkaneatelesAerial-1.jpg</a>";

	$item4 = "<img src='assets/img/boat2.png'>";
    $info4 = "<a>https://www.pinclipart.com/downpngs/oTxm_picture-free-download-clipart-sailboat-boat-clip-art/</a>";

	$item5 = "<img src='assets/img/countryclub.jpg'>";
    $info5 = "<a>https://i.pinimg.com/originals/90/36/88/903688599b7843508c3b3e7eddb246b7.jpg</a>";

	$item6 = "<img src='assets/img/dougs.jpg'>";
    $info6 = "<a>https://media-cdn.tripadvisor.com/media/photo-s/0f/19/47/75/fried-white-fish.jpg</a>";

	$item7 = "<img src='assets/img/downtown-map.png'>";
    $info7 = "<a>https://www.google.com/maps</a>";

	$item8 = "<img src='assets/img/food.jpg'>";
    $info8 = "<a>https://media-cdn.tripadvisor.com/media/photo-s/0f/19/47/75/fried-white-fish.jpg</a>";

	$item9 = "<img src='assets/img/imagine.jpg'>";
    $info9 = "<a>https://www.syracuse.com/resizer/Xg_NKfw0i3S3vdR9PIE8o_jsiRA=/500x0/smart/arc-anglerfish-arc2-prod-advancelocal.s3.amazonaws.com/public/MO5YYB7W3VGQXBXJ6J5CUYIG4E.JPG</a>";

	$item10 = "<img src='assets/img/lake-sights.jpg'>";
    $info10 = "<a>https://www.tripadvisor.com/LocationPhotoDirectLink-g48618-d2202815-i405350654-Mid_Lakes_Navigation-Skaneateles_Finger_Lakes_New_York.html</a>";

	$item11 = "<img src='assets/img/map-lake.jpg'>";
    $info11 = "<a>https://www.skaneateles.com/sites/default/files/New%20loop%20the%20Lake%20revised%20for%20web.pdf</a>";

	$item12 = "<img src='assets/img/marina.jpg'>";
    $info12 = "<a>https://www.fingerlakes.org/things-to-do/boat-cruises</a>";

	$item13 = "<img src='assets/img/recreation.jpg'>";
    $info13 = "<a>https://www.velaw.com/news/onewater-marine-inc-closes-initial-public-offering/</a>";

	$item14 = "<img src='assets/img/rosalies.jpg'>";
    $info14 = "<a>https://www.tripadvisor.com/Restaurant_Review-g48618-d421577-Reviews-Rosalie_s_Cucina-Skaneateles_Finger_Lakes_New_York.html</a>";

	$item15 = "<img src='assets/img/sailing.jpg'>";
    $info15 = "<a>https://www.nmma.org/press/article/23731</a>";

	$item16 = "<img src='assets/img/shopping.jpg'>";
    $info16 = "<a>https://www.nmma.org/press/article/23731</a>";

	$item17 = "<img src='assets/img/tops.jpg'>";
    $info17 = "<a>https://www.newyorkupstate.com/news/2017/11/tops_to_launch_same-day_grocery_delivery_in_upstate_ny.html</a>";

	$item18 = "<img src='assets/img/town2.jpg'>";
    $info18 = "<a>https://www.visitsyracuse.com/articles/post/daytrips-in-any-direction/</a>";

	$item19 = "<img src='assets/img/town-pier.jpg'>";
    $info19 = "<a>https://fineartamerica.com/shop/posters/skaneateles+lake</a>";

	$item20 = "<img src='assets/img/town-shopping.jpg'>";
    $info20 = "<a>https://daytrippingroc.com/skaneateles-getaway/</a>";

	$item21 = "<img src='assets/img/valentines.jpg'>";
    $info21 = "<a>https://www.visitsyracuse.com/listing/valentines-pizza-%26-delicatessen/1242/</a>";

	$item22 = "<img src='assets/img/vermont.jpg'>";
    $info22 = "<a>https://www.tripadvisor.com/Restaurant_Review-g48618-d871692-Reviews-Vermont_Green_Mountain_Specialists_Co-Skaneateles_Finger_Lakes_New_York.html</a>";

	$item23 = "<img src='assets/img/town-pier2'>";
    $info23 = "<a>https://www.pinterest.com/pin/145944844147552181/</a>";
	
	//Basic page setup
	include($path . "assets/inc/nav.php");
	include($path . "assets/inc/header.php");

		//Specify template(s)
		include($path . "assets/inc/about.php");
		include($path . "assets/inc/documentation.php");
	
	include($path . "assets/inc/footer.php");

?>