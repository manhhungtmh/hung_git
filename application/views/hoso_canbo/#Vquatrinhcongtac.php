<div class="container fixdisplay">
    <div class="panel panel-default">
        <div class="panel-heading text-left">
            <h5><b>Quá trình công tác</b></h5>
        </div>
        <div class="panel-body">
            <div class="row">
            </div>

            <table class="table table-hover table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th class="text-center">Chức danh được bổ nhiệm</th>
                        <th class="text-center">Đơn vị khi bổ nhiệm</th>
                        <th class="text-center">Bộ môn được bổ nhiệm</th>
                        <th class="text-center">Tuổi khi được bổ nhiệm</th>
                        <th class="text-center">Ngày QĐ</th>
                        <th class="text-center">Số QĐ</th>
                        <th class="text-center">Ngày hiệu lực</th>
                        <th class="text-center">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    {if isset($info)}
                        {foreach from=$info item=foo}
                            <tr>
                                <td class="text-center">{$foo.id_ton_giao}</td>
                                <td>{$foo.ton_giao}</td>
                                <td class="text-center">
                                    <button name="edit" value="{$foo.id_ton_giao}" class="btn btn-sm btn-primary edit" data-toggle="modal" data-target="#editModal" title="Sửa" value="{$foo.id_ton_giao}">Sửa</button> 
                                    <button name="delete" value="{$foo.id_ton_giao}" type="submit" class="btn btn-sm btn-danger remove" title="Xóa" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button></td>
                            </tr>
                        {/foreach}
                    {else}
                        <tr>
                            <td colspan="8" class="text-center">Không có dữ liệu</td>
                        </tr>
                    {/if}
                </tbody>
            </table>
            <button type="button" class="btn btn-primary btn-sm insert float-right" data-toggle="modal" data-target="#insertModal" title="Thêm">Thêm</button>
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
 
    <!-- Modal edit -->
    <!-- <div class="modal fade" id="editModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Sửa thông tin</h4>
                </div>

                <div class="modal-body">
                    <div class="container">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="a" class="col-md-4 text-right">Tôn giáo</label>
                                <input type="text" id="tongiao" name="tongiao" value="" class="col-md-8 form-control" id="a">
                            </div>
                            <div class="form-group text-center">
                                <button id="update" name="update" value="" type="submit" class="btn btn-primary" >Thêm bản ghi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End modal -->

    <div class="modal fade" id="insertModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Thêm bản ghi</h4>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <form method="post" action="">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label for="txtMDT">Chức danh được bổ nhiệm</label>&nbsp;
                                        <input type="text" name="txtMDT" class="form-control">
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label for="txthoten">Đơn vị khi bổ nhiệm</label>&nbsp;
                                        <input type="text" name="txthoten" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label for="txthoten">Bộ môn được bổ nhiệm</label>&nbsp;
                                        <input type="text" name="txthoten" class="form-control" value="">
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label for="txthoten">Tuổi khi được bổ nhiệm</label>&nbsp;
                                        <input type="text" name="txthoten" class="form-control" value="">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label for="txthoten">Ngày QĐ</label>&nbsp;
                                        <input type="text" name="txthoten" class="form-control" value="">
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label for="txtMDT">Số QĐ</label>&nbsp;
                                        <input type="text" name="txtMDT" class="form-control">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label for="txthoten">Ngày hiệu lực</label>&nbsp;
                                        <input type="text" name="txthoten" class="form-control" value="">
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <label for="txthoten">Khác</label>&nbsp;
                                        <input type="text" name="txthoten" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group text-center">
                             <button type="submit" name="action" value="luuhoso" class="btn btn-sm btn-primary">Lưu hồ sơ</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal -->

<!-- Lay thong tin khi update -->
<!-- <script type="text/javascript">
    $(document).ready(()=>{
        // event edit
        $("table").on("click",".edit",function(e){
            e.preventDefault();
            var id = $(this).val();
            // Dat gia tri
            $("#update").val(id);

            $.ajax({
                url: "tongiao",
                type: "post",
                dataTypt: "html",
                data: {
                    action: "select",
                    id: id,
                }
            }).done(function(e){
                data = JSON.parse(e);
                $('#tongiao').val(data.ton_giao);
                $('#tongiao_vt').val(data.ton_giao_vt);
            });
        });
    })
</script> -->

