<?php
include '../../koneksi.php';
$id = $_GET['id'];
	$query = "SELECT * FROM sosmed where id = '$id'";
	$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
	$row = mysqli_fetch_array($result);
include '../../template/template.php';
?>


<!-- Page Content -->
<div style="margin-left:18%">

<div class="w3-container w3-blue">
  <h1>Edit Sosial Media</h1>
</div>
<div class="container" style="margin-top: 20px">
		<form action="" method="post" enctype="multipart/form-data" style="margin: 20px">
			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label> <i class="fa fa-phone-square"> Facebook </i></label>
						<input class="form-control"  type="text" name="facebook"
						placeholder="Masukan Judul" value="<?php echo $row['facebook']; ?>"/> <br>

				<label> <i class="fa fa-envelope"> Youtube </i></label>
						<input class="form-control"  type="text" name="youtube"
						placeholder="Masukan Judul" value="<?php echo $row['youtube']; ?>"/><br>

				<label> <i class="fa fa-map-marker"> Instagram </i></label>
						<input class="form-control"  type="text" name="instagram"
						placeholder="Masukan Judul" value="<?php echo $row['instagram']; ?>"/>

			    </div>

			    
			  </div>
			
			
			<input type="submit" name="simpan" value="Simpan Postingan" /><br>
		</form>
</div>
		<?php
		if(isset($_POST['simpan'])){

			$facebook = $_POST['facebook'];
			$youtube = $_POST['youtube'];
			$instagram = $_POST['instagram'];
		
			$query = "UPDATE `sosmed` SET `id`='$id',`facebook`='$facebook',`youtube`='$youtube',`instagram`='$instagram' WHERE id = '$id'";

			$insert = mysqli_query($connect, $query);
			if($insert) {
				// echo "Data Berhasil Disimpan";
				header('location:../../settingsosmed.php');
			}
			else{
				echo "Gagal Disimpan";
			}
		}
		?>

</body>
</html>



