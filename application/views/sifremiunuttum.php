<br><br><br><br><br>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Şifremi Unuttum</h1>
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
                        <h6 class="widget-title border-left mb-50">Şifremi Unuttum</h6>
                        <?php if($this->session->flashdata("sifirla")) {
                            ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                <strong>İşlem Başarılı!</strong> Şifre Sıfırlama Linkiniz Mail Adresinize Gönderilmiştir.
                            </div>
                            <?php
                        }
                        ?>
                        <?php if($this->session->flashdata("email_sent")) {
                            ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                <strong>Üzgünüm!</strong> Email göderilirken bir hata oluşmuştur.
                            </div>
                            <?php
                        }
                        ?>
                        <form action="<?= base_url() ?>home/sifirlaislem" method="post">
                            <div class="login-account p-30 box-shadow">
                                <p>Aşağıdaki alana <strong>Email Adresinizi</strong>  giriniz. Şifre sıfırlama linki mail adresinize gönderilecektir.</p>
                                <input type="text" name="email" placeholder="Email Adresiniz">
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