<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Altkategori extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('admin/Database_Model');
    }

	public function liste($id)
	{
	    $query = $this->db->get('ayarlar');
        $data['ayar'] = $query->result();

	    $query = $this->db->get('kategoriler');
        $data['kategori'] = $query->result();
        $data["katsayi"] = $query->num_rows();

        $query = $this->db->get('alt_kategoriler');
        $data['altkategori'] = $query->result();

        $query = $this->db->query("SELECT
alt_kategoriler.id,
kategoriler.kat_adi,
alt_kategoriler.adi,
alt_kategoriler.kat_id,
kategoriler.kat_aciklama,
kategoriler.kat_keywords
FROM
kategoriler
RIGHT JOIN alt_kategoriler ON alt_kategoriler.kat_id = kategoriler.id
WHERE
alt_kategoriler.id =$id");
        $data['katsecili'] = $query->result();

        $query = $this->Database_Model->altkategori_sorgusu($id);
        $data['urun_kat'] = $query->result();

        $query = $this->db->get('alt_kategoriler');
        $data['urun_altkat'] = $query->result();

        $query = $this->Database_Model->coksatan_urundetay_sorgusu();
        $data['coksatan'] = $query->result();

        if($this->session->kullanici_data['id']){
            $k_id = $this->session->kullanici_data['id'];
            $query = $this->Database_Model->sepet_listesi_sorgusu($k_id);
            $data['sepetsayi'] = $query->num_rows();
            $data['headersepet'] = $query->result();
        }else{
            $data['sepetsayi'] = 0;
        }

        $this->load->view('header',$data);
        $this->load->view('urun_altkategori');
        $this->load->view('footer');
	}


}
