<?php
include 'template/head.php';
include 'template/side.php';
?>
<!-- Page Content -->
<div style="margin-left:18%">

<div class="w3-container w3-blue">
  <h1>Pengaturan UKM</h1>
</div>


<div class="container" style="margin-top: 20px">
	<p><a href='setting/add/addukm.php'><button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-plus-sign'></span>Tambah</button></a></p>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID UKM</th>
      <th scope="col">Nama UKM</th>
      <th scope="col">Deskripsi UKM</th>
      <th scope="col">Pemilik</th>
      <th scope="col">Tangal Berdiri</th>
    </tr>
  </thead>
  <tbody>
    <?php
include "koneksi.php";
//$query = "SELECT*FROM mahasiswa LIMIT 50 OFFSET 0";//
$query = "SELECT * FROM ukm";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
while ($row = mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $row['id_ukm']; ?></td>
<td><?php echo $row['nama_ukm']; ?></td>
<td><?php echo $row['deskripsi']; ?></td>
<td><?php echo $row['pemilik']; ?></td>
<td><?php echo $row['tgl_berdiri']; ?></td>




<td><a href = 'setting/edit/editukm.php?id=<?php echo $row['id_ukm']; ?>'
class='btn btn-success'><span class='glyphicon glyphicon-edit'></span>edit</a>
<a href='setting/delete/deleteukm.php?id=<?php echo $row['id_ukm']; ?>' class = 'btn btn-danger'>
<span class = 'glyphicon glyphicon-remove-sign'></span> delete</a></td>
</tr>
<?php  } ?>
 </tbody>
</table>
</div>
</body>
</html>
