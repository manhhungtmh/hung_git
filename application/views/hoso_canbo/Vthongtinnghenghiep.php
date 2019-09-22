<div class="container fixdisplay">
    <div class="panel panel-default">
        <div class="panel-heading text-left">
            <h5><b>Các chứng chỉ</b></h5></div>
            <div class="panel-body">
                <div class="col-md-12" id="load">
                    <form method="post">
                        <div class="row"><br>
                            <div class="row ttsv">
                                <div class="col-md-3">
                                    <label for="">Tên cán bộ</label>
                                    <select style="width: 100%;height: 30px;"  name="canbo" value="" id="canbo">
                                        {foreach $canbo AS $key=>$val}
                                            <option value="{$val.id_can_bo}">{$val.ho_ten}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="row ttsv" >
                                <div class="col-md-12" id="b">
                                    <table class="table table-responsive table-bordered table-striped" id="tablequatrinh">
                                        <thead>
                                            <tr style="background-color: #f1f1f1" >
                                                <th class="text-center">Chứng danh nghề nghiệp</th>
                                                <th class="text-center">Chứng danh viết tắt</th>
                                                <th class="text-center">Thời gian bắt đầu</th>
                                                <th class="text-center">Thời gian kết thúc</th>
                                                <th class="text-center">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach $chucdanh AS $key => $val}
                                                <tr>
                                                    <td>{$val.chuc_danh}</td>
                                                    <td>{$val.chuc_danh_vt}</td>
                                                    <td>{$val.tg_batdau}</td>
                                                    <td>{$val.tg_ketthuc}</td>
                                                    <td class="text-center">
                                                        <!-- <a href="?id_chung_chi={$val.id_chung_chi}" class="btn btn-primary">Sửa</a> -->
                                                        <button type="submit" name="delete" value="{$val.id_chuc_danh}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa hợp đồng này không?');">Xóa</button>
                                                    </td>
                                                </tr>
                                            {/foreach}
                                        </tbody>
                                    </table>
                            <div class="text-right"><button type="button" class="btn btn-primary" name="themquatrinh">Thêm</button></div>
                        <div class="text-center"><button type="submit" name="luuhoso" value="luuhoso" class="btn btn-success">Lưu hồ sơ</button></div>
                    </form>
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
<script>
    $(document).on('click','button[name="themquatrinh"]',function(){
        let row = '';
        row += '<tr><td><input type="text" name="txtHoten" class="form-control"></td>';
        row += '<td><input type="text" name="txttenvt" class="form-control" value=""></td>';
        row += '<td><input type="text" name="tg_batdau" class="form-control datepicker" data-inputmask="alias: dd/mm/yyyy" data-mask="" autocomplete="off" ></td>';
        row += '<td><input type="text" name="tg_ketthuc" class="form-control datepicker" data-inputmask="alias: dd/mm/yyyy" data-mask="" autocomplete="off" ></td>';
        row += '<td class="text-center"><button type="submit" name="delete" value="{$val.id_chuc_danh}" class="btn btn-danger">Xóa</button></td><tr>';
        $('#tablequatrinh>tbody').append(row);
         $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true
          });
    });
</script>