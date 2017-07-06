<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>

    <div class="main-content">

        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?=base_url()?>admin/home">Anasayfa</a>
                </li>
                <li>
                    <a href="<?=base_url()?>admin/urunler">Ürünler</a>
                </li>
                <li class="active"><a href="#"> Resim Galerisi Ekleme</li></a>
            </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="ace-icon fa fa-cog bigger-130"></i>
                </div>
            </div><!-- /.ace-settings-container -->

            <div class="page-header">
                <h1>
                    Ürün Galerisi Oluşturma Formu
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        <?=$urun[0]->adi?>
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div>
                        <form action="<?= base_url()?>admin/urunler/resim_galeri_uploads/<?=$urun[0]->id?>" class="well" id="dropzone" method="post" enctype="multipart/form-data">
                            <div class="fallback">
                                <input name="userfile" type="file" size="20" />
                            </div>
                            <input type="submit" class="btn btn-success" style="margin-top: 10px" value="Yükle">
                        </form>
                    </div>
                    <?php if($this->session->flashdata("sonuc")) {
                        ?>
                        <div class="alert alert-info">
                            <button class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong>İşlem:</strong><?= $this->session->flashdata("sonuc") ?>
                        </div>
                        <?php
                    }
                    ?>
                    <ul class="ace-thumbnails clearfix">
                        <?php
                        foreach($veriler as $rs) {

                            ?>
                            <li>
                                <a href="<?=base_url()?>uploads/<?=$rs->resim?>" title="Photo Title" data-rel="colorbox">
                                    <img class="img-responsive" width="300" height="300" src="<?=base_url()?>galeriuploads/<?=$rs->resim?>">
                                </a>
                                 <a href="<?=base_url()?>admin/urunler/resim_sil/<?=$urun[0]->id?>/<?=$rs->id?>/<?=$rs->resim?>"><button type="button" class="btn btn-danger" style="margin: 10px; ">Sil</button></a>
                            </li>

                            <?php
                        }
                        ?>
                    </ul>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->
<?php
$this->load->view('admin/_footer');
?>