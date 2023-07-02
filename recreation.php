
<?php

//Page title and path nesting
$page = "Recreation";
$path = "./";


//Specify content to populate reusable template included before unique content of the page
$about_img = "assets/img/recreation.jpg";
$about_alt = "A picture of a boat making a sharp turn on the water";

$about_h2 = "Who's Ready to Get Outside and Have Some Fun?";
$about_p = "Although the nightlife is somewhat limited around Skaneateles, you will find plenty of ways to stay entertained on the lake during the day! Great for swimming, motor boating, water sports, and sailing. Check out some popular recreation options below.";

$features = "Consider this a Call to Action for the Child in You that Just Wants to Play!";

$card_title1 = "Rent a Boat";
$card_img1 = $path . "assets/img/marina.jpg";
$card_alt1 = "An arial shot of the Skaneateles Marina";
$card_p1 = "If you would like to rent a boat, you can do so by contacting the Marina to get more information. Rentals can range from a half day to a full day. Keep your eye on the gas gauge- getting an emergency tow is expensive! Also, be careful to return your rental before dark. Boating on an unfamiliar lake in the dark can be a scary experience! If you have your own boat, we recommend launching at the state boat launch. Keep in mind that parking will fill up quickly on summer weekends, so arrive early if you want to ensure you can get a parking spot!";

$card_title2 = "Country Club";
$card_img2 = $path . "assets/img/countryclub.jpg";
$card_alt2 = "A picture of the Skaneateles Country Club";
$card_p2 = "If you are looking for recreation options out of the water, you can check out the country club for golfing and tennis. Don't worry there is still a great view of the west side of the lake!";

$card_title3 = "Sailing";
$card_img3 = $path . "assets/img/sailing.jpg";
$card_alt3 = "A picture of a sailboat on the water";
$card_p3 = "The sail boat club is on the east side of the lake and it is a great option for any type of sailor, whether you're a novice or experienced. Sailing lessons can be taken here, and boats can be rented as well.";


//Basic page setup
include($path . "assets/inc/nav.php");
include($path . "assets/inc/header.php");

    //Specify template(s)
    include($path . "assets/inc/about.php");
    include($path . "assets/inc/triple-horiz.php");

include($path . "assets/inc/footer.php");

?>