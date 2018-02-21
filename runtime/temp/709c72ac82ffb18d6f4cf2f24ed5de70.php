<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:71:"C:\wamp64\www\machine\public/../application/index\view\index\index.html";i:1519223572;s:63:"C:\wamp64\www\machine\application\index\view\public\header.html";i:1517122207;s:60:"C:\wamp64\www\machine\application\index\view\public\nav.html";i:1519225899;s:63:"C:\wamp64\www\machine\application\index\view\public\footer.html";i:1517122207;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Machine</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/machine/public/static/css/index.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        /*body*/
        /*{*/
            /*background: url('/machine/public/static/images/repeat.png') repeat;*/
            /*background-position: 50%;*/
        /*}*/
        .wide-background
        {
            width: 100%;
            background-color: #000088;
        }
    </style>
</head>

<body>

<!-- 总div -->
<div class="container">

    <!-- header -->
<div class="row">
    <div class="logo col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <img src="/machine/public/static/images/logo.png" class="img-responsive"/>
    </div>
    <div class="no-padding header-text-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <p class="header-text">Programme Structure and Syllabuses | HKU Home |</p>
        <p>Contact Us | Sitemap</p>

        <div class="input-group col-md-offset-6 col-lg-offset-6 col-sm-offset-6 col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top:0px ;positon:relative">
            <input style="height: 34px" type="text" class="form-control"placeholder="请输入字段名" / >
            <span class="input-group-btn">
               <button class="btn btn-info btn-search" style="height: 34px">查找</button>
            </span>
        </div>
    </div>
</div>
<!-- header -->

