<!DOCTYPE html>
<html>
	<body>
		<?php
		$conn= mysqli_connect("localhost","root","","modul4");
		echo "Data berhasil ditampilkan";
		?>
		<table border="1">
			<tr>
				<th>ID Pesan</th>
				<th>ID Pengirim</th>
				<th>ID Penerima</th>
				<th>Judul</th>
				<th>Pesan</th>
				<th>Date</th>
				<th>Opsi<th>
			</tr>
			<?php
				$sql="SELECT * FROM pesan";
				$result = mysqli_query($conn,$sql);
				
			while($row = mysqli_fetch_array($result)) { ?>
			<tr>
				<td><?php echo $row["id_pesan"];?></td>
				<td><?php echo $row["id_pengirim"];?></td>
				<td><?php echo $row["id_penerima"];?></td>
				<td><?php echo $row["judul"];?></td>
				<td><?php echo $row["textpesan"];?></td>
				<td><?php echo $row["date"];?></td>
				<td><button><a href="HapusPesan.php?id_pesan=<?php echo $row["id_pesan"];?>">Hapus</a></button><td>
			</tr>
			<?php
			} ?>
		</table>
	</body>
</html>
