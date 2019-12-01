<?php
class login_model extends CI_Model{
	function admin($username,$password){
		$query = $this->db->query("SELECT * FROM `tbl_admin` WHERE username_admin= '$username' AND password_admin= '$password'");
		return $query;
	}
	function pengajar($username,$password){
		$query = $this->db->query("SELECT * FROM `tbl_pengajar` WHERE username_pengajar='$username' AND password_pengajar='$password'");
		return $query;
	}
	function siswa($username,$password){
		$query = $this->db->query("SELECT * FROM `tbl_siswa` WHERE username_siswa='$username' AND password_siswa='$password'");
		return $query;
	}
}
?>