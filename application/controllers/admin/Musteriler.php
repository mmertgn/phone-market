<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musteriler extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();  //Database erişmek için kullanılır
        $this->load->model('admin/Database_Model'); //Model Tanımlaması
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url() . 'admin/login');
        }
    }

    public function index()
    {
        $query = $this->db->get("musteriler");     //tabloyu veritabanından çekti
        $data["veri"] = $query->result();            //sorgu verilerini veri değişkenine attı
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/musteriler_listesi', $data);
        $this->load->view('admin/_footer');

    }
    public function preview($id)
    {
        $sorgu=$this->db->query("SELECT * FROM musteriler WHERE id=$id");
        $data["veri"]=$sorgu->result();
        $this->load->view('admin/musteri_goster',$data);
    }
}