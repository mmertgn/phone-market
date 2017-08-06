<br><br><br><br><br>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">İletişim</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="<?= base_url() ?>">Anasayfa</a></li>
                            <li>İletişim Bilgileri</li>
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

    <!-- googleMap-area-start -->
    <div id="googleMap" style="height: 600px"></div>
    <!-- googleMap-end -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript">
        /* Google Map js */
        function initialize() {
            var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(<?= $ayar[0]->xkordinat ?>, <?= $ayar[0]->ykordinat ?>)
            };

            var map = new google.maps.Map(document.getElementById('googleMap'),
                mapOptions);

            var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation:google.maps.Animation.BOUNCE,
                icon: 'img/contact-us/map.png',
                map: map
            });

        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</section>