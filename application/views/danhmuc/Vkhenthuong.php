<div class="container fixdisplay">
    <div class="panel panel-default">
        <div class="panel-heading text-left">
            <h5><b>Quản lý khen thưởng</b></h5>
        </div>
        <form method="post">
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tiêu đề khen thưởng</label>
                            <select class="form-control" required="" name="data[id_nhomkhenthuong]" >
                                <option disabled selected>---Chọn tiêu đề khen thưởng---</option>
                                {foreach $danhmuc['tbl_nhom_khenthuong'] as $key => $val}
                                    <option value="{$val.id}" {if !empty($tt_khenthuong['id_nhomkhenthuong']) && $tt_khenthuong['id_nhomkhenthuong'] == $val.id}selected{/if}>{$val.tieudekhenthuong} {if !empty($val.nambd)}({$val.nambd} - {$val.namkt}){/if}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <!-- <div class="col-md-6" style="margin-top: 25px;">
                        <button class="btn btn-primary">Xuất Excel</button>
                    </div> -->
                </div>
                <div class="col-md-12 hienthongtin_khenthuong ">
                    <div class="col-md-4">
                         <div class="form-group">
                             <label for="">Danh hiệu khen thưởng</label>
                             <input type="text" class="form-control" name="data[the_loai]" value="{if !empty($tt_khenthuong['the_loai'])}{$tt_khenthuong['the_loai']}{/if}" >
                         </div> 
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                             <label for="">Thời gian khen thưởng</label>
                              <input  type="text" class="form-control datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="data[thoi_gian]" autocomplete="off" required="" value="{if !empty($tt_khenthuong['thoi_gian'])}{$tt_khenthuong['thoi_gian']}{/if}">
                         </div> 
                    </div>
                     <div class="col-md-4">
                         <div class="form-group">
                             <label for="">Hình thức khen thưởng</label>
                             <input type="text" class="form-control" name="data[hinh_thuc]" value="{if !empty($tt_khenthuong['hinh_thuc'])}{$tt_khenthuong['hinh_thuc']}{/if}">
                         </div> 
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                             <label for="">Số quyết định</label>
                             <input type="text" class="form-control" name="data[so_quyet_dinh]" value="{if !empty($tt_khenthuong['so_quyet_dinh'])}{$tt_khenthuong['so_quyet_dinh']}{/if}">
                         </div> 
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                             <label for="">Nội dung quyết định</label>
                             <input type="text" class="form-control" name="data[nd_quyet_dinh]" value="{if !empty($tt_khenthuong['nd_quyet_dinh'])}{$tt_khenthuong['nd_quyet_dinh']}{/if}" required="">
                         </div> 
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                             <label>Công tác</label>
                            <select name="data[id_cong_tac]" class="js-example-basic-multiple" required>
                                <option disabled selected>---Chọn công tác--</option>
                                {foreach $danhmuc['tbl_congtac'] as $val}
                                    <option value="{$val.id_cong_tac}" {if !empty($tt_khenthuong['id_cong_tac']) && $tt_khenthuong['id_cong_tac'] == $val.id_cong_tac}selected{/if}>{$val.cong_tac}</option>
                                {/foreach}
                            </select>
                         </div> 
                    </div>
                  <div class="col-md-12">
                       <label for="">Thêm cán bộ khen thưởng</label>
                        <select name="hotencb[]" class="js-example-basic-multiple" multiple="multiple" required>
                          {if !empty($canbo_khenthuong)}
                            {foreach $canbo_khenthuong as $k => $v}
                              <option value="{$v.macb}" selected>{$danhmuc['tencb'][$v.macb]} - {$danhmuc['ngaysinh'][$v.macb]}</option>
                            {/foreach}
                            {if !empty($canbo_khenthuong_not_in)}
                              {foreach $canbo_khenthuong_not_in as $k => $v}
                                <option value="{$v.id_can_bo}" >{$danhmuc['tencb'][$v.macb]} - {$danhmuc['ngaysinh'][$v.macb]}</option>
                              {/foreach}
                            {/if}
                          {else}
                            {foreach $danhmuc['canbo'] as $k => $v}
                              <option value="{$v.id_can_bo}">{$v.ho_ten} - {$v.ngay_sinh}</option>
                            {/foreach}
                          {/if}
                        </select>
                  </div>
                  <div class="col-md-12 text-center" style="margin-top: 20px;">
                    {if !empty($tt_khenthuong)}
                         <a href="{base_url('khenthuong')}" class="btn btn-default">Hủy</a>
                         <button class="btn btn-success" type="submit" name="capnhat" value="{$tt_khenthuong['id_thidua_khenthuong']}"><i class="fa fa-plus"></i>&nbsp; Cập nhật</button>
                    {else}
                      <button class="btn btn-primary" type="submit" name="themkhenthuong" value="1"><i class="fa fa-plus"></i>&nbsp; Thêm khen thưởng</button>
                    {/if}
                  </div>
                </div>
            </div>
        </form>
        <div class="dskhenthuong">
            <hr>
            <form method="post">
                 <table class="table table-hover table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th class="text-center">STT</th>
                            <th>Nhóm khen thưởng</th>
                            <th>Số quyết định</th>
                            <th>Tổng số cán bộ khen thưởng</th>
                            <th width="9%">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        {$stt = 1}
                        {foreach $khenthuong as $key => $val}
                            <tr>
                                <td class="text-center"><b>{$stt++}</b></td>
                                <td>{$danhmuc['tennhomkhenthuong'][$val.id_nhomkhenthuong]}</td>
                                <td>{$val.so_quyet_dinh}</td>
                                <td>{$val.socb_khenthuong}</td>
                                <td>
                                    <a href="{base_url('khenthuong')}?id={$key}&trangthai=1" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a href="{base_url('khenthuong')}?id={$key}&trangthai=2" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa khen thưởng này không?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </form>
        </div>
       
        <div class="panel-footer">
            <small>
                    <b>Phát triển và xây dựng bởi <span class="glyphicon glyphicon-heart" style="color: red;" aria-hidden="true"></span> Tổ phát triển Khoa CNTT - Trường ĐH Mở HN</b>
                    <br>
            </small>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true
    });
    $(function() {
        $('#table_id').DataTable({
            ordering: true,
            paging: true,
            "pageLength": 10
        })
    })
    jQuery(document).ready(function($) {
      $('select[name="tieudekhenthuong"]').change(function(event) {
          /* Act on the event */
      });  
    });
</script>