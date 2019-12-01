<?php 

class universitas_add extends CI_Controller{
  function __construct(){
    parent::__construct();    
    $this->load->model('m_universitas','universitas');
        $this->load->helper('url');
        if($this->session->userdata('akses') !== '1'){
          $url=base_url();
          redirect($url);
    }
  }
  function index(){
    $this->load->view('kuliah/input');
  }
  function insert()
  {
    $data = array(
      'nama_universitas'      =>$this->input->post('nama_universitas'),
      'total_prodi'           =>$this->input->post('total_prodi'),
      'alamat'                =>$this->input->post('alamat'),
      'deskripsi'             =>$this->input->post('deskripsi'),
    );
    $this->universitas->insert_data($data);
    redirect('universitas/index');
  }
}