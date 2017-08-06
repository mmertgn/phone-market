<br><br><br><br><br>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Ürün Detayı</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="<?= base_url() ?>">Anasayfa</a></li>
                            <li><?= $urundetay[0]->katadi ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMBS SETCTION END -->

<!-- Start page content -->
<section id="page-content" class="page-wrapper">

    <!-- SHOP SECTION START -->
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <?php if($this->session->flashdata("puan")) {
                        ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                            <strong>Üzgünüm!</strong> Ürüne Puan Verebilmek için <a href="<?= base_url() ?>home/login" class="alert-link">Buradan</a> Giriş Yapmalısınız!
                        </div>
                        <?php
                    }
                    ?>
                    <!-- single-product-area start -->
                    <div class="single-product-area mb-80">
                        <div class="row">
                            <!-- imgs-zoom-area start -->
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="imgs-zoom-area">
                                    <img id="zoom_03" src="<?= base_url() ?>uploads/<?= $urundetay[0]->resim ?>" data-zoom-image="<?= base_url() ?>uploads/<?= $urundetay[0]->resim ?>" alt="<?= $urundetay[0]->adi ?>">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div id="gallery_01" class="carousel-btn slick-arrow-3 mt-30">
                                                <?php
                                                foreach ($galeri as $rs) {
                                                    ?>
                                                    <div class="p-c">
                                                        <a href="#" data-image="<?= base_url() ?>galeriuploads/<?= $rs->resim ?>"
                                                           data-zoom-image="<?= base_url() ?>galeriuploads/<?= $rs->resim ?>">
                                                            <img class="zoom_03" src="<?= base_url() ?>galeriuploads/<?= $rs->resim ?>"
                                                                 alt="<?= $urundetay[0]->adi ?>">
                                                        </a>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- imgs-zoom-area end -->
                            <!-- single-product-info start -->
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="single-product-info">
                                    <h3 class="text-black-1"><?= $urundetay[0]->adi ?></h3>
                                    <h6 class="brand-name-2"><?= $urundetay[0]->altkatadi ?></h6>
                                    <!--  hr -->
                                    <hr>
                                    <!-- single-pro-color-rating -->
                                    <div class="single-pro-color-rating clearfix">
                                        <div class="sin-pro-color f-left">
                                            <p class="color-title f-left">Renk</p>
                                            <div class="widget-color f-left">
                                                <ul>
                                                    <li class="color-1"><a href="#"></a></li>
                                                    <li class="color-2"><a href="#"></a></li>
                                                    <li class="color-3"><a href="#"></a></li>
                                                    <li class="color-4"><a href="#"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pro-rating sin-pro-rating f-right">
                                            <?php
                                            $rating = $urundetay[0]->puan / $urundetay[0]->oysayisi;
                                            if($rating==0) {
                                                ?>
                                                <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                <?php
                                            }
                                            elseif($rating>0 && $rating<1 )
                                            {?>
                                                <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                            <?php
                                            }
                                            elseif($rating==1)
                                            {?>
                                                <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                            <?php
                                            }
                                            elseif($rating>1 && $rating<2 )
                                            {?>
                                                <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                            <?php
                                            }
                                            elseif($rating==2)
                                            {?>
                                                <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                            <?php
                                            }
                                            elseif($rating>2 && $rating<3 )
                                            {?>
                                                <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                            <?php
                                            }
                                            elseif($rating==3)
                                            {?>
                                                <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                            <?php
                                            }
                                            elseif($rating>3 && $rating<4 )
                                            {?>
                                                <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                            <?php
                                            }
                                            elseif($rating==4)
                                            {?>
                                                <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                            <?php
                                            }
                                            elseif($rating>4 && $rating<5 )
                                            {?>
                                                <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                            <?php
                                            }
                                            elseif($rating==5 )
                                            {?>
                                                <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                            <?php
                                            }
                                            ?>
                                            <span class="text-black-5"> Ürün Puanı : <?= $urundetay[0]->puan ?> </span>
                                        </div>
                                    </div>
                                    <!-- hr -->
                                    <hr>
                                    <!-- plus-minus-pro-action -->
                                    <div class="plus-minus-pro-action clearfix">
                                        <div class="sin-plus-minus f-left clearfix">
                                            <p class="color-title f-left">Adet</p>
                                            <div class="cart-plus-minus f-left">
                                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                            </div>
                                        </div>
                                        <div class="sin-pro-action f-right">
                                            <ul class="action-button">
                                                <li>
                                                    <a href="<?= base_url() ?>home/istekekle/<?= $urundetay[0]->id ?>" title="İstek Listene Ekle" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url() ?>home/sepeteekle/<?= $urundetay[0]->id ?>" title="Sepete Ekle" tabindex="0"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- plus-minus-pro-action end -->
                                    <!-- hr -->
                                    <hr>
                                    <!-- single-product-price -->
                                    <h3 class="pro-price">Fiyat : <?= $urundetay[0]->y_fiyat ?> TL</h3>
                                    <!--  hr -->
                                    <hr>
                                    <div>
                                        <a href="<?= base_url() ?>home/sepeteekle/<?= $urundetay[0]->id ?>" class="button extra-small button-black" tabindex="-1">
                                            <span class="text-uppercase">Sepete Ekle</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-info end -->
                        </div>
                        <!-- single-product-tab -->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- hr -->
                                <hr>
                                <div class="single-product-tab">
                                    <ul class="reviews-tab mb-20">
                                        <li class="active"><a href="#description" data-toggle="tab">Ürün Açıklaması</a></li>
                                        <li ><a href="#reviews" data-toggle="tab">Yorumlar</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="description">
                                            <hr>
                                            <?= $urundetay[0]->uzunaciklama ?>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="reviews">
                                            <!-- reviews-tab-desc -->
                                            <div class="reviews-tab-desc">
                                                <?php
                                                foreach ($yorum as $rs) {
                                                    ?>
                                                    <!-- single comments -->
                                                    <div class="media mt-30">
                                                        <div class="media-body">
                                                            <div class="clearfix">
                                                                <div class="name-commenter pull-left">
                                                                    <h6 class="media-heading"><a href="#"><?= $rs->adsoy ?></a></h6>
                                                                    <p class="mb-10"><?= $rs->tarih ?></p>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <?php
                                                                    if ($rs->yorum_yapan_id == $this->session->kullanici_data['id'] || $this->session->kullanici_data['yetki']=="Admin" || $this->session->kullanici_data['yetki']=="admin" ) {
                                                                        ?>
                                                                        <ul class="reply-delate">
                                                                            <li><a class="btn btn-default"
                                                                                   href="<?= base_url() ?>home/yorumsil/<?= $rs->id ?>/<?= $urundetay[0]->id ?>">Sil</a></li>
                                                                        </ul>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <p class="mb-0"><?= $rs->yorum_icerik ?></p>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if($yorumsayisi<1){?>
                                                    <hr>
                                                    <p class="mb-0">Bu ürün için henüz yapılmış bir yorum bulunmamaktadır. Asağıdaki formdan ürünle ilgili görüşlerinizi iletebilirsiniz.</p>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                            <hr>
                                            <p style="font-weight: bold; color: red">Yorum eklemek için önce Giriş yapabilirsiniz yada Misafir olarak da yorum bırakabilirsiniz!</p>
                                            <?php
                                            if ($this->session->kullanici_data['id']) {
                                                ?>
                                                <form action="<?= base_url() ?>home/yorumekle/<?= $this->session->kullanici_data['id'] ?>" method="post">
                                                    <input type="hidden" name="urun_id"
                                                           value="<?= $urundetay[0]->id ?>">
                                                    <div class="form-group">
                                                        <label class="col-md-3">Yorumunuz</label>
                                                        <div class="col-md-9">
                                                            <textarea name="yorum_icerik"
                                                                      class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="pull-right" style="margin-top: 15px">
                                                        <ul class="reply-delate">
                                                            <li><input type="submit" class="btn btn-default"
                                                                       value="Kaydet"></li>
                                                        </ul>
                                                    </div>
                                                </form>
                                                <?php
                                            }
                                            else {
                                                ?>
                                                <form action="<?= base_url() ?>home/yorumekle/1" method="post">
                                                    <input type="hidden" name="urun_id"
                                                           value="<?= $urundetay[0]->id ?>">
                                                    <div class="form-group">
                                                        <label class="col-md-3">Yorumunuz</label>
                                                        <div class="col-md-9">
                                                            <textarea name="yorum_icerik"
                                                                      class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="pull-right" style="margin-top: 15px">
                                                        <ul class="reply-delate">
                                                            <li><input type="submit" class="btn btn-default"
                                                                       value="Kaydet"></li>
                                                        </ul>
                                                    </div>
                                                </form>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <!--  hr -->
                                <hr>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-area end -->
                    <div class="related-product-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-left mb-40">
                                    <h2 class="uppercase">İlgİnİzİ Çekebİlecek Ürünler</h2>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="active-related-product">
                                <?php
                                foreach ($sectik as $rs) {
                                ?>
                                <!-- product-item start -->
                                <div class="col-xs-12">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>">
                                                <img src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>"/>
                                            </a>
                                        </div>
                                        <div class="product-info" style="margin-top: 10px">
                                            <h6 class="product-title" style="margin-left: 12px; margin-right: 12px">
                                                <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>"><?= $rs->adi ?></a>
                                            </h6>
                                            <h6 class="brand-name"><?= $rs->altkatadi ?></h6>
                                            <div class="pro-rating">
                                                <?php
                                                $rating = $rs->puan / $rs->oysayisi;
                                                if($rating==0) {
                                                    ?>
                                                    <a href="<?=  base_url()?>home/puanver/1/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/2/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/3/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/4/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/5/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <?php
                                                }
                                                elseif($rating>0 && $rating<1 )
                                                {?>
                                                    <a href="<?=  base_url()?>home/puanver/1/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/2/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/3/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/4/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/5/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <?php
                                                }
                                                elseif($rating==1)
                                                {?>
                                                    <a href="<?=  base_url()?>home/puanver/1/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/2/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/3/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/4/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/5/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <?php
                                                }
                                                elseif($rating>1 && $rating<2 )
                                                {?>
                                                    <a href="<?=  base_url()?>home/puanver/1/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/2/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/3/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/4/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/5/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <?php
                                                }
                                                elseif($rating==2)
                                                {?>
                                                    <a href="<?=  base_url()?>home/puanver/1/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/2/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/3/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/4/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/5/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <?php
                                                }
                                                elseif($rating>2 && $rating<3 )
                                                {?>
                                                    <a href="<?=  base_url()?>home/puanver/1/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/2/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/3/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/4/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/5/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <?php
                                                }
                                                elseif($rating==3)
                                                {?>
                                                    <a href="<?=  base_url()?>home/puanver/1/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/2/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/3/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/4/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/5/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <?php
                                                }
                                                elseif($rating>3 && $rating<4 )
                                                {?>
                                                    <a href="<?=  base_url()?>home/puanver/1/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/2/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/3/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/4/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/5/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <?php
                                                }
                                                elseif($rating==4)
                                                {?>
                                                    <a href="<?=  base_url()?>home/puanver/1/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/2/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/3/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/4/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/5/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <?php
                                                }
                                                elseif($rating>4 && $rating<5 )
                                                {?>
                                                    <a href="<?=  base_url()?>home/puanver/1/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/2/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/3/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/4/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/5/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                    <?php
                                                }
                                                elseif($rating==5 )
                                                {?>
                                                    <a href="<?=  base_url()?>home/puanver/1/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/2/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/3/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/4/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="<?=  base_url()?>home/puanver/5/<?= $rs->urun_id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                            <h3 class="pro-price"><?= $rs->y_fiyat ?> TL</h3>
                                            <ul class="action-button">
                                                <li>
                                                    <a href="<?= base_url() ?>home/istekekle/<?= $rs->urun_id ?>" title="İstek Listene Ekle"><i class="zmdi zmdi-favorite"></i></a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url() ?>home/sepeteekle/<?= $rs->urun_id ?>" title="Sepete Ekle"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
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
                </div>
                <div class="col-md-3 col-xs-12">
                    <!-- widget-categories -->
                    <aside class="widget widget-categories box-shadow mb-30">
                        <h6 class="widget-title border-left mb-20">Kategoriler</h6>
                        <div id="cat-treeview" class="product-cat">
                            <ul>
                                <?php
                                foreach ($kategori as $rs) {
                                    if ($rs->id == $urundetay[0]->katId ) {
                                        ?>
                                        <li class="border-left">
                                            <a href="<?= base_url() ?>kategori/liste/<?= $rs->id ?>"><?= $rs->kat_adi ?></a>
                                        </li>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <li>
                                            <a href="<?= base_url() ?>kategori/liste/<?= $rs->id ?>"><?= $rs->kat_adi ?></a>
                                        </li>
                                    <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </aside>
                    <!-- operating-system -->
                    <aside class="widget operating-system box-shadow mb-30">
                        <h6 class="widget-title border-left mb-20">Markalar</h6>
                        <?php
                        foreach ($marka as $rs) {
                            if ($rs->altkatid == $urundetay[0]->altKatId ) {
                        ?>
                            <label class="border-left" style="padding-top: 7px"><a href="<?= base_url() ?>altkategori/liste/<?= $rs->altkatid ?>" name="operating-1"><?= $rs->altkatadi ?></label><br>
                            <?php
                        }
                        else{
                        ?>
                        <label><a href="<?= base_url() ?>altkategori/liste/<?= $rs->altkatid ?>" name="operating-1"><?= $rs->altkatadi ?></label><br>
                            <?php
                        }
                        }
                        ?>
                    </aside>
                    <!-- widget-product -->
                    <aside class="widget widget-product box-shadow">
                        <h6 class="widget-title border-left mb-20">Çok Satanlar</h6>
                        <?php
                        foreach ($coksatan as $rs) {
                            ?>
                            <!-- product-item start -->
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>">
                                        <img src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>"/>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title">
                                        <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>"><?= $rs->adi ?></a>
                                    </h6>
                                    <h3 class="pro-price"><?= $rs->y_fiyat ?> TL</h3>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <?php
                        }
                        ?>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->

</section>
<!-- End page content -->