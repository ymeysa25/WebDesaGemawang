<?php
include '../../koneksi.php';
$id = $_GET['id'];
	$query = "SELECT * FROM kontak where id = '$id'";
	$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
	$row = mysqli_fetch_array($result);
include '../../template/template.php';
?>


<!-- Page Content -->
<div style="margin-left:18%">

<div class="w3-container w3-blue">
  <h1>Edit Kontak</h1>
</div>
<div class="container" style="margin-top: 20px">
		<form action="" method="post" enctype="multipart/form-data" style="margin: 20px">
			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label> <i class="fa fa-phone-square"> No Telpon </i></label>
						<input class="form-control"  type="text" name="telpon"
						placeholder="Masukan Judul" value="<?php echo $row['telpon']; ?>"/> <br>

				<label> <i class="fa fa-envelope"> Email </i></label>
						<input class="form-control"  type="text" name="email"
						placeholder="Masukan Judul" value="<?php echo $row['email']; ?>"/><br>

				<label> <i class="fa fa-map-marker"> Alamat </i></label>
						<input class="form-control"  type="text" name="alamat"
						placeholder="Masukan Judul" value="<?php echo $row['alamat']; ?>"/>

			    </div>

			    
			  </div>
			
			
			<input type="submit" name="simpan" value="Simpan Postingan" /><br>
		</form>
</div>
		<?php
		if(isset($_POST['simpan'])){

			$telpon = $_POST['telpon'];
			$email = $_POST['email'];
			$alamat = $_POST['alamat'];
		
			$query = "UPDATE `kontak` SET `id`='$id',`telpon`='$telpon',`email`='$email',`alamat`='$email' WHERE id = '$id'";

			$insert = mysqli_query($connect, $query);
			if($insert) {
				// echo "Data Berhasil Disimpan";
				header('location:../../settingkontak.php');
			}
			else{
				echo "Gagal Disimpan";
			}
		}
		?>

</body>
</html>



