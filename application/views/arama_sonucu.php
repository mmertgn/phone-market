<br><br><br><br><br>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Arama Sonucu</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="<?= base_url() ?>">Anasayfa</a></li>
                            <li>Arama Sayfası</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMBS SETCTION END -->

<!-- Start page content -->
<div id="page-content" class="page-wrapper">

    <!-- SHOP SECTION START -->
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <?php if($this->session->flashdata("sonuc")) {
                    ?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                        <strong>Arama Başarılı!</strong> Aradığınız kelime <strong><?= $aranan ?></strong>.
                    </div>
                        <?php
                    }
                    ?>
                    <div class="shop-content">
                        <!-- shop-option start -->
                        <div class="shop-option box-shadow mb-30 clearfix">
                            <!-- Nav tabs -->
                            <ul class="shop-tab f-left" role="tablist">
                                <li class="active">
                                    <a href="#grid-view" data-toggle="tab"><i class="zmdi zmdi-view-module"></i></a>
                                </li>
                                <li>
                                    <a href="#list-view" data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- shop-option end -->
                        <!-- Tab Content start -->
                        <div class="tab-content">
                            <!-- grid-view -->
                            <div role="tabpanel" class="tab-pane active" id="grid-view">
                                <div class="row">
                                    <?php
                                    foreach ($arama_sonucu as $rs) {
                                        ?>
                                        <!-- product-item start -->
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>">
                                                        <img src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>"/>
                                                    </a>
                                                </div>
                                                <div class="product-info" style="margin-top: 2px">
                                                    <h6 class="product-title" style="margin-left: 12px; margin-right: 12px">
                                                        <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>"><?= $rs->adi ?></a>
                                                    </h6>
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                    </div>
                                                    <h6 class="brand-name"><?= $rs->altkatadi ?></h6>
                                                    <h3 class="pro-price"><?= $rs->y_fiyat ?> TL</h3>
                                                    <ul class="action-button">
                                                        <li>
                                                            <a href="<?= base_url() ?>home/istekekle/<?= $rs->id ?>" title="İstek Listesi"><i
                                                                    class="zmdi zmdi-favorite"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="<?= base_url() ?>home/sepeteekle/<?= $rs->id ?>" title="Sepete Ekle"><i
                                                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-item end -->
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->
</div>
<!-- End page content -->