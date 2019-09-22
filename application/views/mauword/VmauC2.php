<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>

<body>
	<style>
		*{
			margin: 0 auto;
		}
		body {
			line-height: 1;
			font-family: "Time News Romans";
			font-size: 1em;
		}
		.text-right{
			text-align: right;
		}
		.text-center{
			text-align: center;
		}
		p{
			font-size: 14px;
			margin-top: 5px;
			margin-bottom: 5px;
		}
		.margin{
			margin-top: 10px;
			margin-bottom: 10px;
		}
		.margin-top{
			margin-top: 15px;
		}
		.clear{
			clear: both;
		}
		.col-md-2{
			width: 16.666666%;
			float: left;
		}
		.col-md-10{
			width: 83.33333333%;
			float: left;
		}
		.anh{
			height: 300px;
			line-height: 100px;
			border:1px solid black;
			text-align: center;
		}
		.margin-left{
			margin-left: 15px;
		}
		.col-md-12{
			width: 100%;
			clear: both;
		}
		table th{
			font-size: 14px;
		}
		table td{
			font-size: 14px;
		}
		.col-md-5{
			width: 41.66666667%;
			float: left;
		}
		.col-md-7{
			width: 58.33333333%;
		}
		.vethoa{
			text-transform: uppercase;
			font-weight: bold;
		}
		.bottom{
			/*margin-bottom: 120px;*/
		}
		.tieude{
			font-size: 16px;
		}
		.p{
			font-size: 16px; margin-top: 10px; margin-bottom: 10px;
		}
	</style>
	<p class="text-right" style="font-size: 17px;"><b>Mẫu 2c-BNV/2008</b></p>

	<p class="tieude">Cơ quan, đơn vị có thẩm quyền quản lý CBCC ………………………………………….</p>
	<p class="tieude">Cơ quan, đơn vị sử dụng CBCC ………………………………………………………….</p>
	<h2 class="text-center margin-top" style="font-size: 22px;">
		<b>SƠ YẾU LÝ LỊCH CÁN BỘ, CÔNG CHỨC</b>
	</h2>
	<table cellpadding="10" cellspacing="0">
		<thead>
			<tr>
				<th style="height: 100px;width: 150px;text-align: center;border: 1px solid #000000;">Ảnh 4x6</th>
				<td style="height: 100px;width:700px; text-align: left;">
					<p class="margin-left" style="font-size: 16px;">1) Họ và tên khai sinh (viết chữ in hoa): <span class="vethoa">{$canbo.ho_ten}</span> </p>
					<p class="margin-left" style="font-size: 16px;">2) Tên gọi khác:</p>
					<p class="margin-left" style="font-size: 16px;">3) Sinh ngày: <b>{date('m', strtotime({$canbo.ngay_sinh}))} tháng {date('d', strtotime({$canbo.ngay_sinh}))} năm {date('Y', strtotime({$canbo.ngay_sinh}))}</b>, Giới tính (nam, nữ):  <b>{$canbo.gioi_tinh}</b></p>
					<p class="margin-left" style="font-size: 16px;">4) Nơi sinh: Xã <b>{$canbo.noi_sinh}</b>
					<p class="margin-left" style="font-size: 16px;">5) Quê quán: <b>{$canbo.que_quan}</b></p>
					</div>
				</td>
			</tr>
		</thead>
	</table>

	<div class="clear"></div>

	<div class="col-md-12 ">
		<p class="p">6) Dân tộc:	<b>{$danhmuc['ten_dantoc'][$canbo.id_dan_toc]}</b> , 7) Tôn giáo: <b>{$canbo.id_ton_giao}</b>	</p>
		<p class="p">8) Nơi đăng ký bộ khẩu thường trú: 	<b>{$canbo.ho_khau}</b> 	</p>
		<p class="p">(Số nhà, đường phố, thành phố, xóm, thôn, xã, huyện, tỉnh) 	</p>
		<p class="p">9) Nơi ở hiện nay: 	</p>
		<p class="p">(Số nhà, đường phố, thành phố, xóm, thôn, xã, huyện, tỉnh)	</p>
		<p class="p">10) Nghề nghiệp khi được tuyển dụng: 	</p>
		<p class="p">11) Ngày tuyển dụng: …/…/……, Cơ quan tuyển dụng: 	</p>
		<p class="p">12) Chức vụ (chức danh) hiện tại: <b>{$doandang.chucvu}</b></p>
		<p class="p">(Về chính quyền hoặc Đảng, đoàn thể, kể cả chức vụ kiêm nhiệm)</p>
		<p class="p">13) Công việc chính được giao: 	</p>
		<p class="p">14) Ngạch công chức (viên chức): <b>{$danhmuc['tenngach'][$ngach.id_ngach_giang_vien]}</b>, Mã ngạch: 	<b>{$ngach.id_ngach_giang_vien}</b></p>
		<p class="p">Bậc lương:……, Hệ số:……, Ngày hưởng:…/…/……, </p>
		<p class="p">Phụ cấp chức vụ:……, Phụ cấp khác: ……</p>
		<p class="p">15.1- Trình độ giáo dục phổ thông (đã tốt nghiệp lớp mấy/thuộc hệ nào):	</p>
		<p class="p">15.2- Trình độ chuyên môn cao nhất:	</p>
		<p class="p">(TSKH, TS, ThS, cử nhân, kỹ sư, cao đẳng, trung cấp, sơ cấp, chuyên ngành)</p>
		<p class="p">15.3- Lý luận chính trị: ………………… 15.4-Quản lý nhà nước:	</p>
		<p class="p">(Cao cấp, trung cấp, sơ cấp và tương đương)	(chuyên viên cao cấp, chuyên viên chính, chuyên viên, cán sự,........)</p>
		<p class="p">15.5- Ngoại ngữ:………………………, 15.6-Tin học: 	</p>
		<p class="p">(Tên ngoại ngữ + Trình độ A, B, C, D......)         (Trình độ A, B, C,.......)</p>
		<p class="p">16) Ngày vào Đảng Cộng sản Việt Nam: <b>{$dangcb.ngaybd}</b>, Ngày chính thức:…/…/……</p>
		<p class="p">17) Ngày tham gia tổ chức chính trị - xã hội: 	</p>
		<p class="p">(Ngày tham gia tổ chức: Đoàn, Hội,..... và làm việc gì trong tổ chức đó)</p>
		<p class="p">18) Ngày nhập ngũ:…/…/……, Ngày xuất ngũ: …/…/…… Quân hàm cao nhất:	</p>
		<p class="p">19) Danh hiệu được phong tặng cao nhất 	</p>
		<p class="p">(Anh hùng lao động, anh hùng lực lượng vũ trang; nhà giáo, thày thuốc, nghệ sĩ nhân dân và ưu tú, …)</p>
		<p class="p">20) Sở trường công tác: 	</p>
		<p class="p">21) Khen thưởng: {if isset($danhmuc['tenkhen_thuong'][$khenthuong.id_thidua_khenthuong]['the_loai'])}<b>{$danhmuc['tenkhen_thuong'][$khenthuong.id_thidua_khenthuong]['the_loai']}{/if}</b>, 22) Kỷ luật: 	</p>
		<p class="p">(Hình thức cao nhất, năm nào)	(về đảng, chính quyền, đoàn thể hình thức cao nhất, năm nào)</p>
		<p class="p">23) Tình trạng sức khoẻ: ……, Chiều cao:…, Cân nặng:….kg, Nhóm máu:……</nào)>
		<p class="p">24) Là thương binh hạng: …./……, Là con gia đình chính sách: 	</p>
		<p class="p">(Con thương binh, con liệt sĩ, người nhiễm chất độc da cam Dioxin)</p>
		<p class="p">25) Số chứng minh nhân dân: <b>{$canbo.so_chung_minh}</b>	Ngày cấp: <b>{$canbo.ngay_cap_cmt} </b></p>
		<p class="p">26) Số sổ BHXH: 	</p>
		<p class="p">27) Đào tạo, bồi dưỡng về chuyên môn, nghiệp vụ, lý luận chính trị, ngoại ngữ, tin học.</p>

		<table  border="1" cellpadding="10" cellspacing="0">
			<thead>
				<th>Tên trường</th>
				<th>Chuyên ngành đào tạo, bồi dưỡng</th>
				<th>Từ tháng, năm - đến tháng, năm</th>
				<th>Hình thức đào tạo</th>
				<th>Văn bằng, chứng chỉ, trình độ gì</th>
			</thead>
			<tbody>
				{for $i=1 to 8}
				<tr>
					<td></td>
					<td></td>
					<td>…/……-…/……</td>
					<td></td>
					<td></td>
				</tr>
				{/for}

			</tbody>
		</table>

		<p class="p">
			Ghi chú: Hình thức đào tạo: Chính quy, tại chức, chuyên tu, bồi dưỡng ..../ Văn bằng: TSKH, TS, Ths, Cử nhân, Kỹ sư ............
		</p>
		<p class="p">
			28) Tóm tắt quá trình công tác
		</p>
		<br>
		<table  border="1" cellpadding="10" cellspacing="0">
			<thead>
				<th>Từ tháng, năm đến tháng, năm</th>
				<th>Chức danh, chức vụ, đơn vị công tác (đảng, chính quyền, đoàn thể, tổ chức xã hội), kể cả thời gian được đào tạo, bồi dưỡng về chuyên môn, nghiệp vụ,......</th>
			</thead>
			<tbody>
				{foreach $quatrinhct as $key => $val}
				{if !empty($val)}
				<tr>
					<td class="text-center">{$val.tg_bat_dau} - {$val.tg_ket_thuc}</td>
					<td>
						{$danhmuc['tenchucdanh'][$chucdanh.id_chuc_danh]}, {$danhmuc['tenchucvu'][$val.id_chuc_vu]},
						{$danhmuc['tendonvi'][$val.id_donvi]},

					</td>
				</tr>
				{/if}
				{/foreach}
			</tbody>
		</table>
		<br>
		<p class="p">
			29) Đặc điểm lịch sử bản thân: 
			- Khai rõ: bị bắt, bị tù (từ ngày tháng năm nào đến ngày tháng năm nào, ở đâu), đã khai báo cho ai, những vấn đề gì? Bản thân có làm việc trong chế độ cũ (cơ quan, đơn vị nào, địa điểm, chức danh, chức vụ, thời gian làm việc ....)
		</p>
		<p class="p">
			{for $i = 1 to 408}.
			{/for}
		</p>
		<p class="p">- Tham gia hoặc có quan hệ với các tổ chức chính trị, kinh tế, xã hội nào ở nước ngoài (làm gì, tổ chức nào, đặt trụ sở ở đâu .........?): </p>
		<p class="p">
			{for $i = 1 to 408}.
			{/for}
		</p>
		<p class="p">- Có thân nhân (Cha, Mẹ, Vợ, Chồng, con, anh chị em ruột) ở nước ngoài (làm gì, địa chỉ)?</p>
		<p class="p">
			{for $i = 1 to 408}.
			{/for}
		</p>
		<p class="p">30) Quan hệ gia đình</p>
		<p class="p">a) Về bản thân: Cha, Mẹ, Vợ (hoặc chồng), các con, anh chị em ruột</p>
		<br>
		<table  border="1" cellpadding="10" cellspacing="0">
			<thead>
				<th>Mối quan hệ</th>
				<th>Họ và tên</th>
				<th>Năm sinh</th>
				<th>Quê quán, nghề nghiệp, chức danh, chức vụ, đơn vị công tác, học tập, nơi ở (trong, ngoài nước); thành viên các tổ chức chính trị - xã hội ........)</th>
			</thead>
			<tbody>
				{for $i=1 to 8}
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				{/for}
			</tbody>
		</table>
		<p class="p">a) Về bên vợ (hoặc chồng): Cha, Mẹ, anh chị em ruột</p>
		<table border="1" cellpadding="10" cellspacing="0">
			<thead>
				<th>Mối quan hệ</th>
				<th>Họ và tên</th>
				<th>Năm sinh</th>
				<th>Quê quán, nghề nghiệp, chức danh, chức vụ, đơn vị công tác, học tập, nơi ở (trong, ngoài nước); thành viên các tổ chức chính trị - xã hội ........)</th>
			</thead>
			<tbody>
				{for $i=1 to 10}
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				{/for}
			</tbody>
		</table>
		<p class="p">31) Diễn biến quá trình lương của cán bộ, công chức</p>
		<table border="1" cellpadding="10" cellspacing="0">
			<tbody>
				<tr>
					<td>Tháng/năm</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Mã ngạch/bậc</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Mã ngạch/bậc</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
		<p class="p">32) Nhận xét, đánh giá của cơ quan, đơn vị quản lý và sử dụng cán bộ, công chức</p>
		<p class="p">
			{for $i = 1 to 600}.
			{/for}
		</p>
	</div>
	<div class="col-md-12">
		<p style="text-align: right;font-size: 17px;">Ngày.....<b>{date('d')}</b>.....tháng.....<b>{date('m')}</b>.....năm .....<b>{date('Y')}</b>.....</p>
	</div>
<!-- 	 style="height: 100px;width: 150px;text-align: center;border: 1px solid #000000;"
style="height: 100px;width:700px; text-align: left;" -->
	<table>
		<thead>
			<tr>
				<td style="height: 100px;width: 250px;text-align: center;">
					<p class="p" style="text-align: center; "><b>Người khai</b></p>
					<p class="p" style="text-align: center;">Tôi xin cam đoan những lời khai trên đây là đúng sự thật
					<p class="p" style="text-align: center;">
						(Ký tên, ghi rõ họ tên)
					</p>
					<br>
					<br>
					<br>
					<br>
					<br>
					<p class="p" style="text-align: center;">
						<b>{$canbo.ho_ten}</b>
					</p>
				</td>
				<td style="height: 100px;width:500px; text-align: center;">
					<div style="margin-bottom: 135px;">
						<p class="p" style="text-align: center;"><b>Thủ trưởng cơ quan, đơn vị quản lý </b></p>
						<p class="p"><b>và sử dụng CBCCVC</b></p>
						<p class="p" style="text-align: center;">
							(Ký tên, ghi rõ họ tên)
						</p>
					</div>
					
				</td>
			</tr>
		</thead>
	</table>
</body>
</html>