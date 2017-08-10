<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siparis extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('admin/Database_Model');
        if(!$this->session->userdata('logged_in')){
            redirect(base_url().'admin/login');
        }
    }

    public function index()
    {
        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
        $query=$this->db->query("SELECT
siparis.id,
siparis.musteri_id,
siparis.tarih,
siparis.IP,
siparis.tutar,
siparis.odemedurumu,
siparis.siparisdurumu,
siparis.adres,
siparis.ilce,
siparis.sehir,
siparis.tel,
siparis.adsoy,
siparis.postkod,
kullanicilar.email
FROM
kullanicilar
INNER JOIN siparis ON kullanicilar.id = siparis.musteri_id
");
        $data["siparisler"]=$query->result();
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/siparis_listesi');
        $this->load->view('admin/_footer');

    }

    function delete($id)
    {
        $this->db->query("DELETE FROM siparis WHERE id=$id");
        $this->db->query("DELETE FROM siparis_urunler WHERE siparis_id=$id");
        $this->session->set_flashdata("sonuc","Kayıt Silme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/siparis");
    }

    function siparisurunsil($id)
    {
        $this->db->query("DELETE FROM siparis_urunler WHERE id=$id");
        $this->session->set_flashdata("sonuc","Kayıt Silme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/siparis");
    }

    public function edit($id)
    {
        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
        $query=$this->db->get("kullanicilar");
        $data["kullanicilar"]=$query->result();
        $sorgu=$this->db->query("SELECT
kullanicilar.adsoy AS musteri_adi,
siparis.id,
siparis.musteri_id,
siparis.tarih,
siparis.IP,
siparis.tutar,
siparis.odemedurumu,
siparis.siparisdurumu,
siparis.adres,
siparis.ilce,
siparis.sehir,
siparis.tel,
siparis.adsoy,
siparis.postkod
FROM
kullanicilar
INNER JOIN siparis ON siparis.musteri_id = kullanicilar.id
WHERE
siparis.id =$id");
        $data["siparis"]=$sorgu->result();
        $sorgu=$this->db->query("SELECT
urunler.adi AS urunadi,
urunler.y_fiyat AS urunfiyati,
siparis_urunler.urun_id,
siparis_urunler.id,
siparis_urunler.musteri_id,
siparis_urunler.siparis_id,
siparis_urunler.miktar,
siparis_urunler.tarih,
urunler.resim AS urunresmi
FROM
urunler
INNER JOIN siparis_urunler ON siparis_urunler.urun_id = urunler.id
WHERE
siparis_id=$id
");
        $data["sip_urunler"]=$sorgu->result();
        $this->load->view('admin/siparis_duzenle',$data);
    }
    public function guncelleKaydet($id)
    {
        $data=array(
            'adsoy'=>$this->input->post('adsoy'),
            'adres'=>$this->input->post('adres'),
            'sehir'=>$this->input->post('sehir'),
            'ilce'=>$this->input->post('ilce'),
            'postkod'=>$this->input->post('postkod'),
            'tel'=>$this->input->post('tel'),
            'musteri_id'=>$this->input->post('musteri_id'),
            'siparisdurumu'=>$this->input->post('siparisdurumu')
        ) ;
        $this->Database_Model->update_data("siparis",$data,$id);
        $this->session->set_flashdata("sonuc","Kayıt Güncelleme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/siparis");

    }
    

}
