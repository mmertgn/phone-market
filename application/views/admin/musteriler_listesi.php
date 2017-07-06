<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>

                <li class="active"><a href="<?=base_url()?>admin/musteriler">Müşteriler</a></li>

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
                        <h3 class="header smaller lighter blue">Müşteriler</h3>

                        <div class="clearfix">

                        </div>
                        <div class="table-header">

                        </div>

                        <!-- div.table-responsive -->

                        <!-- div.dataTables_borderWrap -->
                        <div>
                        <table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">
                                            <label class="pos-rel">
                                                <input type="checkbox" class="ace">
                                                <span class="lbl"></span>
                                            </label>
                                        </th><th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">Adı Soyadı</th>
                                        <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending">Email</th>
                                        <th class=" sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">Telefon Numarası</th>
                                        <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">Adres</th>

                                    </thead>

                                    <tbody>
                                    <?php
                                    foreach($veri as $rs) {
                                        ?>

                                        <tr role="row" class="odd selected">
                                            <td class="center">
                                                <label class="pos-rel">
                                                    <input type="checkbox" class="ace">
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>
                                            <td><?= $rs->adsoy ?></td>
                                            <td><?= $rs->email ?></td>
                                            <td><?= $rs->yetki ?></td>
                                            <td><?= $rs->tarih ?></td>

                                            <td class="hidden-480">
                                                <span class="label label-sm label-warning"><?= $rs->durum ?></span>
                                            </td>

                                            <td>
                                                <div class="hidden-sm hidden-xs action-buttons">
                                                    <a class="blue" href="<?=base_url()?>admin/musteriler/preview/<?=$rs->id?>">
                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
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
                                                                <a href="<?=base_url()?>admin/kullanicilar/preview/<?=$rs->id?>">" class="tooltip-info" data-rel="tooltip"
                                                                    title="" data-original-title="Göster">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

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
                                </table><div class="row"><div class="col-xs-6"><div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite"><span class="select-info"><span class="select-item"></span><span class="select-item"></span><span class="select-item"></span></span></div></div><div class="col-xs-6"><div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dynamic-table" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="dynamic-table" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="dynamic-table" tabindex="0"><a href="#">3</a></li><li class="paginate_button next" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_next"><a href="#">Next</a></li></ul></div></div></div></div>
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