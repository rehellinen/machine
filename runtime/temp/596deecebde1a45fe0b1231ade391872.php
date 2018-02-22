<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:71:"C:\wamp64\www\machine\public/../application/index\view\index\event.html";i:1519277943;s:63:"C:\wamp64\www\machine\application\index\view\public\header.html";i:1519275324;s:60:"C:\wamp64\www\machine\application\index\view\public\nav.html";i:1519275540;s:62:"C:\wamp64\www\machine\application\index\view\public\title.html";i:1519230527;s:63:"C:\wamp64\www\machine\application\index\view\public\footer.html";i:1517122207;}*/ ?>
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
        .wide-background
        {
            width: 100%;
            background-color: #000088;
        }
    </style>
</head>

<body data-spy="scroll" data-target="#myScrollspy">

<!-- 总div -->
<div class="container">

    <!-- header -->
<div class="big-nav">
<div class="row">
    <div class="logo col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <img src="/machine/public/static/images/logo.png" class="img-responsive"/>
    </div>
    <div class="no-padding header-text-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <p class="header-text">Programme Structure and Syllabuses | HKU Home |</p>
        <p>Contact Us | Sitemap</p>

        <div class="hidden-xs search-div input-group col-md-offset-6 col-lg-offset-6 col-sm-offset-6 col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top:0px ;positon:relative">
            <input style="height: 34px" type="text" class="form-control"placeholder="请输入字段名" / >
            <span class="input-group-btn">
               <button class="btn btn-info btn-search" style="height: 34px">查找</button>
            </span>
        </div>
    </div>
</div>
<!-- header -->

<!-- nav -->
<div class="row nav-row" id="getWidth">
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
                    <li class="li-about-width"><a href="<?php echo url('index/index/about'); ?>">About Us</a></li>
                    <li class="li-width"><a href="<?php echo url('index/index/beng'); ?>">BEng</a></li>
                    <li class="li-width"><a href="<?php echo url('index/index/research'); ?>">Research</a></li>
                    <li class="li-width"><a href="<?php echo url('index/index/people'); ?>">People</a></li>
                    <li class="li-width"><a href="<?php echo url('index/index/facilities'); ?>">Facilities</a></li>
                    <li class="li-width"><a href="<?php echo url('index/index/event'); ?>">Events</a></li>
                    <li class="li-width"><a href="<?php echo url('index/index/students'); ?>">Students</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
</div>
<!-- nav -->

    <div class="short-background hidden-xs"></div>

<!-- photos -->
<div class="photo-text-container hidden-xs">
    <div class="col-lg-6">
        <img class="title-photo" src="/machine/public/static/images/subtitle.jpg" />
    </div>
    <p class="title-text">People</p>
</div>
<!-- photos -->


    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" id="myScrollspy">
            <ul class="nav nav-tabs nav-stacked hidden-xs" data-spy="affix" data-offset-top="350">
                <li class="active hidden-xs"><a href="#section-1">Events</a></li>
                <li class="hidden-xs"><a href="#section-2">Seminar</a></li>
                <li class="hidden-xs"><a href="#section-3">Contest</a></li>
                <li class="hidden-xs"><a href="#section-4">Newsletter</a></li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <h2 id="section-1">Events</h2>
            <div class="row facilities">
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                    <img src="/machine/public/static/images/facilities.jpg" class="img-responsive facilities-image">
                </div>
                <div class="facilities-info col-xs-12 col-sm-7 col-md-7 col-lg-7">
                    <p class="date-margin detail-text"><span class="colored-text">26 NOV 2017</span></p>
                    <p class="detail-text event-detail"><span class="colored-text">Date:</span> 24 - 26 November 2017</p>
                    <p class="detail-text"><span class="colored-text">Venue:</span> Cyberport, Hong Kong</p>
                    <hr>
                    <p>IMSE Students win the Champion of the “Maritime & Logistics Hackathon 2017” (Date: 24-26 November 2017)</p>
                </div>
                <hr>
            </div>
            <hr>

            <h2 id="section-2">Seminar</h2>
            <div class="row facilities">
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                    <img src="/machine/public/static/images/facilities.jpg" class="img-responsive facilities-image">
                </div>
                <div class="facilities-info col-xs-12 col-sm-7 col-md-7 col-lg-7">
                    <p class="date-margin detail-text"><span class="colored-text">26 NOV 2017</span></p>
                    <p class="detail-text event-detail"><span class="colored-text">Date:</span> 24 - 26 November 2017</p>
                    <p class="detail-text"><span class="colored-text">Venue:</span> Cyberport, Hong Kong</p>
                    <hr>
                    <p>IMSE Students win the Champion of the “Maritime & Logistics Hackathon 2017” (Date: 24-26 November 2017)</p>
                </div>
                <hr>
            </div>
            <hr>

            <h2 id="section-3">Contest</h2>
            <div class="row facilities">
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                    <img src="/machine/public/static/images/facilities.jpg" class="img-responsive facilities-image">
                </div>
                <div class="facilities-info col-xs-12 col-sm-7 col-md-7 col-lg-7">
                    <p class="date-margin detail-text"><span class="colored-text">26 NOV 2017</span></p>
                    <p class="detail-text event-detail"><span class="colored-text">Date:</span> 24 - 26 November 2017</p>
                    <p class="detail-text"><span class="colored-text">Venue:</span> Cyberport, Hong Kong</p>
                    <hr>
                    <p>IMSE Students win the Champion of the “Maritime & Logistics Hackathon 2017” (Date: 24-26 November 2017)</p>
                </div>
                <hr>
            </div>
            <hr>

            <h2 id="section-4">Newsletter</h2>
            <div class="row facilities">
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                    <img src="/machine/public/static/images/facilities.jpg" class="img-responsive facilities-image">
                </div>
                <div class="facilities-info col-xs-12 col-sm-7 col-md-7 col-lg-7">
                    <p class="date-margin detail-text"><span class="colored-text">26 NOV 2017</span></p>
                    <p class="detail-text event-detail"><span class="colored-text">Date:</span> 24 - 26 November 2017</p>
                    <p class="detail-text"><span class="colored-text">Venue:</span> Cyberport, Hong Kong</p>
                    <hr>
                    <p>IMSE Students win the Champion of the “Maritime & Logistics Hackathon 2017” (Date: 24-26 November 2017)</p>
                </div>
                <hr>
            </div>
            <hr>
        </div>
    </div>
    <div style="height: 50px"></div>
</div>
<!-- 总div -->
</body>

<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="/machine/public/static/js/common.js"></script>
</html>