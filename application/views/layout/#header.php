<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tuyển Sinh Đại Học Mở Hà Nội</title>
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
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                           <div class="disang do"></div>
                           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="{base_url('Welcome')}" id="home"><i class="fa fa-home fa-1x" aria-hidden="true" style="font-size: 34px;margin-top: -9px;"></i></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Danh mục <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown">
                                            <a href="canbo"><span class="glyphicon glyphicon-user"></span>&nbsp;Cán bộ</a>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#"><span class="glyphicon glyphicon-user"></span> {$session['tencb']}</a></li>
                      <li style="margin-right: 50px;"><a href="{$url}login"><span class="glyphicon glyphicon-log-in"></span> Đăng xuất</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
            </div>
        </div>
     <div class="container-fluid" style="background: url('/Tuyensinh/public/images/1.jpg') no-repeat center center fixed; background-size: cover; min-height: 580px;">
