<html>
<head>
<title>Upload Form</title>
</head>
<body>
<!--<?php echo form_open_multipart('Login/do_tambah_anggota');?>-->


<h3>Input Buku Baru</h3>
<div class="container">

	<form action="<?php echo base_url('login/do_tambah') ?>" method="post" enctype= "multipart/form-data"> 
		<div class="form-group">
			<label>Masukkan Judul</label>
			<input type="text" name="judul" class="form-control">
		</div>
		<div class="form-group">
			<label>Masukkan Pengarang</label>
			<input type="text" name="pengarang" class="form-control">
		</div>
		<div class="form-group">
			<label>Masukkan ISBN</label>
			<input type="text" name="isbn" class="form-control">
		</div>
		<div class="form-group">
			<label>Masukkan Penerbit</label>
			<input type="text" name="penerbit" class="form-control">
		</div>
		<div class="form-group">
			<label>Masukkan File</label>
			<input type="file" name="userfile" size="20" class="form-path validate">
		</div>
		<input type="submit" name="simpan" value="SAVE" class="btn btn-info ">

	</form>
</div>