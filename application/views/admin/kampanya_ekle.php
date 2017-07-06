
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="<?=base_url()?>admin/home">Anasayfa</a>
                    </li>
                    <li><a href="<?= base_url()?>admin/kampanya"> Kampanyalar</li></a>
                    <li class="active">Kampanyalı Ürün Ekleme Formu</li>
                </ul><!-- /.breadcrumb -->

                <div class="page-header">
                    <h1>
                        Kampanya Ekleme
                    </h1>
                </div>


            </div>
            <form role="form" action="<?= base_url()?>admin/kampanya/resim_kampanya_uploads" method="post" enctype="multipart/form-data">
                <div class="form-group" >
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Kampanya Kısa Açıklama 1</label>
                    <div class="col-sm-9">
                        <input type="text" name="madde1" id="form-field-1-1" class="form-control" required>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group" >
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Kampanya Kısa Açıklama 2</label>
                    <div class="col-sm-9">
                        <input type="text" name="madde2" id="form-field-1-1" class="form-control" required>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group" >
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Kampanya Kısa Açıklama 3</label>
                    <div class="col-sm-9">
                        <input type="text" name="madde3" id="form-field-1-1" class="form-control" required>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group" >
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Kampanya Kısa Açıklama 4</label>
                    <div class="col-sm-9">
                        <input type="text" name="madde4" id="form-field-1-1" class="form-control" required>
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
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Kampanya Resmi</label>
                    <div class="col-sm-9 fallback">
                        <input type="file" name="userfile" size="20" style="margin-top: 5px"/>
                    </div>
                </div>

                </br>
                <button type="submit" class="btn btn-success" style="margin-left: 10px;margin-top: 10px">KAYDET</button>
            </form>
        </div>

    </div><!-- /.main-content -->