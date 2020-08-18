<?php
	include '../config.php';

	$nim = $_POST['nim'];
	$nama_siswa = $_POST['nama_siswa'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];

	mysqli_query($conn, "insert into mahasiswa values('$nim','$nama_siswa','$tgl_lahir','$jenis_kelamin','$alamat')");

	header("location: form-mahasiswa.php")
?>