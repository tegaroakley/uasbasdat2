<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid bg-light">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">AKADEMIK</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				</button>
			<div class="container">
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				        
				        <li class="nav-item">
				    	    <a class="nav-link" href="form-mahasiswa.php">DAFTAR BIMBEL</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="form-dosen.php">PENGAJAR</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="form-kuliah.php">PEMBELAJARAN</a>
					    </li>
				    </ul>
				    <ul class="navbar-nav mr-right">
				    	<li class="nav-item">
				    		<a href="logout.php" class="nav-link">LOGOUT</a>
				    	</li>
				    </ul>
				</div>
		  </div>
		</nav>

		<?php
			include '../config.php';
			$nim = $_GET['nim'];
			$data = mysqli_query($conn, "select * from mahasiswa where nim='$nim'");
			while ($d = mysqli_fetch_array($data)) {
				?>
				<div class="jumbotron">
					<div class="container col-md-6">
						<form method="post" action="cek-edit-mahasiswa.php">
							<h2 class="text-uppercase text-center">EDIT DATA SISWA</h2><br/>
					        <div class="form-group">
						 	    <label for="nim">NIM</label>
							    <input type="text" name="nim" class="form-control" id="nim" value="<?php echo $d['nim']; ?>" readonly="required">
							</div>
							<div class="form-group">
							    <label for="nama_mhs">NAMA SISWA</label>
							    <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" value="<?php echo $d['nama_mhs']; ?>" required>
							</div>
							<div class="form-group">
							    <label for="tgl_lahir">TANGGAL LAHIR</label>
							    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $d['tgl_lahir']; ?>" required>
							</div>
							<div class="form-group">
							    <label for="jenis_kelamin">JENIS KELAMIN</label>
							    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
									<option>---</option>
									<option id="LAKI-LAKI">Laki-Laki</option>
									<option id="PEREMPUAN">Perempuan</option>
								</select>
							</div>
							<div class="form-group">
							    <label for="alamat">ALAMAT</label>
							    <input type="textarea" class="form-control" id="alamat" name="alamat" value="<?php echo $d['alamat']; ?>" required>
							</div>
							<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
						</form>
					</div>
				</div>
				<?php
			}
		?>

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