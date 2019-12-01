<?php
 
class Chat extends CI_Controller
{
    public $tbl_siswa;
 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->load->helper(array('url', 'form'));
        $this->load->library('user_agent');
 
        if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
 
        $this->tbl_siswa = $this->db->get_where('tbl_siswa', array('id' => $this->session->userdata['id_siswa']), 1)->row();
    }
 
    public function index()
    {
        $teman = $this->db->where('id !=', $this->tbl_siswa->id_siswa)->get('tbl_siswa');
        $this->load->view('chat_dashboard', array(
            'teman' => $teman
        ));
    }
 
    public function getChats()
    {
        header('Content-Type: application/json');
        if ($this->input->is_ajax_request()) {
            // Find friend
            $friend = $this->db->get_where('tbl_siswa', array('id' => $this->input->post('chatWith')), 1)->row();
 
            // Get Chats
            $chats = $this->db
                ->select('chat.*, tbl_siswa.nama_siswa')
                ->from('chat')
                ->join('tbl_siswa', 'chat.send_by = tbl_siswa.id_siswa')
                ->where('(send_by = '. $this->tbl_siswa->id .' AND send_to = '. $friend->id_siswa .')')
                ->or_where('(send_to = '. $this->tbl_siswa->id .' AND send_by = '. $friend->id_siswa .')')
                ->order_by('chat.time', 'desc')
                ->limit(100)
                ->get()
                ->result();
 
            $result = array(
                'name' => $friend->nama_siswa,
                'chats' => $chats
            );
            echo json_encode($result);
        }
    }
 
    public function sendMessage()
    {
        $this->db->insert('chat', array(
            'message' => htmlentities($this->input->post('message', true)),
            'send_to' => $this->input->post('chatWith'),
            'send_by' => $this->tbl_siswa->id
        ));
    }
}