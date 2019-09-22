
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="{$url}public/images/DV01.png">

    <title>Hệ thống quản lý Nhân sự trường Đại Học Mở Hà Nội</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{$url}public/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <script src="{$url}public/jquery/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="{$url}public/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{$url}public/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
    <!-- Custom Theme Style -->

    <link href="{$url}vendors/custom.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{$url}/vendors/iCheck/skins/green.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{$url}public/Toastr/toastr.css">
    <script type="text/javascript" src="{$url}public/Toastr/tienganh.js"></script>
    <script type="text/javascript" src="{$url}public/Toastr/toastr.js"></script>
  </head>
<style type="text/css">
    .navbar-nav.navbar-right:last-child{
        margin-right: 0px !important;
    }
</style>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{$url}Welcome" class="site_title"><i class="fa fa-paw"></i> <span>HOU</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{$url}public/images/pngtree-user-vector-avatar-png-image_1541962.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span><i class="fa fa-circle" aria-hidden="true" style="color:#0dca0a"></i> Online</span>
                <h2>{$session['tencb']}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" style="overflow: auto; max-height: 475px;">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Hệ thống <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="canbo">Cán bộ</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Hồ sơ cán bộ <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="danhsachcanbo">Danh sách bán bộ</a></li>
                      <li><a href="">Lý lịch</a></li>
                      <li><a href="quatrinhdaotao">Quá trình đào tạo</a></li>
                      <li><a href="quatrinhdaotao">Quá trình công tác</a></li>
                      <li><a href="">Thông tin nghề nghiệp</a></li>
                      <li><a href="">Các chứng chỉ</a></li>
                      <li><a href="">Đảng, Công đoàn và các tổ chức đoàn thể</a></li>
                    </ul>
                  </li>
                  <li><a href=""><i class="fa fa-home"></i> Quản lý khen thưởng</a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Báo cáo thống kê<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="">Thống kê danh sách công chức, viên chức, người lao động nghỉ không </a></li>
                      <li><a href="">Thống kê nhân sự</a></li>
                      <li><a href="quatrinhdaotao">Báo cáo theo công văn </a></li>
                      <li><a href="quatrinhdaotao">Thống kê công nhận viên chức, NLĐ Trường Đại học Mở</a></li>
                      <li><a href="">Báo cáo dữ liệu hóa đơn qua các năm</a></li>
                      <li><a href="">Thống kê GVTX</a></li>
                      <li><a href="">Thống kê danh hiệu thi đua 2008-2018</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        <!-- top navigation -->
       
        <div class="top_nav">
            <div class="nav_menu">
              <nav>
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                  <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                       <img src="{$url}public/images/pngtree-user-vector-avatar-png-image_1541962.jpg" alt="..."><b>{$session['tencb']}
                      <span class=" fa fa-angle-down"></span></b>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right animated flipInX">
                      <li><a href="javascript:;"> <b>Đổi mật khẩu</b></a></li>
                      <li><a href="{$url}"><i class="fa fa-sign-out pull-right"></i> <b>Đăng xuất</b></a></li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>



        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="">

          <br>
          <br>
          <br>
          <br>
   <!--     <script type="text/javascript">
         $('.right_col').attr('style','min-height:300px !important; height:300px !important;');
       </script> -->