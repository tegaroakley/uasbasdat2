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
				    	    <a class="nav-link" href="form-mahasiswa.php">MAHASISWA</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="form-dosen.php">DOSEN</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="form-kuliah.php">JADWAL MATA KULIAH</a>
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
		<div class="jumbotron">
		<h3 class="text-uppercase text-center">JADWAL MATA KULIAH</h3><br/>
		<div class="container">
		<table class="table">
			<thead class="bg-dark text-white">
				<tr>
					<th scope="col">MATA KULIAH</th>
					<th scope="col">DOSEN</th>
					<th scope="col">WAKTU</th>
					<th scope="col">TEMPAT</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include '../config.php';

					$data = mysqli_query($conn, "select * from jadwal");
					while ($d = mysqli_fetch_array($data)) {
						?>
						<tr>
							<th scope="row"><?php echo $d['nama_kul']; ?></th>
							<td><?php echo $d['nama_dosen']; ?></td>
							<td><?php echo $d['waktu']; ?></td>
							<td><?php echo $d['tempat']; ?></td>
						</tr>
						<?php
					}
				?>	
			</tbody>
		</table>
	</div>
	</div>
	<footer>
	<div class="footer-copyright text-center py-3 bg-dark text-white">
		<p>© 2020 Copyright</p>
	</div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
