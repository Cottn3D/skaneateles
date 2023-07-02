<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style.css">
	<title><?php echo $page; ?></title>

    <!--IMPORTS MODEL-VIEWER PKG -->
    <!-- <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script> -->
</head>

<script>

	var intervalID;

	function moveIt(){
		//each time it is clicked, make the image (id of 'best') move right by 10 pixels

		originalPosition = document.getElementById("best").style.left;
		newPosition = parseInt(originalPosition) + 10;
		
		document.getElementById("best").style.left = newPosition + "px";

		intervalID = setTimeout(moveIt, 200);

	}

</script>

<body>
	<header id="top"> 
		<div id="toptext">
			<button onclick="moveIt();">Click Here to Sail!</button>
		</div> 
		<div >
			<img id="best" style="position:absolute;left:20px;top:17%; width:70px;" src="<?php echo $path; ?>assets/img/boat2.png">
		</div> 
	</header> 

	<section id="maincontainer"> 
		<img id="wave" src="<?php echo $path; ?>assets/img/background.png" alt="line art of people fishing and wakeboarding on the lake">
		<h1><?php echo $page; ?></h1>
		<div id="contentwrapper">