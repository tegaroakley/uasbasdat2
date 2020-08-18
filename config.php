<?php
	$conn = mysqli_connect("localhost","root","","10118066_akademik");

	if (mysqli_connect_errno()) {
		die("Database tidak berfungsi".mysqli_connect_error());
	}
?>