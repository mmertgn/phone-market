<br><br><br><br><br>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Üye Girişi / Kayıt Ol</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="<?= base_url() ?>">Anasayfa</a></li>
                            <li>Üye Girişi / Kayıt Ol</li>
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
                <div class="col-md-6">
                    <div class="registered-customers">
                        <h6 class="widget-title border-left mb-50">Kullanıcı Girişi</h6>
                        <?php if($this->session->flashdata("sonuc")) {
                            ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                <strong>Üzgünüm!</strong> Hatalı Kullanıcı Adı yada Şifre.
                            </div>
                            <?php
                        }
                        ?>

                        <?php if($this->session->flashdata("sepet")) {
                            ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                <strong>Üzgünüm!</strong> Sepete Eklemek İçin Önce Giriş Yapmalısınız.
                            </div>
                            <?php
                        }
                        ?>

                        <?php if($this->session->flashdata("sifirlandi")) {
                            ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                <strong>İşlem Başarılı!</strong> Şifre Sıfırlama işlemi başarıyla gerçekleştirildi. Yeni şifreniz ile giriş yapabilirsiniz.
                            </div>
                            <?php
                        }
                        ?>

                        <?php if($this->session->flashdata("sifirlanamadi")) {
                            ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                <strong>Üzgünüm!</strong> Şifre Sıfırlama işlemi gerçekleştirilemedi. Girdiğiniz şifrelerin aynı olduğundan emin olun...
                            </div>
                            <?php
                        }
                        ?>
                        <form action="<?= base_url() ?>home/giris" method="post">
                            <div class="login-account p-30 box-shadow">
                                <p>Hesabınız var ise, lütfen aşağıdan giriş yapınız.</p>
                                <input type="text" name="email" placeholder="Email Adresiniz">
                                <input type="password" name="sifre" placeholder="Şifre">
                                <p><small><a href="<?= base_url() ?>home/sifremiunuttum">Şifremi Unuttum</a></small></p>
                                <button class="submit-btn-1 btn-hover-1" type="submit">Giriş</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- new-customers -->
                <div class="col-md-6">
                    <div class="new-customers">
                        <form action="<?= base_url() ?>home/kayitol" method="post">
                            <h6 class="widget-title border-left mb-50">Yeni Üye</h6>
                            <?php if($this->session->flashdata("kayıt")) {
                                ?>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                    <strong><?= $this->session->flashdata("kayıt") ?></strong>.
                                </div>
                                <?php
                            }
                            ?>
                            <?php if($this->session->flashdata("kayıtb")) {
                                ?>
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                    <strong>Üzgünüm!</strong> <?= $this->session->flashdata("kayıtb") ?>.
                                </div>
                                <?php
                            }
                            ?>
                            <div class="login-account p-30 box-shadow">
                                <input type="text" name="adsoy" placeholder="Adınız ve Soyadınız">
                                <div class="row">

                                    <div class="col-sm-6">
                                        <input type="text" name="sehir"  placeholder="Şehir...">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="ilce"  placeholder="İlçe...">
                                    </div>
                                </div>
                                <input type="text" name="adres"  placeholder="Adres...">
                                <input type="text" name="tel"  placeholder="Telefon...">
                                <input type="text" name="postkod"  placeholder="Posta Kodu...">
                                <input type="text" name="email"  placeholder="Email Adresi...">
                                <input type="password" name="sifre"  placeholder="Şifre">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Üye Ol</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="submit-btn-1 mt-20 btn-hover-1 f-right" type="reset">Temizle</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN SECTION END -->

</div>
<!-- End page content -->