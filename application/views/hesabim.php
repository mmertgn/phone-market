<br><br><br><br><br>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Hesabım</h1>
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
                        <!-- My Personal Information -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#personal_info">Kişisel Bilgilerim</a>
                                </h4>
                            </div>
                            <div id="personal_info" class="panel-collapse collapse in" role="tabpanel">
                                <div class="panel-body">
                                    <form action="<?= base_url() ?>home/profilguncelle/<?= $kullanici[0]->id ?>" method="post">
                                        <div class="new-customers">
                                            <div class="p-30">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <input type="text" name="adsoy" placeholder="Ad Soyad" value="<?= $kullanici[0]->adsoy ?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="sehir" placeholder="Şehir" value="<?= $kullanici[0]->sehir ?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="ilce" placeholder="İlçe" value="<?= $kullanici[0]->ilce ?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="postkod" placeholder="Posta Kodu" value="<?= $kullanici[0]->postkod ?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="tel" placeholder="Telefon No..." value="<?= $kullanici[0]->tel ?>">
                                                    </div>
                                                </div>
                                                <input type="text" name="email" value="<?= $kullanici[0]->email ?>" placeholder="Email Adresi...">
                                                <input type="password" id="password" name="sifre" placeholder="Şifre" required>
                                                <input type="password" name="sifre2" id="confirm_password" placeholder="Şifre Tekrar" required>
                                                <textarea class="custom-textarea" name="adres" placeholder="Adres..."><?= $kullanici[0]->adres ?></textarea>
                                                <div class="checkbox">
                                                    <label>
                                                        <small>
                                                            <input type="checkbox" name="signup" required>Hesap oluşturarak <a href="#" style="color: orange">üyelik sözleşmesini</a> okuduğunuzu ve kabul ettiğinizi onaylıyorsunuz.
                                                        </small>
                                                    </label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Kaydet</button>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button class="submit-btn-1 mt-20 btn-hover-1 f-right" type="reset">Temizle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            var password = document.getElementById("password")
                                , confirm_password = document.getElementById("confirm_password");

                            function validatePassword(){
                                if(password.value != confirm_password.value) {
                                    confirm_password.setCustomValidity("Girilem şifreler eşleşmemektedir.");
                                } else {
                                    confirm_password.setCustomValidity('');
                                }
                            }
                            password.onchange = validatePassword;
                            confirm_password.onkeyup = validatePassword;
                        </script>
                        <!-- My shipping address -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#my_shipping">Adres Bilgilerim</a>
                                </h4>
                            </div>
                            <div id="my_shipping" class="panel-collapse collapse" role="tabpanel" >
                                <div class="panel-body">
                                    <form action="#">
                                        <div class="new-customers p-30">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input type="text" name="adsoy" placeholder="Ad Soyad" value="<?= $kullanici[0]->adsoy ?>">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="sehir" placeholder="Şehir" value="<?= $kullanici[0]->sehir ?>">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="ilce" placeholder="İlçe" value="<?= $kullanici[0]->ilce ?>">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="postkod" placeholder="Posta Kodu" value="<?= $kullanici[0]->postkod ?>">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="tel" placeholder="Telefon No..." value="<?= $kullanici[0]->tel ?>">
                                                </div>
                                            </div>
                                            <textarea class="custom-textarea" name="adres" placeholder="Adres..."><?= $kullanici[0]->adres ?></textarea>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Kaydet</button>
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
            </div>
        </div>
    </div>
    <!-- LOGIN SECTION END -->
</div>
<!-- End page content -->