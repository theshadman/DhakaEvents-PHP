<html>
<?php
include 'connection.php';
include 'loginFunction.php';

if(loggedin()){
	if($_SESSION['id']!=1){
		echo 'gets here';
		header('location:allevents.php');
	}else{
		echo 'goes to else';
	}
}else{
	header('location:index.php');
}
?>

<head>
	<title>Explore what's happening in Bangladesh</title>
</head>


<body>

	<div class="topheader" style="visibility:hidden">
		<a href="art.html">Art</a>
		<a href="music.html">Music</a>
		<a href="networking.html">Networking</a>
		<a href="sports.html">Sports</a>
		<a href="workshop.html">Workshop</a>
		<a href="seminars.html">Seminars</a>
	</div>
	
	
<form method='post'>
<?php

if(isset($_POST['login_button'])) {
		$name=$_POST['name'];
		$venue=$_POST['venue'];
		$fromdate=$_POST['fromdate'];
		$todate=$_POST['todate'];
		$details=$_POST['details'];
		$time=$_POST['time'];
		$type=$_POST['type'];
		$query="INSERT INTO allevents (name,venue,fromdate,todate,details,time,type) VALUES ('$name', '$venue' , '$fromdate' , '$todate' , '$details' , '$time' , '$type')";
		//$run = mysqli_fetch_array($query);
		
		
		if (mysqli_query($connection,$query) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $connection->error;
		}
		$query="INSERT INTO $type (name,venue,fromdate,todate,details,time) VALUES ('$name', '$venue' , '$fromdate' , '$todate' , '$details' , '$time')";

		if (mysqli_query($connection,$query) === TRUE) {
			echo "New record created successfully speciality";
		} else {
			echo "Error: " . $sql . "<br>" . $connection->error;
		}
}?>
	
	<div class="log_in_section">
		Name:<br/>
		<input type='text' name='name'/>
		<br/>
		<br/>
		Venue:<br/>
		<input type='text' name='venue'/>
		<br/>
		<br/>
		From date:<br/>
		<input type='date' name='fromdate'/>
		<br/>
		<br/>
		To date:<br/>
		<input type='date' name='todate'/>
		<br/>
		<br/>
		Details:<br/>
		<input type='text' name='details'/>
		<br/>
		<br/>
		Time:<br/>
		<input type='time' name='time'/>
		<br/>
		<br/>
		Type:<br/>
		<input type='text' name='type'/>
		<br/>
		<br/>
		<input type='submit' name='login_button' value='Input'/>
	</div>
	</form>
	
	<?php
	if(loggedin()) {
		echo '<a href=logout.php>Log Out</a>';
	}else {
		echo 'here';
	}
	?>
</body>
</html>