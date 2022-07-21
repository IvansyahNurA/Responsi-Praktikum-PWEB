<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet"> 
</head>
<body>
	<div>
		<nav>
			<div class="logo">
				<h4>Welcome!</h4>
			</div>
			<div></div>
			<ul>
				<li></li>
				<li><a href="index.html">Isi Formulir</a></li>
				<li><a href="data.php">Data Pengunjung</a></li>
			</ul>
		</nav>
	</div>
	<?php 
	echo "<head><title>Data Pengunjung Web</head></title>";
	$fp = fopen("data.txt", "a+");
	$tanggal = $_POST["tanggal"];
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$jenis = $_POST["jenis"];
	$status = $_POST["status"];
	$komentar = $_POST["komentar"];
	fputs($fp,"$tanggal|$nama|$alamat|$jenis|$status|$komentar\n");
	fclose($fp);

	echo "<h2><center>Terima Kasih Atas Partisipasi Anda Mengisi Formulir Pengunjung</center></h2><br>";
	?>
</body>
</html>