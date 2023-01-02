<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mengubah Data</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php 
		require "koneksi.php";
		$no_id = $_GET['no_id']; ?>
	<h1>Mengubah Data Karyawan</h1>
	<hr><br>
	<p>Inputkan data karyawan terbaru</p>
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
	<?php 
		if(isset($_POST['Submit'])){
			$nama = $_POST['nama'];
			$nomor_id = $_POST['nomor_id'];
			$jabatan = $_POST['jabatan'];
			$umur = $_POST['umur'];
			$query = oci_parse($conn,"UPDATE KARYAWAN SET NAMA_KARYAWAN='$nama', NOMOR_ID='$nomor_id', JABATAN='$jabatan', UMUR='$umur' WHERE NOMOR_ID='$no_id'");
			oci_execute($query);
			echo "Data berhasil diubah";
		}
	 ?>
	 <br>
	 <a style="text-decoration:none; "href="index.php">Kembali ke menu awal</a>
</body>
</html>