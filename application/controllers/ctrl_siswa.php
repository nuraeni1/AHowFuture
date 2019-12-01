<?php 
 
class ctrl_siswa extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_datasiswa2');
		$this->load->helper(array('form', 'url'));
		if($this->session->userdata('akses') !== '3'){
        	$url=base_url();
			redirect($url);
		}
	}
 
	public function index(){
		$this->load->view('v_siswa');
	}

	function tampil1(){
    	$data['universitas'] = $this->m_datasiswa2->tampil_data1()->result();
    	$this->load->view('upload/data1',$data);
  }
}