    <br>
    <form method="post" action="">
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label for="txtMDT">Mã đào tạo</label>&nbsp;
                    <input type="text" name="txtMDT" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="txthoten">Họ và tên</label>&nbsp;
                    <input type="text" name="txthoten" class="form-control" value="{$canbo.ho_ten}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label for="txtngaysinh">Ngày sinh</label>&nbsp;
                    <input type="date" name="txtngaysinh" class="form-control" value="{date('Y-d-m', strtotime({$canbo.ngay_sinh}))}">
                </div>
                <div class="col-md-4">
                    <label for="txttuoi">Tuổi</label>&nbsp;
                    <input type="text" name="txttuoi" class="form-control" value="{date('Y') - date('Y', strtotime({$canbo.ngay_sinh}))}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label>Giới tính</label>
                    <div class="form-control custom-radio">
                        <input type="radio" id="nam" name="gioitinh" {if $canbo.gioi_tinh == "Nam"}checked{/if}>
                        <label for="nam">Nam</label>&nbsp;&nbsp;&nbsp;
                        <input type="radio" id="nu" name="gioitinh" {if $canbo.gioi_tinh == "Nữ"}checked{/if}>
                        <label for="nu">Nữ</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="donvi">Dân tộc</label>&nbsp;
                    <select class="form-control">
                        {foreach $danhmuc['tbl_dantoc'] as $val}
                        <option {if $canbo.id_dan_toc == $val.dan_toc}selected{/if}>{$val.dan_toc}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label for="donvi">Tôn giáo</label>&nbsp;
                    <select class="form-control">
                        {foreach $danhmuc['tbl_tongiao'] as $val}
                        <option {if $canbo.id_ton_giao == $val.ton_giao}selected{/if}>{$val.ton_giao}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="donvi">Loại biên chế</label>&nbsp;
                    <input type="text" name="donvi" class="form-control">
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label for="donvi">Học hàm</label>&nbsp;
                    <select class="form-control">
                        <option value="" selected="">--Chọn học hàm--</option>
                        {foreach $danhmuc['tbl_hocham'] as $val}
                        <option value="{$val.id_hoc_ham}" {if isset($danhmuc['hocham'][$canbo.id_can_bo]) && $val.id_hoc_ham == $danhmuc['hocham'][$canbo.id_can_bo]}selected{/if}>
                         {$val.hoc_ham}
                     </option>
                     {/foreach}
                 </select>
             </div>
             <div class="col-md-4">
                <label for="donvi">Học vị</label>&nbsp;
                <select class="form-control">
                    <option value="" selected="">--Chọn học vị--</option>
                    {foreach $danhmuc['tbl_hocvi'] as $val}
                    <option value="{$val.id_hoc_vi}" {if isset($danhmuc['hocvi'][$canbo.id_can_bo]) && $val.id_hoc_vi == $danhmuc['hocvi'][$canbo.id_can_bo]}selected{/if}>{$val.hoc_vi}</option>
                    {/foreach}
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
                <label for="donvi">Đang học</label>&nbsp;
                <input type="text" name="donvi" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="donvi">Chức vụ</label>&nbsp;
                <input type="text" name="donvi" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="donvi">Đơn vị</label>&nbsp;
                <input type="text" name="donvi" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
                <label for="txtnoisinh">Nơi sinh</label>&nbsp;
                <input type="text" name="txtnoisinh" class="form-control" value="{$canbo.noi_sinh}">
            </div>

            <div class="col-md-4">
                <label for="txtquequan">Quê quán</label>&nbsp;
                <input type="text" name="txtquequan" class="form-control" value="{$canbo.que_quan}">
            </div>
            <div class="col-md-4">
                <label for="txthktt">Nơi đăng ký hộ khẩu thường trú</label>&nbsp;
                <input type="text" name="txthktt" class="form-control" value="{$canbo.ho_khau}">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
                <label for="donvi">Nơi ở hiện nay</label>&nbsp;
                <input type="text" name="donvi" class="form-control" value="{$canbo.ho_khau}">
            </div>
            <div class="col-md-4">
                <label for="donvi">Ngày KG với trường</label>&nbsp;
                <input type="date" name="donvi" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="donvi">Ngày về trường chính thức</label>&nbsp;
                <input type="date" name="donvi" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
                <label for="donvi">Thời gian bắt đầu tập sự</label>&nbsp;
                <input type="date" name="donvi" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="donvi">Thời gian kết thúc</label>&nbsp;
                <input type="date" name="donvi" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="txtemail">Email</label>&nbsp;
                <input type="text" name="txtemail" class="form-control" value="{$canbo.email}">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
                <label for="txtsdt">Số điện thoại</label>&nbsp;
                <input type="text" name="txtsdt" class="form-control" value="{$canbo.dien_thoai}">
            </div>
            <div class="col-md-4">
                <label for="txtsotaikhoan">Số tài khoản</label>&nbsp;
                <input type="text" name="txtsotaikhoan" class="form-control" value="{$canbo.so_tai_khoan}">
            </div>
            <div class="col-md-4">
                <label for="txtmasothue">Mã số thuế</label>&nbsp;
                <input type="text" name="txtmasothue" class="form-control" value="{$canbo.ma_so_thue}">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
                <label for="txtcmnd">CMND/Thẻ căn cước</label>&nbsp;
                <input type="text" name="txtcmnd" class="form-control" value="{$canbo.so_chung_minh}">
            </div>
            <div class="col-md-4">
                <label for="txtngaycap">Ngày cấp</label>&nbsp;
                <input type="date" name="txtngaycap" class="form-control" value="{$canbo.ngay_cap_cmt}">
            </div>
            <div class="col-md-4">
                <label for="txtnoicap">Nơi cấp</label>&nbsp;
                <input type="text" name="txtnoicap" class="form-control" value="{$canbo.noi_cap_cmt}">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
                <label for="donvi">Số QĐ/Số HĐ</label>&nbsp;
                <input type="text" name="donvi" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="donvi">Ngày QĐ, ngày tuyển dụng, ngày HĐ</label>&nbsp;
                <input type="date" name="donvi" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="donvi">Loại HĐ</label>&nbsp;
                <input type="text" name="donvi" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group text-center">
        <button type="submit" name="action" value="updateData" class="btn btn-sm btn-lg btn-primary">Lưu hồ sơ</button></div>
    </form>
