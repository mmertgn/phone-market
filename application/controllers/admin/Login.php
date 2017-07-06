<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        //$this->load->library('form_validation',"session");
        $this->load->library("session");
        $this->load->model('admin/Admin_Model');
        $this->load->database();
        // Your own constructor code
    }

    public function index()
    {
        $this->load->view('admin/login_formu');
    }
    public function login_ol()
    {
            $email=$this->input->post('email', TRUE);
            $sifre=$this->input->post('password', TRUE);
            $result=$this->Admin_Model->login($email,$sifre);//admin modele email şifresini gönderiyor.
            if($result)
            {
                $sess_array = array(
                'id'=>$result[0]->id,
                'adsoy'=>$result[0]->adsoy,
                'adres'=>$result[0]->adres,
                'sehir'=>$result[0]->sehir,
                'ilce'=>$result[0]->ilce,
                'postkod'=>$result[0]->postkod,
                'tel'=>$result[0]->tel,
                'email'=>$result[0]->email,
                'tarih'=>$result[0]->tarih,
                'sifre'=>$result[0]->sifre,
                'yetki'=>$result[0]->yetki,
                'durum'=>$result[0]->durum
            );
            $this->session->set_userdata('logged_in',$sess_array);
            redirect(base_url().'admin/home/');
            }
            else{
                $this->session->set_flashdata("login_hata","Geçersiz Email yada Şifre Girdiniz.".$this->input->post('email').$this->input->post('sifre'));
                $this->load->view('admin/login_formu');
            }
        }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect(base_url().'admin/login');
    }




   

}
