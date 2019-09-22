 <div class="col-sm-12">
    <div class="col-sm-4">
        <div class="form-group">
            <label for=""><span class="title-qtdt"><b> Năm tốt nghiệp Tiến sỹ</b></span></label>
            <select name="namtn_ts" class="js-example-basic-multiple" >
                <option disabled="" selected="">---Năm tốt nghiệp Tiến sỹ---</option>
                {for $i = 1900 to 2050}
                <option value="{$i}" {if !empty($data['tiensi']) && $data['tiensi']['namtotnghiep'] == $i}selected{/if}>{$i}</option>
                {/for}
            </select>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label for=""><span class="title-qtdt"><b> Năm cấp bằng</b></span></label>
            <select name="namcapbang_ts" class="js-example-basic-multiple" >
                <option disabled="" selected="">---Năm cấp bằng---</option>
                {for $i = 1900 to 2050}
                <option value="{$i}" {if !empty($data['tiensi']) && $data['tiensi']['namcapbang'] == $i}selected{/if}>{$i}</option>
                {/for}
            </select>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label for=""><span class="title-qtdt"><b> Ghi trên bằng</b></span></label>
            <input type="text" class="form-control" name="ghitrenbang_ts" value="{if !empty($data['tiensi'])}{$data['tiensi']['ghitrenbang']}{/if}">
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label for=""><span class="title-qtdt"><b> Ngành/ chuyên ngành</b></span></label>
            <select name="nganh_ts" class="js-example-basic-multiple" >
                <option disabled="" selected="">---Chọn Ngành/ chuyên ngành---</option>
                {foreach $danhmuc['tbl_nganh'] as $key => $val}
                <option value="{$val.id_nganh}" {if !empty($data['tiensi']) && $data['tiensi']['id_nganh'] == $val.id_nganh}selected{/if}>{$val.nganh}</option>
                {/foreach}
            </select>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label for=""><span class="title-qtdt"><b>Nơi tham gia học tập</b></span></label>
            <input type="text" class="form-control" name="noitghoctap_ts" value="{if !empty($data['tiensi'])}{$data['tiensi']['noithamgia_hoctap']}{/if}">
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label for=""><span class="title-qtdt"><b>TG Công nhận bằng</b></span></label>
            <input  type="text" class="form-control datepicker" id="ngaythu" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="tgcongnhanbang_ts" autocomplete="off" value="{if !empty($data['tiensi'])}{$data['tiensi']['tgcongnhanbang']}{/if}">
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label for=""><span class="title-qtdt"><b>Nước học tập</b></span></label>
            <input type="text" class="form-control" name="nuochoctap_ts" value="{if !empty($data['tiensi'])}{$data['tiensi']['nuochoctap']}{/if}">
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label for=""><span class="title-qtdt"><b>Ngôn ngữ sử dụng</b></span></label>
            <input type="text" class="form-control" name="ngonngu_ts" value="{if !empty($data['tiensi'])}{$data['tiensi']['ngonngu_sudung']}{/if}">
        </div>
    </div>
</div>