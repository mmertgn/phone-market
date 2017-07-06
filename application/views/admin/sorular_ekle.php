

<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?=base_url()?>admin/home">Anasayfa</a>
                </li>
                <li class="active"><a href="<?=base_url()?>admin/sorular"> Sıkça Sorulan Sorular</a></li>
            </ul><!-- /.breadcrumb -->
            <div class="page-header">
                <h1>
                    Soru ve Cevap Ekleme
                </h1>
            </div>

        </div>
        <div class="box-content">
            <form role="form" action="<?= base_url()?>admin/sorular/eklekaydet" method="post" >
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Soru </label>
                    <div class="col-sm-9">
                        <textarea name="soru"  class="form-control"></textarea>
                    </div>
                    <script>
                        CKEDITOR.replace('soru');
                    </script>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Cevap </label>
                    <div class="col-sm-9">
                        <textarea name="cevap"  class="form-control"></textarea>
                    </div>
                    <script>
                        CKEDITOR.replace('cevap');
                    </script>
                </div>
                <button type="submit" class="btn btn-success" style="margin-top: 10px; margin-left: 10px">Kaydet</button>
            </form>
        </div>
    </div>
</div><!-- /.main-content -->

