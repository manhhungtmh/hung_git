<div class="container fixdisplay">
    <div class="panel panel-default">
        <div class="panel-heading text-left">
            <h5><b>Danh mục hợp đồng</b></h5></div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form method="post">
                        <div class="row">
                            <div class="row ttsv">
                                <div class="col-md-5">
                                    <label for="">Hợp Đồng</label>
                                    <span><input type="text" name="txtHoten" class="form-control" value="{(isset($hd))?$hd.hop_dong:NULL }"></span>
                                </div>
                                <div class="col-md-4">
    						    	<label for="">Loại Hợp Đồng</label>
    						    	<select style="width: 100%;height: 30px;"  name="loai_hop_dong" value="" required="">
                                        <option value="" selected="" disabled="">---Loại hợp đồng---</option>
    						    		{foreach $loaihopdong AS $key=>$val}
    						    			<option value="{$val.id_loai_hop_dong}" {if !empty($hd) && $hd.id_loai_hop_dong == $val.id_loai_hop_dong} selected="" {/if}>{$val.loai_hop_dong}</option>
    						    		{/foreach}
    						    	</select>
    					  		</div><br>
                                <div class="col-md-3 text-right">
                                    {if isset($hd)}
                                        <button type="submit" class="btn btn-primary" name="update" value="{$hd.id_hop_dong}">Cập nhật</button>
                                        <button type="submit" class="btn btn-danger" name="huy" value="{$hd.id_hop_dong}">Hủy</button>
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
    									<th class="text-center">Tên hợp đồng</th>
    									<th class="text-center">Loại hợp đồng</th>
    									<th class="text-center">Tác vụ</th>
    								</tr>
    							</thead>
    							<tbody>
    								{foreach $hopdong AS $key => $val}
    									<tr>
    										<td class="text-center">{$key+1}</td>
    										<td> {$val.hop_dong}</td>
    										<td>{$val.loai_hop_dong}</td>
    										<td class="text-center">
                                                <form method="post">
                                                    <button type="submit" name="suahd" value="{$val.id_hop_dong}" class="btn btn-primary">Sửa</button>
                                                    <button type="submit" name="delete" value="{$val.id_hop_dong}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa hợp đồng này không?');">Xóa</button>
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
        });
        $('select').select2();
    })    
</script>
