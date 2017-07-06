<br><br><br><br><br>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">İstek Listesi</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="<?= base_url() ?>">Anasayfa</a></li>
                            <li>İstek Listesi</li>
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
                        <!-- wishlist start -->
                        <div class="tab-pane active" id="wishlist">
                            <div class="wishlist-content">
                                <form action="#">
                                    <div class="table-content table-responsive mb-50">
                                        <table class="text-center">
                                            <?php
                                            if($isteksayi>0) {
                                                ?>
                                                <thead>
                                                <tr>
                                                    <th class="product-thumbnail">Ürün</th>
                                                    <th class="product-price">Fİyat</th>
                                                    <th class="product-stock">Stok Sayısı</th>
                                                    <th class="product-add-cart">Sepete Ekle</th>
                                                    <th class="product-remove">Kaldır</th>
                                                </tr>
                                                </thead>
                                                <?php
                                            }
                                            ?>
                                            <tbody>
                                            <?php
                                            if($isteksayi>0) {
                                                foreach ($isteklist as $rs) {
                                                    ?>
                                                    <!-- tr -->
                                                    <tr>
                                                        <td class="product-thumbnail">
                                                            <div class="pro-thumbnail-img">
                                                                <img src="<?= base_url() ?>uploads/<?= $rs->urunresim ?>"
                                                                     alt="<?= $rs->urunadi ?>"/>
                                                            </div>
                                                            <div class="pro-thumbnail-info text-left">
                                                                <h6 class="product-title-2">
                                                                    <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urunid ?>"><?= $rs->urunadi ?></a>
                                                                </h6>
                                                            </div>
                                                        </td>
                                                        <td class="product-price"><?= $rs->urunfiyat ?> TL</td>
                                                        <td class="product-stock text-uppercase"><?= $rs->urunmiktar ?></td>
                                                        <td class="product-add-cart">
                                                            <a href="<?= base_url() ?>home/sepeteekle/<?= $rs->urunid ?>"
                                                               title="Add To Cart">
                                                                <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                            </a>
                                                        </td>
                                                        <td class="product-remove">
                                                            <a href="<?= base_url() ?>home/isteksil/<?= $rs->id ?>"><i
                                                                        class="zmdi zmdi-close"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            else {
                                                ?>
                                                <div class="section-title  text-center mb-40">
                                                    <h2 class="uppercase mb-30">İstek Listeniz ÜrÜn Bulunmamaktadır.</h2>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- wishlist end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->

</section>
<!-- End page content -->