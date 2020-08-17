<?php
session_start();
include "koneksi.php";

//$query = "select *from user where username = '$username' AND password = '$password'"; untuk konsep dasar
$username = mysqli_real_escape_string($connect, $_POST['username']);
$password = $_POST['password'];

$query = "select * from user where username = '$username'";
$hasil = mysqli_query($connect, $query);

if(mysqli_num_rows($hasil) >0)
	{
		while($baris = mysqli_fetch_array($hasil))
		{
			$pass = $baris ['password'];
			$_SESSION['status'] = $baris['status'];
		
		}
		
		if (password_verify ($password, $pass))// untuk kalau sudah di hash
	 
	//	if($password === $pass)
		{
			$_SESSION['username'] = $username;			
			header("Location: home.php");
		}
		else 
		{
			header("Location: login.php");
		}
	}

else 
{
	header("Location: login.php");
	//echo "username tidak terdaftar";
}