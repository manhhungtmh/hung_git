<div class="container-fluid fixdisplay">
    <div class="panel panel-default" style="padding: 20px;">
        <div class="panel-heading text-left">
            <h4><b>Danh sách khen thưởng</b></h4>
        </div>
       <h3 class="text-center" style="    margin-bottom: 27px;font-size: 24px;font-family: auto;"> <span style="border-bottom: 1px solid #0d738a;font-size: 31px;color: #0246ab;">DANH SÁCH KHEN THƯỞNG CÁN BỘ</span></h3>
        <div class="col-md-12 timkiem">
            <form method="post">
                <div class="col-md-2">
                     <div class="form-group">
                         <label for="">Tên cán bộ</label>
                         <input type="text" class="form-control" name="data[tencb]" value="{if !empty($dulieu_tk['tencb'])}{$dulieu_tk['tencb']}{/if}">
                     </div> 
                </div>
                 <div class="col-md-2">
                     <div class="form-group">
                         <label for="">Thời gian</label>
                         <input type="text" class="form-control datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="data[thoigian]" autocomplete="off" value=" {if !empty($dulieu_tk['thoigian'])}{$dulieu_tk['thoigian']}{/if}">
                     </div> 
                </div>
                 <div class="col-md-2">
                     <div class="form-group">
                         <label for="">Số quyết định</label>
                         <input type="text" class="form-control" name="data[soqd]" value="{if !empty($dulieu_tk['soqd'])}{$dulieu_tk['soqd']}{/if}">
                     </div> 
                </div>
                 <div class="col-md-4">
                     <div class="form-group">
                         <label for="">Nhóm khen thưởng</label>
                         <select name="data[nhomkhenthuong]" class="form-control">
                            <option value="">---Tất cả---</option>
                             {foreach $danhmuc['tbl_nhom_khenthuong'] as $val}
                                <option value="{$val.id}" {if !empty($dulieu_tk['nhomkhenthuong']) && $dulieu_tk['nhomkhenthuong'] == $val.id}selected{/if}>{$val.tieudekhenthuong}</option>
                             {/foreach}
                         </select>
                         <!-- <input type="text" class="form-control" name="data[nhomkhenthuong]" value="{if !empty($dulieu_tk['nhomkhenthuong'])}{$dulieu_tk['nhomkhenthuong']}{/if}"> -->
                     </div> 
                </div>
                 <div class="col-md-2">
                    <button type="submit" class="btn btn-primary" style="margin-top: 25px;" name="timkiem" value="1"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Tìm kiếm</button>
                    <!-- <input type="reset" class="btn btn-default" value="Reset" style="margin-top: 25px;"> -->
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
       <hr>
        <form method="post">
            <table class="table table-hover table-bordered table-striped table-sm" id="table_id">
                <thead>
                    <tr>
                        <th class="text-center">STT</th>
                        <th class="text-center">Tên cán bộ</th>
                        <th class="text-center" >Danh hiệu thi đua</th>
                        <th class="text-center">Thời gian</th>
                        <th class="text-center">Hình thức</th>
                        <th class="text-center">Số quyết định</th>
                        <th class="text-center" >Nội dung quyết định</th>
                        <th class="text-center" >Công tác</th>
                        <th class="text-center" >Nhóm khen thưởng</th>
                        <th class="text-center" >Xem chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                   {foreach $khenthuong as $key => $val}
                        <tr>
                            <td class="text-center"><b>{$key+1}</b></td>
                            <td>{$danhmuc['tencb'][$val.macb]}</td>
                            <td>{$val.the_loai}</td>
                            <td>{$val.thoi_gian}</td>
                            <td>{$val.hinh_thuc}</td>
                            <td>{$val.so_quyet_dinh}</td>
                            <td>{$val.nd_quyet_dinh}</td>
                            <td>{$danhmuc['tenct'][$val.id_cong_tac]}</td>
                            <td>{$danhmuc['tennhomkhenthuong'][$val.id_nhomkhenthuong]}</td>
                            <td class="text-center">
                                <a href="{base_url('danhsachcanbo')}?macb={$val.macb}&trangthai=1" target="blank" class="btn btn-primary" title="Xem lý lịch"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                   {/foreach}
                </tbody>
            </table>
        </form>
       
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