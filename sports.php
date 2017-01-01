<!doctype html>
<html>
<head>
	<title>SPORTS-Explore what's happening in Bangladesh</title>
	

</head>
<body>

	<div class="topheader">
		<a href="art.html">Art</a>
		<a href="music.html">Music</a>
		<a href="networking.html">Networking</a>
		<a href="sports.html">Sports</a>
		<a href="workshop.html">Workshop</a>
		<a href="seminars.html">Seminars</a>
		<?php
	if(loggedin()) {
		echo '<a href=logout.php>Log Out</a>';
	}else {
	}
	?>
	</div>
	
</body>
</html>