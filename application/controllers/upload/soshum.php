<?php
class soshum extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url','download'));
	}
	function index()
	{
		$data['error']= '';
		$data['message']='';
		$this->load->view('upload/v_upload_soshum',$data); 
                //untuk memanggil tampilan yang terdapat di folder view bernama upload_form.php
		$this->content();
	}
	function do_upload()
	{
        $config['upload_path'] = './SOSHUM/'; //nama folder untuk menyimpan file
		$config['overwrite'] = 'FALSE';
		$config['allowed_types'] = 'gif|jpg|png|doc|docx|pdf|xls|xlsx|ppt|ppt|zip|rar';
		$config['max_size']	= '6048'; //ukuran maksimal file
		$config['max_width']  = '0';
		$config['max_height']  = '0';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload())
		{
			$data['error']= $this->upload->display_errors();
			$data['message']='Upload Fail'; //pesan kesalahan
			$this->load->view('upload/v_upload_soshum',$data);
			$this->content();}
		else{
		$data['error']= '';
		$data['message']='Upload Success'; //pesan jika proses upload berhasil
		$this->load->view('upload/v_upload_soshum',$data);
		$this->content();}	
	
        }
    function content()
	{
		$file_path ='./SOSHUM/'; 
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
	$this->load->view('upload/v_download_soshum', $data);	//tampilan untuk mendownload file
	}
	function download() 
    {	 
        $this->load->library('zip'); //untuk mengkonversi kedalam zip
	    $file_path = './SOSHUM/';
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