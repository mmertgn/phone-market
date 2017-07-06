<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        //$this->load->helper('url');
        $this->load->database();  //Database erişmek için kullanılır
        $this->load->model('admin/Database_Model');
        $this->load->helper(array('form','url'));
        if(!$this->session->userdata('logged_in')){
            redirect(base_url().'admin/login');
        }
    }
    public function index()
    {
        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
        $query = $this->db->get("slider");
        $data["veriler"] = $query->result();
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/slider_galerisi');
        $this->load->view('admin/_footer');

    }

    public function ekle()
    {

        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
        $query = $this->db->get("kategoriler");
        $data["kat"] = $query->result();
        $query = $this->db->get("urunler");
        $data["urun"] = $query->result();
        $this->load->view('admin/slider_ekle',$data);
    }

    public function resim_slider_uploads()
    {
        $config['upload_path']          = './slideruploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata("sonuc","Upload Hatası".$error);
            redirect(base_url()."admin/slider/");
        }
        else
        {
            $data=array(
                'resim'=>$this->upload->data('file_name'),
                'kategori_id'=>$this->input->post('kategori_id'),
                'urun_id'=>$this->input->post('urun_id'),
                'adi'=>$this->input->post('adi'),
                'aciklamasi'=>$this->input->post('aciklamasi')
            );
            $this->Database_Model->insert_data("slider",$data);
            $this->session->set_flashdata("sonuc","Resim Upload Edildi");
            redirect(base_url()."admin/slider/");
        }

    }
    public function sil($id,$resim)
    {
        $this->db->query("DELETE FROM slider WHERE id=$id");
        unlink('./slideruploads/'.$resim);
        $this->session->set_flashdata("sonuc","Kayıt Silme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/slider/");
    }






}
