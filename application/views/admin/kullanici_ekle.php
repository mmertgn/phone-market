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
                <li class="active"><a href="<?=base_url()?>admin/kullanicilar"> Kullanıcılar</a></li>
            </ul><!-- /.breadcrumb -->
            <div class="page-header">
                <h1>Kullanıcı Ekleme</h1>
            </div>
        </div>
        <div class="box-content">
            <form role="form" action="<?= base_url()?>admin/kullanicilar/eklekaydet" method="post" >
                <div class="form-group" >
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Adı Soyadı </label>
                    <div class="col-sm-9">
                        <input type="text" name="adsoy" id="form-field-1-1" placeholder="Adı Soyadı" class="form-control" required>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" id="form-field-1-1" placeholder="Email" class="form-control" required>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Adres </label>
                    <div class="col-sm-9">
                        <input type="text" name="adres" id="form-field-1-1" placeholder="Adres" class="form-control" required>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Şehir </label>
                    <div class="col-sm-9">
                        <input type="text" name="sehir" id="form-field-1-1" placeholder="Şehir" class="form-control">
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> İlçe </label>
                    <div class="col-sm-9">
                        <input type="text" name="ilce" id="form-field-1-1" placeholder="İlçe" class="form-control">
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Posta Kodu </label>
                    <div class="col-sm-9">
                        <input type="text" name="postkod" id="form-field-1-1" placeholder="Posta Kodu" class="form-control">
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Cep Numarası </label>
                    <div class="col-sm-9">
                        <input type="text" name="tel" id="form-field-1-1" placeholder="Numara" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right"  for="form-field-select-1"> Yetkisi</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="yetki" id="form-field-select-1">
                            <option value="">Seciniz</option>
                            <option value="Admin">Admin</option>
                            <option value="Üye">Üye</option>
                        </select>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right"  for="form-field-select-1"> Durum</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="durum" id="form-field-select-1">
                            <option value="">Seciniz</option>
                            <option value="Onayli">Onayli</option>
                            <option value="Beklemede">Beklemede</option>
                            <option value="Engelli">Engelli</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-2" > Şifre </label>
                    <div class="col-sm-9">
                        <input type="password" name="sifre" id="form-field-2" placeholder="Password" class="form-control" required>
                    </div>
                    <br>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" style="margin-left: 10px;margin-top: 10px">Kaydet</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- /.main-content -->

    <?php
    $this->load->view('admin/_footer');
    ?>
