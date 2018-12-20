<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<?php echo $sub_judul; ?>
		</div>
		<div class="card-body">
			<a href="<?php echo site_url('admin/Mahasiswa/add'); ?>" class="btn btn-primary btn-sm">ADD</a>
			<hr>
			<table class="table table-bordered">
				<tr>
					<th>NIM</th>
					<th>Nama Mahasiswa</th>
					<th>Jenis Kelamin</th>
					<th>Program Studi</th>
					<th>Tgl Update</th>
					<th>Aksi</th>
				</tr>
				<?php foreach ($isi_tabel as $key) { ?>
					
				<tr>
					<td><?php echo $key->nim; ?></td>
					<td><?php echo $key->nama_mahasiswa; ?></td>
					<td><?php echo $key->jenis_kelamin; ?></td>
					<td><?php echo $key->program_studi; ?></td>
					<td><?php echo date('d M Y', strtotime($key->created_at)) ; ?></td>
					<td>
						<a href="<?= site_url('admin/mahasiswa/edit/'.$key->nim); ?>" class="btn btn-warning btn-sm">Edit</a> | <a href="<?= site_url('admin/mahasiswa/hapus/'.$key->nim); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ?')">Hapus</a>
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