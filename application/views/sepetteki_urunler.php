<br><br><br><br><br>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Sepetim</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="<?= base_url() ?>">Anasayfa</a></li>
                            <li>Sepetim</li>
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
                        <!-- shopping-cart start -->
                        <div class="tab-pane active" id="shopping-cart">
                            <div class="shopping-cart-content">
                                <form action="<?= base_url() ?>siparis/siparisodeme" method="post">
                                    <div class="table-content table-responsive mb-50">
                                        <table class="text-center">
                                            <?php
                                            if($sepetsayi>0) {
                                                ?>
                                                <thead>
                                                <tr>
                                                    <th class="product-thumbnail">Ürün Adı</th>
                                                    <th class="product-price">Fiyat</th>
                                                    <th class="product-quantity">Adet</th>
                                                    <th class="product-subtotal">Toplam</th>
                                                    <th class="product-remove">Sil</th>
                                                </tr>
                                                </thead>
                                                <?php
                                            }
                                            ?>
                                            <tbody>
                                            <?php
                                            if($sepetsayi>0) {
                                                $sepettoplami = 0;
                                                $kargoucreti = 3.99;
                                                foreach ($sepet as $rs) {
                                                    $sepettoplami = $rs->urunfiyat + $sepettoplami;
                                                    ?>
                                                    <!-- tr -->
                                                    <tr>
                                                        <td class="product-thumbnail">
                                                            <div class="pro-thumbnail-img">
                                                                <img
                                                                    src="<?= base_url() ?>uploads/<?= $rs->urunresim ?>"
                                                                    alt="<?= $rs->urunadi ?>"/>
                                                            </div>
                                                            <div class="pro-thumbnail-info text-left">
                                                                <h6 class="product-title-2">
                                                                    <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urunid ?>"><?= $rs->urunadi ?></a>
                                                                </h6>
                                                            </div>
                                                        </td>
                                                        <td class="product-price"><?= $rs->urunfiyat ?> TL</td>
                                                        <td class="product-quantity">
                                                            <div class="cart-plus-minus f-left">
                                                                <input type="text" value="01" name="qtybutton"
                                                                       class="cart-plus-minus-box">
                                                            </div>
                                                        </td>
                                                        <td class="product-subtotal"><?= $rs->urunfiyat ?> TL</td>
                                                        <td class="product-remove">
                                                            <a href="<?= base_url() ?>home/sepetsil/<?= $rs->id ?>"><i
                                                                    class="zmdi zmdi-close"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                $geneltoplam = $sepettoplami + $kargoucreti;
                                            }else {
                                                $sepettoplami = 0;
                                                $kargoucreti = 0;
                                                $geneltoplam = 0;
                                                ?>
                                                <div class="section-title  text-center mb-40">
                                                    <h2 class="uppercase mb-30">Sepetİnİzde ÜrÜn Bulunmamaktadır.</h2>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="coupon-discount box-shadow p-30 mb-50">
                                                <h6 class="widget-title border-left mb-20">Hediye Çeki / Promosyon Kodu</h6>
                                                <p>Çek / Promosyon Kodu Kullan!</p>
                                                <input type="text" name="name" placeholder="Kodu Buraya Girin.">
                                                <button class="submit-btn-1 black-bg btn-hover-2" type="button">Kullan</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="payment-details box-shadow p-30 mb-50">
                                                <h6 class="widget-title border-left mb-20">Ödeme Detayları</h6>
                                                <table>
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
                                                <hr>
                                                <button class="submit-btn-1 black-bg btn-hover-2" type="submit">Alışverişi Tamamla</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- shopping-cart end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->

</section>
<!-- End page content -->