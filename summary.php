<html>
<head>
<link rel="stylesheet" href="styles.css">
<style>
#table2 {
	text-align: center;
	width: 80%;
	border-collapse: collapse;
	
}
th{
	padding: 15px;
	color: #EAB2B2;
	font-weight: bold;
	border-bottom: 1px solid #ddd;
}
td {
	padding: 15px;
	color: #fff;
	border-bottom: 1px solid #ddd;
}
tr:hover {
	background-color: #999999;
}
</style>

</head>

<?php
	include("header.php");
?>

<div id = "grad1">
	<div id = "container2">
		
		<center><img src="img/logo.png" alt="tft logo" width="250px" height="180px" align= "center"><br><br>
			<table id = "table2">
				<?php
					$con=mysqli_connect("localhost", "root","","itemguide");
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$result = mysqli_query($con,"SELECT * FROM user");

					echo "
					<tr>
					<th>User ID</th>
					<th>User Password</th>
					<th>User Email</th>
					<th>User Date of Birth</th>
					</tr>";

					while($row = mysqli_fetch_array($result))
					{
					echo "<tr>";
					echo "<td>" . $row['user_id'] . "</td>";
					echo "<td>" . $row['user_pass'] . "</td>";
					echo "<td>" . $row['user_email'] . "</td>";
					echo "<td>" . $row['user_birth'] . "</td>";
					echo "</tr>";
					}

					mysqli_close($con);
				?>
			
			</table>
		</center>
	</div>


	
	<div class = "push"></div>
	
<!-- Footer -->
</div>
<?php include("footer.php");?>
</html>