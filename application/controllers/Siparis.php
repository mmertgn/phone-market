<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siparis extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('admin/Database_Model');
    }

	public function siparisodeme()
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
            $data['sepet'] = $query->result();
        }else{
            $data['sepetsayi'] = 0;
        }

		$this->load->view('header',$data);
		$this->load->view('odeme_sayfasi');
		$this->load->view('footer');
	}


    public function siparistamamislem()
    {
        $k_id = $this->session->kullanici_data['id'];
        if($this->session->kullanici_data['id']){
            $query = $this->Database_Model->sepet_listesi_sorgusu($k_id);
            $data['eskisepetsayi'] = $query->num_rows();
        }else{
            $data['eskisepetsayi'] = 0;
        }
        $siparis=array(
            'IP'=>$this->input->ip_address(),
            'musteri_id'=>$this->session->kullanici_data['id'],
            'tutar'=>$this->input->post('geneltoplam'),
            'odemedurumu'=>"Beklemede",
            'siparisdurumu'=>"Onaylı",
            'adsoy'=>$this->input->post('adsoy'),
            'tel'=>$this->input->post('tel'),
            'adres'=>$this->input->post('adres'),
            'sehir'=>$this->input->post('sehir'),
            'ilce'=>$this->input->post('ilce'),
            'postkod'=>$this->input->post('postkod')
        );
        $siparis_id = $this->Database_Model->insert_data("siparis",$siparis);

        for ($i = 1; $i<=$data['eskisepetsayi']; $i++ ) {
            $siparisurun = array(
                'siparis_id' => $siparis_id,
                'musteri_id' => $this->session->kullanici_data['id'],
                'urun_id' => $this->input->post('urun_id'.$i)
            );
            $this->Database_Model->insert_data("siparis_urunler", $siparisurun);
        }

        $this->db->query("DELETE FROM sepetteki_urunler WHERE kullanici_id=$k_id");
        redirect(base_url().'siparis/siparistamam/'.$siparis_id);
    }

	public function siparistamam($siparis_id)
    {
        $query = $this->db->get('ayarlar');
        $data['ayar'] = $query->result();

        $query = $this->db->get('kategoriler');
        $data['kategori'] = $query->result();
        $data["katsayi"] = $query->num_rows();

        $query = $this->db->get('alt_kategoriler');
        $data['altkategori'] = $query->result();

        $k_id = $this->session->kullanici_data['id'];
        if($this->session->kullanici_data['id']){
            $query = $this->Database_Model->sepet_listesi_sorgusu($k_id);
            $data['sepetsayi'] = $query->num_rows();
            $data['headersepet'] = $query->result();
            $data['sepet'] = $query->result();
        }else{
            $data['sepetsayi'] = 0;
        }

        $query = $this->db->query("SELECT
        siparis.ilce,
        siparis.adres,
        siparis.sehir,
        siparis.tel,
        siparis.adsoy,
        siparis.postkod,
        siparis.tutar,
        urunler.adi AS urunadi,
        urunler.y_fiyat AS urunfiyat
        FROM
        siparis_urunler
        INNER JOIN urunler ON urunler.id = siparis_urunler.urun_id
        INNER JOIN siparis ON siparis_urunler.siparis_id = siparis.id
        WHERE
        siparis.id =$siparis_id");
        $data1['siparissonuc'] = $query->result();

        $this->load->view('header',$data);
        $this->load->view('odeme_tamam',$data1);
        $this->load->view('footer');
    }

    public function siparisgecmisi()
    {
        $query = $this->db->get('ayarlar');
        $data['ayar'] = $query->result();

        $query = $this->db->get('kategoriler');
        $data['kategori'] = $query->result();
        $data["katsayi"] = $query->num_rows();

        $query = $this->db->get('alt_kategoriler');
        $data['altkategori'] = $query->result();

        $k_id = $this->session->kullanici_data['id'];
        if($this->session->kullanici_data['id']){
            $query = $this->Database_Model->sepet_listesi_sorgusu($k_id);
            $data['sepetsayi'] = $query->num_rows();
            $data['headersepet'] = $query->result();
            $data['sepet'] = $query->result();
        }else{
            $data['sepetsayi'] = 0;
        }

        $query = $this->db->query("Select * from siparis where musteri_id=".$k_id." order by siparis.id desc");
        $data1['gecs'] = $query->result();

        $query = $this->db->query("SELECT
        siparis_urunler.id,
        siparis_urunler.musteri_id,
        siparis_urunler.siparis_id,
        siparis_urunler.urun_id,
        siparis_urunler.miktar,
        siparis_urunler.tarih,
        urunler.y_fiyat AS urunfiyat,
        urunler.adi AS urunadi
        FROM
        siparis_urunler
        INNER JOIN urunler ON siparis_urunler.urun_id = urunler.id");
        $data1['gecmis_siparis_urun'] = $query->result();

        $this->load->view('header',$data);
        $this->load->view('siparislerim',$data1);
        $this->load->view('footer');
    }

}
