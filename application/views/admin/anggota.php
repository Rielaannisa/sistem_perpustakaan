<!-- <h1>HLMN ANGGOTA</h1>

<div class="container">
	<a href="<?php echo base_url('login/tambah_buku')?>" class="btn btn-info">TAMBAH</a>
	<hr>
	<p><?php echo $this->session->flashdata('tambah'); ?></p>
	<table class="table table-border">
		<tr>
			<th>NAMA</th>
			<th>KELAS</th>
			<th>ALAMAT</th>
			<th>EMAIL</th>
			<th>AKSI</th>
		</tr> 
		<?php foreach ($anggota as $bukku) : ?>
		<tr>
			
				<td><?php echo $bukku['nama']; ?></td>
				<td><?php echo $bukku['nim']; ?></td>
				<td><?php echo $bukku['alamat']; ?></td>
				<td><?php echo $bukku['email']; ?></td>
				<td>
					<a href="" class="btn btn-primary">DETAIL</a>
					<a href="" class="btn btn-info">EDIT</a>
					<a onclick="return confirm('Yakin Untuk Menghapus Data....??')" href="" class="btn btn-warning">HAPUS</a>
				</td>
			

			
		</tr>
			<?php endforeach ?>
	</table>
</div> 

 -->

<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">ANGGOTA</h1>
                     <a href="<?php echo base_url('login/tambah_anggota')?>" class="btn btn-info">TAMBAH ANGGOTA</a>
                     <p><?php echo $this->session->flashdata('tambah'); ?></p>
 
                   <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        
                                        <tr>
                                            <th>NAMA</th>
											<th>NIM</th>
											<th>ALAMAT</th>
											<th>EMAIL</th>
											<th>AKSI</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NAMA</th>
											<th>NIM</th>
											<th>ALAMAT</th>
											<th>EMAIL</th>
											<th>AKSI</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	<?php foreach ($anggota as $bukku) : ?>
											<tr>
				
												<td><?php echo $bukku['nama']; ?></td>
												<td><?php echo $bukku['nim']; ?></td>
												<td><?php echo $bukku['alamat']; ?></td>
												<td><?php echo $bukku['email']; ?></td>
													<td>
														<a href="<?php echo base_url() ?>Login/lihat_anggota/<?php echo $bukku['id_anggota'] ?>"  class="btn btn-primary">DETAIL</a>
														<a href="<?php echo base_url() ?>Login/edit_anggota/<?php echo $bukku['id_anggota'] ?>" class="btn btn-info">EDIT</a>
														<a onclick="return confirm('Yakin Untuk Menghapus Data....??')" href="" class="btn btn-warning">HAPUS</a>
													</td>
											</tr>
										<?php endforeach ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



