<div class="container fixdisplay">
    <div class="panel panel-default">
        <div class="panel-heading text-left">
            <h5><b>Danh mục ngạch</b></h5></div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form method="post">
                        <div class="row">
                            <div class="row ttsv">
                                <div class="col-md-5">
                                    <label for="">Ngạch</label>
                                    <span><input type="text" name="txtHoten" class="form-control" value="{(isset($ngach))?$ngach.ngach:NULL }"></span>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Ngạch viết tắt</label>
                                    <span><input type="text" name="txttenvt" class="form-control" value="{(isset($ngach))?$ngach.ngach_vt:NULL }"></span>
                                </div><br>
                                <div class="col-md-3 text-right">
                                    {if isset($ngach)}
                                        <button type="submit" class="btn btn-primary" name="update" value="{$ngach.id_ngach_giang_vien}">Cập nhật</button>
                                        <a href="{base_url('ngach')}" class="btn btn-default">Hủy</a>
                                        <!-- <button type="submit" class="btn btn-danger" name="huy" value="{$ngach.id_ngach_giang_vien}">Hủy</button> -->
                                    {else}
                                        <button type="submit" class="btn btn-primary" name="submit" value="btn1">Thêm</button>
                                    {/if}
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <table class="table table-responsive table-bordered table-striped" id="table_id">
                                <thead>
									<tr>
										<th class="text-center">STT</th>
										<th class="text-center">Tên ngạch</th>
										<th class="text-center">Tên ngạch viết tắt</th>
										<th class="text-center">Tác vụ</th>
									</tr>
								</thead>
								<tbody>
									{foreach $Ngach AS $key => $val}
										<tr>
											<td class="text-center">{$key+1}</td>
											<td>{$val.ngach}</td>
											<td>{$val.ngach_vt}</td>
											<td class="text-center">
                                                <a href="{base_url('ngach')}?id_ngach_giang_vien={$val.id_ngach_giang_vien}" class="btn btn-primary">Sửa</a>
												<!-- <button type="submit" name="suangach" value="{$val.id_ngach_giang_vien}" class="btn btn-primary">Sửa</button> -->
												<button type="submit" name="delete" value="{$val.id_ngach_giang_vien}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa ngạch giảng viên này không?');">Xóa</button>
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
    </div>
    <script type="text/javascript" src="http://localhost/quanlynhansu/public/select2/dist/js/select2.js"></script>
    <script src="http://localhost/quanlynhansu/public/plugin/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#table_id').DataTable({
            ordering: true,
            paging: true,
            "pageLength": 10
        })
    })    
</script>
