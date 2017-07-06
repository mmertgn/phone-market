
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('admin/Database_Model');
        // Your own constructor code
        if(!$this->session->userdata('logged_in')){
            redirect(base_url().'admin/login');
        }
    }

    public function index()
    {
        $query = $this->db->get('ayarlar');
        $data['veri'] = $query->result();
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/_main_content');
        $this->load->view('admin/_footer');
    }
    public function login()
    {
        $query = $this->db->get('ayarlar');
        $data['veri'] = $query->result();
        $this->load->view('admin/login_formu');
    }

}

