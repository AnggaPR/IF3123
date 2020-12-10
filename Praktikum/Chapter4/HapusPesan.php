<?php
	$conn=mysqli_connect("localhost","root","","modul4");
	$idPesan=$_GET['id_pesan'];
	$query="delete from pesan where id_pesan='$idPesan'";
	$sql=mysqli_query($conn,$query);
	header("location:TampilPesan.php");
?>