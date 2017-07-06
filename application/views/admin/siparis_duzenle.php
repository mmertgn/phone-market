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
                <li class="active"><a href="<?=base_url()?>admin/siparis"> Siparişler</a></li>
            </ul><!-- /.breadcrumb -->
        </div>
        <br>
        <div class="page-header">
            <h1>Sipariş Bilgileri Düzenleme</h1>
        </div>
        <form role="form" action="<?= base_url()?>admin/siparis/guncellekaydet/<?=$siparis[0]->id?>" method="post" >
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right"  for="form-field-select-1"> Sipariş Veren Kullanıcı</label>
                <div class="col-sm-9">
                    <select class="form-control" name="musteri_id" id="form-field-select-1">
                        <option value="<?=$siparis[0]->musteri_id?>"><?=$siparis[0]->musteri_adi?></option>
                        <?php
                            foreach ($kullanicilar as $rs) {
                                if ($rs->id > 1 && $rs->adsoy!=$siparis[0]->musteri_adi ) {
                                    ?>
                                    <option value="<?= $rs->id ?>"><?= $rs->adsoy ?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="space-4"></div>
            <div class="form-group" >
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Adı Soyadı </label>
                <div class="col-sm-9">
                    <input type="text" name="adsoy" value="<?=$siparis[0]->adsoy?>" id="form-field-1-1" placeholder="Adı Soyadı" class="form-control">
                </div>
            </div>
            <div class="space-4"></div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Adres </label>
                <div class="col-sm-9">
                    <input type="text" name="adres" value="<?=$siparis[0]->adres?>" id="form-field-1-1" placeholder="Adres" class="form-control">
                </div>
            </div>
            <div class="space-4"></div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Şehir </label>
                <div class="col-sm-9">
                    <input type="text" name="sehir" value="<?=$siparis[0]->sehir?>" id="form-field-1" placeholder="Şehir" class="col-xs-10 col-sm-5">
                </div>
            </div>
            <div class="space-4"></div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> İlçe </label>
                <div class="col-sm-9">
                    <input type="text" name="ilce"  value="<?=$siparis[0]->ilce?>" id="form-field-1" placeholder="İlçe" class="col-xs-10 col-sm-5">
                </div>
            </div>
            <div class="space-4"></div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Posta Kodu </label>
                <div class="col-sm-9">
                    <input type="text" name="postkod" value="<?=$siparis[0]->postkod?>" id="form-field-1" placeholder="Posta Kodu" class="col-xs-10 col-sm-5">
                </div>
            </div>
            <div class="space-4"></div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Cep Numarası </label>
                <div class="col-sm-9">
                    <input type="text" name="tel" value="<?=$siparis[0]->tel?>" id="form-field-1" placeholder="Numara" class="col-xs-10 col-sm-5">
                </div>
            </div>
            <div class="space-4"></div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Toplam Tutar (TL) </label>
                <div class="col-sm-9">
                    <input type="text" name="tel" value="<?=$siparis[0]->tutar?>" id="form-field-1" placeholder="Numara" class="col-xs-10 col-sm-5">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right"  for="form-field-select-1">Sipariş Durumu</label>
                <div class="col-sm-9">
                    <select class="form-control" name="siparisdurumu" id="form-field-select-1">
                        <option value="<?=$siparis[0]->siparisdurumu?>"><?=$siparis[0]->siparisdurumu?></option>
                        <?php
                        if($siparis[0]->siparisdurumu == 'Onaylı') {
                            ?>
                            <option value="Beklemede">Beklemede</option>
                            <?php
                        }
                        else {
                            ?>
                            <option value="Onaylı">Onaylı</option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-success" style="margin-top: 10px;margin-left: 10px">Güncelle</button>
            </div>
        </form>
        <br>

        <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
                <div class="ace-settings-box clearfix" id="ace-settings-box"></div><!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->
            <div class="page-header">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="header smaller lighter blue">Sipariş Verilen Ürünler</h3>
                        <div class="clearfix"></div>
                        <div class="table-header"></div>
                        <div>
                            <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="dataTables_length" id="dynamic-table_length">
                                        </div>
                                    </div>
                                </div>
                                <table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
                                    <thead>
                                    <tr role="row">
                                        <th>Ürün Resmi</th>
                                        <th class="sorting">Ürün Adı</th>
                                        <th>Fiyatı</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach($sip_urunler as $rs) {
                                        ?>
                                        <tr role="row" class="odd selected">
                                            <td><img height="30" src="<?=base_url()?>uploads/<?=$rs->urunresmi?>"></td>
                                            <td><?= $rs->urunadi ?></td>
                                            <td><?= $rs->urunfiyati ?></td>
                                            <td>
                                                <div class="hidden-sm hidden-xs action-buttons">
                                                    <a class="red" href="<?=base_url()?>admin/siparis/siparisurunsil/<?=$rs->id?>">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>
                                                </div>
                                                <div class="hidden-md hidden-lg">
                                                    <div class="inline pos-rel">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle"
                                                                data-toggle="dropdown" data-position="auto">
                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <a href="<?=base_url()?>admin/siparis/siparisurunsil/<?=$rs->id?>" class="tooltip-success" data-rel="tooltip"
                                                                   title="" data-original-title="Sil">
                                                                    <span class="green">
                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.page-header -->
        </div><!-- /.row -->
    </div>
</div><!-- /.main-content -->

<?php
$this->load->view('admin/_footer');
?>
