<br><br><br><br><br>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Siparişlerim</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="<?= base_url() ?>">Anasayfa</a></li>
                            <li>Hesabım</li>
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

    <!-- LOGIN SECTION START -->
    <div class="login-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="my-account-content" id="accordion2">
                        <?php if($this->session->flashdata("guncel")) {
                            ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                <strong>İşlem Başarılı!</strong> Profil Bilgileriniz Başarıyla Güncellendi.
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        $kargoucreti = 3.99;
                        $sayac = 1;
                        foreach ($gecs as $rs) {
                            ?>
                            <!-- My Order info -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion<?= $sayac ?>" href="#My_order_info<?= $sayac ?>"><?= $rs->tarih ?> - Sipariş No: GLC<?= $rs->id ?></a>
                                    </h4>
                                </div>
                                <div id="My_order_info<?= $sayac ?>" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <form action="#">
                                            <!-- our order -->
                                            <br>
                                            <div class="payment-details p-30">
                                                <table style="margin-top: 20px">
                                                    <?php
                                                    foreach($gecmis_siparis_urun as $key) {
                                                        if ($rs->id == $key->siparis_id) {
                                                            ?>
                                                            <tr style="margin-top: 15px">
                                                                <td class="td-title-1"><?= $key->urunadi ?></td>
                                                                <td class="td-title-2"><?= $key->urunfiyat ?> TL</td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                    <tr>
                                                        <td class="td-title-1">Kargo Ücreti</td>
                                                        <td class="td-title-2"><?= $kargoucreti ?> TL</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="order-total">Genel Toplam</td>
                                                        <td class="order-total-price"><?= $rs->tutar ?> TL</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $sayac = $sayac+1;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN SECTION END -->
</div>
<!-- End page content -->