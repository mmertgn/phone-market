

<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?=base_url()?>admin/home">Anasayfa</a>
                </li>
                <li class="active"><a href="<?=base_url()?>admin/kategoriler"> Kategori Yönetimi</a></li>
            </ul><!-- /.breadcrumb -->
            <div class="page-header">
                <h1>Alt Kategori Ekleme</h1>
            </div>
            <div class="table-header">
                <p>Seçili olan kategori <b><?= $kategoriler[0]->kat_adi ?></b></p>
            </div>
        </div>

        <div class="box-content">
            <form role="form" action="<?= base_url()?>admin/kategoriler/altkateklekaydet" method="post">
                <div class="form-group" >
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Alt Kategori Adı </label>
                    <div class="col-sm-9">
                        <input type="text" name="adi" id="form-field-1-1" class="form-control">
                    </div>
                </div>
                <input type="hidden" value="<?= $kategoriler[0]->id ?>" name="kat_id"">
                <button name="submit" type="submit" class="btn btn-success" style="margin-top: 10px;margin-left: 10px;">Kaydet</button>
            </form>
        </div>
    </div><!-- /.main-content -->


    <div class="main-content">
        <div class="main-content-inner">
            <?php if($this->session->flashdata("sonuc")) {
                ?>
                <div class="alert alert-info">
                    <button class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <strong>İşlem:</strong><?= $this->session->flashdata("sonuc") ?>
                </div>
                <?php
            }
            ?>

            <div class="page-content">
                <div class="ace-settings-container" id="ace-settings-container">
                    <div class="ace-settings-box clearfix" id="ace-settings-box"></div><!-- /.ace-settings-box -->
                </div><!-- /.ace-settings-container -->

                <div class="page-header">
                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="header smaller lighter blue">Alt Kategoriler</h3>
                            <div class="clearfix"></div>
                            <div class="table-header"></div>
                            <div>
                                <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="dataTables_length" id="dynamic-table_length"></div>
                                        </div>
                                    </div>
                                    <?php
                                    if($altkatsayi>0)
                                    {
                                        ?>
                                    <table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">
                                                <label class="pos-rel">
                                                    <input type="checkbox" class="ace">
                                                    <span class="lbl"></span>
                                                </label>
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" >Alt Kategori Adı</th>
                                                <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" >Üst Kategori Adı</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <?php
                                            foreach ($altkat as $rs) {?>
                                                <tbody>
                                                    <tr role="row" class="odd selected">
                                                        <td class="center">
                                                            <label class="pos-rel">
                                                                <input type="checkbox" class="ace">
                                                                <span class="lbl"></span>
                                                            </label>
                                                        </td>
                                                        <td><?= $rs->adi ?></td>
                                                        <td><?= $kategoriler[0]->kat_adi ?></td>
                                                        <td>
                                                            <div class="hidden-sm hidden-xs action-buttons">
                                                                <a class="red" href="<?= base_url() ?>admin/kategoriler/altkatdelete/<?= $rs->id ?>/<?= $rs->kat_id ?>">
                                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <?php
                                            }
                                    }
                                    else{?>
                                        <p class="alert-danger bolder">Alt Kategori Bulunmamaktadır. Eklemek için Yukarıdan Formu Doldurunuz...</p>
                                        <?php
                                    }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.page-header -->
            </div>
        </div>
    </div><!-- /.main-content -->