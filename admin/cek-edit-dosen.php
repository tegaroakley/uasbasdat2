<?php
	include '../config.php';

	$nip = $_POST['nip'];
	$nama_dosen = $_POST['nama_dosen'];
	$nama_kul = $_POST['nama_kul'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$alamat = $_POST['alamat'];

	mysqli_query($conn, "update dosen set nama_dosen='$nama_dosen', nama_kul='$nama_kul', jenis_kelamin='$jenis_kelamin', tgl_lahir='$tgl_lahir', alamat='$alamat'");

	header("location: form-dosen.php");
?>