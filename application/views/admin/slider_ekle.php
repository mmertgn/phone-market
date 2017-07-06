<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>

    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="<?=base_url()?>admin/home">Anasayfa</a>
                    </li>
                    <li class="active"><a href="<?= base_url()?>admin/urunler"> Slider Ekleme Formu </li></a>
                </ul><!-- /.breadcrumb -->

                <div class="page-header">
                    <h1>
                        Slider Ekleme
                    </h1>
                </div>


            </div>
            <form role="form" action="<?= base_url()?>admin/slider/resim_slider_uploads" method="post" enctype="multipart/form-data">
                <div class="form-group" >
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Slider Başlığı  </label>
                    <div class="col-sm-9">
                        <input type="text" name="adi" id="form-field-1-1" class="form-control" required>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Slider Açıklaması</label>
                    <div class="col-sm-9">
                        <input type="text" name="aciklamasi" id="form-field-1-1" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Slider Resmi</label>
                    <div class="col-sm-9 fallback">
                        <input type="file" name="userfile" size="20"/>
                    </div>
                </div>
                    <h3 style="text-align: center">Slider'a tıklanınca gidilmesi istenen yeri aşağıdakilerden bir tanesini seçerek kaydediniz...</h3>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Kategoriler</label>
                    <div class="col-sm-9">
                        <select class="form-control countries" name="kategori_id">
                            <option value="0">--Kategori Seçiniz--</option>
                            <?php
                            foreach ($kat as $rs) {
                                ?>
                                <option value="<?= $rs->id ?>"><?= $rs->kat_adi ?></option>
                                <?php
                            }
                                ?>
                        </select>
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
                <button type="submit" class="btn btn-success" style="margin-left: 10px;margin-top: 10px">KAYDET</button>
            </form>
        </div>

    </div><!-- /.main-content -->
<?php
$this->load->view('admin/_footer');
?>