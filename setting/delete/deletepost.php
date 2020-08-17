<?php
session_start();
if(!($_SESSION['username'])){
	header("Location: login.php");
}
?>
<?php

	include "../../koneksi.php";
	$id = $_GET['id'];
	
	$query = mysqli_query($connect, "delete from postingan where id_post='$id'") or die(mysqli_error($connect));
	
	if($query) {
	header('location:../../settingpost.php');
	} else {
	echo mysqli_error($connect);
	}
?>