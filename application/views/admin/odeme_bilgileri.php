<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>
                <li class="active"><a href="<?= base_url()?>admin/odeme"> Ödeme Bilgileri </li></a>

            </ul><!-- /.breadcrumb -->

            <div class="page-header">
                <h1>
                    Ödeme Bilgileri

                </h1>
            </div>

        </div>
        <form role="form" action="<?= base_url()?>admin/odeme/guncellekaydet/<?=$veri[0]->id?>" method="post" >


            <div class="space-4"></div>
            <div>
                <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> <h4>Ödeme Bilgileri</h4></label>
                <div class="col-sm-9">
                    <textarea name="odeme" id="odeme" value="<?=$veri[0]->odeme_bilgileri?>" class="form-control" rows="3">value="<?=$veri[0]->odeme_bilgileri?>"</textarea>
                </div>
                <script>
                    CKEDITOR.replace('odeme');
                </script>
                <button  type="submit" class="btn btn-lg btn-success">KAYDET</button>
            </div>

    </div>



    </form>

</div><!-- /.main-content -->

