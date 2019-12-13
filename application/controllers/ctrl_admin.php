<?php 

class ctrl_admin extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_datasiswa');
		$this->load->model('m_jurusan');
		$this->load->model('m_datasiswa_bimbel');
        $this->load->helper('url');
        if($this->session->userdata('akses') !== '1'){
        	$url=base_url();
			redirect($url);
		}
	}
	function index(){
		$data['tbl_siswa'] = $this->m_datasiswa->tampil_data()->result();
		$this->load->view('v_tampilsiswa',$data);
	}
	function jurusan(){
	   	$data['jurusan'] = $this->m_jurusan->tampil_data()->result();
	    $this->load->view('admin/v_jurusan',$data);
	}
	function datasiswabimbel(){
		$data['tbl_siswa'] = $this->m_datasiswa_bimbel->tampil_data()->result();
		$this->load->view('admin/v_datasiswa_bimbel',$data);
	}
	function tambah_dtsbmbl(){
		$this->load->view('admin/tambah_dtsbmbl');
	}
	function hapus($id_siswa){
		$where = array('id_siswa' => $id_siswa);
		$this->m_datasiswa->hapus_data($where,'tbl_siswa');
		redirect('/ctrl_admin/index');
	}
	function edit($id_siswa){
		$where = array('id_siswa' => $id_siswa);
		$data['tbl_siswa'] = $this->m_datasiswa->edit_data($where,'tbl_siswa')->result();
		$this->load->view('v_editsiswa',$data);
	}
	function insert_dtsbmbl()
  {
    $data = array(
      	'id_siswa' => $this->input->post('id_siswa'),
		'nama_siswa' => $this->input->post('nama_siswa'),
		'tgl_lahir' => $this->input->post('tgl_lahir'),
		'asal_sekolah' => $this->input->post('asal_sekolah'),
		'alamat' => $this->input->post('alamat'),
		'email_siswa' => $this->input->post('email_siswa'),
		'nohp_siswa' => $this->input->post('nohp_siswa'),
		'id_grupbimbel' => $this->input->post('id_grupbimbel'),

    );
    $this->m_datasiswa_bimbel->insert_data($data);
    redirect('ctrl_admin/datasiswabimbel');
  }
	function update(){
		$id_siswa = $this->input->post('id_siswa');
		$nama_siswa = $this->input->post('nama_siswa');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$asal_sekolah = $this->input->post('asal_sekolah');
		$alamat = $this->input->post('alamat');
		$email_siswa = $this->input->post('email_siswa');
		$nohp_siswa = $this->input->post('nohp_siswa');
		$id_grupbimbel = $this->input->post('id_grupbimbel');
	 
		$data = array(
			'id_siswa' => $id_siswa,
			'nama_siswa' => $nama_siswa,
			'tgl_lahir' => $tgl_lahir,
			'asal_sekolah' => $asal_sekolah,
			'alamat' => $alamat,
			'email_siswa' => $email_siswa,
			'nohp_siswa' => $nohp_siswa,
			'id_grupbimbel' => $id_grupbimbel

		);
	 
		$where = array(
			'id_siswa' => $id_siswa
		);
	 
		$this->m_datasiswa->update_data($where,$data,'tbl_siswa');
		redirect('ctrl_admin/datasiswabimbel ');
	}
	function hapus_jrs($id_jurusan){
		$where = array('id_jurusan' => $id_jurusan);
		$this->m_jurusan->hapus_data($where,'jurusan');
		redirect('ctrl_admin/jurusan');
	}
	function edit_jrs($id_jurusan){
		$where = array('id_jurusan' => $id_jurusan);
		$data['jurusan'] = $this->m_jurusan->edit_data($where,'jurusan')->result();
		$this->load->view('admin/edit_jrs',$data);
	}
	function update_jrs(){
		$id_jurusan = $this->input->post('id_jurusan');
		$nama_jurusan = $this->input->post('nama_jurusan');
		$keterangan = $this->input->post('keterangan');
		$prospek_kerja = $this->input->post('prospek_kerja');
		
		$data = array(
			'id_jurusan' => $id_jurusan,
			'nama_jurusan' => $nama_jurusan,
			'keterangan' => $keterangan,
			'prospek_kerja' => $prospek_kerja,

		);
	 
		$where = array(
			'id_jurusan' => $id_jurusan
		);
	 
		$this->m_jurusan->update_data($where,$data,'jurusan');
		redirect('ctrl_admin/jurusan');
	}
	function tambah_jrs(){
		$this->load->view('admin/tambah_jrs');
	}

	function insert_jrs()
  {
    $data = array(
      'nama_jurusan'      =>$this->input->post('nama_jurusan'),
      'keterangan'           =>$this->input->post('keterangan'),
      'prospek_kerja'                =>$this->input->post('prospek_kerja'),

    );
    $this->m_jurusan->insert_data($data);
    redirect('ctrl_admin/jurusan');
  }
}