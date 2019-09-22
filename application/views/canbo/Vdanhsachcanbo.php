<div class="panel panel-default">
    <div class="panel-heading text-left">
        <h5><b>Danh sách cán bộ</b></h5></div>
        <br>
         <div class="col-md-12 timkiem">
            <form method="post">
                <div class="col-md-3">
                     <div class="form-group">
                         <label for="">Tên cán bộ</label>
                         <input type="text" class="form-control" name="tencb" value="{if !empty($duieu_tk['tencb'])}{$duieu_tk['tencb']}{/if}">
                     </div> 
                </div>
                 <div class="col-md-3">
                     <div class="form-group">
                       <label for=""><span class="title-qtdt"><b> Ngành</b></span></label>
                       <select name="nganh" class="js-example-basic-multiple" >
                        <option value="">---Tất cả---</option>
                            {foreach $danhmuc['tbl_nganh'] as $key => $val}
                                <option value="{$val.id_nganh}" {if !empty($duieu_tk['nganh']) && $duieu_tk['nganh'] == $val.id_nganh}selected{/if}>{$val.nganh}</option>
                            {/foreach}
                        </select>
                     </div> 
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary" style="margin-top: 22px;" name="timkiem" value="1"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Tìm kiếm</button>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
            <hr>
            <form action="exDanhsachcanbo" method="post">
                <div class="text-center">
                    <button type="submit" class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Xuất danh sách cán bộ</button>
                </div>
            </form>
        <div class="panel-body" style="padding: 40px;">
            <div class="row">
                <table class="table table-bordered" id="table_id">
                    <thead>
                        <tr>
                            <th class="text-center">STT</th>
                            <th class="text-center">Tên cán bộ</th>
                            <th class="text-center">Ngày sinh</th>
                            <th class="text-center">Ngành</th>
                            <th class="text-center">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $getCanbo as $key => $val}
                        <tr>
                            <td class="text-center"><b>{$key+1}</b></td>
                            <td>{$val.ho_ten}</td>
                            <td class="text-center">{$val.ngay_sinh}</td>
                            <td>{if isset($danhmuc['get_nganh'][$val.id_can_bo])}{$danhmuc['get_nganh'][$val.id_can_bo]}{/if}</td>
                            <td class="text-center">
                                <a href="{$url}danhsachcanbo?macb={$val.id_can_bo}&trangthai=1" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp; Xem chi tiết</a></b>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <style>
        .menutop{
            margin-bottom: 60px;
        }
    </style>
    <script type="text/javascript">
        $(function () {
            $('#table_id').DataTable({
                ordering: true,
                paging: true,
                "pageLength": 100
            })
        })
    </script>