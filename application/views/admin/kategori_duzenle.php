<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?=base_url()?>admin/home">Anasayfa</a>
                </li>
                <li class="active"><a href="<?=base_url()?>admin/kategoriler"> Kategori Yönetimi</a></li>
            </ul><!-- /.breadcrumb -->
            <div class="page-header">
                <h1>Kategori Düzenleme</h1>
            </div>
        </div>
        <div class="box-content">
            <form role="form" action="<?= base_url()?>admin/kategoriler/katguncellekaydet" method="post">
                <div class="form-group" >
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Kategori Adı </label>
                    <div class="col-sm-9">
                        <input type="text" name="kat_adi" id="form-field-1-1" class="form-control" value="<?= $kategoriler[0]->kat_adi ?>">
                    </div>
                </div>
                <div class="form-group" >
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Kategori Açıklaması </label>
                    <div class="col-sm-9">
                        <input type="text" name="kat_aciklama" id="form-field-1-1" class="form-control" value="<?= $kategoriler[0]->kat_aciklama ?>">
                    </div>
                </div>
                <div class="form-group" >
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Kategori Keywords </label>
                    <div class="col-sm-9">
                        <input type="text" name="kat_keywords" id="form-field-1-1" class="form-control" value="<?= $kategoriler[0]->kat_keywords ?>">
                    </div>
                </div>
                <button name="submit" type="submit" class="btn btn-success" style="margin-top: 10px;margin-left: 10px;">Kaydet</button>
            </form>
        </div>
    </div><!-- /.main-content -->
</div>
