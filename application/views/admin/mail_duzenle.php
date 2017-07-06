
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="<?=base_url()?>admin/home">Anasayfa</a>
                    </li>
                    <li class="active"><a href="<?= base_url()?>admin/iletisim"> Site Mail Bilgilerti </li></a>
                </ul><!-- /.breadcrumb -->
                <div class="page-header">
                    <h1>Site Mail Bilgileri Düzenleme</h1>
                </div>
            </div>
            <form role="form" action="<?= base_url()?>admin/mail/guncellekaydet/<?=$veri[0]->id?>" method="post" >
                <div class="form-group" >
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">SMTP Server  </label>
                    <div class="col-sm-9">
                        <input type="text" name="smtpserver" value="<?=$veri[0]->smtpserver?>" id="form-field-1-1" class="form-control">
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> SMTP Port </label>
                    <div class="col-sm-9">
                        <input type="text" name="smtpport" value="<?=$veri[0]->smtpport?>" id="form-field-1-1" class="form-control">
                    </div>
                </div>
                <div class="form-group" >
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">SMTP Mail  </label>
                    <div class="col-sm-9">
                        <input type="text" name="smtpemail" value="<?=$veri[0]->smtpemail?>" id="form-field-1-1" class="form-control">
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> SMTP Mail Password </label>
                    <div class="col-sm-9">
                        <input type="password" name="password" value="<?=$veri[0]->password?>" id="form-field-1-1" class="form-control">
                    </div>
                </div>
                <button  type="submit" class="btn btn-lg btn-success" style="margin-left: 10px; margin-top: 10px">Kaydet</button>
            </form>
        </div>
    </div><!-- /.main-content -->
