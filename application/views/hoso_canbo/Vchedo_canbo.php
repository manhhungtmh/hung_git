        <div class="container-fluid fixdisplay">
        	<br>
        	<div class="col-md-12 text-right">
        		<h3 class="text-right" style="margin-bottom: 27px;font-size: 24px;font-family: auto;margin: 0">Cán bộ: <span style="border-bottom: 1px solid #0d738a;font-size:20px;color: #0246ab;text-transform: uppercase;">{$canbo.ho_ten}</span></h3>
        	</div>
        	<br><br>
        	  <h3 class="text-center" style="    margin-bottom: 27px;font-size: 24px;font-family: auto;"> <span style="border-bottom: #0d738a;font-size: 31px;color: #0246ab;">DANH SÁCH CHẾ ĐỘ</span></h3>
            <div class="panel">
                <div class="panel-body">
                    <table class="table table-hover table-bordered table-striped table-sm" id="table_id">
                        <thead>
                            <tr>
                                <th class="text-center">STT</th>
                                <th class="text-center">Tên cán bộ</th>
                                <th class="text-center" >Tên chế độ</th>
                                <th class="text-center" >Ngày bắt đầu</th>
                                <th class="text-center">Ngày kết thúc</th>
                                {if  $session['maquyen'] ==1}
                                <th class="text-center">Tác vụ</th>
                                {/if}
                            </tr>
                        </thead>
                        <tbody>
                        	{$stt = 1}
                        	{foreach $chedo as $key => $vl}
                                <tr>
                                    <td class="text-center">{$stt++}</td>
                                    	<td>{$danhmuc['tencb'][$vl.id_canbo]}</td>
                                    {foreach $danhmuc['tbl_chedo'] as $key => $vlx}
                                    	{if $vlx.id_chedo == $vl.id_chedo}
											<td >{$vlx.ten_chedo}</td>
                                    	{/if}
                                    {/foreach}
                                    <td class="text-center">{$vl.thoigian_batdau}</td>
                                    <td class="text-center">{$vl.thoigian_ketthuc}</td>
                                    {if  $session['maquyen'] ==1}
                                    <td class="text-center">
                                        <button name="suachedo" value="" class="btn btn-sm btn-primary edit" data-toggle="modal" data-target="#suachedo" title="Sửa" value="" 
                                        loai_chedo = "{$vl.id_chedo}" 
                                        thoigian_batdau = "{$vl.thoigian_batdau}"
                                        thoigian_ketthuc = "{$vl.thoigian_ketthuc}"
                                        id = "{$vl.id}"
                                        >Sửa</button> 
                                        <form method="post" action="" style="display: inline-block;">
                                        	<button name="xoa_chedo" value="{$vl.id}" type="submit" class="btn btn-sm btn-danger remove" title="Xóa" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button>
                                        </form>
                                    </td>
                                    {/if}
                                </tr>
                             {/foreach}
                        </tbody>
                    </table>
                    {if  $session['maquyen'] ==1}
                    <div class="text-left">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#themchedo">Thêm</button>
                    </div>
                    {/if}
                </div>
            </div>
        </div>
        <!-- --------------- MODAL SỬA---------------- -->
    <div id="suachedo" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title text-center"style= "color: green;">Thêm Chế độ Cán bộ</h4>
	      </div>
	      <div class="modal-body">
	        <form action="" method="post">
	        	<div class="form-group">
	        		<div class="row">
	        			<div class="col-md-4">
	        				Chọn loại chế độ
	        			</div>

	        			<div class="col-md-7">
	        				<select name="sua_loai_chedo" class="form-control">
                                 <option value="">---Chọn loại chế độ----</option>
	        					{foreach $dm_chedo as $key => $vl}
	        					<option value="{$vl.id_chedo}" class="loai_chedo">{$vl.ten_chedo}</option>
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
	        				<input type="text" name="sua_thoigianbatdau_chedo" class="form-control datepicker" id="thoigian_batdau_chedo">
	        			</div>
	        		</div>
	        	</div>
	        	<div class="form-group">
	        		<div class="row">
	        			<div class="col-md-4">
	        				Thời gian kết thúc
	        			</div>
	        			<div class="col-md-7">
	        				<input type="text" name="sua_thoigianketthuc_chedo" class="form-control datepicker" id="thoigian_ketthuc_chedo">
	        			</div>
	        		</div>
	        	</div>
	        	<div class="modal-footer">
	      	<button type="submit" class="btn btn-primary"  name="sua_chedo">Cập nhật</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
	      </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div> 
	<!-- --------------MODAL THÊM--------------- -->
		<div id="themchedo" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title text-center"style= "color: green;">Thêm Chế độ Cán bộ</h4>
	      </div>
	      <div class="modal-body">
	        <form action="" method="post">
	        	<div class="form-group">
	        		<div class="row">
	        			<div class="col-md-4">
	        				Chọn loại chế độ
	        			</div>

	        			<div class="col-md-7">
	        				<select name="loai_chedo" class="js-example-basic-multiple">
                                 <option value="" disabled selected>---Chọn loại chế độ----</option>
	        					{foreach $dm_chedo as $key => $vl}
	        					<option value="{$vl.id_chedo}">{$vl.ten_chedo}</option>
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
	        				<input type="text" name="thoigian_batdau_chedo" class="form-control datepicker" required>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="form-group">
	        		<div class="row">
	        			<div class="col-md-4">
	        				Thời gian kết thúc
	        			</div>
	        			<div class="col-md-7">
	        				<input type="text" name="thoigian_ketthuc_chedo" class="form-control datepicker">
	        			</div>
	        		</div>
	        	</div>
	        	<div class="modal-footer">
	      	<button type="submit" class="btn btn-primary" value="them_chedo" name="them_chedo">Xác nhận</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
	      </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
		<script type="text/javascript">
		$(document).ready(function(){
			$('button[name = "suachedo"]').click(function(){
				var id_loaichedo = $(this).attr('loai_chedo');
					$('#thoigian_batdau_chedo').val($(this).attr('thoigian_batdau'));
					$('#thoigian_ketthuc_chedo').val($(this).attr('thoigian_ketthuc'));
					$('button[name = "sua_chedo"]').val($(this).attr('id'));
					$('select[name="sua_loai_chedo"]').val(id_loaichedo);
			});
		});

	</script>