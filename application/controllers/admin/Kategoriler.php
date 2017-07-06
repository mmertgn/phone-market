<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoriler extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();  //Database erişmek için kullanılır
        $this->load->model('admin/Database_Model'); //Model Tanımlaması
        if(!$this->session->userdata('logged_in')){
            redirect(base_url().'admin/login');
        }
    }

    public function index()
    {
        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
        $query=$this->db->get("kategoriler");     //tabloyu veritabanından çekti
        $data["kategoriler"]=$query->result();            //sorgu verilerini veri değişkenine attı
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/kategoriler_listesi');
        $this->load->view('admin/_footer');

    }

    public function ekle()
    {
        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/kategori_ekle');
        $this->load->view('admin/_footer');
    }

    public function eklekaydet()
    {
        $data=array(
            'kat_adi'=>$this->input->post('kat_adi'),
            'kat_aciklama'=>$this->input->post('kat_aciklama'),
            'kat_keywords'=>$this->input->post('kat_keywords')
        ) ;
        $this->Database_Model->insert_data("kategoriler",$data);
        $this->session->set_flashdata("sonuc","Kayıt Ekleme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/kategoriler");

    }
    public function altkatekle($id)
    {
        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
        $sorgu = $this->db->query("select * from kategoriler where id=$id");
        $data["kategoriler"]=$sorgu->result();
        $sorgu2 = $this->db->query("select * from alt_kategoriler where kat_id=$id");
        $data["altkat"] = $sorgu2->result();
        $data["altkatsayi"] = $sorgu2->num_rows();
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/altkategori_ekle');
        $this->load->view('admin/_footer');
    }

    public function altkateklekaydet()
    {
        $data=array(
            'adi'=>$this->input->post('adi'),
            'kat_id'=>$this->input->post('kat_id')
        ) ;
        $this->Database_Model->insert_data("alt_kategoriler",$data);
        $this->session->set_flashdata("sonuc","Kayıt Ekleme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/kategoriler/altkatekle/".$data["kat_id"]);

    }

    function altkatdelete($id,$kat_id)
    {
        $this->db->query("DELETE FROM alt_kategoriler WHERE id=$id");
        $this->session->set_flashdata("sonuc","Kayıt Silme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/kategoriler/altkatekle/".$kat_id);
    }

    function delete($id)
    {
        $this->db->query("DELETE FROM kategoriler WHERE id=$id");
        $this->db->query("DELETE FROM alt_kategoriler WHERE kat_id=$id");
        $this->session->set_flashdata("sonuc","Kayıt Silme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/kategoriler");
    }

    public function edit($id)
    {
        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
        $sorgu=$this->db->query("SELECT * FROM kategoriler WHERE id=$id");
        $data["kategoriler"]=$sorgu->result();
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/kategori_duzenle');
        $this->load->view('admin/_footer');
    }

    public function guncelleKaydet($id)
    {
        $data=array(
            'adi'=>$this->input->post('adi'),
            'ust_id'=>$this->input->post('ust_id'),
            'keywords'=>$this->input->post('keywords')
        ) ;
        $this->Database_Model->update_data("kategoriler",$data,$id);
        $this->session->set_flashdata("sonuc","Kayıt Güncelleme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/kategoriler");

    }


}
