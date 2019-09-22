<div class="container fixdisplay">
	<div class="panel panel-default">
		<div class="panel-heading text-left">
			<h5><b>Quản lý chứng chỉ cán bộ</b></h5>
		</div>
		<div class="panel-body">
			<form method="post">
				<div class="col-md-12">
					<div class="col-md-4">
						<div class="form-group">
							<label for="">Chứng chỉ</label>
							<select class="form-control" required="" name="data[id_chung_chi]" >
								<option disabled selected>---Chọn chứng chỉ---</option>
								{foreach $danhmuc['tbl_chungchi'] as $key => $val}
								<option value="{$val.id_chung_chi}" {if !empty($timkiem['re'][0]) && $timkiem['re'][0]['id_chung_chi'] == $val.id_chung_chi}selected{/if}>{$val.chung_chi}</option>
								{/foreach}
							</select>
						</div>
					</div>
					<div class="col-md-4">
						<label for="">Thời gian cấp</label>
						<input type="text" name="data[thoi_gian]" class="form-control datepicker" value="{if !empty($timkiem['re'][0])}{$timkiem['re'][0]['thoi_gian']}{/if}" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" autocomplete="off">
					</div>
					<div class="col-md-4">
						<label for="">Nơi cấp</label>
						<input type="text" name="data[noi_cap]" class="form-control" value="{if !empty($timkiem['re'][0])}{$timkiem['re'][0]['noi_cap']}{/if}">
					</div>

					<div class="col-md-12">
						<label for="">Thêm cán bộ chứng chỉ</label>
						<select name="hotencb[]" class="js-example-basic-multiple" multiple="multiple" required>
							{if !empty($timkiem['re'])}
								{foreach $timkiem['re'] as $k => $v}
								<option value="{$v.id_can_bo}" selected>{$danhmuc['tencb'][$v.id_can_bo]} - {$danhmuc['ngaysinh'][$v.id_can_bo]}</option>
								{/foreach}
								{if count($timkiem['cb']) > 0}
									{foreach $timkiem['cb'] as $k => $v}
									<option value="{$v.id_can_bo}">{$v.ho_ten} {$danhmuc['ngaysinh'][$v.id_can_bo]}</option>
									{/foreach}
								{/if}
							{else}
								{foreach $danhmuc['canbo'] as $k => $v}
								<option value="{$v.id_can_bo}">{$v.ho_ten} - {$v.ngay_sinh}</option>
								{/foreach}
							{/if}
						</select>
					</div>
				</div>
				{if !empty($timkiem['re'])}
					<div class="col-md-12 text-center" style="margin-top: 20px;">
						<a href="{base_url('dmchungchi')}" class="btn btn-default">Hủy</a>
						<button class="btn btn-success" type="submit" name="capnhat" value="{$timkiem['re'][0]['id_chung_chi']}" ><i class="fa fa-plus"></i>&nbsp; Cập nhật</button>
					</div>
				{else}
					<div class="col-md-12 text-center" style="margin-top: 20px;">
						<button class="btn btn-primary" type="submit" name="themchungchi" value="1"><i class="fa fa-plus"></i>&nbsp; Thêm chứng chỉ</button>
					</div>
				{/if}
			</div>
		</div>
	</form>
	<div class="col-md-12">
		 <h3 class="text-center" style="    margin-bottom: 27px;font-size: 24px;font-family: auto;"> <span style="border-bottom: 1px solid #0d738a;font-size: 31px;color: #0246ab;">DANH SÁCH CHỨNG CHỈ</span></h3>
	</div>
	<form>
		<table class="table table-condensed table-hover table-bordered">
			<thead>
				<th class="text-center">STT</th>
				<th class="text-center">Tên chứng chỉ</th>
				<th class="text-center">Thời gian cấp</th>
				<th class="text-center">Nơi cấp</th>
				<th class="text-center">Tổng số cán bộ</th>
				<th class="text-center">Tác vụ</th>
			</thead>
			<tbody>
				{$stt=1}
				{foreach $chungchi as $key => $val}
					<tr>
						<td class="text-center"><b>{$stt++}</b></td>
						<td >{$val.chung_chi}</td>
						<td >{if isset($val.cacchungchi.id_can_bo)}{$val.cacchungchi.thoi_gian}{/if}</td>
						<td >{if isset($val.cacchungchi.id_can_bo)}{$val.cacchungchi.noi_cap}{/if}</td>
						<td class="text-center">{if isset($val.demcb)}{$val.demcb}{/if}</td>
						<td class="text-center">
							<a href="{base_url('dmchungchi')}?id={$key}&trangthai=sua" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							<a href="{base_url('dmchungchi')}?id={$key}&trangthai=xoa" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa khen chứng chỉ này không?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</form>

</div>
</div>
