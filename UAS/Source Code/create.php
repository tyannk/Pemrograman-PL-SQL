<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menambah Data</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Menambah Data Karyawan</h1>
	<hr><br>
	<form action="" method="post">
		<label for="nama">Nama Karyawan:</label>
		<input type="text" id="nama" name="nama"><br>
		<label for="nomor_id">Nomor Identitas:</label>
		<input type="text" id="nomor_id" name="nomor_id"><br>
		<label for="jabatan">Jabatan:</label>
		<input type="text" id="jabatan" name="jabatan"><br>
		<label for="umur">Umur:</label>
		<input type="text" id="umur" name="umur"><br>
		<input type="submit" value="Submit" name="Submit">
	</form>
	<br>
	<a style="text-decoration:none;"href="index.php">Kembali ke menu awal</a>
</body>
</html>

<?php 
	require "koneksi.php";
	if(isset($_POST['Submit'])){
		$nama = $_POST['nama'];
		$nomor_id = $_POST['nomor_id'];
		$jabatan = $_POST['jabatan'];
		$umur = $_POST['umur'];
		$insert = oci_parse($conn, "INSERT INTO KARYAWAN VALUES('$nama', '$nomor_id', '$jabatan', '$umur')");
		oci_execute($insert);
		echo "</br> Berhasil Menambah Data Karyawan";
	}
 ?>