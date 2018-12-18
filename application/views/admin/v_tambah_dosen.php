<div class="col-md-6 offset-md-3">
	<div class="card">
		<div class="card-header">
			<?php echo $sub_judul; ?>
		</div>
		<div class="card-body">
			<form action="<?php echo site_url('admin/dosen/proses_add'); ?>" method="post">
				<div class="form-group">
					<label>NIK</label>
					<input class="form-control" name="nik">
				</div>
				<div class="form-group">
					<label>Nama Dosen</label>
					<input class="form-control" name="nama">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input class="form-control" name="alamat">
				</div>
				<div class="form-group">
					<button class="btn btn-primay" type="submit">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>