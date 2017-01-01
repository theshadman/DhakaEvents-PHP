<?php

include 'connection.php';


$id=mysqli_query($connection,"SELECT * FROM allevents");

$post=array();
while($row=mysqli_fetch_assoc($id)){
	$post[]=$row;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>All events</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="icon" type="image/png" href="img/iconv2.png" width="50px">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
	<link rel="stylesheet" href="css/creative2.css" type="text/css">


</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
      </a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="index.php#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#features">Features</a>
                    </li>
                    <li>
                        <a  class="page-scroll" href="index.php#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="logincheck.php#login">Login</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="login.php#signup">Register</a>
                    </li>
                    
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div id="outPopUp">
        <table border="2" style="width:100%">
			<tr>
			<td><b>Name</b></td>
			<td><b>Venue</b></td>
			<td><b>From</b></td>
			<td><b>To</b></td>
			<td><b>Time</b></td>			
			</tr>
			<?php foreach ($post as $row) : ?>
			<tr>
			<td>
			
			<a href="allevents.php"><?php echo $row['name']; ?></a>
			</td>
			<td><?php echo $row['venue']; ?></td>
			<td><?php echo $row['fromdate']; ?></td>
			<td><?php echo $row['todate']; ?></td>
			<td><?php echo $row['time']; ?></td>
			</tr>
			<?php endforeach; ?>
			
   </table>
        </div>
		
		
		<!-- <div class="wrapper">
			<div class="table">
				<div class="row header">
					<div class="cell">
						Name
					</div>
					<div class="cell">
						Venue
					</div>
					<div class="cell">
						To
					</div>
					<div class="cell">
						From
					</div>
					<div class="cell">
						Time
					</div>
				</div>
				
				<div class="row">
					<?php foreach ($post as $row) : ?>
			<div class="cell">
			<a href="www.google.com"><?php echo $row['name']; ?></a>
			</div>
			<div class="cell"><?php echo $row['venue']; ?></div>
			<div class="cell"><?php echo $row['fromdate']; ?></div>
			<div class="cell"><?php echo $row['todate']; ?></div>
			<div class="cell"><?php echo $row['time']; ?></div>
			<?php endforeach; ?>					
				</div>
			</div>
		
		</div>-->
                
               
    </header>

    

   

     

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript 
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>-->

    <!-- Custom Theme JavaScript 
    <script src="js/creative.js"></script>-->

</body>

</html>