<!-- nav -->
<div class="row" id="getWidth">
    <nav class="no-margin navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#example-navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="ul-width nav navbar-nav">
                    <li class="active li-width"><a href="<?php echo url('index/index/index'); ?>">Home</a></li>
                    <li class="li-width" style="width: 13%"><a href="<?php echo url('index/index/index'); ?>">About Us</a></li>
                    <li class="li-width"><a href="<?php echo url('index/beng/index'); ?>">BEng</a></li>
                    <li class="li-width"><a href="#">Research</a></li>
                    <li class="li-width"><a href="#">People</a></li>
                    <li class="li-width"><a href="#">Facilities</a></li>
                    <li class="li-width"><a href="#">Events</a></li>
                    <li class="li-width"><a href="#">Students</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- nav -->

    <div class="long-background"></div>
    <!-- Carousel -->
    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
            <!-- 轮播（Carousel）指标 -->
            <div class="slider-text">
                <h3 class="slider-text-title">标题</h3>
                <p class="slider-text-desc"> 文字描述 | 文字描述 | 文字描述 | 文字描述 | 文字描述 |</p>
            </div>
            <ol class="slider-dots carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner">
                <div class="item active" class="slider-container">
                    <img src="/machine/public/static/images/banner1.jpg" class="img-responsive slider-image">
                </div>
                <div class="item">
                    <img src="/machine/public/static/images/banner2.jpg" class="img-responsive slider-image">
                </div>
                <div class="item">
                    <img src="/machine/public/static/images/banner3.jpg" class="img-responsive slider-image">
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel -->

    <!-- news -->
    <div class="news-container row">
        <div class="news-container-2 col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="single-news">
                <div class="news-title">
                    <img src="/machine/public/static/images/news.png" class="img-responsive">
                    <h3 class="news-title-text">Seminar</h3>
                </div>
                <div class="">
                    <h4 class="news-main-title">23 JAN 2018</h4>
                    <p class="news-main-content">A novel cell transmission model for multi-departmental health care systems</p>
                </div>
                <div class="line"></div>

                <div class="">
                    <h4 class="news-main-title">23 JAN 2018</h4>
                    <p class="news-main-content">A novel cell transmission model for multi-departmental health care systems</p>
                </div>
                <div class="line"></div>

                <div class="">
                    <h4 class="news-main-title">23 JAN 2018</h4>
                    <p class="news-main-content">A novel cell transmission model for multi-departmental health care systems</p>
                </div>
                <div class="line"></div>

                <div class="">
                    <h4 class="news-main-title">23 JAN 2018</h4>
                    <p class="news-main-content">A novel cell transmission model for multi-departmental health care systems</p>
                </div>
                <div class="line"></div>

                <div class="">
                    <h4 class="news-main-title">23 JAN 2018</h4>
                    <p class="news-main-content">A novel cell transmission model for multi-departmental health care systems</p>
                </div>
                <div class="line"></div>
            </div>
        </div>

        <div class="news-container-2 col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="single-news">
                <div class="news-title">
                    <img src="/machine/public/static/images/news.png" class="img-responsive">
                    <h3 class="news-title-text">Seminar</h3>
                </div>
                <div class="">
                    <h4 class="news-main-title">23 JAN 2018</h4>
                    <p class="news-main-content">A novel cell transmission model for multi-departmental health care systems</p>
                </div>
                <div class="line"></div>

                <div class="">
                    <h4 class="news-main-title">23 JAN 2018</h4>
                    <p class="news-main-content">A novel cell transmission model for multi-departmental health care systems</p>
                </div>
                <div class="line"></div>

                <div class="">
                    <h4 class="news-main-title">23 JAN 2018</h4>
                    <p class="news-main-content">A novel cell transmission model for multi-departmental health care systems</p>
                </div>
                <div class="line"></div>

                <div class="">
                    <h4 class="news-main-title">23 JAN 2018</h4>
                    <p class="news-main-content">A novel cell transmission model for multi-departmental health care systems</p>
                </div>
                <div class="line"></div>

                <div class="">
                    <h4 class="news-main-title">23 JAN 2018</h4>
                    <p class="news-main-content">A novel cell transmission model for multi-departmental health care systems</p>
                </div>
                <div class="line"></div>
            </div>
        </div>

        <div class="news-container-2 col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="single-news">
                <div class="news-title">
                    <img src="/machine/public/static/images/news.png" class="img-responsive">
                    <h3 class="news-title-text">Seminar</h3>
                </div>
                <div class="">
                    <h4 class="news-main-title">23 JAN 2018</h4>
                    <p class="news-main-content">A novel cell transmission model for multi-departmental health care systems</p>
                </div>
                <div class="line"></div>

                <div class="">
                    <h4 class="news-main-title">23 JAN 2018</h4>
                    <p class="news-main-content">A novel cell transmission model for multi-departmental health care systems</p>
                </div>
                <div class="line"></div>

                <div class="">
                    <h4 class="news-main-title">23 JAN 2018</h4>
                    <p class="news-main-content">A novel cell transmission model for multi-departmental health care systems</p>
                </div>
                <div class="line"></div>

                <div class="">
                    <h4 class="news-main-title">23 JAN 2018</h4>
                    <p class="news-main-content">A novel cell transmission model for multi-departmental health care systems</p>
                </div>
                <div class="line"></div>

                <div class="">
                    <h4 class="news-main-title">23 JAN 2018</h4>
                    <p class="news-main-content">A novel cell transmission model for multi-departmental health care systems</p>
                </div>
                <div class="line"></div>
            </div>
        </div>
    </div>
    <!-- news -->

    <!-- photos -->
    <div class="row" style="margin-bottom: 30px">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <img src="/machine/public/static/images/photo.jpg" class="img-responsive">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <img src="/machine/public/static/images/photo.jpg" class="img-responsive">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <img src="/machine/public/static/images/photo.jpg" class="img-responsive">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <img src="/machine/public/static/images/photo.jpg" class="img-responsive">
        </div>
    </div>
    <!-- photos -->
</div>
<!-- 总div -->
</body>

<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="/machine/public/static/js/common.js"></script>
</html>