<?php
	include("login.php");
?>
<html>
<head>
	<title>TFT Item Guide</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="styles.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
		th{
			font-weight: normal;
		}
	</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding  w3-card header-letter-spacing">

    <!-- Right-sided navbar links. Hide them on small screens -->
		<div class="w3-center w3-hide-small">
		  <a href="index.php" class="w3-bar-item w3-button">Home</a>
		  <a href="tutorial.php" class="w3-bar-item w3-button">Tutorial</a>
		  <a href="item.php" class="w3-bar-item w3-button">Items</a>
		  <a id="register" href="register.php" class="w3-bar-item w3-button">Register</a>
		  <a id="login" onclick="document.getElementById('login').style.display='block'" class="w3-bar-item w3-button">Login</a>
		  
		  <span class="w3-bar-item invisible" id="username"><b>
			<?php if(isset($_SESSION['user']))echo $_SESSION['user'];?></b></span>
		  <a id="summary" class="w3-bar-item w3-button" style="display:none;" href="summary.php">User Summary</a>


		</div>
		<div class="w3-right w3-hide-small">

		  <div class="w3-bar-item">
			<span class="header-time-letter-spacing" id="date"></span>
			<span class="header-time-letter-spacing" id="time"></span>
		  </div>

		  <span class="w3-bar-item invisible" id="username"><b>
			<?php if(isset($_SESSION['user']))echo $_SESSION['user'];?></b> 
			<b><?php if(isset($_SESSION['admin']))echo $_SESSION['admin'];?></b></span>
			
			<a id="logout" class="w3-bar-item w3-button w3-black w3-round-large"
			style="display:none;" href="logout.php">Logout</a>
			
			
		</div>

    </div>
  </div>
<?php
	//change the header if login is success
	if(isset($_SESSION['user'])){
		echo "<script>document.getElementById(\"logout\").style.display = \"block\";</script>";
		echo "<script>document.getElementById(\"username\").style.display = \"none\";</script>";
		echo "<script>document.getElementById(\"login\").style.display = \"none\";</script>";
		echo "<script>document.getElementById(\"register\").style.display = \"none\";</script>";
	}
	
	if(isset($_SESSION['admin'])){
		echo "<script>document.getElementById(\"logout\").style.display = \"block\";</script>";
		echo "<script>document.getElementById(\"username\").style.display = \"none\";</script>";
		echo "<script>document.getElementById(\"summary\").style.display = \"block\";</script>";
		echo "<script>document.getElementById(\"login\").style.display = \"none\";</script>";
		echo "<script>document.getElementById(\"register\").style.display = \"none\";</script>";
	}
?>

<!-- javascript to update time and date -->
<script type="text/javascript">
		var dateElement = document.getElementById("date");

		function updateDate(date){
			n =  new Date();
			y = n.getFullYear();
			m = n.getMonth() + 1;
			d = n.getDate();

			date.innerHTML = m + "/" + d + "/" + y;
		}

		var clockElement = document.getElementById( "time" );

		function updateClock ( clock ) {
			clock.innerHTML = new Date().toLocaleTimeString();
		}
		updateClock( clockElement );
		updateDate( dateElement);
		setInterval(function () {
			updateClock( clockElement );
			updateDate( dateElement);
		}, 1000);
</script>
