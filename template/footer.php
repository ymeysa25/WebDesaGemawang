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