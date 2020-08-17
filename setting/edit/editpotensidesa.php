<?php
include '../../koneksi.php';
$id = $_GET['id'];
	$query = "SELECT * FROM potensidesa where id_pd = '$id'";
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
		<form action="" method="post" enctype="multipart/form-data" style="margin: 20px">
			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label>Judul Postingan</label>
						<input class="form-control"  type="text" name="title"
						placeholder="Masukan Judul" value="<?php echo $row['title']; ?>"/>
			    </div>
			 	<div class="form-group col-md-6">
			    	<label>Tanggal Upload</label>
			      <input class="form-control" type="date" name="tanggal" 
						placeholder="Masukan Taggal Upload"  value="<?php echo $row['date']; ?>">
			    </div>
			  </div>


			<label>Deskripsi Potensi</label>
			<textarea class="form-control" rows="5" name="deskripsi"><?php echo $row['deskripsi']; ?></textarea>
			</textarea> <br>

			<label>Foto Kegiatan</label><br><br>
			<input value="fileupload" type="file" name="foto" /><br><br>
			
			<input type="submit" name="simpan" value="Simpan Postingan" /><br>
		</form>
</div>
		<?php
		if(isset($_POST['simpan'])){
			$folder = '../../images/potensi/';
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



			$title = $_POST['title'];
			$deskripsi = $_POST['deskripsi'];
			$tanggal = $_POST['tanggal'];

		
			$query = "UPDATE `potensidesa` SET `id_pd`='$id',`title`='$title',`deskripsi`='$deskripsi',`date`=NULL,`img`='$rename' WHERE id_pd = '$id'";

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



