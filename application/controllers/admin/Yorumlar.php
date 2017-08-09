<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yorumlar extends CI_Controller{

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
        $query=$this->db->query('SELECT
urun_yorumlari.id,
urun_yorumlari.urun_id,
urun_yorumlari.yorum_yapan_id,
urun_yorumlari.yorum_icerik,
urun_yorumlari.tarih,
urun_yorumlari.durum,
urunler.adi,
kullanicilar.adsoy
FROM
urun_yorumlari
INNER JOIN urunler ON urun_yorumlari.urun_id = urunler.id
INNER JOIN kullanicilar ON urun_yorumlari.yorum_yapan_id = kullanicilar.id
');
        $data["urun_yorumlari"]=$query->result();
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/yorumlar_listesi');
        $this->load->view('admin/_footer');

    }


    function delete($id)
    {
        $this->db->query("DELETE FROM urun_yorumlari WHERE id=$id");
        $this->session->set_flashdata("sonuc","Kayıt Silme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/yorumlar");
    }

    public function edit($id)
    {
        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
        $sorgu=$this->db->query("SELECT
urun_yorumlari.id,
urun_yorumlari.urun_id,
urun_yorumlari.yorum_yapan_id,
urun_yorumlari.yorum_icerik,
urun_yorumlari.tarih,
urun_yorumlari.durum,
urunler.adi,
kullanicilar.adsoy
FROM
urun_yorumlari
INNER JOIN urunler ON urun_yorumlari.urun_id = urunler.id
INNER JOIN kullanicilar ON urun_yorumlari.yorum_yapan_id = kullanicilar.id
Where urun_yorumlari.id=$id");
        $data["urun_yorumlari"]=$sorgu->result();
        $this->load->view('admin/yorum_duzenle',$data);
    }
    public function guncelleKaydet($id)
    {
        $data=array(
            'yorum_icerik'=>$this->input->post('yorum_icerik'),
            'durum'=>$this->input->post('durum')
        ) ;
        $this->Database_Model->update_data("urun_yorumlari",$data,$id);
        $this->session->set_flashdata("sonuc","Kayıt Güncelleme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/yorumlar");

    }
    

}
