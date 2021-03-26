<html>
<head>
<title>Tambah Anggota</title>
</head>
<body>


<h3>Input Buku Baru</h3>
<div class="container">
	<input type="hidden" name="id" value="<?php echo $buku['id_anggota'] ?>">
	<form action="<?php echo base_url('login/do_edit_anggota') ?>" method="post" enctype= "multipart/form-data"> 
		<div class="form-group">
			<label>Masukkan Nama</label>
			<input type="text" name="nama" class="form-control" value="<?php echo $buku['nama'] ?>">
		</div>
		<div class="form-group">
			<label>Masukkan NIM</label>
			<input type="text" name="nim" class="form-control" value="<?php echo $buku['nim'] ?>">
		</div>
		<div class="form-group">
			<label>Masukkan Alamat</label>
			<textarea class="form-control" name="alamat" rows="5"><?php echo $buku['alamat']; ?></textarea>
		</div> 
		<div class="form-group">
			<label>Masukkan Email</label>
			<input type="text" name="email" class="form-control"  value="<?php echo $buku['email'] ?>">
		</div>
		<!-- <div class="form-group">
			<label>Masukkan File</label>
			<input type="file" name="userfile" size="20" class="form-path validate">
		</div> -->
		<input type="submit" name="simpan" value="SAVE" class="btn btn-info ">

	</form>
</div>