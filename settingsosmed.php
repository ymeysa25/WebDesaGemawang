<?php
include 'template/head.php';
include 'template/side.php';
?>
<!-- Page Content -->
<div style="margin-left:18%">

<div class="w3-container w3-blue">
  <h1>Pengaturan Sosial Media</h1>
</div>


<div class="container" style="margin-top: 20px">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Facebook</th>
      <th scope="col">Youtube</th>
      <th scope="col">Instagram</th>
    </tr>
  </thead>
  <tbody>
    <?php
include "koneksi.php";
//$query = "SELECT*FROM mahasiswa LIMIT 50 OFFSET 0";//
$query = "SELECT * FROM sosmed";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
while ($row = mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $row['facebook']; ?></td>
<td><?php echo $row['youtube']; ?></td>
<td><?php echo $row['instagram']; ?></td>




<td><a href = 'setting/edit/editsosmed.php?id=<?php echo $row['id']; ?>'
class='btn btn-success'><span class='glyphicon glyphicon-edit'></span>edit</a>
</td>
</tr>
<?php  } ?>
 </tbody>
</table>
</div>
</body>
</html>
