<div class="main-content">

        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?=base_url()?>admin/home">Anasayfa</a>
                </li>
                <li class="active"><a href="#"> Slider Resim Ekleme</li></a>
                <li>
                    <a href="<?= base_url().'admin/slider/ekle' ?>"><button type="button" class="btn btn-yellow" style="margin-bottom: 6px">Slider Ekleme Formu</button></a>
                </li>
            </ul><!-- /.breadcrumb -->
        </div>
        <?php if($this->session->flashdata("sonuc")) {
            ?>
            <div class="alert alert-danger">
                <button class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>
                <strong>İşlem:</strong><?= $this->session->flashdata("sonuc") ?>
            </div>
            <?php
        }
        ?>
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <?php
                    if($veriler!=NULL){
                        foreach ($veriler as $rs) {
                        ?>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <p class="bolder red"><?= $rs->adi ?></p>
                        <img style="margin-top: 10px" class="img-responsive" src="<?= base_url().'slideruploads/'.$rs->resim ?>"/>
                        <a href="<?= base_url().'admin/slider/sil/'.$rs->id.'/'.$rs->resim ?>"><button type="button" class="btn btn-danger" style="margin: 10px">Sil</button></a>
                    </div>
                            <?php
                        }
                    }else {
                        ?>
                        <br><br><br><br><br>
                        <h1 style="text-align: center">Henüz Ekli Slider Bulunmamaktadır. Slider Eklemek İçin Yukarıdan Slider Ekleme Formu Butonuna Basınız...</h1>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div><!-- /.main-content -->
