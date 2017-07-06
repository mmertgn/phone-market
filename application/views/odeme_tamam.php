<br><br><br><br><br>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Sipariş Tamamlandı</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="<?= base_url() ?>">Anasayfa</a></li>
                            <li>Sipariş Sonucu</li>
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
                        <!-- order-complete start -->
                        <div class="tab-pane active" id="order-complete">
                            <div class="order-complete-content box-shadow">
                                <div class="thank-you p-30 text-center">
                                    <h4 class="text-black-5 mb-0">Teşekkürler. Siparişiniz Başarılı Olarak Alınmıştır.</h4>
                                </div>
                                <hr>
                                <div class="row">
                                    <!-- our order -->
                                    <div class="col-md-6">
                                        <div class="payment-details p-30">
                                            <h6 class="widget-title border-left mb-20">Sipariş Detayı</h6>
                                            <table>
                                                <?php
                                                $sepettoplami = 0;
                                                $kargoucreti = 3.99;
                                                foreach ($siparissonuc as $rs) {
                                                    $sepettoplami = $rs->urunfiyat + $sepettoplami;
                                                    ?>
                                                    <tr>
                                                        <td class="td-title-1"><?= $rs->urunadi ?></td>
                                                        <td class="td-title-2"><?= $rs->urunfiyat ?> TL</td>
                                                    </tr>
                                                    <?php
                                                }
                                                $geneltoplam = $sepettoplami + $kargoucreti;
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
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bill-details p-30">
                                            <h6 class="widget-title border-left mb-20">Kişisel Bilgiler</h6>
                                            <ul class="bill-address">
                                                <li>
                                                    <span>Ad Soyad:</span>
                                                    <?= $siparissonuc[0]->adsoy ?>
                                                </li>
                                                <li>
                                                    <span>Telefon:</span>
                                                    <?= $siparissonuc[0]->tel ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bill-details pl-30">
                                            <h6 class="widget-title border-left mb-20">Adres Bilgileri</h6>
                                            <ul class="bill-address">
                                                    <li>
                                                        <span>Adres:</span>
                                                        <?= $siparissonuc[0]->adres ?>
                                                    </li>
                                                    <li>
                                                        <span>Sehir:</span>
                                                        <?= $siparissonuc[0]->sehir ?>
                                                    </li>
                                                    <li>
                                                        <span>İlçe:</span>
                                                        <?= $siparissonuc[0]->ilce ?>
                                                    </li>
                                                    <li>
                                                        <span>Postakodu:</span>
                                                        <?= $siparissonuc[0]->postkod ?>
                                                    </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- order-complete end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->

</section>
<!-- End page content -->