<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bizeulasin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('admin/Database_Model');
    }

	public function index()
	{
	    $query = $this->db->get('ayarlar');
        $data['ayar'] = $query->result();

	    $query = $this->db->get('kategoriler');
        $data['kategori'] = $query->result();
        $data["katsayi"] = $query->num_rows();

        $query = $this->db->get('alt_kategoriler');
        $data['altkategori'] = $query->result();

        if($this->session->kullanici_data['id']){
            $k_id = $this->session->kullanici_data['id'];
            $query = $this->Database_Model->sepet_listesi_sorgusu($k_id);
            $data['sepetsayi'] = $query->num_rows();
            $data['headersepet'] = $query->result();
        }else{
            $data['sepetsayi'] = 0;
        }

		$this->load->view('header',$data);
		$this->load->view('bizeyazin');
		$this->load->view('footer');
	}

    public function gonder()
    {
        $data=array(
            'adsoy'=>$this->input->post('adsoy'),
            'email'=>$this->input->post('email'),
            'tel'=>$this->input->post('tel'),
            'konu'=>$this->input->post('konu'),
            'mesaj'=>$this->input->post('mesaj')

        ) ;
        $this->Database_Model->insert_data("mesaj",$data);

        $adsoy=$this->input->post("adsoy");
        $email=$this->input->post("email");

        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();

        $config=array(
            'protocol'=>'smtp',
            'smtp_host'=>$data["veri"][0]->smtpserver,
            'smtp_port'=>$data["veri"][0]->smtpport,
            'smtp_user'=>$data["veri"][0]->smtpemail,
            'smtp_pass'=>$data["veri"][0]->password,
            'mailtype'=>'html',
            'charset'=>'utf-8',
            'wordwrap'=>TRUE
        );

        $mesaj="Değerli :".$adsoy."<br>
        Göndermiş olduğunuz mesaj alınmıştır.<br>En kısa sürede sizinle iletişime geçilecektir.<br>Teşekkür ederiz.<br>";
        $mesaj.="---------------------------------------------------------------------------------------------------------<br>";
        $mesaj.=$data["veri"][0]->sirketadi."<br>";
        $mesaj.=$data["veri"][0]->adres."<br>";
        $mesaj.=$data["veri"][0]->sehir."<br>";
        $mesaj.=$data["veri"][0]->tel."<br>";
        $mesaj.=$data["veri"][0]->fax."<br>";
        $mesaj.=$data["veri"][0]->email."<br>";
        $mesaj.="Gönderilen Mesaj<br>-------------------------------------------------------------------------------------<br>";
        $mesaj.=$this->input->post('mesaj');

        //Email Gönderme
        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        $this->email->from($data["veri"][0]->smtpemail);
        $this->email->to($email);
        $this->email->subject($data["veri"][0]->sirketadi." Form Alindi Mesaji");
        $this->email->message($mesaj);
        //Mail Gönderme
        if($this->email->send())
        {
            $this->session->set_flashdata("email_sent","Email başarılı bir şekilde gönderilmiştir.");
            redirect(base_url()."bizeulasin");
        }
        else
        {
            $this->session->set_flashdata("email_sent","Email göderilirken bir hata oluşmuştur.");
            show_error($this->email->print_debugger());
        }

        $this->session->set_flashdata("sonuc","Mesajınız başarılı bir şekilde gönderilmiştir.En kısa zamanda geri dönüş yapılacaktır.");
        redirect(base_url()."bizeulasin");
    }
}
