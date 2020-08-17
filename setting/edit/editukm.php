<?php
include '../../koneksi.php';
$id = $_GET['id'];
	$query = "SELECT * FROM ukm where id_ukm = '$id'";
	$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
	$row = mysqli_fetch_array($result);
include '../../template/template.php';
?>


<!-- Page Content -->
<div style="margin-left:18%">

<div class="w3-container w3-blue">
  <h1>Edit Post</h1>
</div>
<div class="container" style="margin-top: 20px">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label>Nama UKM</label>
				<input  class="form-control"  type="text" name="nama_ukm" placeholder="Masukan Nama UKM" 
				value="<?php echo $row['nama_ukm']; ?>"/>
			    </div>
			    <div class="form-group col-md-6">
			    	<label>Tahun Berdiri</label>
			      <input class="form-control" type="number" name="tanggal" 
						placeholder="Masukan Tanggal Upload" value="<?php echo $row['tgl_berdiri']; ?>">
			    </div>
			  </div>

			  <label>Nama Pemilik</label>
						<input class="form-control"  type="text" name="pemilik"
						placeholder="Masukan Nama Pemilik" value="<?php echo $row['pemilik']; ?>"/>

			<label>Deskripsi UKM</label>
			<textarea class="form-control" rows="5" name ="deskripsi" placeholder="Deskripsikan UKM"><?php echo $row['deskripsi']; ?></textarea>
			</textarea>
			
			<label>Foto UKM</label><br>
			<input type="file" name="foto" /><br><br>
			<input type="submit" name="simpan" value="Simpan Postingan" /><br>
		</form>
</div>
		<?php
		if(isset($_POST['simpan'])){
			$folder = '../../images/ukm/';
			$name_p = $_FILES['foto']['name'];

			if ($name_p == "") {
				# code...
				$rename = $row['img'];
			}
			else {
			$rename = date('Hs').$name_p;
			$sumber_p = $_FILES['foto']['tmp_name'];
			move_uploaded_file($sumber_p, $folder.$rename);
			}


			$nama_ukm = $_POST['nama_ukm'];
			$deskripsi = $_POST['deskripsi'];
			$pemilik = $_POST['pemilik'];
			$tanggal = $_POST['tanggal'];
			
			// $query = "UPDATE `ukm` SET `id_ukm` = '$id', `nama_ukm` = '$nama_ukm', `deskripsi` = '$deskripsi', `$pemilik` = 'Pak jlamrang A', `img` = '$rename', `date` = '2019-08-19', `tgl_berdiri` = '$tanggal' WHERE `ukm`.`id_ukm` = '$id';";

			$query = "UPDATE `ukm` SET `id_ukm` = '$id', `nama_ukm` = '$nama_ukm', `deskripsi` = '$deskripsi', `pemilik` = '$pemilik', `img` = '$rename', `date` = CURRENT_TIMESTAMP, `tgl_berdiri` = '$tanggal' WHERE `ukm`.`id_ukm` = '$id';";

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



