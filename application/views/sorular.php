<br><br><br><br><br>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title" >Sıkça Sorulan Sorular</h1>
                        <ul class="breadcrumb-list">
                            <li>
                                <a href="<?= base_url() ?>">Anasayfa</a>
                            </li>
                            <li>Sıkça Sorulan Sorular</li>
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
    <div class="mb-80">
        <!-- Accordion Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <?php
                        foreach ($sorular as $rs) {
                            $a=1;
                            ?>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a style="text-align: center" role="button" data-toggle="collapse" href="#<?= $a ?>" aria-expanded="true" aria-controls="collapseOne">
                                            <?= $rs->soru ?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="<?= $a ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p><?= $rs->cevap ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Accordion End -->

    </div>
</section>
<!-- End page content -->