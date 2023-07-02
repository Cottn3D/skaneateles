<?php

	//Page title and path nesting
	$page = "Forum";
	$path = "./";


	//Specify content to populate reusable template included before unique content of the page
	$about_img = "assets/img/town2.jpg";
	$about_alt = "A picture of the town of Skaneateles that was taken from the lake";
	$about_h2 = "Add a Comment";
	$about_p = "Please take a moment to share your thoughts with us! We appreciate any feedback you might be willing to share about our website and/or town. We hope you enjoyed your experience :)";


	//Basic page setup
	include($path . "assets/inc/nav.php");
	include($path . "assets/inc/header.php");

		//Specify template(s)
		include($path . "assets/inc/about.php");
		// include($path . "assets/inc/dbconf.php"); 
		// if( !empty($_GET['fname']) && !empty($_GET['utf-8'])) {

		// 	$stmt = $mysqli->prepare("insert into comments (name, comment, last_modified) values(?,?,?)");
		// 	$date = date("Y-m-d h:i:s");
		// 	$stmt->bind_param("sss",$_GET['fname'],$_GET['utf-8'],$date);
		// 	$stmt->execute();
		// 	$stmt->close();
		// }
		
		
		// UNCOMMENT FOR WORKING MYSQL

?>

<div class="main" id="comments">

<form action="comments.php" method="get">
	<label for="fname">First Name</label>
	<input type="text" id="fname" name="fname" required><br>

	<label for="utf-8"></label>
	<textarea id="utf-8" name="utf-8" rows="4" cols="50" required></textarea><br>
	<button type="submit" value="Submit">Add to the List</button>

</form>

<hr>

<table>
				<!-- <?php
					$sql = "SELECT * FROM comments";
					$result = $mysqli->query($sql);

					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
				?> -->
				
				 <!-- UNCOMMENT FOR WORKING MYSQL -->

	<div id="comment_block">
		<h3><?php echo $row["name"];?></h3>
		<p><?php echo $row["comment"];?></p>
		<p><?php echo $row["last_modified"];?></p>
	</div>

				<!-- <?php 
						}
					} else {
					echo "EMPTY";
					}
					$mysqli->close();
				?> -->
				
				<!-- UNCOMMENT FOR WORKING MYSQL -->
</table>

</div>

<?php
	include($path . "assets/inc/footer.php");
?>