<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pengumuman</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>">
</head>
<body>
	<div class="container">
		<h1>Pengumuman Wisuda</h1>
		<h2 class="alert alert-primary">Tanggal : <?php echo $tanggal; ?></h2>
		<h2>Ketua : <?php echo $ketua; ?></h2>
		<h2>UNIVERSITAS : <?php echo $univ; ?></h2>
		<h2><?php echo $tambahan; ?></h2>

		<a href="<?php echo site_url('pengumuman/detail'); ?>"
		class="btn btn-outline-success">Detail</a>
	</div>
</body>
</html>			