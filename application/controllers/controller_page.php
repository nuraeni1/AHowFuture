<?php
class controller_page extends CI_Controller{
	function __construct(){
		parent::__construct();
		//validasi jika user belum login
		//$this->load->model('mdl_crud_admin','mdl_crud_siswa');
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
	}
  	function index(){
    	$this->load->view('v_dashboard');
  	}
 
  	function sbmptn(){
    	// function ini hanya boleh diakses oleh admin dan dosen
    	if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
      	$this->load->view('v_sbmptn');
    	}else{
      	echo "Anda tidak berhak mengakses halaman ini";
    	}
 
  	}
 
  	function universitas(){
    	// function ini hanya boleh diakses oleh admin dan dosen
    	if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
      	$this->load->view('v_universitas');
    	}else{
      	echo "Anda tidak berhak mengakses halaman ini";
    	}
  	}
 
  	function latihan_soal(){
    	// function ini hanya boleh diakses oleh admin dan mahasiswa
    	if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
      	$this->load->view('v_latihan_soal');
    	}else{
      	echo "Anda tidak berhak mengakses halaman ini";
    	}
  	}
    function data_siswa(){
      // function ini hanya boleh diakses oleh admin dan mahasiswa
      if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
        $this->load->view('v_tampilsiswa');
      }else{
        echo "Anda tidak berhak mengakses halaman ini";
      }
    }
  	function chat(){
    	// function ini hanya boleh diakses oleh admin dan mahasiswa
    	if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
      	$this->load->view('v_chat');
    	}else{
      	echo "Anda tidak berhak mengakses halaman ini";
    	}
  	}
}

?>