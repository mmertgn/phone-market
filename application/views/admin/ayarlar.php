

<div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="<?=base_url()?>admin/home">Anasayfa</a>
                    </li>
                    <li class="active"><a href="<?= base_url()?>admin/hakkimizda"> Site İçerik Ayarları </li></a>
                </ul><!-- /.breadcrumb -->
                <div class="page-header">
                    <h1>Site Ayarları</h1>
                </div>
            </div>
            <form role="form" action="<?= base_url()?>admin/ayarlar/guncellekaydet/<?=$veri[0]->id?>" method="post" >
                <div class="space-4"></div>
                <div class="form-group">
                    <label for="" class="col-md-1">Gizlilik Politikası</label>
                    <div class="col-md-11">
                        <textarea name="gizlilik" class="form-control"><?=$veri[0]->gizlilik?></textarea>
                    </div>
                    <script>
                        CKEDITOR.replace('gizlilik');
                    </script>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label for="" class="col-md-1">Şartlar ve Koşullar</label>
                    <div class="col-md-11">
                        <textarea name="sartlar" class="form-control"><?=$veri[0]->sartlar?></textarea>
                    </div>
                    <script>
                        CKEDITOR.replace('sartlar');
                    </script>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label for="" class="col-md-1">Satış Sözleşmesi</label>
                    <div class="col-md-11">
                        <textarea name="sozlesme" class="form-control"><?=$veri[0]->sozlesme?></textarea>
                    </div>
                    <script>
                        CKEDITOR.replace('sozlesme');
                    </script>
                </div>
                <button type="submit" class="btn btn-lg btn-success" style="margin-left: 10px; margin-top: 10px">KAYDET</button>
            </form>
        </div>
</div><!-- /.main-content -->

