<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kullanicilar extends CI_Controller{

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
        $query=$this->db->get("kullanicilar");
        $data["kullanicilar"]=$query->result();
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/kullanicilar_listesi');
        $this->load->view('admin/_footer');

    }
    public function ekle()
    {
        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
        $this->load->view('admin/kullanici_ekle',$data);
    }
    public function eklekaydet()
    {
        $data=array(
            'adsoy'=>$this->input->post('adsoy'),
            'adres'=>$this->input->post('adres'),
            'sehir'=>$this->input->post('sehir'),
            'ilce'=>$this->input->post('ilce'),
            'postkod'=>$this->input->post('postkod'),
            'tel'=>$this->input->post('tel'),
            'email'=>$this->input->post('email'),
            //'tarih'=>$this->input->post('tarih'),
            'sifre'=>$this->input->post('sifre'),
            'yetki'=>$this->input->post('yetki'),
            'durum'=>$this->input->post('durum')
        ) ;
        $this->Database_Model->insert_data("kullanicilar",$data);
        $this->session->set_flashdata("sonuc","Kayıt Ekleme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/kullanicilar");
        
    }

    function delete($id)
    {
        $this->db->query("DELETE FROM kullanicilar WHERE id=$id");
        $this->session->set_flashdata("sonuc","Kayıt Silme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/kullanicilar");
    }

    public function edit($id)
    {
        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
        $sorgu=$this->db->query("SELECT * FROM kullanicilar WHERE id=$id");
        $data["kullanicilar"]=$sorgu->result();
        $this->load->view('admin/kullanici_duzenle',$data);
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
            'email'=>$this->input->post('email'),
            //'tarih'=>$this->input->post('tarih'),
            'sifre'=>$this->input->post('sifre'),
            'yetki'=>$this->input->post('yetki'),
            'durum'=>$this->input->post('durum')
        ) ;
        $this->Database_Model->update_data("kullanicilar",$data,$id);
        $this->session->set_flashdata("sonuc","Kayıt Güncelleme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/kullanicilar");

    }
    

}
