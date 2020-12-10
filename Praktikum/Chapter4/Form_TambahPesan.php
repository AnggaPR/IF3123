<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pesan</title>
</head>
<body>
	<form action="SimpanPesan.php" method="POST" align="center">
		<!—diasumsikan idPengirim = id user login, didapatkan dari session dan
		idpesan auto_increment dan tanggal adalah tanggal saat ini sehingga tidak
		perlu input -->
		<h3>Form Isi Pesan</h3>
		<input type="text" name="id_Pengirim" placeholder="Masukkan ID Pengirim"><br>
		<input type="text" name="id_Penerima" placeholder="Masukkan ID Penerima"><br>
		<input type="text" name="judul" placeholder="Masukkan Judul"><br>
		<textarea name="TextPesan" placeholder="Masukkan Pesan"></textarea><br>
		<input type="submit" name="submit" value="Simpan">
	</form>
</body>
</html>