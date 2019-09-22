<div class="panel-body" style="padding: 50px;">
    <form method="post">
        <div class="col-md-12 text-right">
             <h3 class="text-right" style="margin-bottom: 27px;font-size: 24px;font-family: auto;margin: 0">Cán bộ: <span style="border-bottom: 1px solid #0d738a;font-size:20px;color: #0246ab;text-transform: uppercase;">{$canbo.ho_ten}</span></h3>
        </div>
        <div class="row">
          <!--   <fieldset>
                  <legend class="box-header text-danger" style="margin-top: 0px">Chuyên môn đào tạo</legend>
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="form-group">
                             <select class="form-control js-example-basic-multiple" name="id_chuyen_mon">
                                <option selected disabled>---Chọn chuyên môn đào tạo---</option>
                                {foreach $danhmuc['tbl_chuyenmondaotao'] as $val}
                                    <option value="{$val.id_chuyen_mon}" {if $val.id_chuyen_mon == $canbo['id_chuyen_mon']}selected{/if}>{$val.chuyen_mon}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                </div>
             </fieldset> -->
                {foreach $danhmuc['tbl_namtn_chuyenmondaotao'] as $key => $val}
                    {if $val['view_hien'] != "thacsi" && $val['view_hien'] != "daihoc"}
                        <fieldset class="{$val['view_hien']}">
                            <legend class="box-header text-danger" style="margin-top: 0px"> {$val.ten_namcmdt}</legend>
                            {if $val['view_hien'] == "gs"}
                               <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for=""><span class="title-qtdt"><b> Năm phong GS</b></span></label>
                                                <select name="namtotnghiep_gs" class="js-example-basic-multiple" >
                                                    <option disabled="" selected="">---Năm phong PGS---</option>
                                                    {for $i = 1900 to 2050}
                                                    <option value="{$i}" {if !empty($data['gs']) && $data['gs']['namtotnghiep'] == $i}selected{/if}>{$i}</option>
                                                    {/for}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for=""><span class="title-qtdt"><b> Ngành/ chuyên ngành</b></span></label>
                                                <select name="nganh_gs" class="js-example-basic-multiple" >
                                                    <option disabled="" selected="">---Chọn Ngành/ chuyên ngành---</option>
                                                    {foreach $danhmuc['tbl_nganh'] as $key => $val}
                                                    <option value="{$val.id_nganh}" {if !empty($data['gs']) && $data['gs']['id_nganh'] == $val.id_nganh}selected{/if}>{$val.nganh}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>
                                    </div> 
                            {else}
                                {if $val['view_hien'] == "pgs"}
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
                                {else}
                                    {if $val['view_hien'] == "tiensi"}
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
                                                    <label for=""><span class="title-qtdt"><b>Thời gian Công nhận bằng</b></span></label>
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
                                        {else}
                                        {if $val['view_hien'] == "caodang"}
                                            <div class="col-sm-12">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for=""><span class="title-qtdt"><b> Năm tốt nghiệp Cao đẳng</b></span></label>
                                                        <select name="namtn_cd" class="js-example-basic-multiple" >
                                                            <option disabled="" selected="">---Năm tốt nghiệp Cao đẳng---</option>
                                                            {for $i = 1900 to 2050}
                                                            <option value="{$i}"  {if !empty($data['caodang']) && $data['caodang']['namtotnghiep'] == $i}selected{/if}>{$i}</option>
                                                            {/for}
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for=""><span class="title-qtdt"><b> Ngành</b></span></label>
                                                        <select name="nganh_cd" class="js-example-basic-multiple" >
                                                            <option disabled="" selected="">---Chọn Ngành---</option>
                                                            {foreach $danhmuc['tbl_nganh'] as $key => $val}
                                                            <option value="{$val.id_nganh}" {if !empty($data['caodang']) && $data['caodang']['id_nganh'] == $val.id_nganh}selected{/if}>{$val.nganh}</option>
                                                            {/foreach}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for=""><span class="title-qtdt"><b> Nơi cấp</b></span></label>
                                                        <input type="text" class="form-control" name="noicap_cd" value="{if !empty($data['caodang'])}{$data['caodang']['noicap']}{/if}">
                                                    </div>
                                                </div>
                                            </div>
                                        {/if}
                                    {/if}    
                                {/if}
                            {/if}
                        </fieldset>
                    {else}
                        {if $val['view_hien'] == "thacsi"}
                            <div class="totnghiepts">
                                {if empty($data['thacsi'])}
                                <fieldset>
                                    <legend class="box-header text-danger" style="margin-top: 0px">Năm tốt nghiệp Thạc sỹ 1</legend>
                                    <div class="col-sm-12">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for=""><span class="title-qtdt-ntnts"><b> Năm tốt nghiệp Thạc sỹ 1</b></span></label>
                                                <select name="namtnthacsi[]" class="js-example-basic-multiple" >
                                                    <option disabled="" selected="" class="namtnts">---Năm tốt nghiệp Thạc sỹ 1---</option>
                                                    {for $i = 1900 to 2050}
                                                    <option value="{$i}">{$i}</option>
                                                    {/for}
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for=""><span class="title-qtdt"><b> Năm cấp bằng</b></span></label>
                                                <select name="namcapbangthachsi[]" class="js-example-basic-multiple" >
                                                    <option disabled="" selected="">---Năm phong PGS---</option>
                                                    {for $i = 1900 to 2050}
                                                    <option value="{$i}">{$i}</option>
                                                    {/for}
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for=""><span class="title-qtdt"><b> Ghi trên bằng</b></span></label>
                                                <input type="text" class="form-control" name="ghitrenbangthacsi[]">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for=""><span class="title-qtdt"><b> Ngành/ chuyên ngành</b></span></label>
                                                <select name="nganhthacsi[]" class="js-example-basic-multiple" >
                                                    <option disabled="" selected="">---Chọn Ngành/ chuyên ngành---</option>
                                                    {foreach $danhmuc['tbl_nganh'] as $key => $val}
                                                    <option value="{$val.id_nganh}">{$val.nganh}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for=""><span class="title-qtdt"><b>Nơi tham gia học tập</b></span></label>
                                                <input type="text" class="form-control" name="noitght_thacsi[]">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for=""><span class="title-qtdt"><b>Thời gian Công nhận bằng</b></span></label>
                                                <input  type="text" class="form-control datepicker" id="ngaythu" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="tgcnbang_thachsi[]" autocomplete="off" >
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for=""><span class="title-qtdt"><b>Nước học tập</b></span></label>
                                                <input type="text" class="form-control" name="nuochoctapthacsi[]">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for=""><span class="title-qtdt"><b>Ngôn ngữ sử dụng</b></span></label>
                                                <input type="text" class="form-control" name="ngonnguthachsi[]">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                {/if}
                                {if !empty($data['thacsi'])}
                                {foreach $data['thacsi'] as $key => $val}
                                <fieldset>
                                    <legend class="box-header text-danger" style="margin-top: 0px">Năm tốt nghiệp Thạc sỹ {$key+1} &nbsp; &nbsp; &nbsp; {if $key !=0} <button type="submit" class="btn btn-xs btn-warning" name="xoathacsi" data-key="1" value="{$val.id}" onclick="return confirm('Bạn có chắc chắn muốn xóa thạc sĩ này không?');"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa đại học này</button>{/if}</legend>
                                    <div class="col-sm-12">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for=""><span class="title-qtdt-ntnts"><b> Năm tốt nghiệp Thạc sỹ {$key+1}</b></span></label>
                                                <select name="namtnthacsi[]" class="js-example-basic-multiple" >
                                                    <option disabled="" selected="" class="namtnts">---Năm tốt nghiệp Thạc sỹ 1---</option>
                                                    {for $i = 1900 to 2050}
                                                    <option value="{$i}" {if $val.namtotnghiep==$i}selected{/if}>{$i}</option>
                                                    {/for}
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for=""><span class="title-qtdt"><b> Năm cấp bằng</b></span></label>
                                                <select name="namcapbangthachsi[]" class="js-example-basic-multiple" >
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
                                                <input type="text" class="form-control" name="ghitrenbangthacsi[]" value="{$val.ghitrenbang}">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for=""><span class="title-qtdt"><b> Ngành/ chuyên ngành</b></span></label>
                                                <select name="nganhthacsi[]" class="js-example-basic-multiple" >
                                                    <option disabled="" selected="">---Chọn Ngành/ chuyên ngành---</option>
                                                    {foreach $danhmuc['tbl_nganh'] as $key => $v}
                                                    <option value="{$v.id_nganh}" {if $val.id_nganh==$v.id_nganh}selected{/if}>{$v.nganh}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for=""><span class="title-qtdt"><b>Nơi tham gia học tập</b></span></label>
                                                <input type="text" class="form-control" name="noitght_thacsi[]" value="{$val.noithamgia_hoctap}">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for=""><span class="title-qtdt"><b>Thời gian Công nhận bằng</b></span></label>
                                                <input  type="text" class="form-control datepicker" id="ngaythu" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="tgcnbang_thachsi[]" autocomplete="off" value="{$val.tgcongnhanbang}">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for=""><span class="title-qtdt"><b>Nước học tập</b></span></label>
                                                <input type="text" class="form-control" name="nuochoctapthacsi[]" value="{$val.nuochoctap}">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for=""><span class="title-qtdt"><b>Ngôn ngữ sử dụng</b></span></label>
                                                <input type="text" class="form-control" name="ngonnguthachsi[]" value="{$val.ngonngu_sudung}">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                {/foreach}
                                {/if}
                            </div>
                            <div style="border-bottom: 1px solid #ccc;">
                                <br>
                                <button type="button" class="btn btn-info" name="themnamts"><i class="fa fa-plus"></i> Thêm năm tốt nghiệp thạc sĩ</button>
                                <br><br>
                            </div>
                        {else}
                            {if $val['view_hien'] == "daihoc"}
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
                                                    <select name="nganhdh[]" class="js-example-basic-multiple">
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
                                                    <label for=""><span class="title-qtdt"><b>Thời gian Công nhận bằng</b></span></label>
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
                                                    <label for=""><span class="title-qtdt"><b>Thời gian Công nhận bằng</b></span></label>
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
                            {/if}
                        {/if}
                    {/if}

                {/foreach}
                <br>
                {if  $session['maquyen'] ==1}
                <div class="col-md-12 text-center">
                    <button class="btn btn-info btn-lg" type="submit" value="1" name="luuthongtin"><i class="fa fa-save"></i>&nbsp; Lưu thông tin</button>
                </div>
                {/if}
        </div>
    </form>
