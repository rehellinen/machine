<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"C:\wamp64\www\machine\public/../application/index\view\beng\index.html";i:1519224739;s:63:"C:\wamp64\www\machine\application\index\view\public\header.html";i:1517122207;s:60:"C:\wamp64\www\machine\application\index\view\public\nav.html";i:1519225899;s:63:"C:\wamp64\www\machine\application\index\view\public\footer.html";i:1517122207;}*/ ?>
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

    <div class="short-background"></div>

    <!-- photos -->
    <div class="photo-text-container">
        <img src="/machine/public/static/images/subtitle.jpg" />
        <p class="title-text">BEng</p>
    </div>
    <!-- photos -->

</div>
<!-- 总div -->
</body>

<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="/machine/public/static/js/common.js"></script>
</html>