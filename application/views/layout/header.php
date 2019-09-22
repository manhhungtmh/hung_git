<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hệ thống quản lý nhân sự Đại học Mở Hà nội</title>
  <link rel="icon" href="{$url}public/images/DV01.png">
  <link rel="stylesheet" href="{$url}public/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{$url}public/css/style.css">
  <link rel="stylesheet" type="text/css" href="{$url}public/css/animate.css">
  <script src="{$url}public/jquery/jquery.js"></script>
  <script src="{$url}public/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="{$url}public/css/normalize.css" /> -->
  <!-- <link rel="stylesheet" type="text/css" href="{$url}public/css/component.css" /> -->
  <link rel="stylesheet" href="{$url}public/css/dataTables.bootstrap.min.css">
  <script src="{$url}public/jquery/jquery.dataTables.min.js"></script>
  <script src="{$url}public/jquery/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" src="{$url}public/select2/dist/js/select2.js"></script>
  <link rel="stylesheet" type="text/css" href="{$url}public/select2/dist/css/select2.css">
  <link href="{$url}public/plugin/style.css" rel="stylesheet">
  <link href="{$url}public/plugin/bootstrap-datepicker.min.css" rel="stylesheet">
  <script src="{$url}public/plugin/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{$url}public/Toastr/toastr.css">
  <script type="text/javascript" src="{$url}public/Toastr/tienganh.js"></script>
  <script type="text/javascript" src="{$url}public/Toastr/toastr.js"></script>
</head>
<body>
  
<div class="container-fluid menutop" >
  <div class="container fixdisplay" style="padding-top: 0;">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navbar-header">
        <div class="disang do"></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
            {if  $session['maquyen'] ==1}
            
        <a class="navbar-brand" href="{base_url('Welcome')}" id="home">
          <i class="fa fa-home fa-1x" aria-hidden="true" style="font-size: 34px;margin-top: -9px;"></i>
        </a>
            {else}
            
        <a class="navbar-brand" href="#" id="home">
          <i class="fa fa-home fa-1x" aria-hidden="true" style="font-size: 34px;margin-top: -9px;"></i>
        </a>
            {/if}
        
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
          {if  $session['maquyen'] ==1}
            
        <ul class="nav navbar-nav">
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-th-large"></i>&nbsp; Hồ sơ cán bộ 
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="{$url}danhsachcanbo">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp; Danh sách cán bộ
                </a>
              </li>
              <li>
                <a href="{$url}ds_doanthe?tc=all">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Danh sách các tổ chức đoàn thể
                </a>
                
              </li>
              <li>
                <a href="{$url}ds_doanthe?tc=danguy">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Đảng ủy
                </a>
              </li>
              <li>
                <a href="{$url}ds_doanthe?tc=congdoan">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;BCH Công đoàn
                </a>
              </li>
              <li>
                <a href="{$url}ds_doanthe?tc=hoidongtruong">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Hội đồng trường
                </a>
              </li>
              <li>
                <a href="{$url}ds_doanthe?tc=doanthanhnien">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Đoàn thanh niên
                </a>
              </li>
              <li>
                <a href="{$url}ds_doanthe?tc=khoahocdaotao">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Hội đồng Khoa học và Đào tạo
                </a>
              </li>
              <li>
                <a href="{$url}ds_quyhoach">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Danh sách Cán bộ Quy hoạch
                </a>
              </li>
              
            </ul>
          </li>
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;  Quản lý khen thưởng
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="khenthuong">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Thêm cán bộ khen thưởng
                </a>
              </li>
              <li>
                <a href="danhsachkhenthuong">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Danh sách khen thưởng
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp; Báo cáo thống kê
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Thống kê nhân sự
                </a>
              </li>
              <li>
                <a href="quatrinhdaotao">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Thống kê công nhận viên chức, NLĐ Trường Đại học Mở
                </a>
              </li>
              <li>
                <a href="">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Báo cáo dữ liệu HD qua các năm
                </a>
              </li>
              <li>
                <a href="">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Thống kê GVTX
                </a>
              </li>
              <li>
                <a href="">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Thống kê danh hiệu thi đua 2008-2018
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-th-large"></i>&nbsp; Danh mục 
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li class="dropdown">
                <a href="canbo">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Tài khoản
                </a>
                <a href="dmkhenthuong">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Khen thưởng
                </a>
                <a href="chucvu">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Chức Vụ
                </a>
                <a href="hopdong">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Hợp đồng
                </a>
                <a href="donvi">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Đơn Vị
                </a>
                <a href="ngach">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Ngạch
                </a>
                <a href="chungchi">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Chứng chỉ
                </a>
                <a href="{$url}dmchungchi">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Cán bộ chứng chỉ
                </a>
                <a href="{$url}quyhoach">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Quy hoạch
                </a>
                <a href="{$url}chedo">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Chế độ
                </a>
                <a href="{$url}dats">
                  <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;Đề án tuyển sinh
                </a>
              </li>
            </ul>
          </li>
        </ul>
        {/if}
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="{$url}danhsachcanbo">
              <span class="glyphicon glyphicon-user"></span> {$session['tencb']}
            </a>
          </li>
          <li style="margin-right: 50px;">
            <a href="{$url}login">
              <span class="glyphicon glyphicon-log-in"></span> Đăng xuất
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>
<div class="container-fluid">
