<!-- 
<div class="container">
	<a href="<?php echo base_url('login/tambah_buku')?>" class="btn btn-info">TAMBAH</a>
	<hr>
	<p><?php echo $this->session->flashdata('tambah'); ?></p>
	<table class="table table-border">
		<tr>
			<th>JUDUL</th>
			<th>PENGARANG</th>
			<th>ISBN</th>
			<th>PENERBIT</th>
			<th>AKSI</th>
		</tr> 
		<?php foreach ($buku as $bukku) : ?>
		<tr>
			
				<td><?php echo $bukku['judul']; ?></td>
				<td><?php echo $bukku['pengarang']; ?></td>
				<td><?php echo $bukku['isbn']; ?></td>
				<td><?php echo $bukku['penerbit']; ?></td>
				<td>
					<a href="<?php echo base_url() ?>Login/lihatData/<?php echo $bukku['id_buku'] ?>" class="btn btn-primary">DETAIL</a>
					<a href="<?php echo base_url() ?>Login/edit/<?php echo $bukku['id_buku'] ?>" class="btn btn-info">EDIT</a>
					<a onclick="return confirm('Yakin Untuk Menghapus Data....??')" href="<?php echo base_url() ?>Login/hapus_buku/<?php echo $bukku['id_buku'] ?>" class="btnb tn-warning">HAPUS</a>
				</td>
			

			
		</tr>
			<?php endforeach ?>
	</table>
</div> -->

<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                     <a href="<?php echo base_url('login/tambah_buku')?>" class="btn btn-info">TAMBAH BUKU</a>
                     <p><?php echo $this->session->flashdata('tambah'); ?></p>
 
                   <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        
                                        <tr>
                                            <th>JUDUL</th>
											<th>PENGARANG</th>
											<th>ISBN</th>
											<th>PENERBIT</th>
											<th>LIHAT BUKU</th>
											<th>AKSI</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>JUDUL</th>
											<th>PENGARANG</th>
											<th>ISBN</th>
											<th>PENERBIT</th>
											<th>LIHAT BUKU</th>
											<th>AKSI</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	<?php foreach ($buku as $bukku) : ?>
											<tr>
				
												<td><?php echo $bukku['judul']; ?></td>
												<td><?php echo $bukku['pengarang']; ?></td>
												<td><?php echo $bukku['isbn']; ?></td>
												<td><?php echo $bukku['penerbit']; ?></td>
	<td align="center">
		<a href="<?php echo base_url()?>asset/pdf/<?php echo $bukku['pdf']?>"  target="_blank">	<i class="fa fa-eye" style="color: red;font-size: 36px"></i></a>
		<!-- <a href="<?php echo base_url()?>asset/pdf/<?php echo $bukku['pdf']?>">	<i class="fa fa-eye" style="color: red;font-size: 36px" target="_blank"></i></a> -->
		<!-- <i  class="fa fa-eye" style="color: red;font-size: 36px" href="<?php echo base_url()?>asset/pdf/<?php echo $bukku['pdf']?>" ></i>  -->
		<!-- <button style="font-size:24px" >Button <i href="<?php echo base_url()?>asset/pdf/<?php echo $bukku['pdf']?>" class="fa fa-eye"></i></button> -->
		
		<!-- <a href="<?php echo base_url()?>asset/pdf/<?php echo $bukku['pdf']?>" class="btn btn-info">LIHAT BUKU</a></td>	 -->
													<td>
														<a href="<?php echo base_url() ?>Login/lihatData/<?php echo $bukku['id_buku'] ?>" class="btn btn-primary">DETAIL</a>
														<a href="<?php echo base_url() ?>Login/edit/<?php echo $bukku['id_buku'] ?>" class="btn btn-info">EDIT</a>
														<a onclick="return confirm('Yakin Untuk Menghapus Data....??')" href="<?php echo base_url() ?>Login/hapus_buku/<?php echo $bukku['id_buku'] ?>" class="btn btn-warning">HAPUS</a>
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



