
<body>
<nav class="navbar navbar-default" style="background-color: lightblue">
  <div class="container-fluid">
    <div class="navbar-header">

      <a class="navbar-brand" href="#">Rindu Dia</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="percobaanUTS.html" target="_blank"><span class="glyphicon glyphicon-home"></span>1700330035 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>Barang</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

	<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="list-group">
				<a href="percobaanUTS.html" class="list-group-item active">Home</a>
				<a href="#" class="list-group-item">Form</a>
			</div>

		</div>
		<div class="col-md-6">
			<div class="jumbotron">
				<fieldset>
					<legend>Form Identitas</legend>
				<form action="#" name="formIdentitas">
					<div class="form-group">
					<label for="txtNIM">NIM:</label>
					<input class="form-control" type="text" name="txtNIM">
					</div>
					<div class="form-group">
					<label for="txtNAMA">NAMA:</label>
					<input class="form-control" type="text" name="txtNAMA">
					</div>
					<label for="txtJK">Jenis Kelamin:</label>
					<label class="radio-inline">
					<input type="radio" name="txtJK">
					Laki-laki
					</label>
					<label class="radio-inline">
					<input type="radio" name="txtJK">
					Perempuan
					</label>
					<div class="form-group">
					<label for="txtSemester">Semester:</label>
					<select class="form-control" name="txtSemester">
						<option>II</option>
						<option>IV</option>
						<option>VI</option>
						<option>D3 MI</option>

					</select>
					</div>
					<input class="btn btn-info" type="submit" name="btnDaftar" value="Daftar">
					
				</form>
				</fieldset>
			</div>

		</div>
		<div class="col-md-2>
			<div class="jumbotron">
				<fieldset>
					<legend>Biodata</legend>
				<form action="#" name="formIdentitas">
				<a href="#">NAMA:</a>
				<br>
				<a href="#">NIM:</a>
				<br>
				<a href="#">TTL:</a>
				<br>
				<a href="#">Alamat</a>
				</form>
				</fieldset>
			</div>

		</div>
	</div>
	</div>

	<div class="alert alert-info" style="background-color: lightblue" align="center"> <strong>&copy copyright D3 MI 2018</strong></div>

</body>
</html> ?>