<div class="container fixdisplay">
    <div class="panel panel-default">
        <div class="panel-heading text-left">
            <h5>
                <b>Danh mục Đề án tuyển sinh</b>
            </h5>
        </div>
        <div class="panel-body">
            <div class="col-md-12">
                <form method="post">
                    <div class="row">
                        <div class="row ttsv">
                        	<div class="col-md-1">
                        	</div>
                            <div class="col-md-5">
                                <label for="">Tên Đề án tuyển sinh</label>
                                    <input type="text" name="ten_deantuyensinh" class="form-control" id="ten_deantuyensinh" required="">
                            </div>
                            <div class="col-md-3">
                                 <label for="">Năm đề án tuyển sinh</label>
                                  <select name="nam_deantuyensinh" class="form-control js-example-basic-multiple" id="nam_deantuyensinh">
                                      <option value="">---Chọn năm bắt đầu---</option>
                                      {for $i= date('Y') to 1900 step $i-1}
                                        <option value="{$i}">{$i}</option>
                                      {/for}
                                  </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">Hệ tuyển sinh</label>
                                      <select name="he_deantuyensinh" class="form-control" id="he_deantuyensinh">
                                            <option value="" disabled="" selected="">---Chọn hệ tuyển sinh---</option>
                                            <option value="daihoc">Đại học</option>
                                            <option value="thacsi">Thạc sĩ</option>
                                            <option value="tiensi">Tiến sĩ</option>
                                      </select>
                            </div>
                        </div>
                            <br>
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-success" name="capnhap_deantuyensinh"><i class="fa fa-save"></i>&nbsp;Cập nhật</button>
                                    <button type="submit" class="btn btn-primary" name="themdeantuyensinh" value="themdeantuyensinh"><i class="fa fa-plus"></i>&nbsp;Thêm</button>
                                    <button type="button" class="btn btn-default" name="huydeantuyensinh">Hủy</button>
                                </div>
                            </div>
                            <hr>
                                <div class="row">
                                    <table class="table table-responsive table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="max-width: 20px !important;">STT</th>
                                                <th class="text-center">Tên Đề án tuyển sinh</th>
                                                <th class="text-center" style="max-width: 40px !important;">Năm Đề án tuyển sinh</th>
                                                <th class="text-center" style="max-width: 40px !important;">Hệ Đề án tuyển sinh</th>
                                                <th class="text-center" style="max-width: 50px !important;">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    {$stt = 1}
                                    {foreach $deantuyensinh as $key => $vl}
                                        
                                            <tr>
                                                <td class="text-center" style="max-width: 20px !important;">{$stt++}</td>
                                                <td>{$vl.ten_deantuyensinh}</td>
                                                <td class="text-center" style="max-width: 40px !important;">{$vl.nam_deantuyensinh}</td>
                                                <td class="text-center" style="max-width: 40px !important;">
                                                    {if $vl.he_deantuyensinh=="daihoc"}Đại học
                                                    {else if $vl.he_deantuyensinh=="thacsi"}Thạc sĩ
                                                    {else} Tiến sĩ
                                                    {/if}
                                                </td>
                                                <td class="text-center" style="max-width: 40px !important;">
                                                    <form method="post">
                                                    <button type="button" name="sua_deantuyensinh" class="btn btn-primary" 
                                                    value        = "{$vl.id_deantuyensinh}" 
                                                    id           = "{$vl.id_deantuyensinh}" 
                                                    ten_deantuyensinh = "{$vl.ten_deantuyensinh}"
                                                    nam_deantuyensinh = "{$vl.nam_deantuyensinh}"
                                                    he_deantuyensinh  = "{$vl.he_deantuyensinh}"
                                                    >Sửa</button>
                                                    {if !in_array($vl.id_deantuyensinh,$arrdeantuyensinh)}
                                                            <button type="submit" name="xoa_deantuyensinh" value        = "{$vl.id_deantuyensinh}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa Đề án tuyển sinh này không?');">Xóa</button>
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

        $('button[name = "capnhap_deantuyensinh"]').hide();  
        $('button[name = "huydeantuyensinh"]').hide();

        $('button[name = "sua_deantuyensinh"]').click(function(){
            $('button[name = "themdeantuyensinh"]').hide();
            $('button[name = "capnhap_deantuyensinh"]').show();  
            $('button[name = "huydeantuyensinh"]').show();
            var id = $(this).attr('id'); 
            var nam_deantuyensinh = $(this).attr('nam_deantuyensinh');
            $('#ten_deantuyensinh').val($(this).attr('ten_deantuyensinh'));  
            $('button[name = "capnhap_deantuyensinh"]').val(id);
            console.log(nam_deantuyensinh);
            $('select[name="nam_deantuyensinh"]').val(nam_deantuyensinh);
            $('select[name="nam_deantuyensinh"]').select2().trigger('change');
            $('select[name="he_deantuyensinh"]').val($(this).attr('he_deantuyensinh'));
        });    

        $('button[name = "huydeantuyensinh"]').click(function(){ 
            $('button[name = "themdeantuyensinh"]').show();
            $('button[name = "capnhap_deantuyensinh"]').hide();
            $('button[name = "huydeantuyensinh"]').hide();
            $('#ten_deantuyensinh').val("");
            $('select[name="nam_deantuyensinh"]').val("");
            $('select[name="nam_deantuyensinh"]').select2().trigger('change');
            $('select[name="he_deantuyensinh"]').val("");
        }); 
    });
</script>
 <script type="text/javascript">
        $('.datepicker').datepicker({
          format: 'dd/mm/yyyy',
          autoclose: true
      });
</script>