<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style2.css">
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
				<li ><a href="index.html">Home</a></li>
			</ul>
		</nav>
	</div>
	<?php 
	echo "<head><title>Data Pengunjung Web</title><head>";
	echo "<center><h2>DATA PENGUNJUNG</h2></center>";
	$fp = fopen("data.txt", "r");
	echo "<br><table border=1>";
	echo "<th width=20%>Tanggal</th><th width=25%>Nama</th><th width=40%>Alamat</th><th width=20%>Jenis Kelamin</th><th width=13%>Status</th><th width=12%>Komentar</th>";
	while ($isi = fgets($fp,100)) {
		$tampil = explode("|", $isi);
		echo "<tr><td> $tampil[0] </td><td> $tampil[1]</td><td> $tampil[2]</td><td> $tampil[3]</td><td> $tampil[4]</td><td> $tampil[5]</td></tr>";
	}
	echo "</table>";
	?>
</body>
</html>

