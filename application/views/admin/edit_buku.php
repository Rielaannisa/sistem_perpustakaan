<html>
<head>
<title>Upload Form</title>
</head>
<body>
<?php echo form_open_multipart('login/do_edit');?> 


<h3>Input Buku Baru</h3>
<div class="container">

	<form action="" method="post" enctype= "multipart/form-data" > 
		<!--<?php echo base_url('login/do_tambah') ?>-->
		<div class="form-group">
			<label>Masukkan Judul</label>
			<input type="hidden" name="id" class="form-control" value="<?php echo $bukku['id_buku'] ?>">
			<input type="text" name="judul" class="form-control" value="<?php echo $buku['judul'] ?>">
		</div>
		<div class="form-group">
			<label>Masukkan Pengarang</label>
			<input type="text" name="pengarang" class="form-control" value="<?php echo $buku['pengarang'] ?>">
		</div>
		<div class="form-group">
			<label>Masukkan ISBN</label>
			<input type="text" name="isbn" class="form-control"  value="<?php echo $buku['isbn'] ?>">
		</div>
		<div class="form-group">
			<label>Masukkan Penerbit</label>
			<input type="text" name="penerbit" class="form-control" value="<?php echo $buku['penerbit'] ?>">
		</div>
		<div class="form-group">
			<label>Masukkan File</label>
			<input type="file" name="userfile" size="20" class="form-path validate">
		</div>
		<input type="submit" name="simpan" value="SAVE" class="btn btn-info ">

	</form>
</div>