</div>
<div id="hidden" style="display: none;">
    <fieldset>
        <legend class="box-header text-danger" style="margin-top: 0px">Năm tốt nghiệp Thạc sỹ 1</legend>
        <div class="col-sm-12">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt-ntnts"><b> Năm tốt nghiệp Thạc sỹ 1</b></span></label>
                    <select name="namtnthacsi[]" class="js-example-basic-multiple1" >
                        <option disabled="" selected="" class="namtnts">---Năm tốt nghiệp Thạc sỹ 1---</option>
                        {for $i = 1900 to 2050}
                        <option value="{$i}">{$i}</option>
                        {/for}
                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b> Năm cấp bằng</b></span></label>
                    <select name="namcapbangthachsi[]" class="js-example-basic-multiple1" >
                        <option disabled="" selected="">---Năm phong PGS---</option>
                        {for $i = 1900 to 2050}
                        <option value="{$i}">{$i}</option>
                        {/for}
                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b> Ghi trên bằng</b></span></label>
                    <input type="text" class="form-control" name="ghitrenbangthacsi[]">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b> Ngành/ chuyên ngành</b></span></label>
                    <select name="nganhthacsi[]" class="js-example-basic-multiple1" >
                        <option disabled="" selected="">---Chọn Ngành/ chuyên ngành---</option>
                        {foreach $danhmuc['tbl_nganh'] as $key => $val}
                        <option value="{$val.id_nganh}">{$val.nganh}</option>
                        {/foreach}
                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b>Nơi tham gia học tập</b></span></label>
                    <input type="text" class="form-control" name="noitght_thacsi[]">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b>Thời gian Công nhận bằng</b></span></label>
                    <input  type="text" class="form-control datepicker" id="ngaythu" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="tgcnbang_thachsi[]" autocomplete="off" >
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b>Nước học tập</b></span></label>
                    <input type="text" class="form-control" name="nuochoctapthacsi[]">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt"><b>Ngôn ngữ sử dụng</b></span></label>
                    <input type="text" class="form-control" name="ngonnguthachsi[]">
                </div>
            </div>
        </div>
    </fieldset>
