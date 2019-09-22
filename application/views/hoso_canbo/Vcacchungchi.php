<div class="container-fluid fixdisplay">
    <div class="panel">
    <br>
    <div class="col-md-12 text-right">
       <h3 class="text-right" style="margin-bottom: 27px;font-size: 24px;font-family: auto;margin: 0">Cán bộ: <span style="border-bottom: 1px solid #0d738a;font-size:20px;color: #0246ab;text-transform: uppercase;">{$canbo.ho_ten}</span></h3>
   </div>
   <br>
        <div class="panel-body">
            <div class="col-md-12">
                {if  $session['maquyen'] ==1}
                <form method="post">
                    <div class="row">
                        <div class="row ttsv">
                            <div class="col-md-4">
                                <label for="">Chứng chỉ</label>
                                <select name="chung_chi" value="" required="" class="form-control" id="chung_chi">
                                    <option value="" selected="" disabled="">---Chọn chứng chỉ---</option>
                                        {foreach $danhmuc['tbl_chungchi'] as $val}
                                    <option value="{$val.id_chung_chi}"{if !empty($cc) && $cc.id_chung_chi == $val.id_chung_chi} selected="" {/if}>{$val.chung_chi}</option>
                                        {/foreach}
                                </select>
                                <button type="button" class="btn btn-xs btn btn-primary pull-right" data-toggle="modal" data-target="#themcc"><i class="fa fa-plus-square" aria-hidden="true" ></i></button>                            </div>
                            <div class="col-md-4">
                                <label for="">Thời gian cấp</label>
                                <input type="text" name="thoi_gian" class="form-control datepicker" value="{(isset($cc))?$cc.thoi_gian:NULL }" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" autocomplete="off" >
                            </div>
                            <div class="col-md-4">
                                <label for="">Nơi cấp</label>
                                <input type="text" name="noi_cap" class="form-control" value="{(isset($cc))?$cc.noi_cap:NULL }">
                            </div>
                            
                        </div><br>
                        <div class="row">
                            
                            <div class="col-md-12 text-center">
                                {if isset($cc)}
                                    <button type="submit" class="btn btn-primary" name="updatecc" value="{$cc.id_chung_chi}">Cập nhật</button>
                                    <a href="" class="btn btn-danger">Hủy</a>
                                {else}
                                    <button type="submit" class="btn btn-primary" name="luu_chungchi" value="btn1"><i class="fa fa-plus"></i>&nbsp;Thêm</button>
                                {/if}
                            </div>
                        </div>  
                    </div>
                </form>
                {/if}
                    <hr>
                    <div class="row">
                        <table class="table table-responsive table-bordered table-striped" id="table_id1">
                            <thead>
                                <tr>
                                    <th class="text-center">STT</th>
                                    <th class="text-center">Các chứng chỉ</th>
                                    <th class="text-center" style="max-width: 70px">Thời gian cấp chứng chỉ</th>
                                    <th class="text-center" style="max-width: 100px">Nơi cấp chứng chỉ</th>
                                    <!-- <th class="text-center" style="max-width: 30px">Tác vụ</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                {foreach $cacchungchi AS $key => $val}
                                    <tr>
                                        <td class="text-center">{$key+1}</td>
                                        <td>{$val.chung_chi}</td>
                                        <td class="text-center">{$val.thoi_gian}</td>
                                        <td>{$val.noi_cap}</td>
                                       <!--  <td class="text-center">
                                            <form method="post" action="" style="display: inline-block;">
                                            <button type="submit" name="suachungchi" value="{$val.id_chung_chi}" class="btn btn-sm btn-primary">Sửa</button>
                                            <button name="xoa_chungchi" value="{$val.id_chung_chi}" type="submit" class="btn btn-sm btn-danger remove" title="Xóa" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button>
                                            </form>
                                        </td> -->
                                    </tr>
                                {/foreach}      
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="themcc" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center"style= "color: green;">Thêm chứng chỉ</h4>
          </div>
          <div class="modal-body">
            <form action="" method="post">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            Tên chứng chỉ 
                        </div>
                        <div class="col-md-7">
                            <input type="text" required="" name="ten_chung_chi" class="form-control ">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" value="btn" name="themchungchi">Xác nhận</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
{if isset($trangthai) && $trangthai['title'] == "Lưu chứng chỉ thành công" || $trangthai['title'] == "Xóa chứng chỉ thành công"|| $trangthai['title'] == "Cập nhật thành công"|| $trangthai['title'] == "Thêm chứng chỉ thành công"}
<script type="text/javascript">
    $('.quatrinhdaotao').removeClass('active');
    $('.cacchungchi a').click();
    $('.cacchungchi').addClass('active');
</script>
{/if}
<script type="text/javascript" src="http://localhost/quanlynhansu/public/select2/dist/js/select2.js"></script>
<script src="http://localhost/quanlynhansu/public/plugin/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $('.datepicker').datepicker({
      format: 'dd/mm/yyyy',
      autoclose: true
  });
    $(function () {
        $('#table_id1').DataTable({
            ordering: true,
            paging: true,
            "pageLength": 10
        })
    }) 
    $('select').select2();
</script>