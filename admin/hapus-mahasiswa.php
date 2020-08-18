<?php
	include '../config.php';

	$nim = $_GET['nim'];

	mysqli_query($conn, "delete from mahasiswa where nim='$nim'");

	header("location: form-mahasiswa.php")
?>