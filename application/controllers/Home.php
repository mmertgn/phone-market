<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('string');
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

        $query = $this->Database_Model->yeni_urun_sorgusu();
        $data['yeniurun'] = $query->result();

        $query = $this->Database_Model->firsat_sorgusu();
        $data['firsat'] = $query->result();

        $query = $this->Database_Model->kampanyali_urun_sorgusu();
        $data['kampanya'] = $query->result();

        $query = $this->Database_Model->secili_urun_sorgusu();
        $data['secili'] = $query->result();

        $query = $this->Database_Model->coksatan_sorgusu();
        $data['coksatan'] = $query->result();

        $query = $this->Database_Model->slider_sorgusu();
        $data['slides'] = $query->result();

        if($this->session->kullanici_data['id']){
            $k_id = $this->session->kullanici_data['id'];
            $query = $this->Database_Model->sepet_listesi_sorgusu($k_id);
            $data['sepetsayi'] = $query->num_rows();
            $data['headersepet'] = $query->result();
        }else{
            $data['sepetsayi'] = 0;
        }

		$this->load->view('header',$data);
		$this->load->view('slider');
		$this->load->view('main_content');
		$this->load->view('footer');
	}

    public function login(){

        $query = $this->db->get('ayarlar');
        $data['ayar'] = $query->result();
        $query = $this->db->get('kategoriler');
        $data['kategori'] = $query->result();
        $query = $this->db->get('alt_kategoriler');
        $data['altkategori'] = $query->result();
        if($this->session->kullanici_data['id']){
            $k_id = $this->session->kullanici_data['id'];
            $query = $this->Database_Model->sepet_listesi_sorgusu($k_id);
            $data['sepetsayi'] = $query->num_rows();
            $data['headersepet'] = $query->result();
        }else{
            $data['sepetsayi'] = 0;
        };

        $this->load->view('header',$data);
        $this->load->view('loginveregister');
        $this->load->view('footer');
    }

    public function sifremiunuttum()
    {
        $query = $this->db->get('ayarlar');
        $data['ayar'] = $query->result();
        $query = $this->db->get('kategoriler');
        $data['kategori'] = $query->result();
        $query = $this->db->get('alt_kategoriler');
        $data['altkategori'] = $query->result();
        if($this->session->kullanici_data['id']){
            $k_id = $this->session->kullanici_data['id'];
            $query = $this->Database_Model->sepet_listesi_sorgusu($k_id);
            $data['sepetsayi'] = $query->num_rows();
            $data['headersepet'] = $query->result();
        }else{
            $data['sepetsayi'] = 0;
        };

        $this->load->view('header',$data);
        $this->load->view('sifremiunuttum');
        $this->load->view('footer');
    }

    public function sifirlaislem()
    {
        $key = random_string('alnum', 16);
        $k_mail = $this->input->post('email');

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

        $mesaj='Bu maili '.$data["veri"][0]->sirketadi.' '.$k_mail.' hesabınıza ait şifrenin değiştirilme işlemini bildirmek için gönderiyoruz.
        <br>Şifre değişikliğinin aktif hale gelmesi için lütfen aşağıdaki bağlantıya tıklayınız:<br>
        <a href="'.base_url().'home/sifirla/' . $key . '">Link</a><br>
        Teşekkür ederiz.<br>';
        $mesaj.="---------------------------------------------------------------------------------------------------------<br>";
        $mesaj.=$data["veri"][0]->sirketadi."<br>";
        $mesaj.=$data["veri"][0]->adres."<br>";
        $mesaj.=$data["veri"][0]->sehir."<br>";
        $mesaj.=$data["veri"][0]->tel."<br>";
        $mesaj.=$data["veri"][0]->fax."<br>";
        $mesaj.=$data["veri"][0]->email."<br>";

        //Email Gönderme
        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        $this->email->from($data["veri"][0]->smtpemail);
        $this->email->to($k_mail);
        $this->email->subject($data["veri"][0]->sirketadi." Şifre Değişikliği");
        $this->email->message($mesaj);
        //Mail Gönderme
        if($this->email->send())
        {
            $this->Database_Model->sifre_update_key($key,$k_mail);
            $this->session->set_flashdata("sifirla","Başarılı");
            redirect(base_url()."home/sifremiunuttum");
        }
        else
        {
            $this->session->set_flashdata("email_sent","Email göderilirken bir hata oluşmuştur.");
            redirect(base_url()."home/sifremiunuttum");
        }

    }

    public function sifirla($key)
    {
        $query = $this->db->get('ayarlar');
        $data['ayar'] = $query->result();
        $query = $this->db->get('kategoriler');
        $data['kategori'] = $query->result();
        $query = $this->db->get('alt_kategoriler');
        $data['altkategori'] = $query->result();
        if($this->session->kullanici_data['id']){
            $k_id = $this->session->kullanici_data['id'];
            $query = $this->Database_Model->sepet_listesi_sorgusu($k_id);
            $data['sepetsayi'] = $query->num_rows();
            $data['headersepet'] = $query->result();
        }else{
            $data['sepetsayi'] = 0;
        };

        $sorgu = $this->db->query("Select * from kullanicilar where sifirlama_key='".$key."'");
        $data['asd'] = $sorgu->result();
        $this->load->view('header',$data);
        $this->load->view('sifirlamasayfasi');
        $this->load->view('footer');
    }

    public function sifirlandi($id)
    {
        if ($this->input->post('sifre')==$this->input->post('sifre2')){
            $data = array(
                'sifre' => $this->input->post('sifre')
            );
            $this->Database_Model->update_data("kullanicilar",$data,$id);
            $this->session->set_flashdata("sifirlandi","Sıfırlandı");
            redirect(base_url()."home/login");
        }else{
            $this->session->set_flashdata("sifirlanamadi","Sıfırlanamadı");
            redirect(base_url()."home/login");
        }
    }

    public function giris(){

        $email=$this->input->post('email', TRUE);
        $sifre=$this->input->post('sifre', TRUE);
        $result=$this->Database_Model->login($email,$sifre);

        if($result)
        {
            $oturum = array(
                'id'=>$result[0]->id,
                'yetki'=>$result[0]->yetki,
                'email'=>$result[0]->email,
                'adsoy'=>$result[0]->adsoy,
            );
            $this->session->set_userdata('kullanici_data',$oturum);
            redirect(base_url());
        }
        else{
            $this->session->set_flashdata("sonuc","Geçersiz Email yada Şifre Girdiniz.");
            redirect(base_url()."home/login");
        }
    }

    public function cikis()
    {
        $this->session->unset_userdata('kullanici_data');
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function kayitol(){
        $data=array(
            'adsoy'=>$this->input->post('adsoy'),
            'adres'=>$this->input->post('adres'),
            'sehir'=>$this->input->post('sehir'),
            'ilce'=>$this->input->post('ilce'),
            'postkod'=>$this->input->post('postkod'),
            'tel'=>$this->input->post('tel'),
            'email'=>$this->input->post('email'),
            'sifre'=>$this->input->post('sifre'),
            'yetki'=>"Üye",
            'durum'=>"Onaylı"
        );
        if ($this->Database_Model->insert_data("kullanicilar",$data)){
            $this->session->set_flashdata("kayıt","Kayıt Olma İşlemi Başarı ile Gerçekleştirildi");
        }
        else{
            $this->session->set_flashdata("kayıtb","Kayıt Olma İşlemi Gerçekleştirilemedi, Tekrar Deneyiniz.");
        }
        redirect(base_url()."home/login");
    }

	public function sayfayok(){

        $query = $this->db->get('kategoriler');
        $data['kategori'] = $query->result();
        $query = $this->db->get('alt_kategoriler');
        $data['altkategori'] = $query->result();
        $query = $this->db->get('ayarlar');
        $data['ayar'] = $query->result();
        if($this->session->kullanici_data['id']){
            $k_id = $this->session->kullanici_data['id'];
            $query = $this->Database_Model->sepet_listesi_sorgusu($k_id);
            $data['sepetsayi'] = $query->num_rows();

            $data['headersepet'] = $query->result();
        }else{
            $data['sepetsayi'] = 0;
        }

        $this->load->view('header',$data);
        $this->load->view('404');
        $this->load->view('footer');
    }

	public function urun_detayi($id)
    {
        $query = $this->db->get('kategoriler');
        $data['kategori'] = $query->result();
        $query = $this->db->get('alt_kategoriler');
        $data['altkategori'] = $query->result();
        $query = $this->db->get('ayarlar');
        $data['ayar'] = $query->result();
        $query = $this->Database_Model->urun_detay_sorgusu($id);
        $data['urundetay'] = $query->result();
        $query = $this->db->query("Select * from resimler where urun_id=$id");
        $data['galeri'] = $query->result();
        $query = $this->db->query("SELECT kullanicilar.adsoy, urun_yorumlari.tarih, urun_yorumlari.yorum_icerik,urun_yorumlari.id,urun_yorumlari.yorum_yapan_id,urun_yorumlari.durum FROM urun_yorumlari INNER JOIN kullanicilar ON urun_yorumlari.yorum_yapan_id = kullanicilar.id Where urun_yorumlari.urun_id=".$id." ORDER BY urun_yorumlari.tarih DESC");
        $data['yorum'] = $query->result();
        $data['yorumsayisi'] = $query->num_rows();
        $query = $this->Database_Model->secili_urundetay_sorgusu();
        $data['sectik'] = $query->result();
        $query = $this->Database_Model->coksatan_urundetay_sorgusu();
        $data['coksatan'] = $query->result();
        $query = $this->Database_Model->marka_sorgusu($id);
        $data['marka'] = $query->result();
        if($this->session->kullanici_data['id']){
            $k_id = $this->session->kullanici_data['id'];
            $query = $this->Database_Model->sepet_listesi_sorgusu($k_id);
            $data['sepetsayi'] = $query->num_rows();

            $data['headersepet'] = $query->result();
        }else{
            $data['sepetsayi'] = 0;
        }

        $this->load->view('header',$data);
        $this->load->view('urundetay');
        $this->load->view('footer');
    }

    public function yorumekle($k_id)
    {
        $data=array(
            'yorum_icerik'=>$this->input->post('yorum_icerik'),
            'durum'=>"Onaylı",
            'urun_id'=>$this->input->post('urun_id'),
            'yorum_yapan_id'=>$k_id
        ) ;
        $this->Database_Model->insert_data("urun_yorumlari",$data);
        $this->session->set_flashdata("sonuc","Kayıt Ekleme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."home/urun_detayi/".$this->input->post('urun_id'));
    }

    public function yorumsil($id,$u_id){
        $this->db->query("DELETE FROM urun_yorumlari WHERE id=$id");
        redirect(base_url()."home/urun_detayi/".$u_id);
	}
    /*-----------------Profil İşlemleri---------------*/
    public function profil()
    {
        if(!$this->session->userdata('kullanici_data')){
            redirect(base_url().'home/login');
        }
        $k_id = $this->session->kullanici_data['id'];
        $query = $this->db->get('ayarlar');
        $data['ayar'] = $query->result();
        $query = $this->db->get('kategoriler');
        $data['kategori'] = $query->result();
        $query = $this->db->get('alt_kategoriler');
        $data['altkategori'] = $query->result();
        $query = $this->db->query("select * from kullanicilar where id=$k_id");
        $data['kullanici'] = $query->result();
        if($this->session->kullanici_data['id']){
            $k_id = $this->session->kullanici_data['id'];
            $query = $this->Database_Model->sepet_listesi_sorgusu($k_id);
            $data['sepetsayi'] = $query->num_rows();

            $data['headersepet'] = $query->result();
        }else{
            $data['sepetsayi'] = 0;
        }


        $this->load->view('header',$data);
        $this->load->view('hesabim');
        $this->load->view('footer');
    }

    public function profilguncelle($id)
    {
        $data=array(
            'adsoy'=>$this->input->post('adsoy'),
            'adres'=>$this->input->post('adres'),
            'sehir'=>$this->input->post('sehir'),
            'ilce'=>$this->input->post('ilce'),
            'postkod'=>$this->input->post('postkod'),
            'tel'=>$this->input->post('tel'),
            'email'=>$this->input->post('email'),
            'sifre'=>$this->input->post('sifre')
        ) ;
        $this->Database_Model->update_data("kullanicilar",$data,$id);
        $this->session->set_flashdata("guncel","Kayıt Güncelleme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."home/profil");
    }
    /*-----------------Profil İşlemleri Sonu---------------*/


    /*-----------------İstek Listesi---------------*/
    public function istek_listesi()
    {
        if(!$this->session->userdata('kullanici_data')){
            redirect(base_url().'home/login');
        }
        $k_id = $this->session->kullanici_data['id'];
        $query = $this->db->get('ayarlar');
        $data['ayar'] = $query->result();
        $query = $this->db->get('kategoriler');
        $data['kategori'] = $query->result();
        $query = $this->db->get('alt_kategoriler');
        $data['altkategori'] = $query->result();
        $query = $this->Database_Model->istek_listesi_sorgusu($k_id);
        $data['isteklist'] = $query->result();
        $data['isteksayi'] = $query->num_rows();
        if($this->session->kullanici_data['id']){
            $k_id = $this->session->kullanici_data['id'];
            $query = $this->Database_Model->sepet_listesi_sorgusu($k_id);
            $data['sepetsayi'] = $query->num_rows();

            $data['headersepet'] = $query->result();
        }else{
            $data['sepetsayi'] = 0;
        }


        $this->load->view('header',$data);
        $this->load->view('istek_listesi');
        $this->load->view('footer');
    }

    public function isteksil($id){
        $this->db->query("DELETE FROM istek_listesi WHERE id=$id");
        redirect(base_url()."home/istek_listesi");
    }
    public function istekekle($urun_id){
        if(!$this->session->userdata('kullanici_data')){
            redirect(base_url().'home/login');
        }
        $data=array(
            'urun_id'=>$urun_id,
            'kullanici_id'=>$this->session->kullanici_data['id']
        ) ;
        $this->Database_Model->insert_data("istek_listesi",$data);
        $this->session->set_flashdata("sonuc","Kayıt Ekleme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."home/istek_listesi/");
    }
    /*!-----------------İstek Listesi Sonu---------------*/

    /*-----------------Arama İşlemi---------------*/
    public function arama()
    {

        $query = $this->db->get('ayarlar');
        $data['ayar'] = $query->result();
        $query = $this->db->get('kategoriler');
        $data['kategori'] = $query->result();
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

        $key = $this->input->post('search');
        $words = explode(' ', $key);
        $regex = implode('|', $words);

        if ($key == ""){
            redirect(base_url()."home/sayfayok");
        }else{
            $query = $this->Database_Model->arama_sorgusu($regex);
            $data['arama_sonucu'] = $query->result();
            $data['aranan'] = $key;
            $this->session->set_flashdata("sonuc","Kayıt Ekleme İşlemi Başarı ile Gerçekleştirildi");
        }

        $this->load->view('header',$data);
        $this->load->view('arama_sonucu');
        $this->load->view('footer');
    }
    /*!-----------------Arama İşlemi Sonu---------------*/

    /*!-----------------Sepete Ekleme İşlemi---------------*/
    public function sepeteekle($urun_id){
        if(!$this->session->userdata('kullanici_data')){
            $this->session->set_flashdata("sepet","Kayıt Ekleme İşlemi Başarı ile Gerçekleştirildi");
            redirect(base_url().'home/login');
        }
        $data=array(
            'urun_id'=>$urun_id,
            'kullanici_id'=>$this->session->kullanici_data['id']
        ) ;
        $this->Database_Model->insert_data("sepetteki_urunler",$data);
        redirect(base_url()."home/sepet/");
    }

    public function sepet()
    {
        if(!$this->session->userdata('kullanici_data')){
            redirect(base_url().'home/login');
        }
        $k_id = $this->session->kullanici_data['id'];
        $query = $this->db->get('ayarlar');
        $data['ayar'] = $query->result();
        $query = $this->db->get('kategoriler');
        $data['kategori'] = $query->result();
        $query = $this->db->get('alt_kategoriler');
        $data['altkategori'] = $query->result();
        $query = $this->Database_Model->sepet_listesi_sorgusu($k_id);
        $data['sepet'] = $query->result();
        $data['sepetsayi'] = $query->num_rows();
        $data['headersepet'] = $query->result();


        $this->load->view('header',$data);
        $this->load->view('sepetteki_urunler');
        $this->load->view('footer');
    }

    public function sepetsil($id){
        $this->db->query("DELETE FROM sepetteki_urunler WHERE id=$id");
        redirect(base_url()."home/sepet");
    }

    /*!-----------------Sepete Ekleme İşlemi Sonu---------------*/

    public function puanver($puan,$urun_id,$oysayisi,$eskipuan)
    {
        if(!$this->session->userdata('kullanici_data')){
            $this->session->set_flashdata("puan","Kayıt Ekleme İşlemi Başarı ile Gerçekleştirildi");
            redirect(base_url()."home/urun_detayi/".$urun_id);
        }
        $data=array(
            'oysayisi'=>$oysayisi+1,
            'puan'=>$puan+$eskipuan,
        );
        $this->Database_Model->update_data("urunler",$data,$urun_id);
        redirect(base_url()."home/urun_detayi/".$urun_id);
    }

}
