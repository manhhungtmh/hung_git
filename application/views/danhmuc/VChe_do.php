<div class="container fixdisplay">
    <div class="panel panel-default">
        <div class="panel-heading text-left">
            <h5>
                <b>Danh mục Chế độ</b>
            </h5>
        </div>
        <div class="panel-body">
            <div class="col-md-12">
                <form method="post">
                    <div class="row">
                        <div class="row ttsv">
                        	<div class="col-md-3">
                        	</div>
                            <div class="col-md-5">
                                <label for="">Tên chế độ</label>
                                    <input type="text" name="ten_chedo" class="form-control" id="ten_chedo" required="">
                            </div>
                        </div>
                            <br>
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-success" name="capnhap_chedo"><i class="fa fa-save"></i>&nbsp;Cập nhật</button>
                                    <button type="submit" class="btn btn-primary" name="themchedo" value="themchedo"><i class="fa fa-plus"></i>&nbsp;Thêm</button>
                                    <button type="button" class="btn btn-default" name="huychedo">Hủy</button>
                                </div>
                            </div>
                            <hr>
                                <div class="row">
                                    <table class="table table-responsive table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="max-width: 20px !important;">STT</th>
                                                <th class="text-center">Tên chế độ</th>
                                                <th class="text-center" style="max-width: 50px !important;">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    {$stt = 1}
                                    {foreach $chedo as $key => $vl}
                                        
                                            <tr>
                                                <td class="text-center" style="max-width: 20px !important;">{$stt++}</td>
                                                <td>{$vl.ten_chedo}</td>
                                                <td class="text-center" style="max-width: 40px !important;">
                                                    <form method="post">
                                                    <button type="button" name="sua_chedo" class="btn btn-primary" 
                                                    value        = "{$vl.id_chedo}" 
                                                    id           = "{$vl.id_chedo}" 
                                                    ten_chedo = "{$vl.ten_chedo}"
                                                    >Sửa</button>
                                                    {if !in_array($vl.id_chedo,$arrchedo)}
                                                            <button type="submit" name="xoa_chedo" value        = "{$vl.id_chedo}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa chế độ này không?');">Xóa</button>
                                                    {/if}
                                                    </form>
                                                </td>
                                            </tr>
                                    {/foreach}
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <small>
                            <b>Phát triển và xây dựng bởi 
                                <span class="glyphicon glyphicon-heart" style="color: red;" aria-hidden="true"></span> Tổ phát triển Khoa CNTT - Trường ĐH Mở HN
                            </b>
                            <br>
                            </small>
                        </div>
                    </div>
                </div>
<script type="text/javascript">
    $(document).ready(function(){

        $('button[name = "capnhap_chedo"]').hide();  
        $('button[name = "huychedo"]').hide();

        $('button[name = "sua_chedo"]').click(function(){
            $('button[name = "themchedo"]').hide();
            $('button[name = "capnhap_chedo"]').show();  
            $('button[name = "huychedo"]').show();
            var id = $(this).attr('id'); 
            $('#ten_chedo').val($(this).attr('ten_chedo'));  
            $('button[name = "capnhap_chedo"]').val(id);  
        });    

        $('button[name = "huychedo"]').click(function(){ 
            $('button[name = "themchedo"]').show();
            $('button[name = "capnhap_chedo"]').hide();
            $('button[name = "huychedo"]').hide();
            $('#ten_chedo').val("");
        }); 
    });
</script>
 <script type="text/javascript">
        $('.datepicker').datepicker({
          format: 'dd/mm/yyyy',
          autoclose: true
      });
</script>