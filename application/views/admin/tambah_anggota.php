<html>
<head>
<title>Tambah Anggota</title>
</head>
<body>
<!--<?php echo form_open_multipart('Login/do_tambah');?>-->


<h3>Input Buku Baru</h3>
<div class="container">

	<form action="<?php echo base_url('login/do_anggota') ?>" method="post" enctype= "multipart/form-data"> 
		<div class="form-group">
			<label>Masukkan Nama</label>
			<input type="text" name="nama" class="form-control">
		</div>
		<div class="form-group">
			<label>Masukkan NIM</label>
			<input type="text" name="nim" class="form-control">
		</div>
		<div class="form-group">
			<label>Masukkan Alamat</label>
			<textarea class="form-control" name="alamat" rows="5"></textarea>
		</div>
		<div class="form-group">
			<label>Masukkan Email</label>
			<input type="text" name="email" class="form-control">
		</div>
		<!-- <div class="form-group">
			<label>Masukkan File</label>
			<input type="file" name="userfile" size="20" class="form-path validate">
		</div> -->
		<input type="submit" name="simpan" value="SAVE" class="btn btn-info ">

	</form>
</div>