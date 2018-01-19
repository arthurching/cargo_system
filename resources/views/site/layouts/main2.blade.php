<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>thempleite - Responsive Website Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="stylesheet" type="text/css" href="plugins/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="plugins/owl-carousel/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="plugins/onescroll/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="plugins/onescroll/css/component.css" />
    <link rel="stylesheet" type="text/css" href="plugins/headereffects/css/component.css">
    <link rel="stylesheet" type="text/css" href="plugins/headereffects/css/normalize.css" />
    <link href="plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css"
          media="screen" />
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet"
          type="text/css" />
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
    <!-- BEGIN CSS TEMPLATE -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/magic_space.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
    <!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<body>
<div class="main-wrapper">
    <div role="navigation" class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="compressed">
                <div class="navbar-header">
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle"
                            type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                                class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand compressed">
                        <img src="img/logo_condensed.png" alt="" data-src="img/logo_condensed.png"
                             data-src-retina="img/logo2x.png" width="119" height="22" /></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href=".">主頁</a></li>
                        <li><a href="itemform">需求單</a></li>
                        <li><a href="itemstatus">貨品狀態</a></li>
                        <li><a href="userdetail">會員資料</a></li>
                        <li><a href="home">登入</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>


    @yield('content')

    <div class="section white footer">
        <div class="container">
            <div class="p-t-30 p-b-50">
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 xs-m-b-20">
                        <img src="img/logo_condensed.png" alt="" data-src="img/logo_condensed.png"
                             data-src-retina="img/logo2x.png" width="119" height="22" />
                        <br />
                        <br />
                        © Frittt Templates.
                        <br />
                        All Rights Reserved.
                    </div>
                    <div class="col-md-4 col-lg-3 col-sm-4  col-xs-12 xs-m-b-20">
                        <address class="xs-no-padding  col-md-6 col-lg-6 col-sm-6  col-xs-12">
                            32 - Grey Suite<br>
                            Odd Street,<br>
                            NY, USA.
                        </address>
                        <div class="xs-no-padding col-md-6 col-lg-6 col-sm-6">
                            <div>
                                (1) 555 666 9999</div>
                            <a href="javascript:">letstalk@thempleite.com</a>
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-2  col-xs-12 xs-m-b-20">
                        <div class="bold">
                            We Are Hiring</div>
                        Send you resume at <a href="javascript:">careers@thempleite.com</a>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-2  col-xs-12 ">
                        <div class="bold">
                            FOLLOW US</div>
                        <br />
                        <a href="javascript:"><i class="fa fa-facebook fa-2x"></i></a>&nbsp; <a href="javascript:">
                            <i class="fa fa-twitter fa-2x"></i></a>&nbsp; <a href="javascript:"><i class="fa fa-youtube-play  fa-2x">
                            </i></a>&nbsp; <a href="javascript:"><i class="fa fa-github fa-2x"></i></a>&nbsp;
                        <a href="javascript:"><i class="fa fa-dribbble fa-2x"></i></a>&nbsp; <a href="javascript:">
                            <i class="fa fa-pinterest fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BEGIN CORE JS FRAMEWORK -->
<script type="text/javascript" src="plugins/jquery-1.8.3.min.js"></script>
<script src="plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN JS PLUGIN -->
<script src="plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="plugins/modernizr.custom.js"></script>
<script src="plugins/waypoints.min.js"></script>
<script type="text/javascript" src="plugins/parrallax/js/jquery.parallax-1.1.3.js"></script>
<script src="plugins/onescroll/js/classie.js"></script>
<script src="plugins/onescroll/js/cbpScroller.js"></script>
<script type="text/javascript" src="plugins/jquery-nicescroll/jquery.nicescroll.min.js"></script>
<!-- END JS PLUGIN -->
<script>
    new cbpScroller(document.getElementById('cbp-so-scroller'));
</script>
<script type="text/javascript" src="js/core.js"></script>
</body>
</html>
