<?php 

class Login extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('my_models');
        $this->load->helper(array('form','url'));
    }
	public function index()
	{
		$this->load->view('halaman_login');
			} 

	public function do_login()
	{
		$user = $this->input->post('uname');
		$pasw = $this->input->post('password');
		//Untuk cek login
		$Login = $this->my_models->Cek_login($user,$pasw);

		if (count($Login) > 0){
			redirect('Login/admin');

		} else {
			$this->session->set_flashdata('login','gagal login');
			redirect('login/index');
		}
	} 

	public function admin()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('admin/admin');
		$this->load->view('template/footer');

	}
	public function buku()
	{
		$dataa['buku'] = $this->my_models->ambil_buku();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('admin/buku',$dataa);
		$this->load->view('template/footer');

	}

	public function anggota()
	{
		$dataa['anggota'] = $this->my_models->ambil_anggota();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('admin/anggota',$dataa);
		$this->load->view('template/footer');

	}

	public function peminjaman()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('admin/peminjaman');
		$this->load->view('template/footer');

	}
	
	public function setting()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('admin/setting');
		$this->load->view('template/footer');

	}

	public function tambah_buku()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('admin/tambah_buku');
		$this->load->view('template/footer');
	}

	public function do_tambah()
	{
		$filee = $_FILES['userfile']['name'];
		// $filee = $this->input->post('judul');
		// var_dump($filee); die;
		if ($filee == "") {
			echo "Gambarnya ga ada";
		} else {
			$config['allowed_types'] = "img|png|gif|pdf|doc|docx";
			$config['upload_path'] = "./asset/pdf/";
			$config['max_size']    = 0;

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('userfile')) {
				echo "hm";
			}
			else{
				$this->my_models->do_tambah();
				$this->session->set_flashdata('tambah','Data berhasil di Tambah');
				redirect('login/buku');
			}
		}
	}


	public function edit($id)
	{
		$data['buku'] = $this->my_models->show_buku($id);
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('admin/edit_buku',$data);
		$this->load->view('template/footer');
	}

	public function do_edit()
	{
		$filee = $_FILES['userfile']['name'];
		// $filee = $this->input->post('judul');
		// var_dump($filee); die;
		if ($filee == "") {
			$this->my_models->do_edit1();
				$this->session->set_flashdata('tambah','Data berhasil di Tambah');
				redirect('login/buku');

		} else {
			$config['allowed_types'] = "img|png|gif|pdf|doc|docx";
			$config['upload_path'] = "./asset/pdf/";
			$config['max_size']    = 0;

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('userfile')) {
				echo "hm";
			}
			else{
				$this->my_models->do_tambah();
				$this->session->set_flashdata('tambah','Data berhasil di Tambah');
				redirect('login/buku');
			}
		}
	}

	public function lihatData($id)
	{
		$data['buku']= $this->my_models->lihat_data($id);
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('admin/lihat_buku',$data);
		$this->load->view('template/footer');
	}

	public function hapus_buku($id)
	{
		$this->my_models->delete_buku($id);
		$this->session->set_flashdata('tambah','Berhasil Dihapus');
		redirect('login/buku');
	}

	public function tambah_anggota()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('admin/tambah_anggota');
		$this->load->view('template/footer');
	}

	public function do_anggota()
	{
		$this->my_models->tambah_anggota();
		$this->session->set_flashdata('tambah','Data berhasil di Tambah');
		redirect('login/anggota');

		// $filee = $_FILES['userfile']['name'];
		// // $filee = $this->input->post('judul');
		// // var_dump($filee); die;
		// // if ($filee == "") {
		// // 	echo "Gambarnya ga ada";
		// // } else {
		// // 	$config['allowed_types'] = "img|png|gif|pdf|doc|docx";
		// 	$config['upload_path'] = "./asset/pdf/";
		// // 	$config['max_size']    = 0;

		// 	$this->load->library('upload',$config);
		// 	if (!$this->upload->do_upload('userfile')) {
		// 		echo "hm";
		// 	}
		// 	else{
		// 		$this->my_models->tambah_anggota();
		// 		$this->session->set_flashdata('tambah','Data berhasil di Tambah');
		// 		redirect('login/anggota');
		// 	}
		
	}

	public function lihat_anggota($id)
	{
			$data['buku'] = $this->my_models->lihat_anggota($id);
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('admin/lihat_anggota',$data);
			$this->load->view('template/footer');
	}

	public function edit_anggota($id)
	{
		$data['buku'] = $this->my_models->lihat_anggota($id);
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('admin/edit_anggota',$data);
		$this->load->view('template/footer');
	}

	public function do_edit_anggota()
	{
		$this->my_models->edit_anggota();
		$this->session->set_flashdata('tambah','Data berhasil di ubah');
				redirect('login/anggota');
		// $filee = $_FILES['userfile']['name'];
		// // $filee = $this->input->post('judul');
		// // var_dump($filee); die;
		// if ($filee == "") {
		// 	$this->my_models->do_edit1();
		// 		$this->session->set_flashdata('tambah','Data berhasil di Tambah');
		// 		redirect('login/buku');

		// } else {
		// 	$config['allowed_types'] = "img|png|gif|pdf|doc|docx";
		// 	$config['upload_path'] = "./asset/pdf/";
		// 	$config['max_size']    = 0;

		// 	$this->load->library('upload',$config);
		// 	if (!$this->upload->do_upload('userfile')) {
		// 		echo "hm";
		// 	}
		// 	else{
		// 		$this->my_models->do_tambah();
		// 		$this->session->set_flashdata('tambah','Data berhasil di Tambah');
		// 		redirect('login/buku');
		// 	}
		// }
	}
// 	public function myPdfPage(){
//     $url = base_url('assets/pdf/');
//     $html = '<iframe src="'.$url.'" style="border:none; width: 100%; height: 100%"></iframe>';
//     echo $html;
// }
/**

	public function edit($id)
	{
		$data['buku'] = $this->my_models->show_buku($id);
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('admin/edit_buku',$data);
		$this->load->view('template/footer');
	}
















	
/**
	private function do_tambah()
    {
    	$gambare =$_FILES['userfile']['name'];
    	if ($gambare == "") {
			echo "ga";
    	} else {
    	$config['upload_path']          = ".assets/pdf";
        $config['allowed_types']        = "gif|jpg|png|pdf|doc";
        $config['overwrite']            = true;
        $config['max_size']             = 0;

        $this->load->library( "upload" , $config);

        if (!$this->upload->do_upload("userfile")){
            echo "gagal";
			}
			else
			{
				$this->my_models->do_tambah();
    		}

    	}			
        
		}
		
	
	


		/**
		$gambr = $_FILES['userfile']['name'];
		if ($gambr == "") {
			echo "Tidak Ada Gambar";
		} else {
			$config['allowed_types'] = "img|png|gif";
			$config['upload_path'] = "./asset/pdf/";

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('userfile')){
				echo "gagal";
			} else {
				$this->my_models->do_tambah();
			}

		}

	}
/**
	public function do_tambah()
	{
		
		$this->load->library('Login');


                if ( ! $this->login->do_tambah('userfile'))
                {
                       echo "ga ada";
                       // $error = array('error' => $this->upload->display_errors());

                        //$this->load->view('upload_form', $error);
                }
                else
                {
                       echo "ada";
                        //$data = array('tambah_buku' => $this->upload->data());

                        //$this->load->view('tambah_success', $data);
                }
		
		}*/	
	
	

}