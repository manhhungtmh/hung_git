
<div class="container-fluid fixdisplay quatrinhdaotao" style="padding: 30px;">
    <div class="panel panel-default">
        <div class="panel-heading text-left">
            <h5><b>Thông tin cán bộ</b></h5>
        </div>
        <div class="panel-body">
            <div class="row">
            </div>
            <ul class="nav nav-tabs " id="myTab">
                <li class="active"><a data-toggle="tab" href="#lylich"><b>Lý lịch</b></a><li>
                <li class="qtdt"><a data-toggle="tab" href="#quatrinhdaotao"><b>Quá trình đào tạo</b></a></li>
                <li class="qtct"><a data-toggle="tab" href="#quatrinhcongtac"><b>Quá trình công tác</b></a><li>
                <li class="cacchungchi"><a data-toggle="tab" href="#cacchungchi"><b>Các chứng chỉ</b></a><li>
                    <li class="cactochuc"><a data-toggle="tab" href="#cactochuc"><b>Tổ chức</b></a><li>
                <li class="cacquyhoach"><a data-toggle="tab" href="#cacquyhoach"><b>Quy hoạch</b></a><li>
                <li class="khenthuong"><a data-toggle="tab" href="#khenthuong"><b>Khen thưởng</b></a><li>
                <li class="chedo"><a data-toggle="tab" href="#chedo"><b>Chế độ</b></a><li>
                <li class="deantuyensinh"><a data-toggle="tab" href="#deantuyensinh"><b>Đề án tuyển sinh</b></a><li>
                    {if  $session['maquyen'] ==1}
                <li class="xuatbaocao"><a data-toggle="tab" href="#xuatbaocao"><b>Xuất mẫu C2</b></a><li>
                    {/if}
            </ul>

            <div class="tab-content">
                    <div id="lylich" class="tab-pane fade in active">
                        {$lylich} 
                        <!--  hoso_canbo/... -->
                    </div>
                    <div id="quatrinhdaotao" class="tab-pane fade">
                       {$quatrinhdaotao} 
                       <!-- Mẫu form_quatrinhdaotao/... -->
                    </div>
                    <div id="quatrinhcongtac" class="tab-pane fade">
                        {$quatrinhcongtac}
                    </div>
                    <div id="cacchungchi" class="tab-pane fade">
                        {$cacchungchi}
                    </div>
                    <div id="cactochuc" class="tab-pane fade">
                        {$cactochuc}
                    </div>
                    <div id="cacquyhoach" class="tab-pane fade">
                        {$cacquyhoach}
                    </div>
                    <div id="taikhoan" class="tab-pane fade">
                        {$taikhoan}
                    </div>
                    <div id="khenthuong" class="tab-pane fade">
                        {$khenthuong}
                    </div>
                     <div id="chedo" class="tab-pane fade">
                        {$chedo}
                    </div>
                    <div id="deantuyensinh" class="tab-pane fade">
                        {$deantuyensinh}
                    </div>
                    <div id="xuatbaocao" class="tab-pane fade">
                        {$xuatbaocao}
                    </div>
            </div>
        </div>
            <div class="panel-footer">
                <small> <!-- Remove this notice or replace it with whatever you want -->
                    <b>Phát triển và xây dựng bởi <span class="glyphicon glyphicon-heart" style="color: red;" aria-hidden="true"></span> Tổ phát triển Khoa CNTT - Trường ĐH Mở HN</b>
                    <br>
                    <!-- <em>Điện thoại hỗ trợ:</em><strong> 091.760.0946</strong> -->
                </small>
            </div>
        </div>
    </div>
<script type="text/javascript">
$(function(){
    $("#datepickerInput").datepicker(); 
});

</script>
<script type="text/javascript">
    $(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#myTab a[href="' + activeTab + '"]').tab('show');
    }
})
</script>