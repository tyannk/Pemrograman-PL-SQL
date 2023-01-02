<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mengubah Data</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Mengubah Data Karyawan</h1>
	<hr><br>
	<p>Inputkan nomor identitas karyawan yang ingin diubah datanya</p>
	<form action="update2.php" method="get">
		<label for="no_id">Nomor Identitas:</label>
		<input type="text" id="no_id" name="no_id">
		<input type="submit" value="Submit" name="submit">
	</form>
	<br><br>
	<a style="text-decoration:none; "href="index.php">Kembali ke menu awal</a>
</body>
</html>