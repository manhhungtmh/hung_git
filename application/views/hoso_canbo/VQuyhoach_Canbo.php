        <div class="container-fluid fixdisplay">
        	<br>
        	<div class="col-md-12 text-right">
        		<h3 class="text-right" style="margin-bottom: 27px;font-size: 24px;font-family: auto;margin: 0">Cán bộ: <span style="border-bottom: 1px solid #0d738a;font-size:20px;color: #0246ab;text-transform: uppercase;">{$canbo.ho_ten}</span></h3>
        	</div>
        	<br><br>
                  <h3 class="text-center" style="    margin-bottom: 27px;font-size: 24px;font-family: auto;"> <span style="border-bottom:  #0d738a;font-size: 31px;color: #0246ab;">DANH SÁCH QUY HOẠCH</span></h3>
        	<div class="panel">
        		<div class="panel-body">
        			<table class="table table-hover table-bordered table-striped table-sm" id="table_id">
        				<thead>
        					<tr>
        						<th class="text-center">STT</th>
        						<th class="text-center">Tên cán bộ</th>
        						<th class="text-center" >Loại quy hoạch</th>
        						<th class="text-center" >Chức vụ được quy hoạch</th>
        						<th class="text-center" >Ngày bắt đầu</th>
        						<th class="text-center">Ngày kết thúc</th>
                                {if  $session['maquyen'] ==1}
        						<th class="text-center">Tác vụ</th>
                                {/if}
        					</tr>
        				</thead>
        				<tbody>
        					{$stt = 1}
        					{foreach $quyhoach as $key => $vl}
        					<tr>
        						<td class="text-center">{$stt++}</td>
        						<td>{$danhmuc['tencb'][$vl.id_canbo]}</td>
        						{foreach $danhmuc['tbl_quyhoach'] as $key => $vlx}
        						{if $vlx.id_quyhoach == $vl.id_quyhoach}
        						<td >{$vlx.ten_quyhoach}</td>
        						{/if}
        						{/foreach}
        						<td>{$vl.chucvu}</td>
        						<td class="text-center">{$vl.thoigian_batdau}</td>
        						<td class="text-center">{$vl.thoigian_ketthuc}</td>
                                {if  $session['maquyen'] ==1}
        						<td class="text-center">
        							<button name="suaquyhoach" value="" class="btn btn-sm btn-primary edit" data-toggle="modal" data-target="#suaquyhoach" title="Sửa" value="" 
        							loai_quyhoach = "{$vl.id_quyhoach}" 
        							chucvu = "{$vl.chucvu}" 
        							thoigian_batdau = "{$vl.thoigian_batdau}"
        							thoigian_ketthuc = "{$vl.thoigian_ketthuc}"
        							id = "{$vl.id}"
        							>Sửa</button> 
        							<form method="post" action="" style="display: inline-block;">
        								<button name="xoaquyhoach" value="{$vl.id}" type="submit" class="btn btn-sm btn-danger remove" title="Xóa" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button>
        							</form>
        						</td>
                                {/if}
        					</tr>
        					{/foreach}
        				</tbody>
        			</table>
                    {if  $session['maquyen'] ==1}
        			<div class="text-left">
        				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Thêm</button>
        			</div>
                    {/if}
        		</div>
        	</div>
        </div>
        <div id="suaquyhoach" class="modal fade" role="dialog">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h4 class="modal-title text-center"style= "color: green;">Thêm Quy hoạch Cán bộ</h4>
        			</div>
        			<div class="modal-body">
        				<form action="" method="post">
        					<div class="form-group">
        						<div class="row">
        							<div class="col-md-4">
        								Chọn loại đơn vị
        							</div>

        							<div class="col-md-7">
        								<select name="sua_loaiquyhoach" class="form-control">
        									<option value="">---Chọn loại đơn vị----</option>
        									{foreach $dm_quyhoach as $key => $vl}
        									<option value="{$vl.id_quyhoach}" class="loai_quyhoach">{$vl.ten_quyhoach}</option>
        									{/foreach}
        								</select>
        							</div>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="row">
        							<div class="col-md-4">
        								Chức vụ được Quy hoạch
        							</div>
        							<div class="col-md-7">
        								<input type="text" name="sua_chucvu" class="form-control" id="chucvu_quyhoach">
        							</div>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="row">
        							<div class="col-md-4">
        								Thời gian bắt đầu
        							</div>
        							<div class="col-md-7">
        								<input type="text" name="sua_thoigianbatdau" class="form-control datepicker" id="thoigian_batdau">
        							</div>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="row">
        							<div class="col-md-4">
        								Thời gian kết thúc
        							</div>
        							<div class="col-md-7">
        								<input type="text" name="sua_thoigianketthuc" class="form-control datepicker" id="thoigian_ketthuc">
        							</div>
        						</div>
        					</div>
        					<div class="modal-footer">
        						<button type="submit" class="btn btn-primary"  name="sua_quyhoach">Cập nhật</button>
        						<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        					</div>
        				</form>
        			</div>
        		</div>
        	</div>
        </div>  				
        <div id="myModal" class="modal fade" role="dialog">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h4 class="modal-title text-center"style= "color: green;">Thêm Quy hoạch Cán bộ</h4>
        			</div>
        			<div class="modal-body">
        				<form action="" method="post">
        					<div class="form-group">
        						<div class="row">
        							<div class="col-md-4">
        								Chọn loại đơn vị
        							</div>

        							<div class="col-md-7">
        								<select name="loai_quyhoach" class="js-example-basic-multiple">
        									<option value="" disabled selected>---Chọn loại đơn vị----</option>
        									{foreach $dm_quyhoach as $key => $vl}
        									<option value="{$vl.id_quyhoach}">{$vl.ten_quyhoach}</option>
        									{/foreach}
        								</select>
        							</div>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="row">
        							<div class="col-md-4">
        								Chức vụ được Quy hoạch
        							</div>
        							<div class="col-md-7">
        								<input type="text" name="chucvu_quyhoach" class="form-control " required>
        							</div>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="row">
        							<div class="col-md-4">
        								Thời gian bắt đầu
        							</div>
        							<div class="col-md-7">
        								<input type="text" name="thoigian_batdau" class="form-control datepicker" required>
        							</div>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="row">
        							<div class="col-md-4">
        								Thời gian kết thúc
        							</div>
        							<div class="col-md-7">
        								<input type="text" name="thoigian_ketthuc" class="form-control datepicker">
        							</div>
        						</div>
        					</div>
        					<div class="modal-footer">
        						<button type="submit" class="btn btn-primary" value="themquyhoach" name="themquyhoach">Xác nhận</button>
        						<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        					</div>
        				</form>
        			</div>
        		</div>
        	</div>
        </div>

        <script type="text/javascript">
        	$(document).ready(function(){
        		$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        			localStorage.setItem('activeTab', $(e.target).attr('href'));
        		});
        		var activeTab = localStorage.getItem('activeTab');
        		if(activeTab){
        			$('#myTab a[href="' + activeTab + '"]').tab('show');
        		}
        	});
        </script>
        <script type="text/javascript">
        	$(document).ready(function(){
        		$('button[name = "suaquyhoach"]').click(function(){
        			var id_loaiquyhoach = $(this).attr('loai_quyhoach');
        			$('#chucvu_quyhoach').val($(this).attr('chucvu'));
        			$('#thoigian_batdau').val($(this).attr('thoigian_batdau'));
        			$('#thoigian_ketthuc').val($(this).attr('thoigian_ketthuc'));
        			$('button[name = "sua_quyhoach"]').val($(this).attr('id'));
        			$('select[name="sua_loaiquyhoach"]').val(id_loaiquyhoach);
        		});
        	});

        </script>