    <div class="panel panel-default">
        <div class="panel-heading text-left">
            <h5><b>Danh mục tài khoản</b></h5>
        </div>
        <div class="panel-body">
            <div class="col-md-12">
                <form method="post">
                    <div class="row">
                        <div class="row ttsv">
                            <div class="col-md-3">
                                <label for="">Mã cán bộ</label>
                                <span><input type="text" name="data[taikhoan]" class="form-control" required="" value="{if !empty($get_canbo)}{$get_canbo['macb']}{/if}"></span>
                            </div>
                            <div class="col-md-2">
                                <label for="">Mật khẩu</label>
                                <span><input type="password" name="data[matkhau]" class="form-control"  ></span>
                            </div>
                            <div class="col-md-3">
                                <label for="">Trạng thái</label>
                                <select name="data[trangthai]" class="form-control" required="">
                                    <option value="motaikhoan" >Mở tài khoản</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">Quyền</label>
                                <select name="data[maquyen]" class="form-control" required="">
                                    <option value="" selected="" disabled="">---Chọn quyền---</option>
                                    {foreach $danhmuc['tbl_quyen'] as $key => $val}
                                    <option value="{$val['maquyen']}" {if !empty($get_canbo) && $get_canbo['maquyen'] == $val['maquyen']} selected="" {/if}>{$val['tenquyen']}</option>
                                    {/foreach}
                                </select>
                            </div>
                            <div class="col-md-3">
                               <br>
                               <button type="submit" class="btn btn-primary" name="dangky" value="{if !empty($get_canbo)}4{else}3{/if}">{if !empty($get_canbo)}Cập nhật{else}Đăng ký{/if}</button>
                               {if !empty($get_canbo)} <a href="{$url}canbo" class="btn btn-danger">Hủy</a> {/if}
                           </div>
                       </div>
                       <br>
                    </div>
                   <hr>
                   <div class="row">
                    <table class="table table-responsive table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th class="text-center">STT</th>
                                <th>Mã cán bộ(Tài khoản)</th>
                                <th>Ngành</th>
                                <th>Trạng thái</th>
                                <th class="text-center">Tác vụ</th>
                            </tr>
                            {foreach $danhmuc['tbl_taikhoan'] as $key => $val}
                            <tr>
                                <td class="text-center"><b>{$key + 1}</b></td>
                                <td>{$val.macb}</td>
                                <td>{$danhmuc['get_nganh'][$val.macb]}</td>
                                <td>
                                    {if $val.trangthai == "motaikhoan"}
                                    <label class="label label-primary">Đã mở tài khoản</label>
                                    {else}
                                    <label class="label label-danger">Đã khóa tài khoản</label>

                                    {/if}
                                </td>
                                <td class="text-center">
                                    <a href="{$url}canbo?macb={$val.macb}&trangthai=1" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                     <a href="{$url}canbo" class="btn btn-success" ><i class="fa fa-lock" aria-hidden="true"></i></a>
                                    <a href="{$url}canbo?macb={$val.macb}&trangthai=2" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa cán bộ  không {$danhmuc['tencb'][$val.macb]}?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    <a href="{$url}danhsachcanbo?macb={$val.macb}&trangthai=1" target="blank" class="btn btn-primary" title="Xem lý lịch"><i class="fa fa-eye" aria-hidden="true" ></i></a>
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
            <small> <!-- Remove this notice or replace it with whatever you want -->
                <b>Phát triển và xây dựng bởi <span class="glyphicon glyphicon-heart" style="color: red;" aria-hidden="true"></span> Tổ phát triển Khoa CNTT - Trường ĐH Mở HN</b>
                <br>
                <!-- <em>Điện thoại hỗ trợ:</em><strong> 091.760.0946</strong> -->
            </small>
        </div>
    </div>
