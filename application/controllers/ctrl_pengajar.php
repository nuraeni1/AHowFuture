<?php 
 
class ctrl_pengajar extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_datasiswa1');
		$this->load->helper(array('form', 'url'));
		if($this->session->userdata('akses') !== '2'){
        	$url=base_url();
			redirect($url);
		}
	}
 
	public function index(){
		$this->load->view('v_pengajar');
	}

	function tampil(){
		$data['tbl_siswa'] = $this->m_datasiswa1->tampil_data()->result();
		$this->load->view('upload/v_tampilsiswa',$data);
	}
	function tampil1(){
    	$data['universitas'] = $this->m_datasiswa1->tampil_data1()->result();
    	$this->load->view('upload/data1',$data);
  }
}