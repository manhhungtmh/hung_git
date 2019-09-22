<div class="col-sm-12">
    <div class="col-sm-6">
        <div class="form-group">
            <label for=""><span class="title-qtdt"><b> Năm phong PGS</b></span></label>
            <select name="namtotnghiep_pgs" class="js-example-basic-multiple" >
                <option disabled="" selected="">---Năm phong PGS---</option>
                {for $i = 1900 to 2050}
                <option value="{$i}" {if !empty($data['pgs']) && $data['pgs']['namtotnghiep'] == $i}selected{/if}>{$i}</option>
                {/for}
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for=""><span class="title-qtdt"><b> Ngành/ chuyên ngành</b></span></label>
            <select name="nganh_pgs" class="js-example-basic-multiple" >
                <option disabled="" selected="">---Chọn Ngành/ chuyên ngành---</option>
                {foreach $danhmuc['tbl_nganh'] as $key => $val}
                <option value="{$val.id_nganh}" {if !empty($data['pgs']) && $data['pgs']['id_nganh'] == $val.id_nganh}selected{/if}>{$val.nganh}</option>
                {/foreach}
            </select>
        </div>
    </div>
</div>