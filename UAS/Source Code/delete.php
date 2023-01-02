<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mengubah Data</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Menghapus Data Karyawan</h1>
	<hr><br>
	<p>Inputkan nomor identitas karyawan yang ingin dihapus datanya</p>
	<form action="" method="get">
		<label for="no_id">Nomor Identitas:</label>
		<input type="text" id="no_id" name="no_id">
		<input type="submit" value="Submit" name="submit">
	</form>
	<?php 
		require "koneksi.php";
		if(isset($_GET['submit'])){
			$no_id = $_GET['no_id'];
			$query = oci_parse($conn, "DELETE FROM KARYAWAN WHERE NOMOR_ID='$no_id'");
			oci_execute($query);
			echo "Data Berhasil Dihapus";
		}
	 ?>
	 <br><br>
	 <a style="text-decoration:none; "href="index.php">Kembali ke menu awal</a>
</body>
</html>