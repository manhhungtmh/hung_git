<div class="">
	<br>
	 <h3 class="text-center" style="margin-bottom: 27px;font-size: 24px;font-family: auto;"> <span style="border-bottom:  #0d738a;font-size: 31px;color: #0246ab;text-transform: uppercase;">Danh sách các tổ chức đoàn thể</span></h3>
	<br> 
	<div class="row">
		<form action="" method="post">
			<div class="col-md-1">
			</div>
			<div class="col-md-3">
				<label for="">Chọn loại biên chế</label>
				<div class="form-group">
					<select name="timkiem_bienche" class="form-control">
						<option value="" {if !empty($vuatimkiem) && $vuatimkiem == ""}selected {/if}>Tất cả</option>
						<option value="Cán bộ cơ hữu" {if !empty($vuatimkiem) && $vuatimkiem == "Cán bộ cơ hữu"} selected {/if}>Cán bộ cơ hữu</option>
						<option value="Cán bộ khoán gọn cấp trường" {if !empty($vuatimkiem) && $vuatimkiem == "Cán bộ khoán gọn cấp trường"} selected {/if}>Cán bộ khoán gọn cấp trường</option>
						<option value="Giảng viên thường xuyên" {if !empty($vuatimkiem) && $vuatimkiem == "Giảng viên thường xuyên"} selected {/if}>Giảng viên thường xuyên</option>
						<option value="Cán bộ khoán gọn cấp đơn vị" {if !empty($vuatimkiem) && $vuatimkiem == "Cán bộ khoán gọn cấp đơn vị"} selected {/if}>Cán bộ khoán gọn cấp đơn vị</option>
						<option value="Giảng viên thỉnh giảng" {if !empty($vuatimkiem) && $vuatimkiem == "Giảng viên thỉnh giảng"} selected {/if}>Giảng viên thỉnh giảng</option>
						<option value="Cán bộ hưu trí" {if !empty($vuatimkiem) && $vuatimkiem == "Cán bộ hưu trí"} selected {/if}>Cán bộ hưu trí</option>
					</select>
				</div>
			</div>
			<div class="col-md-1">
				<label>&nbsp;</label>
				<div class="form-group">
					<button name="timkiem" value="timkiem" class="btn btn-primary" type="submit">Tìm kiếm</button>
				</div>
			</div>
		</form>
	</div>
	<hr>
	<table class="table table-bordered" id="table_id">
		<thead>
			<tr>
				<th class="text-center">STT</th>
				<th class="text-center">MĐT</th>
				<th class="text-center">Họ và tên</th>
				<th class="text-center">Giới tính</th>
				<th class="text-center">Ngày sinh</th>
				<th class="text-center">Chức vụ</th>
				<th class="text-center">Đơn vị</th>
				<th class="text-center">Loại biên chế</th>
				<th class="text-center">Chức danh</th>
				<th class="text-center">Mã ngạch</th>
				<th class="text-center">Trình độ</th>
				<th class="text-center">Tác vụ</th>
			</tr>
		</thead>
		<tbody >
			{$stt = 1}
			{foreach $danhsach as $key => $vl}
			<tr>
				<td class="text-center"><b>{$stt++}</b></td>
				<td>{$vl.ma_dao_tao}</td>
				<td>{$vl.ho_ten}</td>
				<td class="text-center">{$vl.gioi_tinh}</td>
				<td class="text-center">{$vl.ngay_sinh}</td>
				<td>{$vl.chucvu}</td>
				<td></td>
				<td>{$vl.bien_che}</td>
				<td class="text-center"></td>
				<th class="text-center"></th>
				<th class="text-center"></th>
				<td class="text-center"><a href="{$url}danhsachcanbo?macb={$vl.id_can_bo}&trangthai=1" target="blank" class="btn btn-primary btn-sm">Xem chi tiết</a></td>
			</tr>
			{/foreach}
		</tbody>
	</table>
</div>
<script type="text/javascript">
	$(function () {
		$('#table_id').DataTable({
			ordering: true,
			paging: true,
			"pageLength": 100
		})
	})
</script>