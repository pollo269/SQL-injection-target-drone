<?php
	include("config.php");

	if (isset($_GET['submit'])) {
		$username = $_GET['username'];
		$password = $_GET['password'];
		$query = "SELECT * FROM users WHERE username = '$username'";
		$result = mysqli_query($db,$query);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$num = mysqli_num_rows($result);
		
		echo '<pre>';
		echo $num.' result are found';
		echo '</pre>';
		$i = 0; 
		
		while ($i < $num) { 
		
			echo '<pre>'; 
			echo "Hello ".$row[$i]['username'].",your coupon is ".$row[$i]['coupon'];
			echo '</pre>';
			$i++; 
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Coupon</title>
	
	</head>

	<body>

		<div class="container">
			<form action="" method="get">
				<h1>Web Challenge</h1>
				<h3>Please log in</h2>	
				
				<input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
				
				<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
				<input name="submit" type="submit" value='Login'>
			</form>
		</div>
	</body>
</html>
