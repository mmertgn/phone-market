<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>

<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?=base_url()?>admin/home">Anasayfa</a>
                </li>
                <li class="active"><a href="<?=base_url()?>admin/yorumlar"> Yorumlar</a></li>
            </ul><!-- /.breadcrumb -->
            <div class="page-header">
                <h1>Yorum Düzenleme</h1>
            </div>
        </div>
        <form role="form" action="<?= base_url()?>admin/yorumlar/guncellekaydet/<?=$urun_yorumlari[0]->id?>" method="post" >
            <div class="form-group" >
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Adı Soyadı </label>
                <div class="col-sm-9">
                    <input type="text" name="adsoy" value="<?=$urun_yorumlari[0]->adsoy?>" id="form-field-1-1" placeholder="Adı Soyadı" class="form-control">
                </div>
            </div>
            <div class="form-group" >
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Yorum İçerik </label>
                <div class="col-sm-9">
                    <input type="text" name="yorum_icerik" value="<?=$urun_yorumlari[0]->yorum_icerik?>" id="form-field-1-1" placeholder="Adı Soyadı" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right"  for="form-field-select-1"> Durum</label>
                <div class="col-sm-9">
                    <select class="form-control" name="durum" id="form-field-select-1">
                        <option value="<?=$urun_yorumlari[0]->durum?>"><?=$urun_yorumlari[0]->durum?></option>
                        <option value="Onaylı">Onaylı</option>
                        <option value="Engelli">Engelli</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-success" style="margin-top: 10px;margin-left: 10px">Güncelle</button>
            </div>
        </form>
    </div>
</div><!-- /.main-content -->

<?php
$this->load->view('admin/_footer');
?>
