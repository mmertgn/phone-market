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

                    <li>
                        <a href="<?=base_url()?>admin/urunler">Ürünler</a>
                    </li>
                    <li class="active">Resim Ekleme Formu</li>
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
                        Ürün Resmi Ekleme
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            <?=$resim[0]->adi?>
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div>
                            <form action="<?= base_url()?>admin/urunler/resimuploads/<?=$resim[0]->id?>" class="well" id="dropzone" method="post" enctype="multipart/form-data">
                                <div class="fallback">
                                    <input name="userfile" type="file" size="20" />
                                </div>
                                <input type="submit" class="btn btn-success" style="margin-top: 10px" value="Yükle">
                            </form>
                        </div>
                        <?php
                        if($resim[0]->resim!=NULL)
                        {?>
                            <img class="img-thumbnail" src="<?=base_url()?>uploads/<?=$resim[0]->resim?>">
                            <?php
                        }
                        ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->


<?php
$this->load->view('admin/_footer');
?>