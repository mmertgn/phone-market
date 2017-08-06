
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="<?=base_url()?>admin/home">Anasayfa</a>
                    </li>
                    <li class="active"><a href="<?= base_url()?>admin/iletisim"> İletişim Bilgilerti </li></a>
                </ul><!-- /.breadcrumb -->
                <div class="page-header">
                    <h1>İletişim Bilgileri Düzenleme</h1>
                </div>
            </div>
            <form role="form" action="<?= base_url()?>admin/iletisim/guncellekaydet/<?=$veri[0]->id?>" method="post" >
                <div class="form-group" >
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Şirket Adı  </label>
                    <div class="col-sm-9">
                        <input type="text" name="sirketadi" value="<?=$veri[0]->sirketadi?>" id="form-field-1-1" placeholder="Şirket Adı" class="form-control">
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Adres </label>
                    <div class="col-sm-9">
                        <input type="text" name="adres" value="<?=$veri[0]->adres?>" id="form-field-1-1" placeholder="Adres" class="form-control">
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Email </label>

                    <div class="col-sm-9">
                        <input type="email" name="email" value="<?=$veri[0]->email?>" id="form-field-1-1" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Şehir </label>
                    <div class="col-sm-9">
                        <input type="text" name="sehir" value="<?=$veri[0]->sehir?>" id="form-field-1-1" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Telefon Numarası </label>
                    <div class="col-sm-9">
                        <input type="text" name="tel" value="<?=$veri[0]->tel?>" id="form-field-1-1" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Fax</label>
                    <div class="col-sm-9">
                        <input type="text" name="fax" value="<?=$veri[0]->fax?>" id="form-field-1-1" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Google Map X Kordinatı</label>
                    <div class="col-sm-9">
                        <input type="text" name="xkordinat" value="<?=$veri[0]->xkordinat?>" id="form-field-1-1" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Google Map Y Kordinatı</label>
                    <div class="col-sm-9">
                        <input type="text" name="ykordinat" value="<?=$veri[0]->ykordinat?>" id="form-field-1-1" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Facebook</label>
                    <div class="col-sm-9">
                        <input type="text" name="facebook" value="<?=$veri[0]->facebook?>" id="form-field-1-1" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Instagram</label>
                    <div class="col-sm-9">
                        <input type="text" name="instagram" value="<?=$veri[0]->instagram?>" id="form-field-1-1" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Twitter</label>
                    <div class="col-sm-9">
                        <input type="text" name="twitter" value="<?=$veri[0]->twitter?>" id="form-field-1-1" placeholder="" class="form-control">
                    </div>
                </div>
                <button  type="submit" class="btn btn-lg btn-success" style="margin-left: 10px; margin-top: 10px">Güncelle</button>
            </form>
        </div>
    </div><!-- /.main-content -->
