
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="<?=base_url()?>admin/home">Anasayfa</a>
                    </li>
                    <li><a href="<?= base_url()?>admin/kampanya"> Kampanyalar</li></a>
                    <li class="active"> Günün Fırsatı Ekleme Formu </li>
                </ul><!-- /.breadcrumb -->

                <div class="page-header">
                    <h1>
                        Fırsat Ekleme
                    </h1>
                </div>


            </div>
            <form role="form" action="<?= base_url()?>admin/kampanya/firsateklekaydet" method="post" enctype="multipart/form-data">
                <div class="form-group" >
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Kampanyalı Fiyat</label>
                    <div class="col-sm-9">
                        <input type="text" name="kampfiyat" id="form-field-1-1" class="form-control" required>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Ürünler</label>
                    <div class="col-sm-9">
                        <select class="form-control states" name="urun_id">
                            <option value="0">--Ürün Seçiniz--</option>
                            <?php
                            foreach ($urun as $rs) {
                                ?>
                                <option value="<?= $rs->id ?>"><?= $rs->adi ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                </br>
                <button type="submit" class="btn btn-success" style="margin-left: 10px;margin-top: 10px">Kaydet</button>
            </form>
        </div>

    </div><!-- /.main-content -->