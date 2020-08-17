<?php
include '../../koneksi.php';
include '../../template/template.php';
?>


<!-- Page Content -->
<div style="margin-left:18%">

<div class="w3-container w3-blue">
  <h1>Tambah Potensi</h1>
</div>
<div class="container" style="margin-top: 20px">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label>Judul Postingan</label>
						<input class="form-control"  type="text" name="title"
						placeholder="Masukan Judul"/>
			    </div>
			  </div>

			<label>Deskripsi Potensi</label>
			<textarea class="form-control" rows="5" name ="deskripsi"></textarea>
			</textarea><br>
				
			<input type="file" name="foto" /><br><br>
			<input type="submit" name="simpan" value="Simpan Postingan" /><br>
		</form>
	</div>

		<?php
		if(isset($_POST['simpan'])){
			$folder = '../../images/potensi/';
			$name_p = $_FILES['foto']['name'];
			$rename = date('Hs').$name_p;
			$sumber_p = $_FILES['foto']['tmp_name'];
			move_uploaded_file($sumber_p, $folder.$rename);


			$title = $_POST['title'];
			$deskripsi = $_POST['deskripsi'];
			$tanggal = $_POST['tanggal'];

			$query = "INSERT INTO `potensidesa` (`id_pd`, `title`, `deskripsi`, `img`, `date`) VALUES (NULL, '$title', '$deskripsi', '$rename', NULL);";
			$insert = mysqli_query($connect, $query);
			if($insert) {
				// echo "Data Berhasil Disimpan";
				header('location:../../settingpotensidesa.php');
			}
			else{
				echo "Gagal Disimpan";
			}
		}
		?>

</body>
</html>



