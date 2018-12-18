<div class="col-md-6 offset-md-3">
	<div class="card">
		<div class="card-header">
			<?php echo $sub_judul; ?>
		</div>
		<div class="card-body">
			<form action="<?php echo site_url('admin/mahasiswa/proses_add'); ?>" method="post">
				<div class="form-group">
					<label>NIM</label>
					<input class="form-control" name="nim">
				</div>
				<div class="form-group">
					<label>Nama Mahasiswa</label>
					<input class="form-control" name="nama">
				</div>
				<div class="form-group">
					<label>Proram Studi</label>
					<select class="form-control" name="prodi">
						<option value="D3 MI">D3 MI</option>
						<option value="D3 TI">D3 TI</option>
						<option value="S1 TI">S1 MI</option>
						<option value="S1 DKV">S1 DKV</option>
					</select>
				</div>
				<div class="form-group">
					<button class="btn btn-primay" type="submit">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>