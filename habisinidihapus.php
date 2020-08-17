<?php
   include 'template/head.php';
   include 'template/sidebartambah.php';
	include "koneksi.php";
//$query = "SELECT*FROM mahasiswa LIMIT 50 OFFSET 0";//
	$meteran = 2000;
	$beban = 5000;
	$limit = 50;

   function get_options()
   {
   		include "koneksi.php";
		$bulan = "SELECT * FROM bulan ORDER BY id ASC";
		$result = mysqli_query($connect, $bulan) or die(mysqli_error($connect));
		
		while ($row = mysqli_fetch_array($result)) {
			?>

			<option value="<?php echo $row['id']; ?>"><?php echo $row['nama_bulan']; ?></option>
			<?php
		}
	} 

   function get_year() {
   		include "koneksi.php";
		$tahundropdown = "SELECT DISTINCT(tahun) FROM cobalagi ORDER BY tahun ASC";
		$result = mysqli_query($connect, $tahundropdown) or die(mysqli_error($connect));

		while ($row = mysqli_fetch_array($result)) 
		{
			?>

			<option value="<?php echo $row['tahun']; ?>" selected><?php echo $row['tahun']; ?></option>
		<?php 
	} 

   }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo" style="margin-left:24%;">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Pendaftaran</h2>

                    <form method="POST" enctype="multipart/form-data">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="No Sepedo" name="no_sepedo">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nama Pelanggan" name="nama_pelanggan">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Pengunaan" name="penggunaan">
                        </div>
                        <div class="input-group">
                           <label style="margin-right: 20px">Bulan </label>
                           <select class="form-control" name="bulan">
                           		<?php get_options() ?>
                           </select>
                        </div>
                         <div class="input-group">
                           <input class="input--style-1" type="text" placeholder="Tahun" name="tahun">
                        </div>
                      
                        <div class="p-t-20">
                            <input name="simpan" class="btn btn--radius btn--green" type="submit" value="SIMPAN">
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
         <?php
         if(isset($_POST['simpan'])){
         	$no_sepedo = $_POST['no_sepedo'];
                	$nama_pelanggan = $_POST['nama_pelanggan'];
                	$penggunaan = $_POST['penggunaan'];
                	$bulan = $_POST['bulan'];
                	$tahun = $_POST['tahun'];


                	$query = "INSERT INTO `cobalagi` (`id_pemakaian`, `no_sepedo`, `nama_pelanggan`, `penggunaan`, `bulan`, `tahun`) VALUES (NULL, '$no_sepedo', '$nama_pelanggan', '$penggunaan', '$bulan', '$tahun');";
						$insert = mysqli_query($connect, $query);
						if($insert) {
							// echo "Data Berhasil Disimpan";
							header('location:home.php');
						}
						else{
							echo "Gagal Disimpan";
						}
         }
                	

                ?>
    </div>


</body>
</html>