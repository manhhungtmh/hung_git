<div class="container fixdisplay">
    <div class="panel panel-default">
        <div class="panel-heading text-left">
            <h5>
                <b>Danh mục Quy hoạch</b>
            </h5>
        </div>
        <div class="panel-body">
            <div class="col-md-12">
                <form method="post">
                    <div class="row">
                        <div class="row ttsv">
                            <div class="col-md-5">
                                <label for="">Tên loại quy hoạch</label>
                                    <input type="text" name="ten_quyhoach" class="form-control" id="ten_quyhoach" required="">
                            </div>
                            <div class="col-md-3">
                                 <label for="">Năm bắt đầu quy hoạch</label>
                                  <select name="nam_batdau" class="form-control js-example-basic-multiple">
                                      <option value="">---Chọn năm bắt đầu---</option>
                                      {for $i= date('Y') to 1900 step $i-1}
                                        <option value="{$i}">{$i}</option>
                                      {/for}
                                  </select>
                            </div>
                             <div class="col-md-3">
                                 <label for="">Năm kết thúc quy hoạch</label>
                                 <select name="nam_ketthuc" class="form-control js-example-basic-multiple">
                                      <option value="">---Chọn năm kết thúc---</option>
                                      {for $i= date('Y') to 1900 step $i-1}
                                        <option value="{$i}">{$i}</option>
                                      {/for}
                                  </select>
                            </div>

                            </div>
                            <br>
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-success" name="capnhap_quyhoach"><i class="fa fa-save"></i>&nbsp;Cập nhật</button>
                                    <button type="submit" class="btn btn-primary" name="themquyhoach" value="themquyhoach"><i class="fa fa-plus"></i>&nbsp;Thêm</button>
                                    <button type="button" class="btn btn-default" name="huyquyhoach">Hủy</button>
                                </div>
                            </div>
                            <hr>
                                <div class="row">
                                    <table class="table table-responsive table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="max-width: 20px !important;">STT</th>
                                                <th class="text-center">Tên loại quy hoạch</th>
                                                <th class="text-center">Từ năm</th>
                                                <th class="text-center">Đến năm</th>
                                                <th class="text-center" style="max-width: 50px !important;">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    {$stt = 1}
                                    {foreach $quyhoach as $key => $vl}
                                        
                                            <tr>
                                                <td class="text-center" style="max-width: 20px !important;">{$stt++}</td>
                                                <td>{$vl.ten_quyhoach}</td>
                                                <td class="text-center">{$vl.thoigian_batdau}</td>
                                                <td class="text-center">{$vl.thoigian_ketthuc}</td>
                                                <td class="text-center" style="max-width: 60px !important;">
                                                    <form method="post">
                                                    <button type="button" name="sua_quyhoach" class="btn btn-primary" 
                                                    value        = "{$vl.id_quyhoach}" 
                                                    id           = "{$vl.id_quyhoach}" 
                                                    ten_quyhoach = "{$vl.ten_quyhoach}"
                                                    nam_batdau   = "{$vl.nam_batdau}"
                                                    nam_ketthuc  = "{$vl.nam_batdau}"
                                                    >Sửa</button>
                                                    {if !in_array($vl.id_quyhoach,$arrquyhoanh)}
                                                            <button type="submit" name="xoa_quyhoach" value        = "{$vl.id_quyhoach}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa quy hoạch này không?');">Xóa</button>
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

        $('button[name = "capnhap_quyhoach"]').hide();  
        $('button[name = "huyquyhoach"]').hide();

        $('button[name = "sua_quyhoach"]').click(function(){
            $('button[name = "themquyhoach"]').hide();
            $('button[name = "capnhap_quyhoach"]').show();  
            $('button[name = "huyquyhoach"]').show();
            var id = $(this).attr('id'); 
            $('#ten_quyhoach').val($(this).attr('ten_quyhoach'));  
            $('button[name = "capnhap_quyhoach"]').val($(this).attr('id'));
            $('select[name="nam_batdau"]').val($(this).attr('nam_batdau'));
            $('select[name="nam_batdau"]').select2().trigger('change');
            $('select[name="nam_ketthuc"]').val($(this).attr('nam_ketthuc'));
            $('select[name="nam_ketthuc"]').select2().trigger('change');    
        });    

        $('button[name = "huyquyhoach"]').click(function(){ 
            $('button[name = "themquyhoach"]').show();
            $('button[name = "capnhap_quyhoach"]').hide();
            $('button[name = "huyquyhoach"]').hide();
            $('#ten_quyhoach').val("");
            $('select[name="nam_batdau"]').val("");
            $('select[name="nam_batdau"]').select2().trigger('change');
            $('select[name="nam_ketthuc"]').val("");
            $('select[name="nam_ketthuc"]').select2().trigger('change');
        }); 
    });
</script>
 <script type="text/javascript">
        $('.datepicker').datepicker({
          format: 'dd/mm/yyyy',
          autoclose: true
      });
</script>
