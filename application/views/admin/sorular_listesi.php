<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?=base_url()?>admin/home">Anasayfa</a>
                </li>
                <li class="active"><a href="<?=base_url()?>admin/iletisim">Sıkça Sorulan Sorular</a>
                </li>
                <li><a href="<?=base_url()?>admin/sorular/ekle"><button type="button" class="btn btn-yellow" style="margin-bottom: 6px">Soru ve Cevap Ekle</button></a></li>
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
                        <h3 class="header smaller lighter blue">Sıkça Sorulan Sorular</h3>
                        <div class="clearfix"></div>
                        <div class="table-header"></div>
                        <div>
                            <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="dataTables_length" id="dynamic-table_length"></div>
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
                                            <th>Soru Numarası</th>
                                            <th class="sorting">Soru</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach($sorular as $rs) {
                                        ?>
                                        <tr role="row" class="odd selected">
                                            <td><?= $rs->id ?></td>
                                            <td><?= $rs->soru ?></td>
                                            <td>
                                                <div class="hidden-sm hidden-xs action-buttons">
                                                    <a class="green" href="<?=base_url()?>admin/sorular/edit/<?=$rs->id?>">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>
                                                    <a class="red"
                                                       href="<?= base_url() ?>admin/sorular/delete/<?= $rs->id ?>">
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
                                                                <a href="<?=base_url()?>admin/sorular/edit/<?=$rs->id?>" class="tooltip-success" data-rel="tooltip"
                                                                    title="" data-original-title="Düzenle">
                                                                    <span class="green">
                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
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