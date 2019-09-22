    <div class="container-fluid fixdisplay">
       <form method="post" action="">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <input type="file" accept="image/*" name="" id="fileAvatar" onchange="return fileValidation()" style="height:300px;width:80%;opacity:0;position:absolute;">
                <img src="{base_url()}public/images/pngtree-user-vector-avatar-png-image_1541962.jpg" id="avatar" style="width:100%;height:auto;padding:30px 40px;">
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Mã đối tượng</label>&nbsp;
                            <input type="text" name="data[ma_dao_tao]" class="form-control" value="{$canbo.ma_dao_tao}">
                        </div>
                        <div class="col-md-6">
                            <label>Họ và tên</label>&nbsp;
                            <input type="text" name="data[ho_ten]" class="form-control" value="{$canbo.ho_ten}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Ngày sinh</label>&nbsp;
                            <input  type="text" class="form-control datepicker" id="ngaythu" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="data[ngay_sinh]" autocomplete="off" value="{$canbo.ngay_sinh}">
                        </div>
                        <div class="col-md-6">
                            <label>Tuổi</label>&nbsp;
                            <input type="text"  class="form-control" value="{date('Y')-date('Y',strtotime({$canbo.ngay_sinh}))}" disabled="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Giới tính</label>
                            <div class="custom-radio">
                                <input type="radio" name="data[gioi_tinh]" value="Nam" {if ($canbo.gioi_tinh == 'Nam')}checked{/if}> Nam&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="data[gioi_tinh]" value="Nữ" {if ($canbo.gioi_tinh == 'Nữ')}checked{/if}> Nữ
                            </div>
                        </div>
                        <div class="col-md-6">
                           <label>Nơi sinh</label>&nbsp;
                           <input type="text" name="data[noi_sinh]" class="form-control" value="{$canbo.noi_sinh}">
                       </div>
                   </div>
               </div>
               <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label>Nơi đăng ký hộ khẩu thường trú</label>&nbsp;
                        <input type="text" name="data[ho_khau]" class="form-control" value="{$canbo.ho_khau}">
                    </div>
                    <div class="col-md-6">
                        <label>Quê quán</label>&nbsp;
                        <input type="text" name="data[que_quan]" class="form-control" value="{$canbo.que_quan}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                 <div class="col-md-6">
                    <label for="donvi">Dân tộc</label>&nbsp;
                    <select name="data[id_dan_toc]" class="js-example-basic-multiple">
                        <option value="" {if (empty($canbo.id_dan_toc))}selected{/if} disabled="">-Chọn dân tộc-</option>
                        {foreach $lylich['dantoc'] as $val}
                        <option {if (isset($canbo.id_dan_toc)) && $canbo.id_dan_toc == $val.id_dan_toc}selected{/if} value="{$val.id_dan_toc}">{$val.dan_toc}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Tôn giáo</label>&nbsp;
                    <select name="data[id_ton_giao]" class="js-example-basic-multiple">
                        <option value="" {if (empty($canbo.id_ton_giao))}selected{/if} disabled="">-Chọn tôn giáo-</option>
                        {foreach $lylich['tongiao'] as $val}
                        <option {if (isset($canbo.id_ton_giao)) && $canbo.id_ton_giao == $val.id_ton_giao}selected{/if} value="{$val.id_ton_giao}">{$val.ton_giao}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
        </div>
    </div>
</div><!-- end row -->

