<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sorular extends CI_Controller{

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
        $query=$this->db->get("sorular");     //tabloyu veritabanından çekti
        $data["sorular"]=$query->result();            //sorgu verilerini veri değişkenine attı
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/sorular_listesi');
        $this->load->view('admin/_footer');

    }

    public function ekle()
    {
        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/sorular_ekle');
        $this->load->view('admin/_footer');
    }
    public function eklekaydet()
    {
        $data=array(
            'soru'=>$this->input->post('soru'),
            'cevap'=>$this->input->post('cevap')
        ) ;
        $this->Database_Model->insert_data("sorular",$data);
        $this->session->set_flashdata("sonuc","Kayıt Ekleme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/sorular");

    }

    public function edit($id)
    {
        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
        $sorgu=$this->db->query("SELECT * FROM sorular WHERE id=$id");
        $data["sorular"]=$sorgu->result();
        $this->load->view('admin/sorular_duzenle',$data);
    }
    public function guncelleKaydet($id)
    {
        $data=array(
            'soru'=>$this->input->post('soru'),
            'cevap'=>$this->input->post('cevap')
        ) ;
        $this->Database_Model->update_data("sorular",$data,$id);
        $this->session->set_flashdata("sonuc","Kayıt Güncelleme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/sorular");

    }


}
