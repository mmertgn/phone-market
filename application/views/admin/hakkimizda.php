

<div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="<?=base_url()?>admin/home">Anasayfa</a>
                    </li>
                    <li class="active"><a href="<?= base_url()?>admin/hakkimizda"> Hakkımızda </li></a>
                </ul><!-- /.breadcrumb -->
                <div class="page-header">
                    <h1>Hakkımızda Bilgileri</h1>
                </div>
            </div>
            <form role="form" action="<?= base_url()?>admin/hakkimizda/guncellekaydet/<?=$veri[0]->id?>" method="post" >
                <div class="space-4"></div>
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea name="hakkimizda" class="form-control"><?=$veri[0]->hakkimizda?></textarea>
                    </div>
                    <script>
                        CKEDITOR.replace('hakkimizda');
                    </script>
                </div>
                <button type="submit" class="btn btn-lg btn-success" style="margin-left: 10px; margin-top: 10px">KAYDET</button>
            </form>
        </div>
</div><!-- /.main-content -->

