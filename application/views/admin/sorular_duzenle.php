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
                    <li class="active"><a href="<?= base_url()?>admin/sorular"> Sıkça Sorulan Sorular </li></a>
                </ul><!-- /.breadcrumb -->
                <div class="page-header">
                    <h1>Soru ve Cevap Düzenleme Düzenleme</h1>
                </div>
            </div>
            <form role="form" action="<?= base_url()?>admin/sorular/guncellekaydet/<?=$sorular[0]->id?>" method="post" >
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Soru </label>
                    <div class="col-sm-9">
                        <textarea name="soru"  class="form-control"><?=$sorular[0]->soru?></textarea>
                    </div>
                    <script>
                        CKEDITOR.replace('soru');
                    </script>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Cevap </label>
                    <div class="col-sm-9">
                        <textarea name="cevap"  class="form-control"><?=$sorular[0]->cevap?></textarea>
                    </div>
                    <script>
                        CKEDITOR.replace('cevap');
                    </script>
                </div>
        </div>
        <button  type="submit" class="btn btn-lg btn-success">GÜNCELLE</button>
        </form>

    </div><!-- /.main-content -->

<?php
$this->load->view('admin/_footer');
?>