<?php
session_start();
if(!($_SESSION['username'])){
	header("Location: login.php");
}
?>
<?php

	include "../../koneksi.php";
	$id = $_GET['id'];
	
	$query = mysqli_query($connect, "delete from potensidesa where id_pd='$id'") or die(mysqli_error($connect));
	
	if($query) {
	header('location:../../settingpotensidesa.php');
	} else {
	echo mysqli_error($connect);
	}
?>