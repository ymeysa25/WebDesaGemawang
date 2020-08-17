
<?php
  include 'koneksi.php';

  $postquery =  "SELECT * , DATE_FORMAT(postingan.date, '%d %M %Y') as tanggal FROM `postingan` LIMIT 4;";

   $pdquery = "SELECT * FROM `potensidesa` ORDER BY `potensidesa`.`date` ASC;";

   $sosmed = "SELECT * FROM `sosmed`";
   $kontak = "SELECT * FROM `kontak`";
?>
<?php
include 'template/head.php';
include 'template/side.php';
?>
<!-- Page Content -->
<div style="margin-left:18%">

<div class="w3-container w3-blue">
  <h1>Pengaturan Kontak</h1>
</div>


<div class="container" style="margin-top: 20px">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No Telepon</th>
      <th scope="col">Email</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>
    <?php
include "koneksi.php";
//$query = "SELECT*FROM mahasiswa LIMIT 50 OFFSET 0";//
$query = "SELECT * FROM kontak";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
while ($row = mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $row['telpon']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['alamat']; ?></td>




<td><a href = 'setting/edit/editkontak.php?id=<?php echo $row['id']; ?>'
class='btn btn-success'><span class='glyphicon glyphicon-edit'></span>edit</a>
</td>
</tr>
<?php  } ?>
 </tbody>
</table>
</div>
</body>
</html>
