<br><br><br><br><br>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title"><?= $katsecili[0]->kat_adi ?></h1>
                        <ul class="breadcrumb-list">
                            <li><a href="<?= base_url() ?>">Anasayfa</a></li>
                            <li><?= $katsecili[0]->kat_adi ?></li>
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
                <div class="col-md-9 col-md-push-3 col-sm-12">
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
                                    foreach ($urun_kat as $rs) {
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
                                                        <?php
                                                        $rating = $rs->puan / $rs->oysayisi;
                                                        if($rating==0) {
                                                            ?>
                                                            <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <?php
                                                        }
                                                        elseif($rating>0 && $rating<1 )
                                                        {?>
                                                            <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <?php
                                                        }
                                                        elseif($rating==1)
                                                        {?>
                                                            <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <?php
                                                        }
                                                        elseif($rating>1 && $rating<2 )
                                                        {?>
                                                            <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <?php
                                                        }
                                                        elseif($rating==2)
                                                        {?>
                                                            <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <?php
                                                        }
                                                        elseif($rating>2 && $rating<3 )
                                                        {?>
                                                            <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <?php
                                                        }
                                                        elseif($rating==3)
                                                        {?>
                                                            <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <?php
                                                        }
                                                        elseif($rating>3 && $rating<4 )
                                                        {?>
                                                            <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <?php
                                                        }
                                                        elseif($rating==4)
                                                        {?>
                                                            <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                            <?php
                                                        }
                                                        elseif($rating>4 && $rating<5 )
                                                        {?>
                                                            <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                            <?php
                                                        }
                                                        elseif($rating==5 )
                                                        {?>
                                                            <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                            <?php
                                                        }
                                                        ?>
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
                            <!-- list-view -->
                            <div role="tabpanel" class="tab-pane" id="list-view">
                                <div class="row">
                                    <?php
                                    foreach ($urun_kat as $rs) {
                                        ?>
                                        <!-- product-item start -->
                                        <div class="col-md-12">
                                            <div class="shop-list product-item">
                                                <div class="product-img">
                                                    <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>">
                                                        <img src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>"/>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="clearfix">
                                                        <h6 class="product-title f-left">
                                                            <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>"><?= $rs->adi ?></a>
                                                        </h6>
                                                        <div class="pro-rating f-right">
                                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                        </div>
                                                    </div>
                                                    <h6 class="brand-name"><?= $rs->altkatadi ?></h6>
                                                    <h3 class="pro-price"><?= $rs->y_fiyat ?> TL</h3>
                                                    <p><?= $rs->aciklama ?></p>
                                                    <ul class="action-button">
                                                        <li>
                                                            <a href="<?= base_url() ?>home/istekekle/<?= $rs->id ?>" title="İstek Listene Ekle"><i class="zmdi zmdi-favorite"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="<?= base_url() ?>home/sepeteekle/<?= $rs->id ?>" title="Sepete Ekle"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
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
                <div class="col-md-3 col-md-pull-9 col-sm-12">
                    <!-- widget-search -->
                    <aside class="widget-search mb-30">
                        <form action="<?= base_url() ?>home/arama" method="post">
                            <input type="text" name="search" placeholder="Ne aramıştınız?" required minlength="3">
                            <button type="submit"><i class="zmdi zmdi-search"></i></button>
                        </form>
                    </aside>
                    <!-- widget-categories -->
                    <aside class="widget widget-categories box-shadow mb-30">
                        <h6 class="widget-title border-left mb-20">Kategoriler</h6>
                        <div id="cat-treeview" class="product-cat">
                            <ul>
                                <?php
                                foreach ($kategori as $rs) {
                                    if ($rs->id == $katsecili[0]->id ) {
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
                        <h6 class="widget-title border-left mb-20"><?= $katsecili[0]->kat_adi ?> Markaları</h6>
                        <?php
                        foreach ($urun_altkat as $rs) {?>
                                <label><a href="<?= base_url() ?>altkategori/liste/<?= $rs->id ?>" name="operating-1"><?= $rs->adi ?></label><br>
                                <?php
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

</div>
<!-- End page content -->