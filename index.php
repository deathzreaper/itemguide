<html>
<head>
<link rel="stylesheet" href="styles.css">

</head>

<?php
	include("login.php"); //include login

	//reopen login if fail
	if(isset($_GET['submitFail'])){
		echo "<script>document.getElementById(\"login\").style.display=\"block\"</script>";
	}

	include("header.php");
?>

<div id = "grad1">
	<div id = "body">
	<!-- Page content -->
		<center>
		<img src="img/logo.png" alt="tft logo" width="550px" height="380px" align= "center">
		</center>
		
		<p class = "a" >Welcome to Teamfight Tactics Guide</p><br>
		
		<center>
		<img src="img/tft.jpg" alt="tft logo" width="550px" height="450px" align= "center">
		</center>
		
		<p class="b">Teamfight Tactics (or TFT) is an autobattler game mode. It was first presented on June 10, 2019, 
		started being available on PBE on June 18, 2019, and available on live server on June 25-28, 2019. 
		Teamfight Tactics is an 8-player free-for-all drafting tactics game in which the player recruits powerful champions, 
		deploys them, and battles to become the last player standing. <font color = "#EE736D"><b> Register to receive the latest news and 
		patch update about Teamfight Tactics! </b></font>
		<br> Good luck and have fun on the rift!!!</p>

	<!-- End page content -->
	<div class = "push"></div>
	
	</div>
	<?php include("footer.php");?>
<!-- Footer -->
</div>
</html>