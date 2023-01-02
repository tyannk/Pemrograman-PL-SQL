<?php 
	include "koneksi.php"
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menampilkan Data</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Menampilkan Data Karyawan</h1>
	<hr><br>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>Nama Karyawan</th>
			<th>Nomor Identitas</th>
			<th>Jabatan</th>
			<th>Umur</th>
		</tr>
		<?php 
			$query = oci_parse($conn, "SELECT * FROM KARYAWAN");
			oci_execute($query);
			while($rows = oci_fetch_array($query)){ ?>
				<tr class="data">
					<td><?=$rows['NAMA_KARYAWAN'] ?></td>
					<td><?=$rows['NOMOR_ID'] ?></td>
					<td><?=$rows['JABATAN'] ?></td>
					<td><?=$rows['UMUR'] ?></td>
				</tr>
			<?php } ?>
	</table>	
	<br>
	<a style="text-decoration:none; "href="index.php">Kembali ke menu awal</a>
</body>
</html>