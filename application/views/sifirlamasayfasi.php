<br><br><br><br><br>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Şifremi Sıfırlama</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="<?= base_url() ?>">Anasayfa</a></li>
                            <li>Şifremi Unuttum</li>
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
                <div class="col-md-6 col-md-push-3">
                    <div class="registered-customers">
                        <h6 class="widget-title border-left mb-50">Şifre Sıfırla</h6>
                        <form action="<?= base_url() ?>home/sifirlandi/<?= $asd[0]->id ?>" method="post">
                            <div class="login-account p-30 box-shadow">
                                <p>Aşağıdaki alana <strong>Yeni Şifrenizi</strong>  giriniz.</p>
                                <input type="password" name="sifre" placeholder="Yeni Şifreniz" required>
                                <input type="password" name="sifre2" placeholder="Yeni Şifreniz Tekrar" required>
                                <button class="submit-btn-1 btn-hover-1" type="submit">Giriş</button>
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