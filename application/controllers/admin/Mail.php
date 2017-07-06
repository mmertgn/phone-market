<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller{

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
        $query=$this->db->get("ayarlar");     //tabloyu veritabanından çekti
        $data["veri"]=$query->result();            //sorgu verilerini veri değişkenine attı
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/mail_duzenle');
        $this->load->view('admin/_footer');

    }
    public function guncelleKaydet($id)
    {
        $data=array(
            'smtpserver'=>$this->input->post('smtpserver'),
            'smtpport'=>$this->input->post('smtpport'),
            'smtpemail'=>$this->input->post('smtpemail'),
            'password'=>$this->input->post('password')
        ) ;
        $this->Database_Model->update_data("ayarlar",$data,$id);
        $this->session->set_flashdata("sonuc","Kayıt Güncelleme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/mail");
    }


}
