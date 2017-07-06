<!-- START PAGE CONTENT -->
<section id="page-content" class="page-wrapper">

    <!-- FEATURED PRODUCT SECTION START  (YAPILDI)-->
    <div class="featured-product-section section-bg-tb pt-80 pb-55">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-left mb-20">
                        <h2 class="uppercase">Yeni Eklenen Ürünler</h2>
                    </div>
                </div>
            </div>
            <div class="featured-product">
                <div class="row active-featured-product slick-arrow-2">
                    <?php
                    foreach ($yeniurun as $rs) {
                        ?>
                        <!-- product-item start -->
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>">
                                        <img src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>"/>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title">
                                        <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>"><?= $rs->adi ?></a>
                                    </h6>
                                    <h6 class="brand-name"><?= $rs->altkatadi ?></h6>
                                    <h3 class="pro-price"><?= $rs->y_fiyat ?> TL</h3>
                                </div>
                                <ul class="action-button">
                                    <li>
                                        <a href="<?= base_url() ?>home/istekekle/<?= $rs->id ?>" title="İstek Listesi"><i class="zmdi zmdi-favorite"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url() ?>home/sepeteekle/<?= $rs->id ?>" title="Sepete Ekle"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </li>
                                </ul>
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
    <!-- FEATURED PRODUCT SECTION END -->

    <!-- UP COMMING PRODUCT SECTION START -->
    <div class="up-comming-product-section ptb-60">
        <div class="container">
            <div class="row">
                <?php
                foreach ($kampanya as $rs) {
                    ?>
                    <!-- up-comming-pro -->
                    <div class="col-md-4 hidden-sm col-xs-12">
                        <div class="banner-item banner-1">
                            <div class="ribbon-price">
                                <span style="font-size: 17px"><?= $rs->y_fiyat ?> TL</span>
                            </div>
                            <div class="banner-img">
                                <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>"><img src="<?= base_url() ?>kampanyauploads/<?= $rs->firsat_resmi ?>" alt=""></a>
                            </div>
                            <div class="banner-info">
                                <h3><a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>"><?= $rs->urun_adi ?></a></h3>
                                <ul class="banner-featured-list">
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span><?= $rs->madde1 ?></span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span><?= $rs->madde2 ?></span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span><?= $rs->madde3 ?></span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span><?= $rs->madde4 ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- UP COMMING PRODUCT SECTION END -->

    <!-- PRODUCT TAB SECTION START -->
    <div class="product-tab-section section-bg-tb pt-80 pb-55">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title text-left mb-40">
                        <h2 class="uppercase">Ürünler</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="pro-tab-menu pro-tab-menu-2 text-right">
                        <!-- Nav tabs -->
                        <ul class="" >
                            <li class="active"><a href="#special-offer" data-toggle="tab">Sizin İçin Seçtiklerimiz</a></li>
                            <li><a href="#popular-product" data-toggle="tab">Günün Fırsatları </a></li>
                            <li><a href="#best-seller"  data-toggle="tab">Çok Satanlar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product-tab">
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- special-offer start -->
                    <div class="tab-pane active" id="special-offer">
                        <div class="row">
                            <?php
                            foreach ($secili as $rs) {
                                ?>
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>">
                                                <img src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>"/>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>"><?= $rs->adi ?></a>
                                            </h6>
                                            <h6 class="brand-name"><?= $rs->altkatadi ?></h6>
                                            <h3 class="pro-price"><?= $rs->y_fiyat ?> TL</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="<?= base_url() ?>home/istekekle/<?= $rs->urun_id ?>" title="İstek Listene Ekle"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url() ?>home/sepeteekle/<?= $rs->urun_id ?>" title="Sepete Ekle"><i
                                                            class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <!-- special-offer end -->
                    <!-- popular-product start -->
                    <div class="tab-pane" id="popular-product">
                        <div class="row">
                            <?php
                            foreach ($firsat as $rs) {
                                ?>
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>">
                                                <img src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt=""/>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>"><?= $rs->urun_adi ?></a>
                                            </h6>
                                            <h6 class="brand-name"><?= $rs->altkatadi ?></h6>
                                            <h3 class="pro-price"><?= $rs->kampfiyat ?> TL</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="<?= base_url() ?>home/istekekle/<?= $rs->id ?>" title="İstek Listene Ekle"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url() ?>home/sepeteekle/<?= $rs->id ?>" title="Sepete Ekle"><i
                                                            class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <!-- popular-product end -->
                    <!-- best-seller start -->
                    <div class="tab-pane" id="best-seller">
                        <div class="row">
                            <?php
                            foreach ($coksatan as $rs) {
                            ?>
                            <!-- product-item start -->
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="product-item product-item-2">
                                    <div class="product-img">
                                        <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>">
                                            <img src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>"/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>"><?= $rs->adi ?></a>
                                        </h6>
                                        <h6 class="brand-name"><?= $rs->altkatadi ?></h6>
                                        <h3 class="pro-price"><?= $rs->y_fiyat ?> TL</h3>
                                    </div>
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
                            <!-- product-item end -->
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <!-- best-seller end -->
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB SECTION END -->

    <!-- NEWSLETTER SECTION START -->
    <div class="newsletter-section section-bg-tb pt-60 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <div class="newsletter">
                        <div class="newsletter-info text-center">
                            <h2 class="newsletter-title">E-BÜLTEN ABONELİĞİ</h2>
                            <p>Kampanyalarımızdan haberdar olmak için <br class="hidden-xs">e-posta adresinizi yazınız.</p>
                        </div>
                        <div class="subcribe clearfix">
                            <form action="#">
                                <input type="text" name="email" placeholder="Email adresinizi giriniz..."/>
                                <button class="submit-btn-2 btn-hover-2" type="submit">Abone Ol</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- NEWSLETTER SECTION END -->
</section>
<!-- END PAGE CONTENT -->