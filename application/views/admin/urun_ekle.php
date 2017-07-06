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
                </ul><!-- /.breadcrumb -->

                <div class="page-header">
                    <h1>
                        Ürün Ekleme
                    </h1>
                </div>


            </div>
            <form role="form" action="<?= base_url()?>admin/urunler/eklekaydet" method="post" >
                <div class="form-group" >
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Ürün Adı  </label>
                    <div class="col-sm-9">
                        <input type="text" name="adi" id="form-field-1-1" class="form-control" required>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Kategoriler</label>
                    <div class="col-sm-9">
                        <select class="form-control countries" name="katId">
                                <option value="">--Kategori Seçiniz--</option>
                        </select>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Alt Kategoriler</label>
                    <div class="col-sm-9">
                        <select class="form-control states" name="altKatId">
                            <option value="">--Alt Kategori Seçiniz--</option>
                        </select>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Ürün Stok Sayısı</label>
                    <div class="col-sm-9">
                        <input type="text" name="miktar" id="form-field-1-1" class="form-control" required>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Ürün Eski Fiyatı </label>
                    <div class="col-sm-9">
                        <input type="text" name="e_fiyat" id="form-field-1-1" class="form-control" required>
                    </div>
                </div>

                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Ürün Yeni Fiyatı </label>

                    <div class="col-sm-9">
                        <input type="text" name="y_fiyat" id="form-field-1-1" class="form-control">
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Keywords </label>

                    <div class="col-sm-9">
                        <input type="text" name="keywords" id="form-field-1-1" class="form-control">
                    </div>
                </div>
                <div class="space-4"></div>
                <div>
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Ürün Kısa Açıklaması</label>
                    <div class="col-sm-9">
                        <textarea name="aciklama" class="form-control" rows="3" required></textarea>
                    </div>
                </div>
                <br>
                <br>
                <div class="space-4"></div>
                <div>
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Ürün Uzun İçerik Açıklaması </label>
                    <div class="col-sm-9">
                        <textarea name="uzunaciklama" id="detay"  class="form-control" rows="3" required></textarea>
                    </div>
                    <script>
                        CKEDITOR.replace('uzunaciklama');
                    </script>

                </div>

              

</br>




        <button type="submit" class="btn btn-success" style="margin-left: 10px;margin-top: 10px">KAYDET</button>
        </form>
            </div>

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