<?php
class saintek extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url','download'));
	}
    function content()
	{
		$file_path ='./SAINTEK/'; 
        $files = scandir($file_path);        
        $files_array = array();       
	foreach($files as $key=>$file_name) 
	{ 
	$file_name = trim($file_name);
	    if($file_name != '.' || $file_name != '..')
        {
	if((is_file($file_path.$file_name))) 
		{ array_push($files_array,$file_name);
            }
	    }
	} 
        $data['files'] = $files_array; 
	$this->load->view('upload/v_download_saintek', $data);	//tampilan untuk mendownload file
	}
	function download() 
    {	 
        $this->load->library('zip'); //untuk mengkonversi kedalam zip
	    $file_path = './SAINTEK/';
        $zip_file_name ='Download';
	    $selected_files = $_POST['files'];
	    foreach($selected_files as $key=>$file)
	{
		$this->zip->read_file($file_path.$file);
	}
		$this->zip->download($zip_file_name); 
	}
}
?>