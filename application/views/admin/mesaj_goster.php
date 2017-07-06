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
                <li class="active"><a href="<?=base_url()?>admin/mesaj"> Mesajlar</a></li>
            </ul><!-- /.breadcrumb -->
            <div class="page-header">
                <h1>Mesaj Ayrıntı</h1>
            </div>
        </div>
        <form role="form" action="<?= base_url()?>admin/mesaj/guncelle/" method="post" >
            <div class="form-group" >
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Adı Soyadı </label>
                <div class="col-sm-9">
                    <input type="text" name="adsoy" value="<?=$mesaj[0]->adsoy?>" id="form-field-1-1" placeholder="Adı Soyadı" class="form-control">
                </div>
            </div>
            <div class="space-4"></div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Email</label>
                <div class="col-sm-9">
                    <input type="email" name="email" value="<?=$mesaj[0]->email?>" id="form-field-1-1" placeholder="Email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Konu</label>
                <div class="col-sm-9">
                    <input type="text" name="konu" value="<?=$mesaj[0]->konu?>" id="form-field-1-1" placeholder="Konu" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Mesaj</label>
                <div class="col-sm-9">
                    <input type="text" name="mesaj" value="<?=$mesaj[0]->mesaj?>" id="form-field-1-1" placeholder="Mesaj" class="form-control">
                </div>
            </div>
            <br><br><br><br><br>
            <div class="form-group" >
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Yorumum </label>
                <div class="col-sm-9">
                    <input type="text" name="yorum" value="<?=$mesaj[0]->yorum?>" id="form-field-1-1" placeholder="" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-lg btn-success" style="margin-left: 10px; margin-top: 10px">Değişiklikleri Kaydet</button>
        </form>
    </div><!-- /.main-content -->

    <?php
    $this->load->view('admin/_footer');
    ?>
