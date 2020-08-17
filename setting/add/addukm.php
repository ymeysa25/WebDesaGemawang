<?php
include '../../koneksi.php';
include '../../template/template.php';
?>


<!-- Page Content -->
<div style="margin-left:18%">

<div class="w3-container w3-blue">
  <h1>Tambah UKM</h1>
</div>
<div class="container" style="margin-top: 20px">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label>Nama UKM</label>
						<input class="form-control"  type="text" name="nama_ukm"
						placeholder="Masukan Nama UKM"/>
			    </div>
			    <div class="form-group col-md-6">
			    	<label>Tahun Berdiri</label>
			      <input class="form-control" type="number" name="tanggal" 
						placeholder="contoh: 2010">
			    </div>
			  </div>

			  <label>Nama Pemilik</label>
						<input class="form-control"  type="text" name="pemilik"
						placeholder="Masukan Nama Pemilik"/>

			<label>Deskripsi UKM</label>
			<textarea class="form-control" rows="5" name ="deskripsi" placeholder="Deskripsikan UKM"></textarea>
			</textarea>
				
			<input type="file" name="foto" /><br><br>
			<input type="submit" name="simpan" value="Simpan Postingan" /><br>
		</form>
</div>
		<?php
		if(isset($_POST['simpan'])){
			$folder = '../../images/ukm/';
			$name_p = $_FILES['foto']['name'];
			$rename = date('Hs').$name_p;
			$sumber_p = $_FILES['foto']['tmp_name'];
			move_uploaded_file($sumber_p, $folder.$rename);


			$nama_ukm = $_POST['nama_ukm'];
			$deskripsi = $_POST['deskripsi'];
			$pemilik = $_POST['pemilik'];
			$tanggal = $_POST['tanggal'];

			$query = "INSERT INTO `ukm` (`id_ukm`, `nama_ukm`, `deskripsi`, `pemilik`, `img`, `date`, `tgl_berdiri`) VALUES (NULL, '$nama_ukm', '$deskripsi', '$pemilik', '$rename', CURRENT_DATE, '$tanggal');";
			$insert = mysqli_query($connect, $query);
			if($insert) {
				// echo "Data Berhasil Disimpan";
				header('location:../../settingukm.php');
			}
			else{
				echo "Gagal Disimpan";
			}
		}
		?>

</body>
</html>


