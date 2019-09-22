        <br>
        <div class="col-md-12 text-right">
           <h3 class="text-right" style="margin-bottom: 27px;font-size: 24px;font-family: auto;margin: 0">Cán bộ: <span style="border-bottom: 1px solid #0d738a;font-size:20px;color: #0246ab;text-transform: uppercase;">{$canbo.ho_ten}</span></h3>
       </div>
       <br>
       <div class="panel-body">
        <h3 class="text-center" style="    margin-bottom: 27px;font-size: 24px;font-family: auto;"> <span style="border-bottom:   #0d738a;font-size: 31px;color: #0246ab;">DANH SÁCH QUYẾT ĐỊNH BỔ NHIỆM</span></h3>
        <table class="table table-hover table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th class="text-center">Chức danh được bổ nhiệm</th>
                    <th class="text-center">Đơn vị khi bổ nhiệm</th>
                    <th class="text-center" >Bộ môn được bổ nhiệm</th>
                    <th class="text-center">Đơn vị cũ</th>
                    <th class="text-center">Tuổi khi được bổ nhiệm</th>
                    <th class="text-center">Ngày QĐ</th>
                    <th class="text-center" >Số QĐ</th>
                    <th class="text-center">Ngày bắt đầu</th>
                    <th class="text-center">Ngày kết thúc</th>
                    {if  $session['maquyen'] ==1}
                    <th class="text-center" width="12%">Tác vụ</th>
                    {/if}
                </tr>
            </thead>
            <tbody>
                {if !empty($qtct['qtctCB'])}
                {foreach $qtct['qtctCB'] as $val}
                <tr>
                    <td class="text-center">{$val.ten_chuc_vu}</td>
                    <td class="text-center">{$val.ten_don_vi}</td>
                    <td class="text-center">{$val.ten_bo_mon}</td>
                    <td class="text-center">{$val.ten_donvi_cu}</td>
                    <!-- <td class="text-center">{date("Y",strtotime($val.ngay_quyet_dinh))-date("Y",strtotime($val.tg_bat_dau))}</td> -->
                    <td class="text-center">
                      {$sum = substr($val.ngay_quyet_dinh,6,4) - substr($danhmuc['ngaysinh'][$val['id_canbo']],6,4)}
                      {$sum}
                    </td>
                    <td class="text-center">{$val.ngay_quyet_dinh}</td>
                    <td class="text-center">{$val.so_quyet_dinh}</td>
                    <td class="text-center">{$val.tg_bat_dau}</td>
                    <td class="text-center">{$val.tg_ket_thuc}</td>
                    {if  $session['maquyen'] ==1}
                    <td class="text-center">
                        <button name="edit" value="{$val.id}" class="btn btn-sm btn-primary edit" data-toggle="modal" data-target="#editModal" title="Sửa" value="{$val.id}">Sửa</button> 
                        <form method="post" action="" style="display: inline-block;">
                            <button name="deleteQTCT" value="{$val.id}" type="submit" class="btn btn-sm btn-danger remove" title="Xóa" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button>
                        </form>
                    </td>
                    {/if}
                </tr>
                {/foreach}
                {else}
                <tr>
                    <td colspan="10" class="text-center">Không có dữ liệu</td>
                </tr>
                {/if}
            </tbody>
        </table>
        <hr>
        <h3 class="text-center" style="    margin-bottom: 27px;font-size: 24px;font-family: auto;"> <span style="border-bottom:  #0d738a;color: #0246ab;font-size: 31px;">DANH SÁCH CỦA ĐƠN VỊ</span></h3>
        <table class="table table-hover table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th class="text-center">Chức vụ</th>
                    <th class="text-center">Đơn vị</th>
                    <th class="text-center">Bộ môn</th>
                    <th class="text-center" >Đơn vị cũ</th>
                    <th class="text-center">Tuổi</th>
                    <th class="text-center">Ngày bắt đầu</th>
                    <th class="text-center">Ngày kết thúc</th>
                    {if  $session['maquyen'] ==1}
                    <th class="text-center">Tác vụ</th>
                    {/if}
                </tr>
            </thead>
            <tbody>
                {if !empty($qtct['qtctNV'])}
                {foreach $qtct['qtctNV'] as $val}
                <tr>
                    <td class="text-center">{$val.ten_chuc_vu}</td>
                    <td class="text-center">{$val.ten_don_vi}</td>
                    <td class="text-center">{$val.ten_bo_mon}</td>
                    <td class="text-center">{$val.ten_donvi_cu}</td>
                   <!--  <td class="text-center">
                    {date("Y",strtotime($val.ngay_quyet_dinh))-date("Y",strtotime($val.tg_bat_dau))}</td> -->
                    <td class="text-center">
                        {$sum = substr($val.tg_bat_dau,6,4) - substr($danhmuc['ngaysinh'][$val['id_canbo']],6,4)}
                        {$sum}
                    </td>
                    <td class="text-center">{$val.tg_bat_dau}</td>
                    <td class="text-center">{$val.tg_ket_thuc}</td>
                    {if  $session['maquyen'] ==1}
                    <td class="text-center">
                        <button name="edit" value="{$val.id}" class="btn btn-sm btn-primary edit" data-toggle="modal" data-target="#editModal" title="Sửa" value="{$val.id}">Sửa</button> 
                        <form method="post" action="" style="display: inline-block;">
                            <button name="deleteQTCT" value="{$val.id}" type="submit" class="btn btn-sm btn-danger remove" title="Xóa" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button>
                        </form>
                    </td>
                    {/if}
                </tr>
                {/foreach}
                {else}
                <tr>
                    <td colspan="8" class="text-center">Không có dữ liệu</td>
                </tr>
                {/if}
            </tbody>
        </table>
        {if  $session['maquyen'] ==1}
        <button type="button" class="btn btn-primary insert float-right" data-toggle="modal" data-target="#insertModal" title="Thêm">Thêm</button>
        {/if}
    </div>
    
    <!-- Modal, style and script qua trinh cong tac -->
    <!-- Modal edit -->
    <div class="modal fade" id="editModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Sửa thông tin</h4>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <form method="post" action="">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Đơn vị</label>
                                        <select name="data[id_donvi]" class="js-example-basic-multiple donviEdit" id="donviEdit">
                                            <option value="" disabled="">-Chọn đơn vị-</option>
                                            {foreach $qtct['donvi'] as $val}
                                            <option value="{$val.id_don_vi}">{$val.ten_don_vi}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label>Chức vụ</label>
                                        <select name="data[id_chuc_vu]" class="form-control chucvuEdit">
                                            <option value="" selected disabled="">-Chọn chức vụ-</option>
                                            {foreach $qtct['chucvu'] as $val}
                                            <option value="{$val.id_chuc_vu}" name="{$val.chuc_vu_vt}">{$val.ten_chuc_vu}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label>Bộ môn bổ nhiệm</label>&nbsp;
                                        <select name="data[id_bomon]" class="form-control bomonEdit">
                                            <option value="" selected disabled="">-Chọn bộ môn-</option>
                                            {foreach $qtct['bomon'] as $val}
                                            <option value="{$val.id_bo_mon}">{$val.ten_bo_mon}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group thongtinthemEdit">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label>Ngày QĐ</label>
                                        <input type="text" name="data[ngay_quyet_dinh]" class="form-control datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" autocomplete="off" value="">
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label>Số quyết định</label>&nbsp;
                                        <input type="text" name="data[so_quyet_dinh]" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label>Đơn vị cũ</label>
                                        <select name="data[id_donvi_cu]" class="js-example-basic-multiple donvicuEdit" required="">
                                            <option value="" selected="" disabled="">-Chọn đơn vị-</option>
                                            {foreach $qtct['donvi'] as $val}
                                            <option value="{$val.id_don_vi}">{$val.ten_don_vi}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label>Đơn vị mới</label>
                                        <select name="" class="form-control donvimoiEdit"  disabled="">
                                            <option value="" disabled="">-Chọn đơn vị-</option>
                                            {foreach $qtct['donvi'] as $val}
                                            <option value="{$val.id_don_vi}">{$val.ten_don_vi}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label>Thời gian bắt đầu</label>
                                        <input type="text" name="data[tg_bat_dau]" class="form-control datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" autocomplete="off" value="" required="">
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label>Thời gian kết thúc</label>
                                        <input type="text" name="data[tg_ket_thuc]" class="form-control datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" autocomplete="off" value="">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group text-right">
                                <button type="submit" name="update" id="update" value="" class="btn btn-primary">Sửa hồ sơ</button>
                                <button type="button" data-dismiss="modal" class="btn btn-default">Thoát</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal -->

    <div class="modal fade" id="insertModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Thêm quá trình công tác</h4>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <form method="post" action="">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Đơn vị</label>&nbsp;
                                        <select name="data[id_donvi]" class="js-example-basic-multiple donviInsert" required="">
                                            <option value="" selected="" disabled="">-Chọn đơn vị-</option>
                                            {foreach $qtct['donvi'] as $val}
                                            <option value="{$val.id_don_vi}">{$val.ten_don_vi}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label>Chức vụ</label>&nbsp;
                                        <select name="data[id_chuc_vu]" class="form-control chucvuInsert" required="">
                                            <option value="" selected disabled="">-Chọn chức vụ-</option>
                                            {foreach $qtct['chucvu'] as $val}
                                            <option value="{$val.id_chuc_vu}" name="{$val.chuc_vu_vt}">{$val.ten_chuc_vu}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label>Bộ môn bổ nhiệm</label>
                                        <select name="data[id_bomon]" class="form-control" required="">
                                            <option value="" selected disabled="">-Chọn bộ môn-</option>
                                            {foreach $qtct['bomon'] as $val}
                                            <option value="{$val.id_bo_mon}">{$val.ten_bo_mon}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group thongtinthemInsert">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label>Ngày QĐ</label>
                                        <input type="text" name="data[ngay_quyet_dinh]" class="form-control datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" autocomplete="off" value="">
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label>Số quyết định</label>&nbsp;
                                        <input type="text" name="data[so_quyet_dinh]" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label>Đơn vị cũ</label>
                                        <select name="data[id_donvi_cu]" class="js-example-basic-multiple" required="">
                                            <option value="" selected="" disabled="">- Chọn đơn vị -</option>
                                            {foreach $qtct['donvi'] as $val}
                                            <option value="{$val.id_don_vi}">{$val.ten_don_vi}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label>Đơn vị mới</label>
                                        <select name="" class="form-control donvimoiInsert" disabled="">
                                            <option value="" disabled="">-Chọn đơn vị-</option>
                                            {foreach $qtct['donvi'] as $val}
                                            <option value="{$val.id_don_vi}">{$val.ten_don_vi}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label>Thời gian bắt đầu</label>
                                        <input type="text" name="data[tg_bat_dau]" class="form-control datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" autocomplete="off" value="" required="">
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label>Thời gian kết thúc</label>
                                        <input type="text" name="data[tg_ket_thuc]" class="form-control datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" autocomplete="off" value="">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group text-right">
                                <button type="submit" name="luu_qtct" value="luuhoso" class="btn btn-primary">Lưu hồ sơ</button>
                                <button type="button" data-dismiss="modal" class="btn btn-default">Thoát</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal -->

    <script type="text/javascript">
        $(document).ready(()=>{
                // event edit
                $("table").on("click",".edit",function(e){
                    e.preventDefault();
                    var id = $(this).val();
                    //console.log(id);
                    // Dat gia tri
                    $("#update").val(id);
                    $.ajax({
                        url: "",
                        type: "post",
                        dataTypt: "html",
                        data: {
                            action: "select",
                            id: id,
                        }
                    }).done(function(e){
                        console.log(e);
                        data = JSON.parse(e);
                        console.log(data);
                        $("input[name='data[tg_bat_dau]']").val(data.tg_bat_dau);
                        $("input[name='data[tg_ket_thuc]']").val(data.tg_ket_thuc);
                        $('.chucvuEdit').select2().val(data.id_chuc_vu).trigger('change');
                        $('.bomonEdit').select2().val(data.id_bomon).trigger('change');
                        $("input[name='data[so_quyet_dinh]']").val(data.so_quyet_dinh);
                        $("input[name='data[ngay_quyet_dinh]']").val(data.ngay_quyet_dinh);
                        $('.donviEdit').select2().val(data.id_donvi).trigger('change');
                        $('.donvicuEdit').select2().val(data.id_donvi_cu).trigger('change');
                    });
                });
            })
        </script>

        <script type="text/javascript">
            $(".thongtinthemInsert").css("display","none");
            $(".thongtinthemEdit").css("display","none");

            $(".chucvuEdit").change(function(){
                var val = $(this).find(":selected").attr("name");
                if(val === "HT" || val === "PHT"){
                   $(".thongtinthemEdit").css("display","block");
               }else{
                $("input[name='data[so_quyet_dinh]']").val("");
                $("input[name='data[ngay_quyet_dinh]']").val("");
                $(".thongtinthemEdit").css("display","none");
            }
        });

            $(".chucvuInsert").change(function(){
                var val = $(this).find(":selected").attr("name");
                if(val === "HT" || val === "PHT"){
                   $(".thongtinthemInsert").css("display","block");
               }else{
                $("input[name='data[so_quyet_dinh]']").val("");
                $("input[name='data[ngay_quyet_dinh]']").val("");
                $(".thongtinthemInsert").css("display","none");
            }
        });

            $(".donviEdit").change(function(){
                var val = $(this).val();
                console.log(val);
                $('.donvimoiEdit').select2().val(val).trigger('change');
            });
            $(".donviInsert").change(function(){
                var val = $(this).val();
                console.log(val);
                $('.donvimoiInsert').select2().val(val).trigger('change');
            });
        </script>
        
