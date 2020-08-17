<?php
include 'template/head.php';
include 'template/side.php';
?>
<!-- Page Content -->
<div style="margin-left:18%">

<div class="w3-container w3-blue">
  <h1>Pengaturan Postingan</h1>
</div>


<div class="container" style="margin-top: 20px">
	<p><a href='setting/add/addpost.php'><button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-plus-sign'></span> Add Post</button></a></p>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID Post</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">date</th>
    </tr>
  </thead>
  <tbody>
    <?php
include "koneksi.php";
//$query = "SELECT*FROM mahasiswa LIMIT 50 OFFSET 0";//
$query = "SELECT * FROM postingan";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
while ($row = mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $row['id_post']; ?></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['pembuka']; ?></td>
<td><?php echo $row['date']; ?></td>

<td><a href = 'setting/edit/editpost.php?id=<?php echo $row['id_post']; ?>'
class='btn btn-success'><span class='glyphicon glyphicon-edit'></span>edit</a>
<a href='setting/delete/deletepost.php?id=<?php echo $row['id_post']; ?>' class = 'btn btn-danger'>
<span class = 'glyphicon glyphicon-remove-sign'></span> delete</a></td>
</tr>
<?php  } ?>
 </tbody>
</table>
</div>
</body>
</html>
