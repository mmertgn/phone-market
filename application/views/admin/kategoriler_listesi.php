<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?=base_url()?>admin/home">Anasayfa</a>
                </li>
                <li class="active"><a href="<?=base_url()?>admin/kategoriler">Kategoriler</a>
                </li>
                <li><a href="<?=base_url()?>admin/kategoriler/ekle"><button type="button" class="btn btn-yellow" style="margin-bottom: 6px">Kategori Ekle</button></a></li>
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
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="header smaller lighter blue">Kategoriler</h3>
                        <div class="clearfix"></div>
                        <div class="table-header">
                            <p>Kategorilerin sağındaki mavi buton ile alt kategoriler ekleyebilirsiniz!</p>
                        </div>
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
                                            <th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">
                                                <label class="pos-rel">
                                                    <input type="checkbox" class="ace">
                                                    <span class="lbl"></span>
                                                </label>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1">Kategori Adı</th>
                                            <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1">Kategori Açıklaması</th>
                                            <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1">Keywords</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach($kategoriler as $rs) {
                                        ?>
                                        <tr role="row" class="odd selected">
                                            <td class="center">
                                                <label class="pos-rel">
                                                    <input type="checkbox" class="ace">
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>
                                            <td><?= $rs->kat_adi ?></td>
                                            <td><?= $rs->kat_aciklama ?></td>
                                            <td><?= $rs->kat_keywords ?></td>
                                            <td>
                                                <div class="hidden-sm hidden-xs action-buttons">
                                                    <a class="blue" href="<?=base_url()?>admin/kategoriler/altkatekle/<?=$rs->id?>">
                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                    </a>
                                                    <a class="green" href="<?=base_url()?>admin/kategoriler/edit/<?=$rs->id?>">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>
                                                    <a class="red" href="<?=base_url()?>admin/kategoriler/delete/<?=$rs->id?>">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>
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
</div>