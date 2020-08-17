<?php
include '../../koneksi.php';
include '../../template/template.php';
?>

<!-- Page Content -->
<div style="margin-left:18%">

<div class="w3-container w3-blue">
  <h1>Tambah Post</h1>
</div>
	<div class="container" style="margin-top: 20px">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label>Judul Postingan</label>
						<input class="form-control"  type="text" name="title"
						placeholder="Masukan Judul"/>
			    </div>
			    <div class="form-group col-md-6">
			    	<label>Tanggal Upload</label>
			      <input class="form-control" type="date" name="tanggal" 
						placeholder="Masukan Taggal Upload">
			    </div>
			  </div>

			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label>Pembuka</label>
				<textarea class="form-control" rows="4" name ="pembuka"></textarea>
				</textarea>
			    </div>
			    <div class="form-group col-md-6">
			    	<label>Penutup</label>
			<!-- <textarea name="pembuka" value="<?php echo $row['pembuka']; ?>"> -->
			<textarea class="form-control" rows="4" name="penutup"></textarea>
				
			</textarea>
			    </div>
			  </div>

			<label>Deskripsi Inti</label>
			<!-- <textarea name="pembuka" value="<?php echo $row['pembuka']; ?>"> -->
			<textarea class="form-control" rows="4" name="konten"></textarea><br>
				
			<input type="file" name="foto" /><br><br>
			<input type="submit" name="simpan" value="Simpan Postingan" /><br>
		</form>
</div>
		<?php
		if(isset($_POST['simpan'])){
			$folder = '../../images/post/';
			$name_p = $_FILES['foto']['name'];
			$rename = date('Hs').$name_p;
			$sumber_p = $_FILES['foto']['tmp_name'];
			move_uploaded_file($sumber_p, $folder.$rename);


			$title = $_POST['title'];
			$pembuka = $_POST['pembuka'];
			$konten = $_POST['konten'];
			$penutup = $_POST['penutup'];
			$tanggal = $_POST['tanggal'];

			$query = "INSERT INTO `postingan` (`id_post`, `title`, `pembuka`, `konten`, `penutup`, `date`, `img`) VALUES (NULL, '$title', '$pembuka', '$konten', '$penutup', '$tanggal', '$rename');";
			$insert = mysqli_query($connect, $query);
			if($insert) {
				// echo "Data Berhasil Disimpan";
				header('location:../../settingpost.php');
			}
			else{
				echo "Gagal Disimpan";
			}
		}
		?>

</body>
</html>



