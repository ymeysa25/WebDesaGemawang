<html>
	<head>
		<style>
			div{
				width: 500px;
			}
			a{
				width: 200px;
				background: red;
				padding:10px;
				margin-top: 20px;
				text-decoration: none;
				color: white;
			}
			a:hover{
				background: #ccc;
				color: black;
			}
		</style>
	</head>
	<body>
		<h1>Isi dari postingan</h1>
		<div>
		<p>
		<?php  
			include "koneksi.php";
			$id = $_GET["id"];
			$pdquery = "SELECT * from potensidesa where id_pd = '$id'";
			$result = mysqli_query($connect, $pdquery) or die (mysqli_error($connect));
			while ($hasil = mysqli_fetch_array($result)){	

			?>
			<img style="margin: 20px"src="images/potensi/<?php echo $hasil['img']; ?>">
			<?php	
				echo $hasil["deskripsi"];		
			}
		?>
	</p>
		</div>

	</body>
</html>