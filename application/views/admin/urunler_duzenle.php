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
                    <li class="active"><a href="<?= base_url()?>admin/urunler"> Ürün Yönetimi </li></a>
                    <a href="<?=base_url()?>home/urun_detayi/<?=$urun[0]->id?>">
                        <button type="button" class="btn btn-default btn-sm">Ürünü Mağazada Görüntüle</button>
                    </a>
                </ul><!-- /.breadcrumb -->

                <div class="page-header">
                    <h1>Ürün Düzenleme</h1>
                </div>

            </div>
            <form role="form" action="<?= base_url()?>admin/urunler/guncellekaydet/<?=$urun[0]->id?>" method="post">
                <div class="form-group" >
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Adı  </label>
                    <div class="col-sm-9">
                        <input type="text" name="adi" value="<?=$urun[0]->adi?>" id="form-field-1-1" class="form-control" required>
                    </div>
                </div>
                <div class="space-4"></div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right"  for="form-field-select-1"> Kategoriler</label>
                    <div class="col-sm-9">
                        <select class="form-control countries" name="katId" required>
                            <option value="<?=$urun[0]->katId?>"><?=$urun[0]->katAdi?></option>
                        </select>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right"  for="form-field-select-1"> Alt Kategoriler</label>
                    <div class="col-sm-9">
                        <select class="form-control states" name="altKatId" required>
                            <option value="<?=$urun[0]->altKatId?>"><?=$urun[0]->altKatAdi?></option>
                        </select>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Eski Fiyatı </label>
                    <div class="col-sm-9">
                        <input type="text" name="e_fiyat" value="<?=$urun[0]->e_fiyat?>" id="form-field-1-1"  class="form-control">
                    </div>
                </div>

                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Yeni Fiyat </label>

                    <div class="col-sm-9">
                        <input type="text" name="y_fiyat" value="<?=$urun[0]->y_fiyat?>" id="form-field-1-1" class="form-control" required>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Ürün Stoğu </label>

                    <div class="col-sm-9">
                        <input type="text" name="miktar" value="<?=$urun[0]->miktar?>" id="form-field-1-1" class="form-control" required>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Keywords </label>

                    <div class="col-sm-9">
                        <input type="text" name="keywords" value="<?=$urun[0]->keywords?>" id="form-field-1-1" class="form-control">
                    </div>
                </div>

                <div class="space-4"></div>
                <div>
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Ürün Kısa Açıklaması</label>
                    <div class="col-sm-9">
                        <textarea name="aciklama" class="form-control" rows="3"><?=$urun[0]->aciklama?></textarea>
                    </div>

                </div>
                <br>
                <br>
                <div class="space-4"></div>
                <div>
                    <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Ürün Uzun İçerik Açıklaması </label>
                    <div class="col-sm-9">
                        <textarea name="uzunaciklama" id="uzunaciklama" class="form-control" rows="3"><?=$urun[0]->uzunaciklama?></textarea>
                    </div>
                    <script>
                        CKEDITOR.replace('uzunaciklama');
                    </script>

                </div>




        </div>


        <button type="submit" class="btn btn-lg btn-success" style="margin-left: 10px;margin-top: 10px">Güncelle</button>
        </form>

    </div><!-- /.main-content -->
    <script type="text/javascript">

        $(document).ready(function(){

            /*Get the country list */

            $.ajax({
                type: "GET",
                url: "<?php echo base_url();?>admin/urunler/get_countries",
                data:{id:$(this).val()},
                beforeSend :function(){
                    $('.countries').find("option:eq(0)").html("Lütfen Bekleyiniz..");
                },
                success: function (data) {
                    /*get response as json */
                    $('.countries').find("option:eq(0)").html("Kategori Seçiniz");
                    var obj=jQuery.parseJSON(data);
                    $(obj).each(function()
                    {
                        var option = $('<option />');
                        option.attr('value', this.value).text(this.label);
                        $('.countries').append(option);
                    });

                    /*ends */

                }
            });



            /*Get the state list */


            $('.countries').change(function(){
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>admin/urunler/get_states",
                    data:{id:$(this).val()},
                    beforeSend :function(){
                        $(".states option:gt(0)").remove();
                        $('.states').find("option:eq(0)").html("Lütfen Bekleyiniz..");

                    },
                    success: function (data) {
                        /*get response as json */
                        $('.states').find("option:eq(0)").html("Alt Kategori Seçiniz");
                        var obj=jQuery.parseJSON(data);
                        $(obj).each(function()
                        {
                            var option = $('<option />');
                            option.attr('value', this.value).text(this.label);
                            $('.states').append(option);
                        });

                        /*ends */

                    }
                });
            });
        });
    </script>
<?php
$this->load->view('admin/_footer');
?>