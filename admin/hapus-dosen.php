<?php
	include '../config.php';

	$nip = $_GET['nip'];

	mysqli_query($conn, "delete from dosen where nip='$nip'");

	header("location: form-dosen.php")
?>