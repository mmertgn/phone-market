<!-- START SLIDER AREA -->
<div class="slider-area slider-2">
    <div class="bend niceties preview-2">
        <div id="nivoslider-2" class="slides">
            <?php
            $a = 1;
            foreach ($slides as $rs) {
                ?>
                <img src="<?= base_url() ?>mainsite/subas/img/slider/slider-2/slider-1.jpg" alt="<?= $rs->baslik ?>"
                     title="#slider-direction-<?= $a ?>"/>
                <?php
                $a = $a + 1;
            }
            ?>
        </div>
        <?php
        $b = 1;
        $mod = 0;
        foreach ($slides as $rs) {
            if ($mod == 0) {
                if ($rs->urun_id != 0) {
                    ?>
                    <!-- ===== direction 1 ===== -->
                    <div id="slider-direction-<?= $b ?>" class="slider-direction">
                        <div class="slider-content-1">
                            <div class="title-container">
                                <div class="wow rotateInDownLeft" data-wow-duration="2s" data-wow-delay="0.5s">
                                    <h6 class="slider2-title-1" style="margin-bottom: 15px">Fiyat : <?= $rs->y_fiyat ?> TL</h6>
                                </div>
                                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                    <h1 class="slider2-title-2" style="margin-bottom: 20px"><?= $rs->baslik ?></h1>
                                </div>
                                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                                    <h2 class="slider2-title-3"><?= $rs->urunadi ?></h2>
                                </div>
                                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                                    <p class="slider2-title-4"><?= $rs->aciklamasi ?></p>
                                </div>
                                <div class="slider-button wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">
                                    <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>" class="button extra-small button-black">
                                        <span class="text-uppercase">Gözat</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- layer 1 -->
                        <div class="slider-content-1-image">
                            <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class="layer-1-1">
                                    <img src="<?= base_url() ?>slideruploads/<?= $rs->resim ?>"
                                         alt="<?= $rs->baslik ?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                else {
                    ?>
                    <div id="slider-direction-<?= $b ?>" class="slider-direction">
                        <div class="slider-content-1">
                            <div class="title-container">
                                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                    <h1 class="slider2-title-2"><?= $rs->baslik ?></h1>
                                </div>
                                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                                    <h2 class="slider2-title-3"><?= $rs->kat_adi ?></h2>
                                </div>
                                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                                    <p class="slider2-title-4"><?= $rs->aciklamasi ?></p>
                                </div>
                                <div class="slider-button wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">
                                    <a href="<?= base_url() ?>home/kategori/liste/<?= $rs->kategori_id ?>" class="button extra-small button-black">
                                        <span class="text-uppercase">Gözat</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- layer 1 -->
                        <div class="slider-content-1-image">
                            <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class="layer-1-1">
                                    <img src="<?= base_url() ?>slideruploads/<?= $rs->resim ?>"
                                         alt="<?= $rs->baslik ?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                $b = $b + 1;
                $mod=1;
            }
            else{
                if ($rs->urun_id != 0) {
                ?>
                <!-- ===== direction 1 ===== -->
                <div id="slider-direction-<?= $b ?>" class="slider-direction">
                    <div class="slider-content-1">
                        <div class="title-container">
                            <div class="wow rotateInDownLeft" data-wow-duration="2s" data-wow-delay="0.5s">
                                <h6 class="slider2-title-1" style="margin-bottom: 15px">Fiyat : <?= $rs->y_fiyat ?> TL</h6>
                            </div>
                            <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                <h1 class="slider2-title-2"><?= $rs->baslik ?></h1>
                            </div>
                            <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                                <h2 class="slider2-title-3"><?= $rs->urunadi ?></h2>
                            </div>
                            <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                                <p class="slider2-title-4"><?= $rs->aciklamasi ?></p>
                            </div>
                            <div class="slider-button wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">
                                <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>" class="button extra-small button-black">
                                    <span class="text-uppercase">Gözat</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- layer 1 -->
                    <div class="slider-content-1-image">
                        <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="layer-1-1">
                                <img src="<?= base_url() ?>slideruploads/<?= $rs->resim ?>"
                                     alt="<?= $rs->baslik ?>"/>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            else {
                ?>
                <div id="slider-direction-<?= $b ?>" class="slider-direction">
                    <div class="slider-content-2">
                        <div class="title-container">
                            <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                <h1 class="slider2-title-2"><?= $rs->baslik ?></h1>
                            </div>
                            <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                                <h2 class="slider2-title-3"><?= $rs->kat_adi ?></h2>
                            </div>
                            <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                                <p class="slider2-title-4"><?= $rs->aciklamasi ?></p>
                            </div>
                            <div class="slider-button wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">
                                <a href="<?= base_url() ?>home/kategori/liste/<?= $rs->kategori_id ?>" class="button extra-small button-black">
                                    <span class="text-uppercase">Gözat</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- layer 1 -->
                    <div class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="layer-1-1 layer-2-1">
                            <img src="<?= base_url() ?>slideruploads/<?= $rs->resim ?>" alt="<?= $rs->baslik ?>" />
                        </div>
                    </div>
                    </div>
                </div>
                <?php
                }
                $b = $b + 1;
                $mod =0;
            }
        }
        ?>
    </div>
</div>
<!-- END SLIDER AREA -->