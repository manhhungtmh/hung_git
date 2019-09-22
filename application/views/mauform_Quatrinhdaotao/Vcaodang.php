 <div class="col-sm-12">

 	<div class="col-sm-6">
 		<div class="form-group">
 			<label for=""><span class="title-qtdt"><b> Năm tốt nghiệp Cao đẳng</b></span></label>
 			<select name="namtn_cd" class="js-example-basic-multiple" >
 				<option disabled="" selected="">---Năm tốt nghiệp Cao đẳng---</option>
 				{for $i = 1900 to 2050}
 				<option value="{$i}"  {if !empty($data['caodang']) && $data['caodang']['namtotnghiep'] == $i}selected{/if}>{$i}</option>
 				{/for}
 			</select>
 		</div>
 	</div>

 	<div class="col-sm-6">
 		<div class="form-group">
 			<label for=""><span class="title-qtdt"><b> Ngành</b></span></label>
 			<select name="nganh_cd" class="js-example-basic-multiple" >
 				<option disabled="" selected="">---Chọn Ngành---</option>
 				{foreach $danhmuc['tbl_nganh'] as $key => $val}
 				<option value="{$val.id_nganh}" {if !empty($data['caodang']) && $data['caodang']['id_nganh'] == $val.id_nganh}selected{/if}>{$val.nganh}</option>
 				{/foreach}
 			</select>
 		</div>
 	</div>
 	<div class="col-sm-6">
 		<div class="form-group">
 			<label for=""><span class="title-qtdt"><b> Nơi cấp</b></span></label>
 			<input type="text" class="form-control" name="noicap_cd" value="{if !empty($data['caodang'])}{$data['caodang']['noicap']}{/if}">
 		</div>
 	</div>
 </div>