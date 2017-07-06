<br><br><br><br><br>
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Siparişi Tamamla</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="<?= base_url() ?>">Anasayfa</a></li>
                            <li>Siparişi Tamamla</li>
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
                <div class="col-md-12">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- checkout start -->
                        <div class="tab-pane active" id="checkout">
                            <div class="checkout-content box-shadow p-30">
                                <form action="<?= base_url() ?>siparis/siparistamamislem" method="post">
                                    <div class="row">
                                        <!-- billing details -->
                                        <div class="col-md-6">
                                            <div class="billing-details pr-10">
                                                <h6 class="widget-title border-left mb-20">Teslimat Bilgileri</h6>
                                                <input type="text" name="adsoy"  placeholder="Ad Soyad...">
                                                <input type="text" name="tel"  placeholder="Telefon Numaranız...">
                                                <input type="text" name="sehir"  placeholder="Şehir...">
                                                <input type="text" name="ilce"  placeholder="İlçe...">
                                                <input type="text" name="postkod"  placeholder="Postakodu...">
                                                <textarea class="custom-textarea" name="adres" placeholder="Adresiniz..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- our order -->
                                            <div class="payment-details pl-10 mb-50">
                                                <h6 class="widget-title border-left mb-20">Sepetinizdeki Ürünler</h6>
                                                <table>
                                                    <?php
                                                    if($sepetsayi>0) {
                                                    $sepettoplami = 0;
                                                    $kargoucreti = 3.99;
                                                    $urunsira=1;
                                                    foreach ($sepet as $rs) {
                                                    $sepettoplami = $rs->urunfiyat + $sepettoplami;
                                                    ?>
                                                    <tr>
                                                        <td class="td-title-1"><?= $rs->urunadi ?></td>
                                                        <td class="td-title-2"><?= $rs->urunfiyat ?> TL</td>
                                                        <input type="hidden" name="urun_id<?= $urunsira ?>" value="<?= $rs->urunid ?>">
                                                    </tr>
                                                        <?php
                                                        $urunsira = $urunsira+1;
                                                    }
                                                        $geneltoplam = $sepettoplami + $kargoucreti;
                                                    }
                                                    ?>
                                                    <tr>
                                                        <td class="td-title-1">Sepet Toplamı</td>
                                                        <td class="td-title-2"><?= $sepettoplami ?> TL</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Kargo Ücreti</td>
                                                        <td class="td-title-2"><?= $kargoucreti ?> TL</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="order-total">Genel Toplam</td>
                                                        <td class="order-total-price"><?= $geneltoplam ?> TL</td>
                                                        <input type="hidden" name="geneltoplam" value="<?= $geneltoplam ?>">
                                                    </tr>
                                                </table>
                                            </div>
                                            <button class="submit-btn-1 mt-30 btn-hover-1" type="submit">Siparişi Tamamla</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- checkout end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->