 <br>
 <h3 class="text-center" style="margin-bottom: 27px;font-size: 24px;font-family: auto;"> <span style="border-bottom: #0d738a;font-size: 31px;color: #0246ab;text-transform: uppercase;">Danh sách Cán bộ Quy hoạch</span></h3>
<br> 
<div class="row">
	<form action="" method="post">
		<div class="col-md-3">
			<label for="">Tên Cán bộ</label>
			<div class="form-group">
				<input type="text" class="form-control " name="canbo" autocomplete="off">
			</div>
		</div>
		<div class="col-md-3">
			<label>Năm bắt đầu quy hoạch</label>
			<div class="form-group">
				<input type="text" class="form-control " name="nambatdau" autocomplete="off">
			</div>
		</div>
		<div class="col-md-3">
			<label>Năm kết thúc quy hoạch</label>
			<div class="form-group">
				<input type="text" class="form-control " name="namketthuc" autocomplete="off">
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
			<th class="text-center">Họ và tên</th>
			<th class="text-center">Giới tính</th>
			<th class="text-center">Ngày sinh</th>
			<th class="text-center">Quê quán</th>
			<th class="text-center">Chức vụ</th>
			<th class="text-center">Thời gian bắt đầu quy hoạch</th>
			<th class="text-center">Thời gian kết thúc quy hoạch</th>
			<th class="text-center">Tác vụ</th>
		</tr>
	</thead>
	<tbody >
		{$stt = 1}
		{foreach $danhsach as $key => $vl}
		<tr>
			<td class="text-center"><b>{$stt++}</b></td>
			<td>{$vl.ho_ten}</td>
			<td class="text-center">{$vl.gioi_tinh}</td>
			<td class="text-center">{$vl.ngay_sinh}</td>
			<td>{$vl.que_quan}</td>
			<td>{$vl.chucvu}</td>
			<td class="text-center">{$vl.thoigian_batdau}</td>
			<td class="text-center">{$vl.thoigian_ketthuc}</td>
			<td class="text-center"><a href="{$url}danhsachcanbo?macb={$vl.id_can_bo}&trangthai=1" target="blank" class="btn btn-primary btn-sm">Xem chi tiết</a></td>
		</tr>
		{/foreach}
	</tbody>
</table>
<div class="text-center">
	<span class="label label-warning" style="font-size: 15px;">Chức năng Theo dõi theo nhiệm kì đang trong quá trình xây dựng vui lòng quay lại sau.</span>
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