<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hakkimizda extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('admin/Database_Model');
    }

	public function index()
	{
	    $query = $this->db->get('ayarlar');
        $data['ayar'] = $query->result();

	    $query = $this->db->get('kategoriler');
        $data['kategori'] = $query->result();
        $data["katsayi"] = $query->num_rows();

        $query = $this->db->get('alt_kategoriler');
        $data['altkategori'] = $query->result();

        if($this->session->kullanici_data['id']){
            $k_id = $this->session->kullanici_data['id'];
            $query = $this->Database_Model->sepet_listesi_sorgusu($k_id);
            $data['sepetsayi'] = $query->num_rows();
            $data['headersepet'] = $query->result();
        }else{
            $data['sepetsayi'] = 0;
        }

		$this->load->view('header',$data);
		$this->load->view('hakkimizda');
		$this->load->view('footer');
	}


}
