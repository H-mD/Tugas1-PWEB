<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
	<section class="item">
		<header>
			<h3>Pendaftaran Siswa Baru</h3>
			<h1>SMK Coding</h1>
		</header>

		<h4>Menu</h4>
		<nav>
			<a href="form-daftar.php">Daftar Baru</a> <br>
			<a href="list-siswa.php">Pendaftar</a>
		</nav>
	</section>
	
	<?php if(isset($_GET['status'])): ?>
		<div class="item alert-success">
		<i class="fas fa-check-circle success-icon"></i>
			<?php
				if($_GET['status'] == 'sukses'){
					echo "Pendaftaran siswa baru berhasil!";
				} else {
					echo "Pendaftaran gagal!";
				}
			?>
		</div>
	<?php endif; ?>
	
	</body>
</html>
