<?php
class login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->library('session');
		$this->load->helper('url');
	}

	function index(){
		$this->load->view('SignIn');
	}

	function verify(){
		$username=htmlspecialchars($this->input->post("username",TRUE),ENT_QUOTES);
		$password=htmlspecialchars($this->input->post("password",TRUE),ENT_QUOTES);
	
	$cek_admin=$this->login_model->admin($username,$password);
	$cek_pengajar=$this->login_model->pengajar($username,$password);
	$cek_siswa=$this->login_model->siswa($username,$password);
	if($cek_admin->num_rows() > 0){
		$data=$cek_admin->row_array();
		$this->session->set_userdata('masuk',TRUE);
		$this->session->set_userdata('akses','1');
		$this->session->set_userdata('ses_id',$data['id_admin']);
		$this->session->set_userdata('ses_nama',$data['nama_admin']);
		redirect('controller_page');
	}
	elseif($cek_pengajar->num_rows() > 0){
		$data=$cek_pengajar->row_array();
		$this->session->set_userdata('masuk',TRUE);
		$this->session->set_userdata('akses','2');
		$this->session->set_userdata('ses_id',$data['id_pengajar']);
		$this->session->set_userdata('ses_nama',$data['nama_pengajar']);
		redirect('controller_page');
	}
	elseif($cek_siswa->num_rows() > 0){
		$data=$cek_siswa->row_array();
		$this->session->set_userdata('masuk',TRUE);
		$this->session->set_userdata('akses','3');
		$this->session->set_userdata('ses_id',$data['id_siswa']);
		$this->session->set_userdata('ses_nama',$data['nama_siswa']);
		redirect('controller_page');
	}
}

	function logout(){
		$this->session->sess_destroy();
		$url=base_url('');
		redirect($url);
	}
}
?>