<?php
class Database_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function insert_data($table,$data)
    {
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }

    public function update_data($table,$data,$id)
    {
        $this->db->where('id',$id);
        $this->db->update($table,$data);
        return true;
    }
    public function sifre_update_key($key,$email)
    {
        $this->db->query("UPDATE kullanicilar set sifirlama_key='".$key."' where email='".$email."'");
        return true;
    }

    public function yeni_urun_sorgusu(){
        $query = $this->db->query("SELECT
        urunler.id,
        urunler.adi,
        urunler.altKatId,
        urunler.katId,
        urunler.miktar,
        urunler.e_fiyat,
        urunler.y_fiyat,
        urunler.satis_sayisi,
        urunler.resim,
        urunler.uzunaciklama,
        urunler.aciklama,
        urunler.keywords,
        urunler.tarih,
        alt_kategoriler.adi AS altkatadi
        FROM
        urunler
        INNER JOIN alt_kategoriler ON urunler.altKatId = alt_kategoriler.id
        ORDER BY urunler.tarih DESC");

        return $query;
    }
    public function kampanyali_urun_sorgusu(){
        $query = $this->db->query("SELECT
kampanyaurun.id,
kampanyaurun.urun_id,
kampanyaurun.firsat_resmi,
kampanyaurun.madde1,
kampanyaurun.madde2,
kampanyaurun.madde3,
kampanyaurun.madde4,
urunler.adi AS urun_adi,
urunler.y_fiyat
FROM
kampanyaurun
INNER JOIN urunler ON kampanyaurun.urun_id = urunler.id
");

        return $query;
    }
    public function firsat_sorgusu(){
        $query = $this->db->query("SELECT
urunler.adi AS urun_adi,
urunler.y_fiyat,
urunler.id,
gununfirsati.kampfiyat,
urunler.resim,
alt_kategoriler.adi as altkatadi
FROM
urunler
INNER JOIN gununfirsati ON gununfirsati.urun_id = urunler.id
INNER JOIN alt_kategoriler ON urunler.altKatId = alt_kategoriler.id
");

        return $query;
    }
    public function secili_urun_sorgusu(){
        $query = $this->db->query("SELECT
urunler.id as urun_id,
urunler.adi,
urunler.altKatId,
urunler.katId,
urunler.miktar,
urunler.e_fiyat,
urunler.y_fiyat,
urunler.satis_sayisi,
urunler.resim,
urunler.uzunaciklama,
urunler.aciklama,
urunler.keywords,
urunler.tarih,
alt_kategoriler.adi AS altkatadi
FROM
urunler
INNER JOIN alt_kategoriler ON urunler.altKatId = alt_kategoriler.id
ORDER BY
RAND() ASC
LIMIT 16");

        return $query;
    }
    public function secili_urundetay_sorgusu(){
        $query = $this->db->query("SELECT
urunler.id as urun_id,
urunler.adi,
urunler.altKatId,
urunler.katId,
urunler.miktar,
urunler.e_fiyat,
urunler.y_fiyat,
urunler.satis_sayisi,
urunler.resim,
urunler.uzunaciklama,
urunler.aciklama,
urunler.keywords,
urunler.tarih,
urunler.oysayisi,
urunler.puan,
alt_kategoriler.adi AS altkatadi
FROM
urunler
INNER JOIN alt_kategoriler ON urunler.altKatId = alt_kategoriler.id
ORDER BY
RAND() ASC
LIMIT 4");

        return $query;
    }
    public function coksatan_sorgusu(){
        $query = $this->db->query("SELECT
urunler.id AS urun_id,
urunler.adi,
urunler.altKatId,
urunler.katId,
urunler.miktar,
urunler.e_fiyat,
urunler.y_fiyat,
urunler.satis_sayisi,
urunler.resim,
urunler.uzunaciklama,
urunler.aciklama,
urunler.keywords,
urunler.tarih,
alt_kategoriler.adi AS altkatadi
FROM
urunler
INNER JOIN alt_kategoriler ON urunler.altKatId = alt_kategoriler.id
ORDER BY satis_sayisi DESC
");

        return $query;
    }
    public function coksatan_urundetay_sorgusu(){
        $query = $this->db->query("SELECT
urunler.id AS urun_id,
urunler.adi,
urunler.altKatId,
urunler.katId,
urunler.miktar,
urunler.e_fiyat,
urunler.y_fiyat,
urunler.satis_sayisi,
urunler.resim,
urunler.uzunaciklama,
urunler.aciklama,
urunler.keywords,
urunler.tarih,
alt_kategoriler.adi AS altkatadi
FROM
urunler
INNER JOIN alt_kategoriler ON urunler.altKatId = alt_kategoriler.id
ORDER BY satis_sayisi DESC
LIMIT 4
");

        return $query;
    }
    public function slider_sorgusu(){
        $query = $this->db->query("SELECT
slider.id,
slider.resim,
slider.kategori_id,
slider.urun_id,
slider.adi AS baslik,
slider.aciklamasi,
urunler.katId,
urunler.adi AS urunadi,
kategoriler.kat_adi,
urunler.y_fiyat
FROM
slider
LEFT JOIN urunler ON slider.urun_id = urunler.id
LEFT JOIN kategoriler ON slider.kategori_id = kategoriler.id

");

        return $query;
    }
    public function marka_sorgusu($id){
        $query = $this->db->query("SELECT
urunler.id,
alt_kategoriler.adi AS altkatadi,
kategoriler.kat_adi AS katid,
alt_kategoriler.id AS altkatid,
alt_kategoriler.kat_id
FROM
kategoriler
INNER JOIN alt_kategoriler ON alt_kategoriler.kat_id = kategoriler.id
INNER JOIN urunler ON kategoriler.id = urunler.katId
WHERE
urunler.id =
".$id);

        return $query;
    }
    public function kategori_sorgusu($id){
        $query = $this->db->query("SELECT
urunler.id,
urunler.adi,
urunler.altKatId,
urunler.katId,
urunler.miktar,
urunler.e_fiyat,
urunler.y_fiyat,
urunler.satis_sayisi,
urunler.resim,
urunler.uzunaciklama,
urunler.aciklama,
urunler.keywords,
urunler.tarih,
urunler.puan,
urunler.oysayisi,
kategoriler.kat_adi,
kategoriler.kat_aciklama,
kategoriler.kat_keywords,
alt_kategoriler.adi AS altkatadi,
alt_kategoriler.id AS altkatid
FROM
kategoriler
INNER JOIN urunler ON urunler.katId = kategoriler.id
INNER JOIN alt_kategoriler ON urunler.altKatId = alt_kategoriler.id
where urunler.katId=
".$id);

        return $query;
    }
    public function arama_sorgusu($id){
        $query = $this->db->query("SELECT
urunler.id,
urunler.adi,
urunler.altKatId,
urunler.katId,
urunler.miktar,
urunler.e_fiyat,
urunler.y_fiyat,
urunler.satis_sayisi,
urunler.resim,
urunler.uzunaciklama,
urunler.aciklama,
urunler.keywords,
urunler.tarih,
kategoriler.kat_adi,
kategoriler.kat_aciklama,
kategoriler.kat_keywords,
alt_kategoriler.adi AS altkatadi,
alt_kategoriler.id AS altkatid
FROM
kategoriler
INNER JOIN urunler ON urunler.katId = kategoriler.id
INNER JOIN alt_kategoriler ON urunler.altKatId = alt_kategoriler.id
WHEre urunler.adi REGEXP '".$id."'");

        return $query;
    }
    public function altkategori_sorgusu($id){
        $query = $this->db->query("SELECT
urunler.id,
urunler.adi,
urunler.altKatId,
urunler.katId,
urunler.miktar,
urunler.e_fiyat,
urunler.y_fiyat,
urunler.satis_sayisi,
urunler.resim,
urunler.uzunaciklama,
urunler.aciklama,
urunler.keywords,
urunler.tarih,
urunler.oysayisi,
urunler.puan,
kategoriler.kat_adi,
kategoriler.kat_aciklama,
kategoriler.kat_keywords,
alt_kategoriler.adi AS altkatadi,
alt_kategoriler.id AS altkatid
FROM
kategoriler
INNER JOIN urunler ON urunler.katId = kategoriler.id
INNER JOIN alt_kategoriler ON urunler.altKatId = alt_kategoriler.id
where urunler.altKatId=
".$id);

        return $query;
    }

    public function urun_detay_sorgusu($id){
        $query = $this->db->query("SELECT
urunler.id,
urunler.adi,
urunler.altKatId,
urunler.katId,
urunler.miktar,
urunler.e_fiyat,
urunler.y_fiyat,
urunler.satis_sayisi,
urunler.resim,
urunler.uzunaciklama,
urunler.aciklama,
urunler.keywords,
urunler.tarih,
urunler.puan,
urunler.oysayisi,
alt_kategoriler.adi AS altkatadi,
kategoriler.kat_adi AS katadi
FROM
urunler
INNER JOIN alt_kategoriler ON urunler.altKatId = alt_kategoriler.id
INNER JOIN kategoriler ON urunler.katId = kategoriler.id
WHERE
urunler.id =".$id);

        return $query;
    }

    public function istek_listesi_sorgusu($k_id){
        $query = $this->db->query("SELECT
urunler.adi AS urunadi,
urunler.y_fiyat AS urunfiyat,
urunler.id AS urunid,
urunler.miktar AS urunmiktar,
urunler.resim AS urunresim,
istek_listesi.id
FROM
istek_listesi
INNER JOIN kullanicilar ON istek_listesi.kullanici_id = kullanicilar.id
INNER JOIN urunler ON istek_listesi.urun_id = urunler.id
WHERE istek_listesi.kullanici_id =".$k_id);

        return $query;
    }
    public function sepet_listesi_sorgusu($k_id){
        $query = $this->db->query("SELECT
sepetteki_urunler.id,
urunler.adi AS urunadi,
urunler.y_fiyat AS urunfiyat,
urunler.id AS urunid,
urunler.miktar AS urunmiktar,
urunler.resim AS urunresim
FROM
sepetteki_urunler
INNER JOIN urunler ON sepetteki_urunler.urun_id = urunler.id
INNER JOIN kullanicilar ON sepetteki_urunler.kullanici_id = kullanicilar.id
WHERE sepetteki_urunler.kullanici_id =".$k_id);

        return $query;
    }

    public function urun_detay($id)
    {
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
                INNER JOIN urunler ON urunler.altKatId = alt_kategoriler.id INNER JOIN kategoriler ON urunler.katId = kategoriler.id
                WHERE urunler.id=".$id;

        $query=$this->db->query($sql);

        if($query->num_rows()==1)
        {
            return $query->result();
        }
        else{
            return false;
        }

    }

    public function sepet_urun($id)
    {
        $sql="SELECT urunler.adi as adi, urunler.sfiyat as fiyat, sepet.* FROM sepet
            LEFT JOIN urunler
            ON sepet.urun_id=urunler.id             
            WHERE sepet.kullanici_id=".$id;

        $query=$this->db->query($sql);

        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else{
            return false;
        }

    }


    public function login($email,$sifre)
    {
        $this->db->select('*');
        $this->db->from('kullanicilar');
        $this->db->where('email',$email);
        $this->db->where('sifre',$sifre);
        $this->db->limit(1);

        $query=$this->db->get();

        if($query->num_rows()==1)
        {
            return $query->result();
        }
        else{
            return false;
        }

    }


}
