
 <div class="container fixdisplay">
    <div class="panel panel-default">
        <div class="panel-heading text-left">
            <h5><b>Quá trình đào tạo</b></h5></div>
            <div class="panel-body">
                <form method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Chuyên môn đào tạo</label>
                                    <select name="chuyenmondt" class="js-example-basic-multiple" required="">
                                        <option disabled="" selected="">---Chọn môn đào tạo---</option>
                                        {foreach $danhmuc['tbl_chuyenmondaotao'] as $key => $val}
                                            <option value="{$val.id_chuyen_mon}" {if $canbo['id_chuyen_mon'] == $val.id_chuyen_mon}selected{/if}>{$val.chuyen_mon}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <fieldset>
                            <legend class="box-header text-danger" style="margin-top: 0px">Năm phong PGS</legend>
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""><span class="title-qtdt"><b> Năm phong PGS</b></span></label>
                                        <select name="chuyenmondt" class="js-example-basic-multiple" >
                                            <option disabled="" selected="">---Năm phong PGS---</option>
                                            {for $i = 1990 to 2050}
                                                <option value="{$i}">{$i}</option>
                                            {/for}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""><span class="title-qtdt"><b> Ngành/ chuyên ngành</b></span></label>
                                        <select name="chuyenmondt" class="js-example-basic-multiple" >
                                            <option disabled="" selected="">---Chọn Ngành/ chuyên ngành---</option>
                                            {foreach $danhmuc['tbl_nganh'] as $key => $val}
                                                <option value="{$val.id_nganh}">{$val.nganh}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <br>

                        <fieldset>
                            <legend class="box-header text-danger" style="margin-top: 0px">Năm tốt nghiệp Tiến sỹ</legend>
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""><span class="title-qtdt"><b> Năm tốt nghiệp Tiến sỹ</b></span></label>
                                        <select name="chuyenmondt" class="js-example-basic-multiple" >
                                            <option disabled="" selected="">---Năm tốt nghiệp Tiến sỹ---</option>
                                            {for $i = 1990 to 2050}
                                                <option value="{$i}">{$i}</option>
                                            {/for}
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""><span class="title-qtdt"><b> Năm cấp bằng</b></span></label>
                                        <select name="chuyenmondt" class="js-example-basic-multiple" >
                                            <option disabled="" selected="">---Năm cấp bằng---</option>
                                            {for $i = 1990 to 2050}
                                                <option value="{$i}">{$i}</option>
                                            {/for}
                                        </select>
                                    </div>
                                </div>

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""><span class="title-qtdt"><b> Ghi trên bằng</b></span></label>
                                        <input type="text" class="form-control" required="" >
                                    </div>
                                </div>

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""><span class="title-qtdt"><b> Ngành/ chuyên ngành</b></span></label>
                                        <select name="chuyenmondt" class="js-example-basic-multiple" >
                                            <option disabled="" selected="">---Chọn Ngành/ chuyên ngành---</option>
                                            {foreach $danhmuc['tbl_nganh'] as $key => $val}
                                                <option value="{$val.id_nganh}">{$val.nganh}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""><span class="title-qtdt"><b>Nơi tham gia học tập</b></span></label>
                                        <input type="text" class="form-control" required="" >
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""><span class="title-qtdt"><b>TG Công nhận bằng</b></span></label>
                                        <input  type="text" class="form-control datepicker" id="ngaythu" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="ngaythu[]" autocomplete="off" >
                                    </div>
                                </div>

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""><span class="title-qtdt"><b>Nước học tập</b></span></label>
                                        <input type="text" class="form-control" required="" >
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""><span class="title-qtdt"><b>Ngôn ngữ sử dụng</b></span></label>
                                        <input type="text" class="form-control" required="" >
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <div id="totnghiepts">
                            <fieldset>
                                <legend class="box-header text-danger" style="margin-top: 0px">Năm tốt nghiệp Thạc sỹ 1</legend>
                                <div class="col-sm-12">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""><span class="title-qtdt-ntnts"><b> Năm tốt nghiệp Thạc sỹ 1</b></span></label>
                                            <select name="chuyenmondt" class="js-example-basic-multiple" >
                                                <option disabled="" selected="" class="namtnts">---Năm tốt nghiệp Thạc sỹ 1---</option>
                                                {for $i = 1990 to 2050}
                                                    <option value="{$i}">{$i}</option>
                                                {/for}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""><span class="title-qtdt"><b> Năm cấp bằng</b></span></label>
                                            <select name="chuyenmondt" class="js-example-basic-multiple" >
                                                <option disabled="" selected="">---Năm phong PGS---</option>
                                                {for $i = 1990 to 2050}
                                                    <option value="{$i}">{$i}</option>
                                                {/for}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""><span class="title-qtdt"><b> Ghi trên bằng</b></span></label>
                                            <input type="text" class="form-control" required="" >
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""><span class="title-qtdt"><b> Ngành/ chuyên ngành</b></span></label>
                                            <select name="chuyenmondt" class="js-example-basic-multiple" >
                                                <option disabled="" selected="">---Chọn Ngành/ chuyên ngành---</option>
                                                {foreach $danhmuc['tbl_nganh'] as $key => $val}
                                                    <option value="{$val.id_nganh}">{$val.nganh}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""><span class="title-qtdt"><b>Nơi tham gia học tập</b></span></label>
                                            <input type="text" class="form-control" required="" >
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""><span class="title-qtdt"><b>TG Công nhận bằng</b></span></label>
                                             <input  type="text" class="form-control datepicker" id="ngaythu" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="ngaythu[]" autocomplete="off" >
                                        </div>
                                    </div>

                                     <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""><span class="title-qtdt"><b>Nước học tập</b></span></label>
                                            <input type="text" class="form-control" required="" >
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""><span class="title-qtdt"><b>Ngôn ngữ sử dụng</b></span></label>
                                            <input type="text" class="form-control" required="" >
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="totnghiepts">
                            
                        </div>
                        <div class="col-md-12">
                            <br>
                            <button type="button" class="btn btn-info" name="themnamts"><i class="fa fa-plus"></i> Thêm năm tốt nghiệp thạc sĩ</button>
                        </div>

                        <div id="totnghiepdh">

                            <fieldset>
                                <legend class="box-header text-danger namtn" data-info="1" style="margin-top: 0px">Năm tốt nghiệp Đại học 1  &nbsp; </legend>
                                <div class="col-sm-12">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""><span class="title-qtdt-namtn"><b> Năm tốt nghiệp Đại học 1</b></span></label>
                                            <select name="chuyenmondt" class="js-example-basic-multiple" >
                                                <option disabled="" selected="" class="op-namtn">---Năm tốt nghiệp Đại học 1---</option>
                                                {for $i = 1990 to 2050}
                                                    <option value="{$i}">{$i}</option>
                                                {/for}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""><span class="title-qtdt"><b> Năm cấp bằng</b></span></label>
                                            <select name="chuyenmondt" class="js-example-basic-multiple" >
                                                <option disabled="" selected="">---Năm cấp bằng---</option>
                                                {for $i = 1990 to 2050}
                                                    <option value="{$i}">{$i}</option>
                                                {/for}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""><span class="title-qtdt"><b> Ghi trên bằng</b></span></label>
                                            <input type="text" class="form-control" required="" >
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""><span class="title-qtdt"><b> Ngành/ chuyên ngành</b></span></label>
                                            <select name="chuyenmondt" class="js-example-basic-multiple" >
                                                <option disabled="" selected="">---Chọn Ngành/ chuyên ngành---</option>
                                                {foreach $danhmuc['tbl_nganh'] as $key => $val}
                                                    <option value="{$val.id_nganh}">{$val.nganh}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""><span class="title-qtdt"><b> Tốt nghiệp Loại</b></span></label>
                                            <input type="text" class="form-control" required="" >
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""><span class="title-qtdt"><b>Nơi tham gia học tập</b></span></label>
                                            <input type="text" class="form-control" required="" >
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""><span class="title-qtdt"><b>TG Công nhận bằng</b></span></label>
                                             <input  type="text" class="form-control datepicker" id="ngaythu" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="ngaythu[]" autocomplete="off" >
                                        </div>
                                    </div>

                                     <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""><span class="title-qtdt"><b>Nước học tập</b></span></label>
                                            <input type="text" class="form-control" required="" >
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""><span class="title-qtdt"><b>Ngôn ngữ sử dụng</b></span></label>
                                            <input type="text" class="form-control" required="" >
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="totnghiepdh">
                            
                        </div>
                        <div class="col-md-12">
                            <br>
                            <button type="button" class="btn btn-primary" name="themnamtn"><i class="fa fa-plus"></i> Thêm năm tốt nghiệp đại học</button>
                        </div>
                        <hr>
                        <br>
                        <fieldset>
                            <legend class="box-header text-danger" style="margin-top: 0px">Năm tốt nghiệp Cao đẳng</legend> 
                            <div class="col-sm-12">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""><span class="title-qtdt"><b> Năm tốt nghiệp Cao đẳng</b></span></label>
                                        <select name="chuyenmondt" class="js-example-basic-multiple" >
                                            <option disabled="" selected="">---Năm tốt nghiệp Cao đẳng---</option>
                                            {for $i = 1990 to 2050}
                                                <option value="{$i}">{$i}</option>
                                            {/for}
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""><span class="title-qtdt"><b> Ngành</b></span></label>
                                        <select name="chuyenmondt" class="js-example-basic-multiple" >
                                            <option disabled="" selected="">---Chọn Ngành---</option>
                                            {foreach $danhmuc['tbl_nganh'] as $key => $val}
                                                <option value="{$val.id_nganh}">{$val.nganh}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""><span class="title-qtdt"><b> Nơi cấp</b></span></label>
                                        <input type="text" class="form-control" required="" >
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        
                        <br>
                        <br>
                        <div class="col-md-12 text-center">
                            <button type="submit" name="submit" value="submit" class="btn btn-info btn-lg"><i class="fa fa-save"></i> Lưu thông tin</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    fieldset {
        padding: .35em .625em .75em;
        margin: 0 2px;
        border: 1px solid #ffa8a8;
        /*min-height: 250px;*/
    }
    legend{
        padding: 10px;
        border-bottom: 0px;
        margin-bottom: 0px;
    }
    .text-danger {
        color: #F44336;
        font-weight: 600;
        font-size: 17px;
    }
