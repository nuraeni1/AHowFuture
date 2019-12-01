<?php 
 
class M_datasiswa2 extends CI_Model{
	function tampil_data1(){
    return $this->db->get('universitas');
  }
}