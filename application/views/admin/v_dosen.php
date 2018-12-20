<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<?php echo $sub_judul; ?>
		</div>
		<div class="card-body">
			<a href="<?php echo site_url('admin/dosen/add'); ?>" class="btn btn-primary btn-sm">ADD</a>
			<hr>
			<table class="table table-bordered">
				<tr>
					<th>NIK</th>
					<th>Nama Dosen</th>
					<th>Jenis Kelamin</th>
					<th>Alamat</th>
					<th>Tgl Update</th>
					<th>Aksi</th>
				</tr>
				<?php foreach ($isi_tabel as $key) { ?>
					
				<tr>
					<td><?php echo $key->nik; ?></td>
					<td><?php echo $key->nama_dosen; ?></td>
					<td><?php echo $key->jenis_kelamin; ?></td>
					<td><?php echo $key->alamat; ?></td>
					<td><?php echo date('d M Y', strtotime($key->created_at)) ; ?></td>
					<td>
						<a href="<?= site_url('admin/dosen/edit/'.$key->nik); ?>" class="btn btn-warning btn-sm">Edit</a> | <a href="<?= site_url('admin/dosen/hapus/'.$key->nik); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ?')">Hapus</a>
					</td>
				</tr>
				<?php } ?>
			</table>
		</div>
		<div class="alert alert-info" style="background-color: lightblue" align="center"><div id="footer">
<marquee >@copyright FEBI_ADRIAN.com</marquee>
</div></div>
	</div>
	
</div>