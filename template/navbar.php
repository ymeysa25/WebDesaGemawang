<?php
	session_start();
	$status = $_SESSION['status'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Desa Gemawang</title>
	<link rel="stylesheet" href="pages5.css">
	<link rel="stylesheet" href="cardview2.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section class="header">
		<div class="container">
			<img src="images/logo.png">
			<?php
				if ($status == 1) {
					?> <a href="logout.php" class="home-btn" style="width: 120px;"> Log Out</a>
			<a href=""></a>
			
			<a href="settingpost.php" class="home-btn" style="width: 120px;"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>  Pengaturan</a>
			<?php
				} 
				else {
					?>
						<a href="login.php" class="home-btn" style="width: 120px;"> Login</a>
			<a href=""></a>
					<?php
				}
			?>
			<!-- <button type="button" class="login-btn">Login</button> -->

		<a href="profil.php" class="home-btn" style="width: 120px;"><i class="fa fa-user" aria-hidden="true"></i>  Profil</a>

		<a href="ukm.php" class="home-btn" style="width: 120px;"><i class="fa fa-address-card-o" 	aria-hidden="true"></i>  UKM</a>

		<a href="home.php" class="home-btn" style="width: 120px;"><i class="fa fa-home" aria-hidden="true"></i>  Home</a>
		
	</div>	
</section>