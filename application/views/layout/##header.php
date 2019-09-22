
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

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>HOU</span></a>
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
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Hệ thống <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="canbo">Cán bộ</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Danh mục <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                      <li><a href="form_advanced.html">Advanced Components</a></li>
                      <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li>
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
                      <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> <b>Đăng xuất</b></a></li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>



        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          <br>
          <br>
          <br>
          <br>
          <!-- top tiles -->
          <!-- <div class="row tile_count">

          </div>

          <div class="row">


          </div> -->
        
        <!-- /page content -->
