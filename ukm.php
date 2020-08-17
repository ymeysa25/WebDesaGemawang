<?php
	include 'koneksi.php';
	include 'template/navbar.php';

	$ukm =  "SELECT * , DATE_FORMAT(ukm.date, '%d %M %Y') as tanggal FROM `ukm` ;";

	 $pdquery = "SELECT * FROM `potensidesa` ORDER BY `potensidesa`.`date` ASC;";

	 $sosmed = "SELECT * FROM `sosmed`";
	 $kontak = "SELECT * FROM `kontak`";
?>

<section class="ukm">
	<h1>UKM DESA GEMAWANG</h1>
	 	<div class="container">
 			<div class="row"> 
 				<?php
					$result = mysqli_query($connect, $ukm) or die (mysqli_error($connect));
					while ($hasil = mysqli_fetch_array($result))
					{
				?>
 				<div class="col-md-4">
 					<div class="single-blog">
				 		<p class="blog-meta"> <span><?php echo $hasil['tanggal']; ?></span> </p><br>
 						<img src="images/ukm/<?php echo $hasil['img']; ?>">
 						<h2><a href="#"><?php echo $hasil['nama_ukm']; ?></a></h2>
 						<p class="blog-text"><?php 
 							if (strlen($hasil["deskripsi"])<=100) {
								echo $hasil["deskripsi"];
								?>
								<br><br>
								<a class="read-more-btn" href='detailpost.php?id=<?php echo $hasil['id_ukm']; ?>'>READMORE</a>
								<?php
							}
							else{
								$y=substr($hasil["deskripsi"],0,150);
								 ?>
								 <?php echo $y; ?>... <br><br>
								<a class="read-more-btn" href='detailpost.php?id=<?php echo $hasil['id_ukm']; ?>'>READMORE</a>
			    				 <?php
							}	
 						 ?></p>
 						<!-- <span><i class="fa fa-thumbs-up" aria-hidden="true"></i></span> -->
 					</div>
 				</div>
 			<?php } ?>
 			</div>
 		</div>
 	</section>

 	<section class="ukm-lokasi">
 		<h1>Lokasi UKM</h1>
 		<div class="container">
 			<iframe width="100%" height="520" frameborder="0" src="https://ymeysa25.carto.com/builder/018eff0c-8a16-4de6-a39d-ca6ba1e60bae/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
 		</div>
 		
 		
 	</section>
<?php
	include 'template/footer.php';
?>