<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iletisim extends CI_Controller{

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
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/iletisim_duzenle');
        $this->load->view('admin/_footer');

    }
    public function guncelleKaydet($id)
    {
        $data=array(
            'sirketadi'=>$this->input->post('sirketadi'),
            'adres'=>$this->input->post('adres'),
            'email'=>$this->input->post('email'),
            'sehir'=>$this->input->post('sehir'),
            'tel'=>$this->input->post('tel'),
            'fax'=>$this->input->post('fax'),
            'facebook'=>$this->input->post('facebook'),
            'instagram'=>$this->input->post('instagram'),
            'twitter'=>$this->input->post('twitter')
        ) ;
        $this->Database_Model->update_data("ayarlar",$data,$id);
        $this->session->set_flashdata("sonuc","Kayıt Güncelleme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/iletisim");
    }


}