</div>
<div id="totnghiepdh" style="display: none;">
    <fieldset>
        <legend class="box-header text-danger namtn" data-info="1" style="margin-top: 0px">Năm tốt nghiệp Đại học 1  &nbsp; </legend>
        <div class="col-sm-12">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for=""><span class="title-qtdt-namtn"><b> Năm tốt nghiệp Đại học 1</b></span></label>
                    <select name="namtn_dh[]" class="js-example-basic-multiple1" >
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
                    <select name="namcapbang_dh[]" class="js-example-basic-multiple1" >
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
                    <select name="nganhdh[]" class="js-example-basic-multiple1" >
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
                    <label for=""><span class="title-qtdt"><b>Thời gian Công nhận bằng</b></span></label>
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
</div>
<script type="text/javascript" src="{base_url()}public/js/quatrinhdaotao.js"></script>
{if isset($trangthai) && $trangthai['title'] == "Lưu thông tin quán trình đào tạo thành công" || $trangthai['title'] == "Xóa đại học thành công" || $trangthai['title'] == "Xóa thạc sĩ thành công"}
<script type="text/javascript">
    $('.quatrinhdaotao').removeClass('active');
    $('.qtdt a').click();
    $('.qtdt').addClass('active');
</script>
{/if}
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
        font-size: 20px;
    }
</style>
  
