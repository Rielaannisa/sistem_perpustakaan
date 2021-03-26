<?php

/**
 * 
 */
class My_Models extends CI_Model
{
	public function Cek_login($user,$pasw)
	{
		return $this->db->get_where('admin',array(
			'username' => $user,
			'password' => $pasw
		))->result_array();
	}

	public function ambil_buku()
	{
		return $this->db->get('buku')->result_array();
	}

	public function do_tambah()
	{
		$dattaa = [
			"judul" => $this->input->post("judul"),
			"pengarang" => $this->input->post("pengarang"),
			"isbn" => $this->input->post("isbn"),
			"penerbit" => $this->input->post("penerbit"),
			"pdf" => $this->upload->data("file_name")
		];
		$this->db->insert("buku",$dattaa);
	}
	public function show_buku($id)
	{
		return $this->db->get_where('buku',array(
			"id_buku" => $id
		))->row_array();
	}
	public function do_edit1()
	{
		$dattaa = [
			"judul" => $this->input->post("judul"),
			"pengarang" => $this->input->post("pengarang"),
			"isbn" => $this->input->post("isbn"),
			"penerbit" => $this->input->post("penerbit"),
		];

		$this->db->where('id_buku', $this->input->post('id'));
		$this->db->update('buku',$dattaa);
	}

	public function lihat_data($id)
	{
		return $this->db->get_where('buku', array('id_buku' => $id
	))->row_array();
	}

	public function delete_buku($id)
	{
		$this->db->where('id_buku',$id);
		return $this->db->delete('buku');
	}

	public function ambil_anggota()
	{
		return $this->db->get('anggota')->result_array();
	}

	public function tambah_anggota()
	{
		$data = [
			"nama" => $this->input->post('nama'),
			"nim" => $this->input->post('nim'),
			"alamat" => $this->input->post('alamat'),
			"email" => $this->input->post('email')
		];

		$this->db->insert("anggota",$data);
	}
	
	public function lihat_anggota($id)
	{
		$this->db->where('id_anggota',$id);
			return $this->db->get('anggota')->row_array();
	}

	public function edit_anggota()
	{
		$data = [
			"nama" => $this->input->post('nama'),
			"nim" => $this->input->post('nim'),
			"alamat" => $this->input->post('alamat'),
			"email" => $this->input->post('email')
		];

		$this->db->where( 'id_anggota',$this->input->post('id'));
		$this->db->update('anggota',$data); 	
	}

	// public function do_edit_anggota($id)
	// {
	// 	$dattaa = [
	// 		"nama" => $this->input->post("nama"),
	// 		"nim" => $this->input->post("nim"),
	// 		"alamat" => $this->input->post("alamat"),
	// 		"email" => $this->input->post("email"),
	// 	];

	// 	$this->db->where('id_anggota', $this->input->post('id'));
	// 	$this->db->update('anggota',$dattaa);
	// }
	

	// public function show_buku($id)
	// {
	// 	return $this->db->get_where('buku',array("id_buku" => $id
	// 	))->row_array();
	// }
		

}