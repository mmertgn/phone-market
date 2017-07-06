<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?=base_url()?>admin/home">Anasayfa</a>
                </li>
                <li class="active"><a href="<?=base_url()?>admin/urunler">Ürün Yönetimi</a></li>
                <li><a href="<?=base_url()?>admin/urunler/ekle"><button type="button" class="btn btn-yellow" style="margin-bottom: 6px">Yeni Ürün Ekleme</button></a></li>
            </ul><!-- /.breadcrumb -->

        </div>
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

                <div class="ace-settings-box clearfix" id="ace-settings-box">


                </div><!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->

            <div class="page-header">

                <small>

                </small>
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="header smaller lighter blue">Ürünler</h3>

                        <div class="clearfix">

                        </div>
                        <div class="table-header">

                        </div>

                        <!-- div.table-responsive -->

                        <!-- div.dataTables_borderWrap -->
                        <div>
                            <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer"><div class="row"><div class="col-xs-6"><div class="dataTables_length" id="dynamic-table_length">
                                        </div></div><div class="col-xs-6"><div id="dynamic-table_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dynamic-table"></label></div></div></div><table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">
                                            <label class="pos-rel">
                                                <input type="checkbox" class="ace">
                                                <span class="lbl"></span>
                                            </label>
                                        </th><th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">Ürün Adı</th>
                                        <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending">Kategorisi</th>
                                        <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" >Alt Kategori</th>
                                        <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" >Satış Fiyatı</th>
                                        <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" >Ürün Stok</th>
                                        <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" >Resim</th>
                                        <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" >Galeri</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label=""></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    foreach($urunler as $rs) {
                                        ?>

                                        <tr role="row" class="odd selected">
                                            <td class="center">
                                                <label class="pos-rel">
                                                    <input type="checkbox" class="ace">
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>
                                            <td><?= $rs->adi ?></td>
                                            <td><?= $rs->katAdi ?></td>
                                            <td><?= $rs->altKatAdi ?></td>
                                            <td><?= $rs->y_fiyat ?></td>
                                            <td><?= $rs->miktar ?></td>
                                            <td> <a href="<?=base_url()?>admin/urunler/resimekle/<?=$rs->id?>">
                                                <?php
                                                if( $rs->resim==NULL)
                                                {?>
                                                <span class="label label-sm label-warning">Resim Ekle</span>
                                                <?php
                                                }
                                                else
                                                {?>
                                                <img height="30" src="<?=base_url()?>uploads/<?=$rs->resim?>">
                                                <?php
                                                }
                                                ?>
                                                    </a>
                                            </td>

                                            <td>
                                              <a href="<?=base_url()?>admin/urunler/resim_galeri_ekle/<?=$rs->id?>">
                                                        <img src="<?=base_url()?>assets/admin/images/galeri.png" style="max-height: 35px;"> </a>
                                            </td>

                                            <td>
                                                <div class="hidden-sm hidden-xs action-buttons">
                                                    <a class="blue" href="<?=base_url()?>home/urun_detayi/<?=$rs->id?>">
                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                    </a>

                                                    <a class="green" href="<?=base_url()?>admin/urunler/edit/<?=$rs->id?>">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>

                                                    <a class="red" href="<?=base_url()?>admin/urunler/delete/<?=$rs->id?>">
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
                                                                <a href="<?=base_url()?>admin/urunler/preview/<?=$rs->id?>" class="tooltip-info" data-rel="tooltip"
                                                                    title="" data-original-title="Göster">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="<?=base_url()?>admin/urunler/edit/<?=$rs->id?>" class="tooltip-success" data-rel="tooltip"
                                                                    title="" data-original-title="Düzenle">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="<?=base_url()?>admin/urunler/delete/<?=$rs->id?>" onclick="return confirm('Silinecek!! Emin misin?');" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Sil">
																				<span class="red">
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

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->





                </div><!-- /.widget-box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- PAGE CONTENT ENDS -->
    </div>
</div><!-- /.main-content -->
