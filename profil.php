<?php
	include 'koneksi.php';

	$postquery =  "SELECT * , DATE_FORMAT(postingan.date, '%d %M %Y') as tanggal FROM `postingan` LIMIT 4;";

	 $pdquery = "SELECT * FROM `potensidesa` ORDER BY `potensidesa`.`date` ASC;";

	 $sosmed = "SELECT * FROM `sosmed`";
	 $kontak = "SELECT * FROM `kontak`";

	 include 'template/navbar.php';
?>

<section class="decription">
	<h1>Profil Desa</h1>
	<div class="container"> 

		<div class="row" style="margin-left: 50px;">
			<div class="col-md-7">
				<p>Gemawang adalah sebuah desa di Kecamatan Jambu, Kabupaten Semarang, Desa Gemawang merupakan desa vokasi pertama di Indonesia, Sesuai dengan motto desa, saat ini sedang dilaksanakan kegiatan pembelajaran diri untuk meningkatkan wawasan masyarakat dan untuk meningkatkan kesejahteraan tarah hidup masyarakat Desa Gemawang kearah yang lebih baik.</p>
				
			</div>
			<div class="col-md-4">
				<div class="gambar">
					<img src="images/profil/pakkades.png">
				<label>Kepala Desa Gemawang</label>
				</div>
				
			</div>
		</div>
	</div>
	
</section>


<section class="visi-misi">
	<h1>VISI & MISI</h1>
	<div class="container">
		<div  class="row">
			<div class="col-md-4" style="margin-left: 100px">
				<!-- <h2>Visi</h2> -->
				<ol>
					<li>Pembenahan Birokrasi</li>
					<li>Sesuai Tupoksi didasari sikap saling melengkapi</li>
					<li>Pemerataan Pembangunan</li>
					<li>Pemanfaatan Sumber Daya Manusia secara Optimal</li>
					<li>Peningkatan Kemandirian Masyarakat Peningkatan Akses Pendidikan dan Keterampilan Masyarakat</li>
				</ol>
			</div>
			<div class="black-row">
				
			</div>
			<div class="col-md-6" style="margin-left: 0px">
				<!-- <h2>Misi</h2> -->
				<ol>
					<li>Membagi tugas secara proposional sesuai dengan tupoksi perangkat desa</li>
					<li>Melakukan pembinaan administrasi lingkungan dan kependudukan</li>
					<li>Membuat skala prioritas pembangunan secara adil kepada semua wilayah Melibatkan tokoh – tokoh masyarakat dalam pengambilan keputusan yang berkaitan dengan hajat hidup masyarakat</li>
					<li>Memberikan fasilitasi program yang mendorong perkembangan Usaha Mikro, Kecil, dan Menengah sehingga lebih mandiri dan maju </li>
					<li>Menghidupkan Lembaga Keuangan Desa untukmendorong perkembangan usaha masyarakat</li>
					<li>Mendorong keberlanjutan program pendidikan formal, non formal dan informal</li>
					<li>Memberi fasilitasi pelatihan berbagai ketrampilan sesuai kebutuhan masyarakat</li>
				</ol>
			</div>
		</div>
		
	</div>
	
</section>
<section class="letak-geografis">
	<div class="container">
		<div class="row">
			<div class="col-md-3" ">
			<img style="margin:30px; margin-top: 50px; width: 250px;height: auto" src="images/profil/lggemawang.jpeg">
			</div>

			<div class="col-md-2">
				<div class="row" style="margin: 15px">
					<div style="margin: 20px">
						<h3>L<br>E<br>T<br>A<br>K</h3>
					</div>
					<div>
						<h3>G<br>E<br>O<br>G<br>R<br>A<br>F<br>I<br>S</h3>
					</div>

					<div class="black-row">
						
					</div>
				</div>

				
				
				
			</div>

			<div class="col-md-7">
				<p>
					Desa Gemawang merupakan salah satu desa dari 10 kelurahan/ desa yang terdapat di Kecamatan Jambu, Kabupaten Semarang. Desa Gemawang secara geografs terletak pada 110⁰14’54,75” – 110⁰39’3” BT dan 7⁰3’57” – 7⁰30’ LS. Desa Gemawang merupakan desa Vokasi pertama di Indonesia pada tahun 2009. Ketnggian wilayah Desa Gemawang berada pada kisaran antara 680 meter di atas permukaan laut. Jarak antara Desa Gemawang ke pusat pemerintahan (orbitasi) yaitu kantor kecamatan 8 Km dan kantor bupat 35 Km.
					Desa Gemawang terbagi menjadi 7 dusun dan 8 RW, yaitu Dusun Krajan sebagai RW I, Dusun Banaran sebagai RW II dan RW III, Dusun Pitoro sebagai RW IV, Dusun Sekaja sebagai RW V, Dusun Jlamprang sebagai RW VI, Dusun Kerep sebagai RW VII, dan Dusun Guyang Warak sebagai RW VIII. Luas wilayah Desa Gemawang sebesar 786 Ha dengan penggunaan lahannya yatu sawah, tegalan/perkebunan, kebun campuran, dan permukiman. Desa Gemawang memiliki potensi komoditas unggulan pada sector pertanian khususnya pertanian padi dan kebun. Dengan luas lahan pertanian seluas 27,93 Ha, dan lahan kebun 426,06 Ha.

				</p>
				
			</div>


		</div>
	</div>
	
</section>

<?php
	include 'template/footer.php';
?>
