<?php
	include '../config.php';

	$nim = $_POST['nim'];
	$nama_mhs = $_POST['nama_mhs'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];

	mysqli_query($conn, "update mahasiswa set nama_mhs='$nama_mhs', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat' where nim='$nim'");

	header("location: form-mahasiswa.php");
?>