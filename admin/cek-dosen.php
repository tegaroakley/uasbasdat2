<?php
	include '../config.php';

	$nip = $_POST['nip'];
	$nama_dosen = $_POST['nama_dosen'];
	$nama_kul = $_POST['nama_kul'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$alamat = $_POST['alamat'];

	mysqli_query($conn, "insert into dosen values('$nip','$nama_dosen','$nama_kul','$jenis_kelamin','$tgl_lahir','$alamat')");

	header("location: form-dosen.php")
?>