<!-- //////////////////////////////////////////////////////////////////////// --> 
<div class="form-group">
    <div class="row">
        <div class="col-md-4">
            <label>Nơi ở hiện nay</label>&nbsp;
            <input type="text" name="data[noi_o_hiennay]" class="form-control" value="{$canbo.noi_o_hiennay}">
        </div>
        <div class="col-md-4">
            <label>Học hàm - Học vị</label>&nbsp;
            <input type="text" name="" class="form-control" disabled="" value="{if (isset($danhmuc['hocham'][$canbo.id_can_bo]))}{$danhmuc['hocham'][$canbo.id_can_bo]}{/if}  {if (isset($danhmuc['hocvi'][$canbo.id_can_bo]))}-{$danhmuc['hocvi'][$canbo.id_can_bo]}{/if}">
        </div>
                               <!--  <div class="col-md-2">
                                    <label>Học vị</label>&nbsp;
                                        <input type="text" name="" class="form-control" disabled="" value="{if (isset($canbo.hoc_vi))}{$canbo.hoc_vi}{/if}">
                                    </div> -->
                                    <div class="col-md-4">
                                        <label>Đang học</label>&nbsp;
                                        <input type="text" name="data[dang_hoc]" class="form-control" value="{if (isset($canbo.dang_hoc))}{$canbo.dang_hoc}{/if}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">

                               <!--  <div class="col-md-4">
                                    <label>Chức vụ</label>&nbsp;
                                    <input type="text" name="" class="form-control" disabled="" value="{if (isset($canbo.ten_chuc_vu))}{$canbo.ten_chuc_vu}{/if}">
                                </div>
                                <div class="col-md-4">
                                    <label>Đơn vị</label>&nbsp;
                                    <input type="text" name="" class="form-control" disabled="" value="{if (isset($canbo.ten_don_vi))}{$canbo.ten_don_vi}{/if}">
                                </div> -->
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Ngày khoán gọn với trường</label>
                                    <input  type="text" class="form-control datepicker" id="ngaythu" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="data[ngay_KG_voi_truong]" autocomplete="off" value="{$canbo.ngay_KG_voi_truong}">
                                </div>
                                <div class="col-md-4">
                                    <label>Ngày về trường chính thức</label>
                                    <input  type="text" class="form-control datepicker" id="ngaythu" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="data[ngay_ve_truong]" autocomplete="off" value="{$canbo.ngay_ve_truong}">
                                </div>
                                <div class="col-md-4">
                                    <label>Thời gian bắt đầu tập sự</label>
                                    <input  type="text" class="form-control datepicker" id="ngaythu" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="data[tg_batdau_tapsu]" autocomplete="off" value="{$canbo.tg_batdau_tapsu}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Thời gian kết thúc</label>&nbsp;
                                    <input  type="text" class="form-control datepicker" id="ngaythu" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="data[tg_ketthuc_tapsu]" autocomplete="off" value="{$canbo.tg_ketthuc_tapsu}">
                                </div>
                                <div class="col-md-4">
                                 <label>Loại biên chế</label>
                                 <select class="form-control" name="data[bien_che]">
                                    <option selected disabled>---Chọn biên chế---</option>
                                     <option value="Biên chế" {if $canbo.bien_che == "Biên chế"}selected{/if}>Biên chế</option>
                                     <option value="HĐ Làm việc" {if $canbo.bien_che == "HĐ Làm việc"}selected{/if}>HĐ Làm việc</option>
                                     <option value="NĐ 68" {if $canbo.bien_che == "NĐ 68"}selected{/if}>NĐ 68</option>
                                 </select>
                                <!--  <input type="text" name="bienche" class="form-control" value={$canbo.bien_che}> -->
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
                                <label>Ngày cấp</label>
                                <input  type="text" class="form-control datepicker" id="ngaythu" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="data[ngay_cap_cmt]" autocomplete="off" value="{$canbo.ngay_cap_cmt}">
                            </div>
                            <div class="col-md-4">
                                <label>Nơi cấp</label>&nbsp;
                                <input type="text" name="data[noi_cap_cmt]" class="form-control" value="{$canbo.noi_cap_cmt}">
                            </div>
                        </div>
                    </div>

                  <!--   <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Số QĐ/Số HĐ</label>&nbsp;
                                <input type="text" name="" class="form-control" value="{if (isset($canbo.id_hop_dong))}{$canbo.id_hop_dong}{/if}" disabled="">
                            </div>
                            <div class="col-md-4">
                                <label>Ngày QĐ, ngày tuyển dụng, ngày HĐ</label>&nbsp;
                                <input type="text" name="" class="form-control" value="{if (isset($canbo.tg_batdau))}{$canbo.tg_batdau}{/if}" disabled="">
                            </div>
                            <div class="col-md-4">
                                <label>Loại HĐ</label>&nbsp;
                                <input type="text" name="" class="form-control" value="{if (isset($canbo.loai_hop_dong))}{$canbo.loai_hop_dong}{/if}" disabled="">
                            </div>
                        </div>
                    </div> -->
                    <br>
                    <div class="form-group text-center">
                        {if  $session['maquyen'] ==1}
                        <button type="submit" name="luulylich" value="luulylich" class="btn btn-primary">Lưu hồ sơ</button>
                        {/if}
                        <br>
                        <h3>
                        <label class="label label-warning ">Chức năng Liên hệ phản hồi đang trong quá trình xây dựng vui lòng quay lại sau.</label>
                        </h3>
                    </div>
                </form>
            </div>
            <script>
                function fileValidation(){
                    var fileInput = document.getElementById('fileAvatar');
        var filePath = fileInput.value;//lấy giá trị input theo id
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;//các tập tin cho phép
        //Kiểm tra định dạng
        if(!allowedExtensions.exec(filePath)){
            alert('Vui lòng upload các file có định dạng: .jpeg/.jpg/.png/.gif only.');
            fileInput.value = '';
            return false;
        }else{
            //Image preview
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('avatar').src = e.target.result;
                };
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    }
</script>
<style>
    .select2-container--default .select2-selection--single {
        height: 33px;
    }
</style>