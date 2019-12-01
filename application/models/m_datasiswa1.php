<?php 
 
class M_datasiswa1 extends CI_Model{
	function tampil_data(){
		return $this->db->get('tbl_siswa');
	}
	 function tampil_data1(){
    return $this->db->get('universitas');
  }
}