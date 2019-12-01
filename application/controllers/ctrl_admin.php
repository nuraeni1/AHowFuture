<?php 

class ctrl_admin extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_datasiswa');
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
		redirect('ctrl_admin/index');
	}
}