<br><br><br><br><br>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Bize Ulaşın</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="<?= base_url() ?>">Anasayfa</a></li>
                            <li>Bize Ulaşın</li>
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

    <!-- ADDRESS SECTION START -->
    <div class="address-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="contact-address box-shadow">
                        <i class="zmdi zmdi-pin"></i>
                        <h6><?= $ayar[0]->adres ?></h6>
                        <h6><?= $ayar[0]->sehir ?></h6>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="contact-address box-shadow">
                        <i class="zmdi zmdi-phone"></i>
                        <h6>Telefon: <?= $ayar[0]->tel ?></h6>
                        <h6>Fax: <?= $ayar[0]->fax ?></h6>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="contact-address box-shadow">
                        <i class="zmdi zmdi-email"></i>
                        <h6><?= $ayar[0]->email ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ADDRESS SECTION END -->

    <!-- GOOGLE MAP SECTION START -->
    <div class="google-map-section">
        <div class="container-fluid">
            <div class="google-map plr-185">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001.260971665628!2d32.659086315673974!3d41.21608301455963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfe819adf9c34f776!2zQWx0xLFuIEthbGVtIMOWxJ9yZW5jaSBZdXJkdQ!5e0!3m2!1str!2str!4v1498249027737" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- GOOGLE MAP SECTION END -->
    <!-- MESSAGE BOX SECTION START -->
    <div class="message-box-section mt--50 mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="message-box box-shadow white-bg">
                        <form id="contact-form" action="<?= base_url() ?>bizeulasin/gonder" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="blog-section-title border-left mb-30">Bize Yazın</h4>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="adsoy" placeholder="Adınız">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="email" placeholder="Mail Adresiniz">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="konu" placeholder="Konu">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="tel" placeholder="Telefon Numaranız">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="custom-textarea" name="mesaj" placeholder="Mesajınız"></textarea>
                                    <input type="submit" class="submit-btn-1 mt-30 btn-hover-1" value="Mesajı Gönder">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>