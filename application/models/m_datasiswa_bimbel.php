<?php
class M_datasiswa_bimbel extends CI_Model{
  function tampil_data(){
    return $this->db->get('tbl_siswa');
  }
  function insert_data($data){
    $this->db->insert('tbl_siswa',$data);
  }
  function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }
  function edit_data($where,$table){    
  return $this->db->get_where($table,$where);
  }
  function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  } 
}
