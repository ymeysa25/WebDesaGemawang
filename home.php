<?php
session_start();
$status = $_SESSION['status'];

?>
<?php
	include 'koneksi.php';

	$postquery =  "SELECT * , DATE_FORMAT(postingan.date, '%d %M %Y') as tanggal FROM `postingan` LIMIT 4;";

	 $pdquery = "SELECT * FROM `potensidesa` ORDER BY `potensidesa`.`date` ASC;";

	 $sosmed = "SELECT * FROM `sosmed`";
	 $kontak = "SELECT * FROM `kontak`";


?>
<!DOCTYPE html>
<html>
<head>
	<title>Desa Gemawang</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="header">
		<div class="container">
			<img src="images/logo.png">
			<?php
				if ($status == 1) {
					?> <a href="logout.php" class="setting-btn" style="width: 120px;"> Log Out</a>
			<a href=""></a>
			
			<a href="settingpost.php" class="setting-btn" style="width: 120px;"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>  Pengaturan</a>
			<?php
				} 
				else {
					?>
						<a href="login.php" class="setting-btn" style="width: 120px;"> Login</a>
			<a href=""></a>
					<?php
				}
			?>
			
		</div>
	<h1>Desa Gemawang</h1>
	<p>Kecamatan Jambu, Kabupaten Semarang</p>
	<!-- <p><?php echo $_SESSION['status']; ?></p> -->
	<div style="float: center;">
		<a href="index.php" class="home-btn" style="width: 120px;"><i class="fa fa-home" aria-hidden="true"></i>  Home</a>

		<a href="ukm.php" class="home-btn" style="width: 120px;"><i class="fa fa-address-card-o" aria-hidden="true"></i>  UKM</a>

		<a href="profil.php" class="home-btn" style="width: 120px;"><i class="fa fa-user" aria-hidden="true"></i>  Profil</a>

		
	</div>	
	</section>
	<section class="post">
		<h1>Kegiatan Desa</h1>
		<?php
			$result = mysqli_query($connect, $postquery) or die (mysqli_error($connect));
		while ($hasil = mysqli_fetch_array($result)){
		?>
		<div class="post-box"> 
			<div class="row">
				<div class="col-md-4">
					<center><img src="images/post/<?php echo $hasil['img']; ?>" style="border-radius: 5%; width: auto;height: 200px;margin: 12px; margin-left: 40px"></center>
				</div>	
				
				<div class="col-md-8" style="margin-top: 15px">
					<h3><?php echo $hasil['title']; ?></h3>
					<h5 style="font-size: 15px; "><?php echo $hasil['tanggal']; ?></h5>	
					<div class="post-detail" style="text-align: justify;margin-right: 20px">
					<p><?php 
						

						if (strlen($hasil["pembuka"])<=100) {
								echo $hasil["pembuka"];
							}
							else{
								$y=substr($hasil["pembuka"],0,150);
								 ?>
								 <?php echo $y; ?>... <br><br>
								<a class="read-more-btn" href='detailpost.php?id=<?php echo $hasil['id_post']; ?>'>READMORE</a>
			    				 <?php
							}		
						?>
					</p>	
				</div>
					
				</div>			
			</div>
		</div>
	<?php } ?>
	</section>

	<section class="features" style="padding-left: 10px;">
		<h1>Potensi Desa</h1>
		<div class="row">
			<?php
			$result = mysqli_query($connect, $pdquery) or die (mysqli_error($connect));
		while ($hasil = mysqli_fetch_array($result)){
		?>
			<div class="col-md-4">
				<div class="feature-box">
					<div class="feature-img">
						<img src="images/potensi/<?php echo $hasil['img']; ?>">
						<!-- <div class="price">
							<p>78$</p>
						</div> -->
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</div>

					<div class="feature-details" >
						<h4 ><?php echo $hasil['title']; ?></h4>
						<p> <?php 
							if (strlen($hasil["deskripsi"])<=100) {
								echo $hasil["deskripsi"];
							}
							else{
								$y=substr($hasil["deskripsi"],0,150);
								 ?>
								 <?php echo $y; ?>... <br><br>
								<a class="read-more-btn" href='detail.php?id=<?php echo $hasil['id_pd']; ?>'>READMORE</a>
			    				 <?php
							}			

						?></p>
					</div>	
					<div ><!-- 
						<span><i class="fa fa-map-marker"></i>Gemawang</span>
						<span><i class="fa fa-sun-o"></i>3 Days</span>
						<span><i class="fa fa-moon-o"></i>4 Days</span> -->
					</div>
				</div>
			</div>
		<?php } ?>
		</div>
		
	</section>

	<section class="gallery">
		<h1>Galeri Desa</h1>
		<div class="container">
			<div class="row">
				<?php
					$result = mysqli_query($connect, $postquery) or die (mysqli_error($connect));
					while ($hasil = mysqli_fetch_array($result))
					{
				?>
				<div class="col-md-3">
					<div class="gallery-box">
						<img src="images/post/<?php echo $hasil['img']; ?>"">
						<h4><?php echo $hasil['title']; ?></h4>
					</div>
				</div>

				<?php }  ?>
			
		</div>		
	</section>

	<section class="banner">
		<div  class="banner-highlights">
			<div class="row">
				<div class="col-md-8">
					<h2>Get 30% Discount on our destination</h2>

					<p>Visit Our Place and avail 30% flat discount.</p>
				</div>
				<div class="col-md-4">
					<button onclick="window.location.href='https://www.google.com/maps/place/Gemawang,+Kec.+Jambu,+Semarang,+Jawa+Tengah/@-7.3511815,110.2676118,12z/data=!3m1!4b1!4m5!3m4!1s0x2e7a7fef641ebdcb:0x5027a76e356fc90!8m2!3d-7.3179035!4d110.3398179'" type="button" class="booking-btn">Visit Now</button>					
				</div>
					
				</div>
				
			</div>
			
		</div>
		
	</section>

	<section class="users-feedback">
		<h1>Created By</h1>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="user-review">
						<p>Never bend your head. Always hold it high. Look the world straight in the eye.</p>
						<h5>Daffa Rizki P</h5>
					<small>IESP 16 </small>
					</div>
					<img src="images/profil/1.jpg">
				</div>	

				<div class="col-md-4">
					<div class="user-review">
						<p>When you have a dream, you've got to grab it and never let go.</p>
						<h5>Yogie Meysa Tama</h5>
					<small>Teknik Komputer 16 </small>
					</div>
					<img src="images/profil/2.jpg">
				</div>	

				<div class="col-md-4">
					<div class="user-review">
						<p>Success is not final, failure is not fatal: it is the courage to continue that counts.</p>
						<h5>Reyhan Fadhil Zachary</h5>
					<small>Akutansi 16</small>
					</div>
					<img src="images/profil/3.jpg">
				</div>	
			</div>
			
		</div>		
	</section>

	<section class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<img src="images/logo.png" class="footer-logo">
					<p>Gemawang adalah sebuah desa di Kecamatan Jambu, Kabupaten Semarang, Desa Gemawang merupakan desa vokasi pertama di Indonesia, Sesuai dengan motto desa, saat ini sedang dilaksanakan kegiatan pembelajaran diri untuk meningkatkan wawasan masyarakat dan untuk meningkatkan kesejahteraan tarah hidup masyarakat Desa Gemawang kearah yang lebih baik.</p>
				 </div>
				 <div class="col-md-3">
				 	<h4>Potensi Desa</h4>
				 	<?php
				 	$result = mysqli_query($connect, $pdquery) or die (mysqli_error($connect));
					while ($hasil = mysqli_fetch_array($result)){
						?>
				 	<p><?php echo $hasil['title']; ?></p>

				 <?php } ?>
				 </div>
				 <div class="col-md-3">
				 	<h4>Quick Contact</h4>
				 	<?php
				 	$result = mysqli_query($connect, $kontak) or die (mysqli_error($connect));
					while ($hasil = mysqli_fetch_array($result)){
						?>
				 	<p><i class="fa fa-phone-square"> <?php echo $hasil['telpon']; ?></i></p>
				 	<p><i class="fa fa-envelope"> <?php echo $hasil['email']; ?></i></p>
				 	<p><i class="fa fa-home"> <?php echo $hasil['alamat']; ?></i></p>
				 <?php } ?>
				 </div>
				 <div class="col-md-3">
				 	<h4>Follow Us on</h4>
				 	<?php
				 	$result = mysqli_query($connect, $sosmed) or die (mysqli_error($connect));
					while ($hasil = mysqli_fetch_array($result)){
						?>
				 	<p><i class="fa fa-facebook-official"> <?php echo $hasil['facebook']; ?></i></p>
				 	<p><i class="fa fa-youtube-play"> <?php echo $hasil['youtube']; ?></i></p>
				 	<p><i class="fa fa-instagram"> <?php echo $hasil['instagram']; ?></i></p>
				 <?php } ?>
				 </div>
			</div><hr style="background: white">
			<p style="text-align: center;" class="copyright">Made By <i class="fa fa-heart"></i> TIM 2 KKN TEMATIK UNDIP</p>
		</div>
	</section>
	
</body>
</html>