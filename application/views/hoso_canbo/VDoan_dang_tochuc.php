        <div class="container-fluid fixdisplay">
        	<br>
        	<div class="col-md-12 text-right">
        		<h3 class="text-right" style="margin-bottom: 27px;font-size: 24px;font-family: auto;margin: 0">Cán bộ: <span style="border-bottom: 1px solid #0d738a;font-size:20px;color: #0246ab;text-transform: uppercase;">{$canbo.ho_ten}</span></h3>
        	</div>
        	<br><br>
                <h3 class="text-center" style="    margin-bottom: 27px;font-size: 24px;font-family: auto;"> <span style="border-bottom:  #0d738a;font-size: 31px;color: #0246ab;">DANH SÁCH TỔ CHỨC</span></h3>
        	<div class="panel">
        		<div class="panel-body">
        			<table class="table table-hover table-bordered table-striped table-sm" id="table_id">
        				<thead>
        					<tr>
        						<th class="text-center">STT</th>
        						<th class="text-center">Tên cán bộ</th>
        						<th class="text-center" >Chức vụ được bổ nhiệm</th>
								<th class="text-center" >Tổ chức được bổ nhiệm</th>
        						<th class="text-center" >Ngày bắt đầu</th>
        						<th class="text-center">Ngày kết thúc</th>
        						<th class="text-center">Tác vụ</th>
        					</tr>
        				</thead>
        				<tbody>
        					{$stt = 1}
        					{foreach $doandang as $key => $vl}
        					<tr>
        						<td class="text-center">{$stt++}</td>
        						<td>{$danhmuc['tencb'][$vl.id_canbo]}</td>
        						<td>{$vl.chucvu}</td>
								<td>{$vl.tochuc}</td>
        						<td class="text-center">{$vl.thoigian_batdau}</td>
        						<td class="text-center">{$vl.thoigian_ketthuc}</td>
        						<td class="text-center">
        							<button name="suadoandang" value="" class="btn btn-sm btn-primary edit" data-toggle="modal" data-target="#suadoandang" title="Sửa" value="" 
        							chucvu 				= "{$vl.chucvu}" 
									tochuc 				= "{$vl.tochuc}"
        							thoigian_batdau 	= "{$vl.thoigian_batdau}"
        							thoigian_ketthuc 	= "{$vl.thoigian_ketthuc}"
        							id = "{$vl.id}"
        							>Sửa</button> 
        							<form method="post" action="" style="display: inline-block;">
        								<button name="xoadoandang" value="{$vl.id}" type="submit" class="btn btn-sm btn-danger remove" title="Xóa" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button>
        							</form>
        						</td>
        					</tr>
        					{/foreach}
        				</tbody>
        			</table>
                                {if  $session['maquyen'] ==1}
        			<div class="text-left">
        				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#themdoandang"><i class="fa fa-plus"></i>&nbsp;Thêm</button>
        			</div>
                                {/if}
        		</div>
        	</div>
        </div>
        <div id="suadoandang" class="modal fade" role="dialog">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h4 class="modal-title text-center"style= "color: green;">Đảng, Công đoàn và các tổ chức đoàn thể</h4>
        			</div>
        			<div class="modal-body">
        				<form action="" method="post">
        					<div class="form-group">
        						<div class="row">
        							<div class="col-md-4">
        							</div>

        						</div>
        					</div>
        					<div class="form-group">
        						<div class="row">
        							<div class="col-md-4">
        								Chức vụ
        							</div>
        							<div class="col-md-7">
        								<input type="text" name="sua_chucvu_doandang" class="form-control" id="sua_chucvu_doandang">
        							</div>
        						</div>
        					</div>
							<div class="form-group">
        						<div class="row">
        							<div class="col-md-4">
        								Tổ chức 
        							</div>
        							<div class="col-md-7">
										<select name="sua_tochuc_doandang" class="form-control" id = "sua_tochuc_doandang">
        									<option value="" disabled="" selected="">---Chọn tên tổ chức----</option>
        									<option value="Đảng ủy">Đảng ủy</option>
											<option value="BCH Công đoàn">BCH Công đoàn</option>
											<option value="Hội đồng trường">Hội đồng trường</option>
											<option value="Đoàn thanh niên">Đoàn thanh niên</option>
											<option value="Hội đồng Khoa học và Đào tạo">Hội đồng Khoa học và Đào tạo</option>
        								</select>
        							</div>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="row">
        							<div class="col-md-4">
        								Thời gian bắt đầu
        							</div>
        							<div class="col-md-7">
        								<input type="text" name="sua_thoigianbatdau_doandang" class="form-control datepicker" id="sua_thoigianbatdau_doandang">
        							</div>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="row">
        							<div class="col-md-4">
        								Thời gian kết thúc
        							</div>
        							<div class="col-md-7">
        								<input type="text" name="sua_thoigianketthuc_doandang" class="form-control datepicker" id="sua_thoigianketthuc_doandang">
        							</div>
        						</div>
        					</div>
        					<div class="modal-footer">
        						<button type="submit" class="btn btn-primary"  name="sua_doandang">Cập nhật</button>
        						<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        					</div>
        				</form>
        			</div>
        		</div>
        	</div>
        </div>  
        <div id="themdoandang" class="modal fade" role="dialog">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h4 class="modal-title text-center"style= "color: green;">Đảng, Công đoàn và các tổ chức đoàn thể</h4>
        			</div>
        			<div class="modal-body">
        				<form action="" method="post">
        					<div class="form-group">
        						<div class="row">
        							<div class="col-md-4">
        							</div>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="row">
        							<div class="col-md-4">
        								Chức vụ 
        							</div>
        							<div class="col-md-7">
        								<input type="text" required="" name="chucvu_doandang" class="form-control " id="chucvu_doandang">
        							</div>
        						</div>
        					</div>
							<div class="form-group">
        						<div class="row">
        							<div class="col-md-4">
        								Tổ chức 
        							</div>
        							<div class="col-md-7">
										<select name="them_tochuc_doandang" class="form-control" >
        									<option value="" disabled="" selected="">---Chọn tên tổ chức----</option>
        									<option value="Đảng ủy">Đảng ủy</option>
											<option value="BCH Công đoàn">BCH Công đoàn</option>
											<option value="Hội đồng trường">Hội đồng trường</option>
											<option value="Đoàn thanh niên">Đoàn thanh niên</option>
											<option value="Hội đồng Khoa học và Đào tạo">Hội đồng Khoa học và Đào tạo</option>
        								</select>
        							</div>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="row">
        							<div class="col-md-4">
        								Thời gian bắt đầu
        							</div>
        							<div class="col-md-7">
        								<input type="text" name="thoigian_batdaudoandang" class="form-control datepicker" id="thoigian_batdaudoandang" required>
        							</div>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="row">
        							<div class="col-md-4">
        								Thời gian kết thúc
        							</div>
        							<div class="col-md-7">
        								<input type="text" name="thoigian_ketthucdoandang" class="form-control datepicker" id="thoigian_ketthucdoandang">
        							</div>
        						</div>
        					</div>
        					<div class="modal-footer">
        						<button type="submit" class="btn btn-primary" value="themdoandang" name="themdoandang">Xác nhận</button>
        						<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        					</div>
        				</form>
        			</div>
        		</div>
        	</div>
        </div>
        <script type="text/javascript">
        	$(document).ready(function(){
        		$('button[name = "suadoandang"]').click(function(){
        			var id_loaiquyhoach = $(this).attr('id');
        			$('#sua_chucvu_doandang').val($(this).attr('chucvu'));
        			$('#sua_thoigianbatdau_doandang').val($(this).attr('thoigian_batdau'));
        			$('#sua_thoigianketthuc_doandang').val($(this).attr('thoigian_ketthuc'));
					$('select[name = "sua_tochuc_doandang').val($(this).attr('tochuc'));
        			$('button[name = "sua_doandang"]').val(id_loaiquyhoach);
        		});
        	});

        </script>