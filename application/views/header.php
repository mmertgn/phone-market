<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php
    if ($this->uri->segment(2) == "urun_detayi" && $this->uri->segment(1) == "home") {
        ?>
        <title><?= $urundetay[0]->adi ?></title>
        <meta name="description" content="<?= $urundetay[0]->aciklama ?>">
        <meta name="keywords" content="<?= $urundetay[0]->keywords ?>">
        <?php
    }elseif($this->uri->segment(1) == "kategori") {
        ?>
        <title><?= $katsecili[0]->kat_adi ?></title>
        <meta name="description" content="<?= $katsecili[0]->kat_aciklama ?>">
        <meta name="keywords" content="<?= $katsecili[0]->kat_keywords ?>">
        <?php
    }
    else {
        ?>
        <title><?= $ayar[0]->sirketadi ?></title>
        <meta name="description" content="<?= $ayar[0]->aciklama ?>">
        <meta name="keywords" content="<?= $ayar[0]->keywords ?>">
        <?php
    }
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>mainsite/subas/img/icon/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="<?= base_url() ?>mainsite/subas/css/bootstrap.min.css">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="<?= base_url() ?>mainsite/subas/lib/css/nivo-slider.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="<?= base_url() ?>mainsite/subas/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?= base_url() ?>mainsite/subas/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="<?= base_url() ?>mainsite/subas/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?= base_url() ?>mainsite/subas/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="<?= base_url() ?>mainsite/subas/css/custom.css">

    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="<?= base_url() ?>mainsite/subas/css/style-customizer.css">
    <link href="#" data-style="styles" rel="stylesheet">

    <!-- Modernizr JS -->
    <script src="<?= base_url() ?>mainsite/subas/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">Güncelliğini <strong>yitirmiş</strong> bir intenet tarayıcı kullanıyorsunuz. Lütfen <a href="https://www.google.com/chrome/browser/desktop/index.html">internet tarayıcınızı daha iyi bir</a> deneyim için yükseltiniz.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class="wrapper">

    <!-- START HEADER AREA -->
    <header class="header-area header-wrapper header-2">
        <!-- header-middle-area -->
        <div id="sticky-header" class="header-middle-area plr-185">
            <div class="container-fluid">
                <div class="full-width-mega-dropdown">
                    <div class="row">
                        <!-- logo -->
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="logo" style="padding: 20px 0">
                                <a href="<?= base_url() ?>">
                                    <img src="<?= base_url() ?>mainsite/subas/img/logo/logo.png"  alt="main logo">
                                </a>
                            </div>
                        </div>
                        <!-- primary-menu -->
                        <div class="col-md-8 hidden-sm hidden-xs">
                            <nav id="primary-menu">
                                <ul class="main-menu text-center">
                                    <li style="font-weight: bolder"><a href="<?= base_url() ?>">Anasayfa</a></li>
                                    <li style="font-weight: bolder" class="mega-parent"><a href="#">Kategoriler</a>
                                        <div class="mega-menu-area clearfix">
                                            <div class="mega-menu-link mega-menu-link-4  f-left"><!-----4 yerine kategori sayısını çek -->
                                                <?php
                                                foreach ($kategori as $rs) {
                                                    ?>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title" style="font-weight: bolder"><a href="<?= base_url() ?>kategori/liste/<?= $rs->id ?>"><?= $rs->kat_adi ?></a></li>
                                                        <?php
                                                    foreach ($altkategori as $rs2) {
                                                        if ($rs->id == $rs2->kat_id) {
                                                            ?>
                                                            <li>
                                                                <a href="<?= base_url() ?>altkategori/liste/<?= $rs2->id ?>"><?= $rs2->adi ?> <?= $rs->kat_adi ?></a>
                                                            </li>
                                                            <?php
                                                        }
                                                    }
                                                        ?>
                                                    </ul>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </li>
                                    <li style="font-weight: bolder" class="mega-parent"><a href="<?= base_url() ?>sikcasorulansorular">Sıkça Sorulan Sorular</a></li>
                                    <li style="font-weight: bolder">
                                        <a href="<?= base_url() ?>hakkimizda">Hakkımızda</a>
                                    </li>
                                    <li style="font-weight: bolder">
                                        <a href="<?= base_url() ?>bizeulasin">Bize Ulaşın</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- header-search & total-cart -->
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="search-top-cart  f-right">
                                <!-- header-search -->
                                <div class="header-search header-search-2 f-left">
                                    <div class="header-search-inner">
                                        <button class="search-toggle">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                        <form action="<?= base_url() ?>home/arama" method="post">
                                            <div class="top-search-box">
                                                <input type="text" name="search" placeholder="Arama Yapabilirsiniz Örneğin: İphone 6S " required minlength="3">
                                                <button type="submit">
                                                    <i class="zmdi zmdi-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-account header-account-2 f-left">
                                    <ul class="user-meta">
                                        <li><a href="#"><i class="zmdi zmdi-view-headline"></i></a>
                                            <ul>
                                                <?php
                                                if($this->session->kullanici_data['adsoy']) {
                                                    ?>
                                                    <li><?= $this->session->kullanici_data['adsoy'] ?></li>
                                                    <li><a href="<?= base_url() ?>home/profil">Hesabım</a></li>
                                                    <li><a href="<?= base_url() ?>siparis/siparisgecmisi">Siparişlerim</a></li>
                                                    <li><a href="<?= base_url() ?>home/istek_listesi">İstek Listem</a></li>
                                                    <li><a href="<?= base_url() ?>home/cikis">Çıkış Yap</a></li>
                                                    <?php
                                                }else {
                                                    ?>
                                                    <li><a href="<?= base_url()?>home/login">Kullanıcı Girişi</a></li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- total-cart -->
                                <div class="total-cart total-cart-2 f-left">
                                    <div class="total-cart-in">
                                        <div class="cart-toggler">
                                            <a href="#">
                                                <span class="cart-quantity"><?= $sepetsayi ?></span><br>
                                                <span class="cart-icon">
                                                        <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                    </span>
                                            </a>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="top-cart-inner your-cart">
                                                    <h5 class="text-capitalize">Sepetiniz</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total-cart-pro">
                                                    <?php
                                                    $toplam = 0;
                                                    if($sepetsayi>0) {
                                                        foreach ($headersepet as $rs) {
                                                            $toplam = $toplam + $rs->urunfiyat;
                                                            ?>
                                                            <!-- single-cart -->
                                                            <div class="single-cart clearfix">
                                                                <div class="cart-img f-left">
                                                                    <a href="#">
                                                                        <img height="111" width="100" src="<?= base_url() ?>uploads/<?= $rs->urunresim ?>" alt="<?= $rs->urunadi ?>"/>
                                                                    </a>
                                                                    <div class="del-icon">
                                                                        <a href="<?= base_url() ?>home/sepetsil/<?= $rs->id ?>">
                                                                            <i class="zmdi zmdi-close"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="cart-info f-left">
                                                                    <h6 class="text-capitalize" style="text-overflow:ellipsis;white-space: nowrap; width: 12em; overflow: hidden;">
                                                                        <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urunid ?>"><?= $rs->urunadi ?></a>
                                                                    </h6>
                                                                    <p>
                                                                        <span>Fiyat <strong>:</strong></span><?= $rs->urunfiyat ?>
                                                                        TL
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                    }else {
                                                        ?>
                                                        <div class="section-title  text-center mb-40">
                                                            <h3 class="mb-30" style="margin-top: 45px">Sepetinizde Ürün
                                                                Bulunmamaktadır.</h3>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </li>
                                            <?php
                                            if($sepetsayi>0) {
                                                ?>
                                                <li>
                                                    <div class="top-cart-inner subtotal">
                                                        <h4 class="text-uppercase g-font-2">
                                                            Toplam =
                                                            <span><?= $toplam ?> TL</span>
                                                        </h4>
                                                    </div>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                            <li>
                                                <div class="top-cart-inner view-cart">
                                                    <h4 class="text-uppercase">
                                                        <a href="<?= base_url() ?>home/sepet">Sepete Git</a>
                                                    </h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER AREA -->

    <!-- START MOBILE MENU AREA -->
    <div class="mobile-menu-area hidden-lg hidden-md">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="<?= base_url() ?>">Anasayfa</a></li>
                                <li><a href="#">Kategoriler</a>
                                    <ul>
                                        <?php
                                        foreach ($kategori as $rs) {
                                        ?>
                                        <li>
                                            <a href="<?= base_url() ?>kategori/liste/<?= $rs->id ?>"><?= $rs->kat_adi ?></a>
                                        </li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url() ?>sikca-sorulan-sorular">Sıkça Sorulan Sorular</a>

                                </li>
                                <li>
                                    <a href="<?= base_url() ?>hakkimizda">Hakkımızda</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>bizeyazin">Bize Ulaşın</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MOBILE MENU AREA -->
