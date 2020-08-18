<!DOCTYPE html>
<html>
<head>
	<title>AKADEMIK | LOGIN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<script>alert('Login gagal! username dan password salah!');history.go(-1);</script>";
			}else if($_GET['pesan'] == "logout"){
				echo "Anda telah berhasil logout";
			}else if($_GET['pesan'] == "belum_login"){
				echo "Anda harus login untuk mengakses halaman admin";
			}
		}
	?>
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">AKADEMIK</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	  		<span class="navbar-toggler-icon"></span>
	    </button>
	</nav>
	<div class="jumbotron">
		<div class="container col-md-6">
			<form method="post" action="cek-login.php">
				<h2 class="text-uppercase text-center">LOGIN</h2>
		        <div class="form-group">
			 	    <label for="username">Username</label>
				    <input type="text" name="username" class="form-control" id="username">
				</div>
				<div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" id="password" name="password">
				</div>
				<button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
			</form>
		</div>
	</div>
	<div class="footer-copyright text-center py-3 bg-dark text-white">
		<p>© 2020 Copyright</p>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>