<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrl_register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('register_model','tbl_siswa');
	}

	public function index()
	{
		$this->load->view('register');
	}
	public function insert()
	{
		$data = array(
			'nama_siswa'			=>$this->input->post('nama_siswa'),
			'tgl_lahir'				=>$this->input->post('tgl_lahir'),
			'asal_sekolah'			=>$this->input->post('asal_sekolah'),
			'alamat'				=>$this->input->post('alamat'),
			'email_siswa'			=>$this->input->post('email_siswa'),
			'nohp_siswa'			=>$this->input->post('nohp_siswa'),
			'id_grupbimbel'			=>$this->input->post('id_grupbimbel'),
			'username_siswa'		=>$this->input->post('username_siswa'),
			'password_siswa'		=>$this->input->post('password_siswa')
		);
		$this->tbl_siswa->add($data);
		redirect('login');
	}
}

?>
