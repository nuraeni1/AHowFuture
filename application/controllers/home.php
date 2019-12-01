<?php
class home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	function index(){
		$this->load->helper('url');
		$this->load->view('v_home');
	}
	function aboutus(){
		$this->load->helper('url');
		$this->load->view('v_aboutus');
	}
}
?>