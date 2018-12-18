<div class="col-md-12">
	<div style="background-color: yellow" class="card">
		<div class="card-header bg-info" style="background-color: teal"><?php echo $sub_judul; ?></div>
		<div class="card-body">

			<?php 

				if ($this->session->flashdata('info')) {
					echo "<div class='alert alert-primary'>".$this->session->flashdata('info') . "</div>";
				}

			 ?>

			<a href="<?php echo site_url('admin/pengumuman/tambah'); ?>" class="btn btn-primary">Tambah Data</a><br><br>

		<?php 
			foreach ($isi_tabel as $value) :

		 ?>

		<div style="border: 1px solid green; padding: 15px; margin-bottom: 10px">
			<div class="row" style="margin-top: 15px">
				<div class="col-sm-1">
					<img width="100px" height="100px" src="<?= base_url('assets/Islamic-Centre.jpg')?>" class="img-thumbnail">
				</div>
				<div style="background-color: pink" class="col-sm-4">
					Penulis <strong><?= $value->penulis; ?></strong>
					<br>
					<small>17-8-2018</small>
				</div>
				<div class="col-sm-7">
					<a href="<?= site_url('admin/pengumuman/hapus/' . $value->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ?')">Hapus</a>
					<a href="<?= site_url('admin/pengumuman/edit/' . $value->id); ?>" class="btn btn-warning btn-sm">Edit</a>
					
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<h4><?= $value->judul; ?></h4>
					<p><?= $value->isi; ?></p>
				</div>
			</div>
		</div> <!-- border stop -->
		<?php endforeach; ?>
		</div>
		<div class="alert alert-info" style="background-color: lightblue" align="center"> <strong>&copy copyright D3_MI 2018</strong></div>
	</div>
</div>
			