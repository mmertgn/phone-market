<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?=base_url()?>admin/home">Anasayfa</a>
                </li>
                <li class="active"><a href="<?=base_url()?>admin/kampanya">Kampanyalar</a>
                </li>
                <li><a href="<?=base_url()?>admin/kampanya/ekle"><button type="button" class="btn btn-yellow" style="margin-bottom: 6px">Kampanyalı Ürün Ekle</button></a></li>
                <li><a href="<?=base_url()?>admin/kampanya/firsatekle"><button type="button" class="btn btn-yellow" style="margin-bottom: 6px">Günün Fırsatı Ekle</button></a></li>
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
                <div class="ace-settings-box clearfix" id="ace-settings-box"></div><!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->
            <div class="page-header">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="header smaller lighter blue">Ürün Kampanyaları</h3>
                        <div class="clearfix"></div>
                        <div class="table-header"></div>
                        <div>
                            <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="dataTables_length" id="dynamic-table_length">
                                            <h4 style="font-weight: bolder; color: blue">Ana sayfada Gözükür</h4>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div id="dynamic-table_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dynamic-table"></label>
                                        </div>
                                    </div>
                                </div>
                                <table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
                                    <thead>
                                        <tr role="row">
                                            <th>Kampanya Resmi</th>
                                            <th class="sorting">Ürün Adı</th>
                                            <th>Fiyat</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach($kampanya as $rs) {
                                        ?>
                                        <tr role="row" class="odd selected">
                                            <td>
                                                <?php
                                                    if( $rs->firsat_resmi==NULL)
                                                    {?>
                                                        <i class="ace-icon fa fa-battery-empty bigger-130"></i>
                                                        <?php
                                                    }
                                                    else
                                                    {?>
                                                        <img height="30" src="<?=base_url()?>kampanyauploads/<?=$rs->firsat_resmi?>">
                                                        <?php
                                                    }
                                                    ?>
                                            </td>
                                            <td><?= $rs->urunadi ?></td>
                                            <td><?= $rs->y_fiyat ?></td>
                                            <td>
                                                <div class="hidden-sm hidden-xs action-buttons">
                                                    <a class="red" href="<?=base_url()?>admin/kampanya/sil/<?=$rs->id?>/<?= $rs->firsat_resmi ?>">
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
                                                                <a href="<?=base_url()?>admin/kampanya/sil/<?=$rs->id?>" class="tooltip-success" data-rel="tooltip"
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

        <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
                <div class="ace-settings-box clearfix" id="ace-settings-box"></div><!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->
            <div class="page-header">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="header smaller lighter blue">Günün Fırsatları</h3>
                        <div class="clearfix"></div>
                        <div class="table-header"></div>
                        <div>
                            <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="dataTables_length" id="dynamic-table_length">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div id="dynamic-table_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dynamic-table"></label>
                                        </div>
                                    </div>
                                </div>
                                <table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting">Ürün Adı</th>
                                            <th>Fiyat</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach($firsat as $rs) {
                                        ?>
                                        <tr role="row" class="odd selected">
                                            <td><?= $rs->urunadi ?></td>
                                            <td><?= $rs->y_fiyat ?></td>
                                            <td>
                                                <div class="hidden-sm hidden-xs action-buttons">
                                                    <a class="red" href="<?=base_url()?>admin/kampanya/firsatsil/<?=$rs->id?>">
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
                                                                <a href="<?=base_url()?>admin/kampanya/firsatsil/<?=$rs->id?>" class="tooltip-success" data-rel="tooltip"
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