<div class="container fixdisplay">
    <div class="panel panel-default">
        <div class="panel-heading text-left">
            <h5><b>Lý lịch cán bộ</b></h5>
        </div>
        <div class="panel-body">
            <div class="row">
            </div>
            <form method="post" action="">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="txtMDT">Mã đào tạo</label>&nbsp;
                            <input type="text" name="txtMDT" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Họ và tên</label>&nbsp;
                            <input type="text" name="data[ho_ten]" class="form-control" value="{$canbo.ho_ten}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Ngày sinh</label>
                            <input type="text" class="form-control datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="data[ngay_sinh]" autocomplete="off" value="{$canbo.ngay_sinh}">
                        </div>
                        <div class="col-md-4">
                            <label for="txttuoi">Tuổi</label>
                            <input type="text" name="txttuoi" class="form-control" value="{date('Y')-date('Y',strtotime({$canbo.ngay_sinh}))}" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                            <div class="col-md-4">
                            <label>Giới tính</label>
                            <div class="custom-radio">
                                <input type="radio" name="data[gioi_tinh]" value="Nam" {if ($canbo.gioi_tinh == 'Nam')}checked{/if}>
                                Nam&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="data[gioi_tinh]" value="Nữ" {if ($canbo.gioi_tinh == 'Nữ')}checked{/if}>
                                Nữ
                          </div>
                        </div>
                        <div class="col-md-4">
                            <label for="donvi">Dân tộc</label>&nbsp;
                            <select name="data[id_dan_toc]" class="form-control">
                                <option disabled selected>--- Chọn dân tộc ---</option>
                                {foreach $danhmuc['tbl_dantoc'] as $val}
                                    <option {if $canbo.id_dan_toc == $val.id_dan_toc}selected{/if} value ="{$val.id_dan_toc}">{$val.dan_toc}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Tôn giáo</label>&nbsp;
                            <select name="data[id_ton_giao]" class="form-control">
                                <option disabled selected>--- Chọn tôn giáo ---</option>
                                {foreach $danhmuc['tbl_tongiao'] as $val}
                                    <option {if $canbo.id_ton_giao == $val.id_ton_giao}selected{/if} value="{$val.id_ton_giao}">{$val.ton_giao}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Loại biên chế</label>&nbsp;
                            <input type="text" name="bienche" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Học hàm</label>&nbsp;
                            <select name="data[id_hoc_ham]" class="form-control">
                                <option disabled selected>--- Chọn học hàm ---</option>
                                {foreach $danhmuc['tbl_hocham'] as $val}
                                    <option  value="{$val.id_hoc_ham}" {if isset($danhmuc['hocham'][$canbo.id_can_bo]) && $danhmuc['hocham'][$canbo.id_can_bo]== $val.id_hoc_ham}selected{/if}>{$val.hoc_ham}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="donvi">Học vị</label>&nbsp;
                            <select name="data[id_hoc_vi]" class="form-control">
                                <option disabled selected>--- Chọn học vị ---</option>
                                {foreach $danhmuc['tbl_hocvi'] as $val}
                                    <option value="{$val.id_hoc_vi}" {if isset($danhmuc['hocham'][$canbo.id_can_bo]) && $danhmuc['hocvi'][$canbo.id_can_bo]== $val.id_hoc_vi}selected{/if}>{$val.hoc_vi}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Đang học</label>&nbsp;
                            <input type="text" name="danghoc" class="form-control" value="">
                        </div>
                        <div class="col-md-4">
                            <label>Chức vụ</label>&nbsp;
                            <select name="data[id_chuc_vu]" class="form-control">
                                <option value="">- Chọn chức vụ -</option>
                                {foreach $danhmuc['tbl_chucvu'] as $val}
                                    <option {if (isset($danhmuc['thongtincanbo'][$id_canbo].id_chuc_vu)) && $danhmuc['thongtincanbo'][$id_canbo].id_chuc_vu == $val.id_chuc_vu}selected{/if} value="{$val.id_chuc_vu}">{$val.ten_chuc_vu}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Đơn vị</label>&nbsp;
                             <select name="data[id_don_vi]" class="form-control">
                                <option value="" {if (empty($danhmuc['thongtincanbo'][$id_canbo].id_don_vi))}selected{/if}>- Chọn đơn vị -</option>
                                {foreach $danhmuc['donvi'] as $val}
                                    <option {if (isset($danhmuc['thongtincanbo'][$id_canbo].id_don_vi)) && $danhmuc['thongtincanbo'][$id_canbo].id_don_vi == $val.id_don_vi}selected{/if} value="{$val.id_don_vi}">{$val.ten_don_vi}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Nơi sinh</label>&nbsp;
                            <input type="text" name="data[noi_sinh]" class="form-control" value="{$canbo.noi_sinh}">
                        </div>

                        <div class="col-md-4">
                            <label>Quê quán</label>&nbsp;
                            <input type="text" name="data[que_quan]" class="form-control" value="{$canbo.que_quan}">
                        </div>
                        <div class="col-md-4">
                            <label>Nơi đăng ký hộ khẩu thường trú</label>&nbsp;
                            <input type="text" name="data[ho_khau]" class="form-control" value="{$canbo.ho_khau}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Nơi ở hiện nay</label>&nbsp;
                            <input type="text" name="a" class="form-control" value="{$canbo.ho_khau}">
                        </div>
                        <div class="col-md-4">
                            <label>Ngày KG với trường</label>&nbsp;
                            <input type="date" name="" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Ngày về trường chính thức</label>&nbsp;
                            <input type="date" name="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Thời gian bắt đầu tập sự</label>&nbsp;
                            <input type="date" name="" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Thời gian kết thúc</label>&nbsp;
                            <input type="date" name="" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Email</label>&nbsp;
                            <input type="text" name="data[email]" class="form-control" value="{$canbo.email}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Số điện thoại</label>&nbsp;
                            <input type="text" name="data[dien_thoai]" class="form-control" value="{$canbo.dien_thoai}">
                        </div>
                        <div class="col-md-4">
                            <label>Số tài khoản</label>&nbsp;
                            <input type="text" name="data[so_tai_khoan]" class="form-control" value="{$canbo.so_tai_khoan}">
                        </div>
                        <div class="col-md-4">
                            <label>Mã số thuế</label>&nbsp;
                            <input type="text" name="data[ma_so_thue]" class="form-control" value="{$canbo.ma_so_thue}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label>CMND/Thẻ căn cước</label>&nbsp;
                            <input type="text" name="data[so_chung_minh]" class="form-control" value="{$canbo.so_chung_minh}">
                        </div>
                        <div class="col-md-4">
                            <label>Ngày cấp</label>&nbsp;
                            <input type="date" name="data[ngay_cap_cmt]" class="form-control" value="{$canbo.ngay_cap_cmt}">
                        </div>
                        <div class="col-md-4">
                            <label>Nơi cấp</label>&nbsp;
                            <input type="text" name="txtnoicap" class="form-control" value="{$canbo.noi_cap_cmt}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Số QĐ/Số HĐ</label>&nbsp;
                            <input type="text" name="" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Ngày QĐ, ngày tuyển dụng, ngày HĐ</label>&nbsp;
                            <input type="date" name="" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Loại HĐ</label>&nbsp;
                            <input type="text" name="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group text-center">
                 <button type="submit" name="action" value="luuhoso" class="btn btn-primary">Lưu hồ sơ</button></div>
            </form>
        </div>
            <div class="panel-footer">
                <small> <!-- Remove this notice or replace it with whatever you want -->
                    <b>Phát triển và xây dựng bởi <span class="glyphicon glyphicon-heart" style="color: red;" aria-hidden="true"></span> Tổ phát triển Khoa CNTT - Trường ĐH Mở HN</b>
                    <br>
                    <!-- <em>Điện thoại hỗ trợ:</em><strong> 091.760.0946</strong> -->
                </small>
            </div>
        </div>
    </div>
