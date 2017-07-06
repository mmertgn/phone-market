<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesaj extends CI_Controller{

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
        $query=$this->db->get("mesaj");     //tabloyu veritabanından çekti
        $data["mesaj"]=$query->result();            //sorgu verilerini veri değişkenine attı
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/mesaj_listele');
        $this->load->view('admin/_footer');

    }

    public function guncelle($id)
    {
        $data=array(
            'yorum'=>$this->input->post('yorum')
        );
        $this->Database_Model->update_data("mesaj",$data,$id);
        $this->session->set_flashdata("sonuc","Yorum ekleme Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/mesaj");

    }

    function delete($id)
    {
        $this->db->query("DELETE FROM mesaj WHERE id=$id");
        $this->session->set_flashdata("sonuc","Kayıt Silme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/mesaj");
    }

    public function preview($id)
    {
        $data=array(
            'durum'=>1,
        );
        $this->Database_Model->update_data("mesaj",$data,$id);
        $sorgu=$this->db->query("SELECT * FROM mesaj WHERE id=$id");
        $data["mesaj"]=$sorgu->result();
        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
        $this->load->view('admin/mesaj_goster',$data);
    }

}
