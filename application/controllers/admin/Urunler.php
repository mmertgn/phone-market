<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urunler extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        //$this->load->helper('url');
        $this->load->database();  //Database erişmek için kullanılır
        $this->load->model('admin/Database_Model'); //Model Tanımlaması
        $this->load->helper(array('form','url'));
        if(!$this->session->userdata('logged_in')){
            redirect(base_url().'admin/login');
        }
    }

    public function index()
    {
        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
        $sql="SELECT
                urunler.id,
                urunler.adi,
                urunler.altKatId,
                urunler.katId,
                urunler.miktar,
                urunler.e_fiyat,
                urunler.y_fiyat,
                urunler.resim,
                urunler.uzunaciklama,
                urunler.aciklama,
                urunler.keywords,
                kategoriler.kat_adi AS katAdi,
                alt_kategoriler.adi AS altKatAdi
                FROM
                alt_kategoriler
                INNER JOIN urunler ON urunler.altKatId = alt_kategoriler.id INNER JOIN kategoriler ON urunler.katId = kategoriler.id";
        $query=$this->db->query($sql);     //tabloyu veritabanından çekti
        $data["urunler"]=$query->result();            //sorgu verilerini veri değişkenine attı

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/urunler_listesi');
        $this->load->view('admin/_footer');

    }
    
    public function ekle()
    {
        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
        $this->load->view('admin/urun_ekle',$data);
    }

    public function eklekaydet(){
        $data=array(
            'adi'=>$this->input->post('adi'),
            'katId'=>$this->input->post('katId'),
            'altKatId'=>$this->input->post('altKatId'),
            'miktar'=>$this->input->post('miktar'),
            'e_fiyat'=>$this->input->post('e_fiyat'),
            'y_fiyat'=>$this->input->post('y_fiyat'),
            'keywords'=>$this->input->post('keywords'),
            'aciklama'=>$this->input->post('aciklama'),
            'uzunaciklama'=>$this->input->post('uzunaciklama'),
            'puan'=>20,
            'oysayisi'=>5
        ) ;
        $this->Database_Model->insert_data("urunler",$data);
        $this->session->set_flashdata("sonuc","Kayıt Ekleme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/urunler");
    }

    public function get_countries()
    {
        $query=$this->db->get('kategoriler');
        $result= $query->result();
        $data=array();
        foreach($result as $r)
        {
            $data['value']=$r->id;
            $data['label']=$r->kat_adi;
            $json[]=$data;


        }
        echo json_encode($json);
    }

    public function get_states()
    {
        //$result = $this->db->query("Select * from alt_kategoriler where kat_id=".$_POST['id']);
        $a = $_POST['id'];
        $result=$this->db->where('kat_id',$a)
            ->get('alt_kategoriler')
            ->result();

        $data=array();
        foreach($result as $r)
        {
            $data['value']=$r->id;
            $data['label']=$r->adi;
            $json[]=$data;


        }
        echo json_encode($json);

    }

    function delete($id)
    {
        $this->db->query("DELETE FROM urunler WHERE id=$id");
        $this->session->set_flashdata("sonuc","Kayıt Silme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/urunler");
    }

    public function edit($id)
    {
        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
        $sorgu=$this->Database_Model->urun_detay($id);
        $data['urun'] = $sorgu;
        $this->load->view('admin/urunler_duzenle',$data);
    }


    public function guncelleKaydet($id)
    {
        $data=array(
            'adi'=>$this->input->post('adi'),
            'katId'=>$this->input->post('katId'),
            'altKatId'=>$this->input->post('altKatId'),
            'miktar'=>$this->input->post('miktar'),
            'e_fiyat'=>$this->input->post('e_fiyat'),
            'y_fiyat'=>$this->input->post('y_fiyat'),
            'keywords'=>$this->input->post('keywords'),
            'aciklama'=>$this->input->post('aciklama'),
            'uzunaciklama'=>$this->input->post('uzunaciklama')
        ) ;
        $this->Database_Model->update_data("urunler",$data,$id);
        $this->session->set_flashdata("sonuc","Kayıt Güncelleme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/urunler");

    }

    
    public function resimEkle($id)
    {
        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
        $sorgu=$this->db->query("SELECT * FROM urunler WHERE id=$id");
        $data["resim"]=$sorgu->result();
        $this->load->view('admin/urun_resim_ekleme_formu',$data);
    }

    public function resimUploads($id)
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata("sonuc","Upload Hatası".$error);
            redirect(base_url()."admin/urunler/resimekle/$id");
        }
        else
        {
            $data=array(
                'resim'=>$this->upload->data('file_name')

            ) ;
            $this->Database_Model->update_data("urunler",$data,$id);
            $this->session->set_flashdata("sonuc","Resim Upload Edildi");
            redirect(base_url()."admin/urunler");
        }

    }
    public function resim_galeri_ekle($id)
    {
        $query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();

        $sorgu=$this->db->query("SELECT * FROM urunler WHERE id=$id");
        $data["urun"]=$sorgu->result();

        $sorgu=$this->db->query("SELECT * FROM resimler  WHERE urun_id=$id");
        $data["veriler"]=$sorgu->result();

        $this->load->view('admin/urun_galeri_ekleme_formu',$data);
    }

    public function resim_galeri_uploads($id)
    {
        $config['upload_path']          = './galeriuploads/';
        $config['allowed_types']        = 'gif|jpg|png';//Virüs dosyası tarzındakileri sisteme yüklemez
        $config['max_size']             = 10000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata("sonuc","Upload Hatası".$error);

            redirect(base_url()."admin/urunler/resim_galeri_ekle/".$id);
        }
        else
        {
            $data=array(
                'urun_id'=>$id,
                'resim'=>$this->upload->data('file_name')
            ) ;
            $this->Database_Model->insert_data("resimler",$data);

            $this->session->set_flashdata("sonuc","Resim Upload Edildi");
            //$data = array('upload_data' => $this->upload->data());
            // $this->load->view('upload_success', $data);

            redirect(base_url()."admin/urunler/resim_galeri_ekle/".$id);
        }

    }
    public function resim_sil($id,$resim_id,$resim)
    {
        $this->db->query("DELETE FROM resimler WHERE id=$resim_id");
        unlink('./galeriuploads/'.$resim);
        $this->session->set_flashdata("sonuc","Kayıt Silme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/urunler/resim_galeri_ekle/".$id);
    }

    
    


}
