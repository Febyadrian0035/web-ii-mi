<div class="col-md-6 offset-md-3">
	<div class="card">
		<div class="card-header">
			<?php echo $sub_judul; ?>
		</div>
		<div class="card-body">
			<form action="<?php echo site_url('admin/dosen/proses_edit'); ?>" method="post">
				<div class="form-group">
					<label>NIk</label>
					<input class="form-control" name="nik" value="<?php echo $isi_data->nik; ?>" readonly>
				</div>
				<div class="form-group">
					<label>Nama Dosen</label>
					<input class="form-control" name="nama_dosen" value="<?php echo $isi_data->nama_dosen; ?>">
				</div>
				<div class="form-group">
					<label>Jenis Kelamin</label>
					<select class="form-control" name="jenis_kelamin" value="<?php echo $isi_data->jenis_kelamin; ?>">
						<option value="PRIA">PRIA</option>
						<option value="WANITA">WANITA</option>
					</select>
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input class="form-control" name="alamat" value="<?php echo $isi_data->alamat; ?>">
				</div>
				<div class="form-group">
					<button class="btn btn-primay" type="submit">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>