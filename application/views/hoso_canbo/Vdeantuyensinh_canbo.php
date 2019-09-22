<div class="container-fluid fixdisplay">
	<br>
	<div class="col-md-12 text-right">
		<h3 class="text-right" style="margin-bottom: 27px;font-size: 24px;font-family: auto;margin: 0">Cán bộ: <span style="border-bottom: 1px solid #0d738a;font-size:20px;color: #0246ab;text-transform: uppercase;">{$canbo.ho_ten}</span></h3>
	</div>
	<br><br>
	<h3 class="text-center" style="    margin-bottom: 27px;font-size: 24px;font-family: auto;"> <span style="border-bottom:#0d738a;font-size: 31px;color: #0246ab;">DANH SÁCH ĐỀ ÁN TUYỂN SINH</span></h3>
	<div class="panel">
		<div class="panel-body">
			<table class="table table-hover table-bordered table-striped table-sm" id="table_id">
				<thead>
					<tr>
						<th class="text-center">STT</th>
						<th class="text-center">Tên cán bộ</th>
						<th class="text-center" >Tên đề án tuyển sinh</th>
						<th class="text-center" >Ngành</th>
						<th class="text-center" >Hệ tuyển sinh</th>
						<th class="text-center" >Ngày bắt đầu</th>
						<th class="text-center">Ngày kết thúc</th>
						{if  $session['maquyen'] ==1}
						<th class="text-center">Tác vụ</th>
						{/if}
					</tr>
				</thead>
				<tbody>
					{$stt = 1}
					{foreach $deantuyensinh as $key => $vl}
					<tr>
						<td class="text-center">{$stt++}</td>
						<td>{$danhmuc['tencb'][$vl.id_canbo]}</td>
						{foreach $danhmuc['tbl_deantuyensinh'] as $key => $vlx}
						{if $vlx.id_deantuyensinh == $vl.id_deantuyensinh}
						<td >{$vlx.ten_deantuyensinh} - {$vlx.nam_deantuyensinh}</td>
						{/if}
						{/foreach}
						{foreach $danhmuc['tbl_nganh'] as $key => $vlx}
						{if $vlx.id_nganh == $vl.id_nganh}
						<td >{$vlx.nganh}</td>
						{/if}
						{/foreach}
						<td class="text-center">
							{foreach $danhmuc['tbl_deantuyensinh'] as $key => $vlx}
							{if $vlx.id_deantuyensinh == $vl.id_deantuyensinh}
							{if $vlx.he_deantuyensinh=="daihoc"}Đại học
							{else if $vlx.he_deantuyensinh=="thacsi"}Thạc sĩ
							{else} Tiến sĩ
							{/if}
							{/if}
							{/foreach}
						</td>
						<td class="text-center">{$vl.thoigian_batdau}</td>
						<td class="text-center">{$vl.thoigian_ketthuc}</td>
						{if  $session['maquyen'] ==1}
						<td class="text-center">
							<button name="suadeantuyensinh" value="" class="btn btn-sm btn-primary edit" data-toggle="modal" data-target="#suadeantuyensinh" title="Sửa" value="" 
							loai_deantuyensinh = "{$vl.id_deantuyensinh}" 
							nganh_deantuyensinh = "{$vl.id_nganh}" 
							thoigian_batdau = "{$vl.thoigian_batdau}"
							thoigian_ketthuc = "{$vl.thoigian_ketthuc}"
							id = "{$vl.id}"
							>Sửa</button> 
							<form method="post" action="" style="display: inline-block;">
								<button name="xoa_deantuyensinh" value="{$vl.id}" type="submit" class="btn btn-sm btn-danger remove" title="Xóa" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button>
							</form>
						</td>
						{/if}
					</tr>
					{/foreach}
				</tbody>
			</table>
			{if  $session['maquyen'] ==1}
			<div class="text-left">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#themdeantuyensinh">Thêm</button>
			</div>
			{/if}
		</div>
	</div>
</div>
<div id="suadeantuyensinh" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-center"style= "color: green;">Thêm Đề án Tuyển sinh Cán bộ</h4>
			</div>
			<div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								Chọn loại đề án tuyển sinh
							</div>

							<div class="col-md-7">
								<select name="sua_loaideantuyensinh" class="form-control">
									<option value="">---Chọn loại đề án tuyển sinh----</option>
									{foreach $dm_deantuyensinh as $key => $vl}
									<option value="{$vl.id_deantuyensinh}" class="loai_deantuyensinh">{$vl.ten_deantuyensinh} - {$vl.nam_deantuyensinh}</option>
									{/foreach}
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								Ngành đề án tuyển sinh
							</div>
							<div class="col-md-7">
								<select name="sua_nganh" class="form-control">
									<option value="">---Chọn ngành đề án tuyển sinh----</option>
									{foreach $danhmuc['tbl_nganh'] as $key => $vl}
									<option value="{$vl.id_nganh}" class="nganh_deantuyensinh">{$vl.nganh}</option>
									{/foreach}
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
								<input type="text" name="sua_thoigianbatdau_doantuyensinh" class="form-control datepicker" id="sua_thoigianbatdau_doantuyensinh">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								Thời gian kết thúc
							</div>
							<div class="col-md-7">
								<input type="text" name="sua_thoigianketthuc_doantuyensinh" class="form-control datepicker" id="sua_thoigianketthuc_doantuyensinh">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary"  name="sua_deantuyensinh">Cập nhật</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div id="themdeantuyensinh" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-center"style= "color: green;">Thêm Đề án Tuyển sinh Cán bộ</h4>
			</div>
			<div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								Chọn loại đề án tuyển sinh
							</div>

							<div class="col-md-7">
								<select name="them_loai_deantuyensinh" class="form-control">
									<option value="" disabled selected>---Chọn loại đề án tuyển sinh----</option>
									{foreach $dm_deantuyensinh as $key => $vl}
									<option value="{$vl.id_deantuyensinh}" class="loai_deantuyensinh">{$vl.ten_deantuyensinh} - {$vl.nam_deantuyensinh}</option>
									{/foreach}
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								Ngành đề án tuyển sinh
							</div>
							<div class="col-md-7">
								<select name="them_nganh" class="form-control">
									<option value="">---Chọn ngành đề án tuyển sinh----</option>
									{foreach $danhmuc['tbl_nganh'] as $key => $vl}
									<option value="{$vl.id_nganh}" class="nganh_deantuyensinh">{$vl.nganh}</option>
									{/foreach}
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
								<input type="text" name="thoigian_batdau_deantuyensinh" class="form-control datepicker" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								Thời gian kết thúc
							</div>
							<div class="col-md-7">
								<input type="text" name="thoigian_ketthuc_deantuyensinh" class="form-control datepicker">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" value="themdeantuyensinh" name="themdeantuyensinh">Xác nhận</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('button[name = "suadeantuyensinh"]').click(function(){
			var id_loaideantuyensinh = $(this).attr('loai_deantuyensinh');
			var id_nganh = $(this).attr('nganh_deantuyensinh');
			$('#chucvu_deantuyensinh').val($(this).attr('chucvu'));
			$('#sua_thoigianbatdau_doantuyensinh').val($(this).attr('thoigian_batdau'));
			$('#sua_thoigianketthuc_doantuyensinh').val($(this).attr('thoigian_ketthuc'));
			$('button[name = "sua_deantuyensinh"]').val($(this).attr('id'));
			$('select[name="sua_loaideantuyensinh"]').val(id_loaideantuyensinh);
			$('select[name="sua_nganh"]').val(id_nganh);
		});
	});
</script>