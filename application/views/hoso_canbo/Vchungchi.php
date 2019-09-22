<div class="container fixdisplay">
   <br>
    <div class="panel panel-default">
        <div class="panel-heading text-left">
            <h5><b>Danh mục chứng chỉ</b></h5></div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form method="post">
                        <div class="row">
                            <div class="row ttsv">
                                <div class="col-md-6">
                                    <label for="">Tên chứng chỉ</label>
                                    <span><input type="text" name="txtHoten" class="form-control" value="{(isset($chungchi))?$chungchi.chung_chi:NULL }" required=""></span>
                                </div><br>
                                <div class="col-md-4 text-right">
                                    {if isset($chungchi)}
                                            <button type="submit" class="btn btn-primary" name="update" value="{$chungchi.id_chung_chi}">Cập nhật</button>
                                           <a href="{base_url('chungchi')}" class="btn btn-default">Hủy</a>
                                    {else}
                                        <button type="submit" class="btn btn-primary" name="submit" value="btn1">Thêm</button>
                                    {/if}
                                </div>
                            </div>
                            
                        </div>
                    </form>
                        <hr>
                        <div class="row">
                            <table class="table table-responsive table-bordered table-striped" id="table_id">
                                <thead>
                                    <tr style="background-color: #f1f1f1">
                                        <th class="text-center">STT</th>
                                        <th class="text-center">Tên chứng chỉ</th>
                                        <th class="text-center">Tác vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {foreach $chung_chi AS $key => $val}
                                        <tr>
                                            <td class="text-center">{$key+1}</td>
                                            <td> {$val.chung_chi}</td>
                                            <td class="text-center">
                                                <form method="post">
                                                    <a href="{base_url('chungchi')}?id_chung_chi={$val.id_chung_chi}" class="btn btn-primary">Sửa</a> 
                                                <button type="submit" name="delete_chungchi" value="{$val.id_chung_chi}" class="btn btn-danger"
                                                onclick="return confirm('Bạn có muốn xóa chứng chỉ này không?');" id="xoa" 
                                                >Xóa</button>
                                                </form>
                                            </td>
                                        </tr>
                                    {/foreach}      
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
            <div class="panel-footer">
                <small>
                    <b>Phát triển và xây dựng bởi <span class="glyphicon glyphicon-heart" style="color: red;" aria-hidden="true"></span> Tổ phát triển Khoa CNTT - Trường ĐH Mở HN</b>
                    <br>
                </small>
            </div>
        </div>
    </div>
<script type="text/javascript" src="http://localhost/quanlynhansu/public/select2/dist/js/select2.js"></script>
<script src="http://localhost/quanlynhansu/public/plugin/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $('.datepicker').datepicker({
      format: 'dd/mm/yyyy',
      autoclose: true
  });
    $(function () {
        $('#table_id').DataTable({
            ordering: true,
            paging: true,
            "pageLength": 10
        })
    })    
</script>