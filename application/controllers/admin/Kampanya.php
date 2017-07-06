
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kampanya extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('admin/Database_Model');
        // Your own constructor code
        if(!$this->session->userdata('logged_in')){
            redirect(base_url().'admin/login');
        }
    }

    public function index()
    {
        $query = $this->db->get('ayarlar');
        $data['veri'] = $query->result();

        $query = $this->db->query("SELECT
kampanyaurun.id,
kampanyaurun.urun_id,
kampanyaurun.firsat_resmi,
kampanyaurun.madde1,
kampanyaurun.madde2,
kampanyaurun.madde3,
kampanyaurun.madde4,
urunler.y_fiyat,
urunler.adi AS urunadi
FROM
kampanyaurun
INNER JOIN urunler ON kampanyaurun.urun_id = urunler.id");
        $data['kampanya'] = $query->result();

        $query = $this->db->query("SELECT
gununfirsati.id,
gununfirsati.urun_id,
urunler.adi AS urunadi,
urunler.y_fiyat
FROM
gununfirsati
INNER JOIN urunler ON gununfirsati.urun_id = urunler.id
");
        $data['firsat'] = $query->result();

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/kampanya_listesi');
        $this->load->view('admin/_footer');
    }

    public function ekle(){
        $query = $this->db->get('ayarlar');
        $data['veri'] = $query->result();

        $query = $this->db->get("urunler");
        $data["urun"] = $query->result();

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/kampanya_ekle');
        $this->load->view('admin/_footer');

    }
    public function resim_kampanya_uploads()
    {
        $config['upload_path']          = './kampanyauploads/';
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
                'firsat_resmi'=>$this->upload->data('file_name'),
                'madde1'=>$this->input->post('madde1'),
                'urun_id'=>$this->input->post('urun_id'),
                'madde2'=>$this->input->post('madde2'),
                'madde3'=>$this->input->post('madde3'),
                'madde4'=>$this->input->post('madde4')
            );
            $this->Database_Model->insert_data("kampanyaurun",$data);
            $this->session->set_flashdata("sonuc","Kampanyalı Ürün Eklendi");
            redirect(base_url()."admin/kampanya/");
        }

    }
    public function sil($id,$resim)
    {
        $this->db->query("DELETE FROM kampanyaurun WHERE id=$id");
        unlink('./kampanyauploads/'.$resim);
        $this->session->set_flashdata("sonuc","Kayıt Silme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/kampanya/");
    }
    public function firsatekle(){
        $query = $this->db->get('ayarlar');
        $data['veri'] = $query->result();

        $query = $this->db->get("urunler");
        $data["urun"] = $query->result();

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/firsat_ekle');
        $this->load->view('admin/_footer');
    }

    public function firsateklekaydet()
    {
        $data=array(
            'kampfiyat'=>$this->input->post('kampfiyat'),
            'urun_id'=>$this->input->post('urun_id')
        ) ;
        $data2 = array(
            'y_fiyat'=>$this->input->post('kampfiyat')
        );
        $this->Database_Model->insert_data("gununfirsati",$data);
        $this->Database_Model->update_data("urunler",$data2,$this->input->post('urun_id'));
        $this->session->set_flashdata("sonuc","Kayıt Ekleme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/kampanya");

    }

    public function firsatsil($id)
    {
        $this->db->query("DELETE FROM gununfirsati WHERE id=$id");
        $this->session->set_flashdata("sonuc","Kayıt Silme İşlemi Başarı ile Gerçekleştirildi");
        redirect(base_url()."admin/kampanya/");
    }
    public function login()
    {
        $query = $this->db->get('ayarlar');
        $data['veri'] = $query->result();
        $this->load->view('admin/login_formu');
    }

}

