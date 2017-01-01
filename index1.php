<!doctype html>
<html>
<?php
include 'connection.php';
include 'loginFunction.php';
?>
<head>
	<title>Explore what's happening in Bangladesh</title>
	<style type="text/css">
body{
    margin:0px;
   }
.header-cont {
    width:100%;
    position:fixed;
    top:0px;
}
.header {
    height:50px;
    background:#F0F0F0;
    border:1px solid #CCC;
    width:960px;
    margin:0px auto;
}
.content {
    width:960px;
    background: #F0F0F0;
    border: 1px solid #CCC;
    height: 2000px;
    margin: 70px auto;
}
</style>

</head>
<body>

	<div class="header-cont">
	<div class="header">
	<div class="content">
		<a href="art.html" style="color:orange">Art</a>
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
	</div>
	</div>
	
	
<form method='post'>
<?php

if(isset($_POST['login_button'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(empty($username) or empty($password)) {
		echo 'Fields empty';
	}
	else {
		$query = mysqli_query($connection,"SELECT id FROM customer WHERE username='$username' AND password='$password'");
		$run = mysqli_fetch_array($query);
		$id = $run['id'];
		
		if(!empty($id)) {
			if($id==1) {
				$_SESSION['id'] = $id;
				header('location: admin.php');
			}
			else {
				$_SESSION['id'] = $id;
			    header('location: allevents.php');
			}
		}
		else {
			echo 'Wrong username or password';
		}
	}
}?>
	
	<div class="log_in_section">
		Username:<br/>
		<input type='text' name='username'/>
		<br/>
		<br/>
		Password:<br/>
		<input type='password' name='password'/>
		<br/>
		<br/>
		<input type='submit' name='login_button' value='Login'/>
	</div>
	</form>
</body>
</html>