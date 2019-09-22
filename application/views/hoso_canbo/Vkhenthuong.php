<div class="col-md-12">
   <br>
    <div class="col-md-12 text-right">
       <h3 class="text-right" style="margin-bottom: 27px;font-size: 24px;font-family: auto;margin: 0">Cán bộ: <span style="border-bottom: 1px solid #0d738a;font-size:20px;color: #0246ab;text-transform: uppercase;">{$canbo.ho_ten}</span></h3>
   </div>
<br>
    <h3 class="text-center" style="    margin-bottom: 27px;font-size: 24px;font-family: auto;"> <span style="border-bottom:  #0d738a;font-size: 31px;color: #0246ab;">DANH SÁCH KHEN THƯỞNG</span></h3>
    <form method="post">
        <table class="table table-hover table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th class="text-center">STT</th>
                    <th class="text-center">Tên cán bộ</th>
                    <th class="text-center">Danh hiệu thi đua</th>
                    <th class="text-center" >Thời gian</th>
                    <th class="text-center">Hình thức</th>
                    <th class="text-center">Số quyết định</th>
                    <th class="text-center">Nội dung quyết định</th>
                    <th class="text-center" >Công tác</th>
                    <th class="text-center" >Nhóm khen thưởng</th>
                </tr>
            </thead>
            <tbody>
                {foreach $getkhenthuong as $key => $val}
                <tr>
                    <td class="text-center"><b>{$key+1}</b></td>
                    <td>{$danhmuc['tencb'][$val.macb]}</td>
                    <td>{$val.the_loai}</td>
                    <td>{$val.thoi_gian}</td>
                    <td>{$val.hinh_thuc}</td>
                    <td>{$val.so_quyet_dinh}</td>
                    <td>{$val.nd_quyet_dinh}</td>
                    <td>{$danhmuc['tenct'][$val.id_cong_tac]}</td>
                    <td>{$danhmuc['tennhomkhenthuong'][$val.id_nhomkhenthuong]}</td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </form>

</div>
<script type="text/javascript">
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true
    });
    $(function() {
        $('#table_id').DataTable({
            ordering: true,
            paging: true,
            "pageLength": 10
        })
    })

</script>