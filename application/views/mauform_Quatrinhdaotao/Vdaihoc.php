 <div class="totnghiepdh">
    {if empty($data['daihoc'])}
     <fieldset>
        <legend class="box-header text-danger namtn" data-info="1" style="margin-top: 0px">Năm tốt nghiệp Đại học 1</legend>
        <div class="col-sm-12">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt-namtn"><b> Năm tốt nghiệp Đại học 1</b></span></label>
                    <select name="namtn_dh[]" class="js-example-basic-multiple" >
                        <option disabled="" selected="" class="op-namtn">---Năm tốt nghiệp Đại học 1---</option>
                        {for $i = 1900 to 2050}
                        <option value="{$i}">{$i}</option>
                        {/for}
                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b> Năm cấp bằng</b></span></label>
                    <select name="namcapbang_dh[]" class="js-example-basic-multiple" >
                        <option disabled="" selected="">---Năm cấp bằng---</option>
                        {for $i = 1900 to 2050}
                        <option value="{$i}">{$i}</option>
                        {/for}
                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b> Ghi trên bằng</b></span></label>
                    <input type="text" class="form-control" name="ghitrenbangdh[]" >
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b> Ngành/ chuyên ngành</b></span></label>
                    <select name="nganhdh[]" class="js-example-basic-multiple" >
                        <option disabled="" selected="">---Chọn Ngành/ chuyên ngành---</option>
                        {foreach $danhmuc['tbl_nganh'] as $key => $val}
                        <option value="{$val.id_nganh}">{$val.nganh}</option>
                        {/foreach}
                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b> Tốt nghiệp Loại</b></span></label>
                    <input type="text" class="form-control" name="totnghieploaidh[]">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b>Nơi tham gia học tập</b></span></label>
                    <input type="text" class="form-control" name="tgtght_dh[]" >
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b>TG Công nhận bằng</b></span></label>
                    <input  type="text" class="form-control datepicker" id="ngaythu" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="tgcnbang_dh[]" autocomplete="off" >
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b>Nước học tập</b></span></label>
                    <input type="text" class="form-control" name="nuochoctapdh[]">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b>Ngôn ngữ sử dụng</b></span></label>
                    <input type="text" class="form-control" name="nnsd_dh[]">
                </div>
            </div>
        </div>
    </fieldset>
    {/if}
    {if !empty($data['daihoc'])}
    {foreach $data['daihoc'] as $key => $val}
    <fieldset>
        <legend class="box-header text-danger namtn" data-info="1" style="margin-top: 0px">Năm tốt nghiệp Đại học {$key+1}  &nbsp;&nbsp;&nbsp; {if $key!=0}<button type="submit" class="btn btn-xs btn-warning " name="xoadaihoc" data-key="1" value="{$val.id}" onclick="return confirm('Bạn có chắc chắn muốn xóa đại học không?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa đại học này</button>{/if} </legend>
        <div class="col-sm-12">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt-namtn"><b> Năm tốt nghiệp Đại học {$key+1}</b></span></label>
                    <select name="namtn_dh[]" class="js-example-basic-multiple" >
                        <option disabled="" selected="" class="op-namtn">---Năm tốt nghiệp Đại học 1---</option>
                        {for $i = 1900 to 2050}
                        <option value="{$i}" {if $val.namtotnghiep==$i}selected{/if}>{$i}</option>
                        {/for}
                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b> Năm cấp bằng</b></span></label>
                    <select name="namcapbang_dh[]" class="js-example-basic-multiple" >
                        <option disabled="" selected="">---Năm cấp bằng---</option>
                        {for $i = 1900 to 2050}
                        <option value="{$i}" {if $val.namcapbang==$i}selected{/if}>{$i}</option>
                        {/for}
                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b> Ghi trên bằng</b></span></label>
                    <input type="text" class="form-control" name="ghitrenbangdh[]" value="{$val.ghitrenbang}">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b> Ngành/ chuyên ngành</b></span></label>
                    <select name="nganhdh[]" class="js-example-basic-multiple" >
                        <option disabled="" selected="">---Chọn Ngành/ chuyên ngành---</option>
                        {foreach $danhmuc['tbl_nganh'] as $key => $v}
                        <option value="{$v.id_nganh}" {if $val.id_nganh  ==$v.id_nganh}selected{/if}>{$v.nganh}</option>
                        {/foreach}
                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b> Tốt nghiệp Loại</b></span></label>
                    <input type="text" class="form-control" name="totnghieploaidh[]" value="{$val.totnghieploai}">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b>Nơi tham gia học tập</b></span></label>
                    <input type="text" class="form-control" name="tgtght_dh[]" value="{$val.noithamgia_hoctap}">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b>TG Công nhận bằng</b></span></label>
                    <input  type="text" class="form-control datepicker" id="ngaythu" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="tgcnbang_dh[]" autocomplete="off" value="{$val.tgcongnhanbang}">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b>Nước học tập</b></span></label>
                    <input type="text" class="form-control" name="nuochoctapdh[]" value="{$val.nuochoctap}">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b>Ngôn ngữ sử dụng</b></span></label>
                    <input type="text" class="form-control" name="nnsd_dh[]" value="{$val.nuochoctap}">
                </div>
            </div>
        </div>
    </fieldset>
    {/foreach}
    {/if}
</div>
<div style="border-bottom: 1px solid #ccc;">
    <br>
    <button type="button" class="btn btn-primary" name="themnamdh"><i class="fa fa-plus"></i> Thêm năm tốt nghiệp đại học</button>
    <br><br>
</div>