</style>
<script type="text/javascript">
    var namtn = $('#totnghiepdh').html();
    var namts = $('#totnghiepts').html();
    $(document).on('click','button[name="themnamtn"]', function(){
        stt = $('.totnghiepdh fieldset').length + 2;
        $('.totnghiepdh fieldset legend').attr('data-info',stt);
        $(this).attr('data-info', stt);
        stt = $(this).attr('data-info');
        $('.totnghiepdh').append(namtn);
        $(".totnghiepdh fieldset:last-child legend").text('Năm tốt nghiệp Đại học  '+stt);
        $(".totnghiepdh fieldset:last-child").find('.title-qtdt-namtn').text('Năm tốt nghiệp Đại học  '+stt);
        $(".totnghiepdh fieldset:last-child").find('.op-namtn').text('Năm tốt nghiệp Đại học  '+stt);
        thuvien();
    }); 
    $(document).on('click','button[name="themnamts"]', function(){
        

        stt = $('.totnghiepts fieldset').length + 2;
        $('.totnghiepts fieldset legend').attr('data-info',stt);
        $('.totnghiepts').append(namts);
        $(".totnghiepts fieldset:last-child legend").text('Năm tốt nghiệp Thạc sỹ  '+stt);
        $(".totnghiepts fieldset:last-child").find('.title-qtdt-ntnts').text('Năm tốt nghiệp Thạc sỹ  '+stt);
        $(".totnghiepts fieldset:last-child").find('.namtnts').text('Năm tốt nghiệp Thạc sỹ  '+stt);
        thuvien();
    }); 
    function thuvien(){
        $('.js-example-basic-multiple').select2();
        $('.datepicker').datepicker({
          format: 'dd/mm/yyyy',
              autoclose: true
          })
        $('.js-example-basic-single').select2();
    }
</script>
