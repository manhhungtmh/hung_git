<div class="container fixdisplay">
    <div class="panel panel-default">
        <div class="panel-heading text-left">
            <h5><b>Quản lý khen thưởng</b></h5></div>
        <div class="panel-body">
            <form method="post">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="">Tiêu đề khen thưởng</label>
                        <input type="text" class="form-control" name="data[tieudekhenthuong]" required="" value="{if !empty($get_suakt)}{$get_suakt[0]['tieudekhenthuong']}{/if}">
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="">Năm bắt đầu khen thưởng</label>
                    <select class="form-control js-example-basic-multiple" name="data[nambd]">
                        <option selected disabled>---Chọn năm bắt đầu---</option>
                        {for $i= date('Y') to 1900 step $i-1}
                        <option value="{$i}" {if !empty($get_suakt) && $get_suakt[0]['nambd'] == $i}selected{/if}>{$i}</option>
                        {/for}
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="">Năm kết thúc khen thưởng</label>
                    <select class="form-control js-example-basic-multiple" name="data[namkt]">
                        <option selected disabled>---Chọn năm kết thúc---</option>
                        {for $i= date('Y') + 10 to 1900 step $i-1}
                        <option value="{$i}" {if !empty($get_suakt) && $get_suakt[0]['namkt'] == $i}selected{/if}>{$i}</option>
                        {/for}
                    </select>
                </div>
                <div class="col-md-1" style="margin-top: 25px;">
                      <button type="submit" class="btn btn-primary" name="themkhenthuong" value="{if !empty($get_suakt)}suakhenthuong{else}themkhenthuong{/if}"><i class="fa fa-plus"></i>&nbsp;{if !empty($get_suakt)}Cập nhật{else}Thêm{/if}</button>
                      {if !empty($get_suakt)}
                            <a href="{base_url('dmkhenthuong')}" class="btn btn-default" style="margin-top: 10px; width: 98px;">Hủy</a>
                      {/if}
                </div>
            </form>
            <br>
            <div class="col-md-12">
             <h3 class="text-center" style="margin-bottom: 27px;font-size: 24px;font-family: auto;"> <span style="border-bottom: 1px solid #0d738a;font-size: 31px;color: #0246ab;text-transform: uppercase;">Danh sách tiêu đề khen thưởng</span></h3>
            </div>
            <form>
                <table class="table table-condensed table-hover table-bordered">
                    <thead>
                        <th class="text-center">STT</th>
                        <th class="text-center">Tên tiêu đề khen thưởng</th>
                        <th class="text-center">Năm bắt đầu khen thưởng</th>
                        <th class="text-center">Năm kết thúc khen thưởng</th>
                        <th class="text-center">Tác vụ</th>
                    </thead>
                    <tbody>
                        {foreach $getkhenThuong as $key => $val}
                            <tr>
                                <td class="text-center"><b>{$key+1}</b></td>
                                <td>{$val.tieudekhenthuong}</td>
                                <td class="text-center">{$val.nambd}</td>
                                <td class="text-center">{$val.namkt}</td>
                                <td class="text-center">
                                    <a href="{base_url('dmkhenthuong')}?id={$val.id}&trangthai=suakhenthuong" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a href="{base_url('dmkhenthuong')}?id={$val.id}&trangthai=xoakhenthuong" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
<div class="panel-footer">
    <small>
        <b>Phát triển và xây dựng bởi <span class="glyphicon glyphicon-heart" style="color: red;" aria-hidden="true"></span> Tổ phát triển Khoa CNTT - Trường ĐH Mở HN</b>
        <br>
    </small>
</div>
</div>
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