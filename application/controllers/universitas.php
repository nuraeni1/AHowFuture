<?php 

class universitas extends CI_Controller{
  function __construct(){
    parent::__construct();    
    $this->load->model('m_universitas');
        $this->load->helper('url');
        if($this->session->userdata('akses') !== '1'){
          $url=base_url();
      redirect($url);
    }
  }
  function index(){
    $data['universitas'] = $this->m_universitas->tampil_data()->result();
    $this->load->view('kuliah/data',$data);
  }
  function hapus($id_universitas){
    $where = array('id_universitas' => $id_universitas);
    $this->m_universitas->hapus_data($where,'universitas');
    redirect('/universitas/index');
  }
  function edit($id_universitas){
    $where = array('id_universitas' => $id_universitas);
    $data['universitas'] = $this->m_universitas->edit_data($where,'universitas')->result();
    $this->load->view('kuliah/update',$data);
  }
  function update(){
    $id_universitas = $this->input->post('id_universitas');
    $nama_siswa = $this->input->post('nama_universitas');
    $total_prodi = $this->input->post('total_prodi');
    $alamat = $this->input->post('alamat');
    $deskripsi = $this->input->post('deskripsi');
   
    $data = array(
      'id_universitas' => $id_universitas,
      'nama_universitas' => $nama_universitas,
      'total_prodi' => $total_prodi,
      'alamat' => $alamat,
      'deskripsi' => $deskripsi,

    );
   
    $where = array(
      'id_universitas' => $id_universitas
    );
   
    $this->m_universitas->update_data($where,$data,'universitas');
    redirect('universitas/index');
  }
}