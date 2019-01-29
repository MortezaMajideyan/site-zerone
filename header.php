<!DOCTYPE html>
<html <?php language_attributes()?> >
<head>
    <meta charset="UTF-8">
    <title><?php wp_title() ?></title>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
   <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/bootstrap/css/bootstrap-rtl.min.css';?>"> --!>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style.css';?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/base-css.css';?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/font-awesome.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/responsive.css'; ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/bootstrap/css/bootstrapCopy.min.css';?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri().'/js/script.js'?>"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 70%;
            margin: auto;
        }
    </style>

</head>
<body >
    <div id="tool" style="transition: 0.4s;height: fit-content" >
        <form method="get" action="<?php echo bloginfo('url'); ?>" class="search">
            <div class="search-pnel" id="search-panel">
            <input name="s" type="text" class="search-input flr" placeholder="عبارت مورد نظر خود را سرچ نمایید..."/>
            <input type="submit" value="" class="srch fll" onclick="hide_search()" id="imgclosesearch" />
            </div>
        </form>
        <div style="width: 100%;height: 64px;background-color: ##fafbfd;;transition: all 300ms;border-top: 3px solid #aaf;border-bottom: 1.5px solid #eee" id="social">
            <img src="<?php echo get_template_directory_uri().'/images/search.png'?>" class="imgserch fll" onclick="show_search()" >
            <img src="<?php echo get_template_directory_uri().'/images/sni-instagram.png'?>" class="imgsocial fll" id="" >
            <img src="<?php echo get_template_directory_uri().'/images/sni-telegram.png'?>" class="imgsocial fll" id="" >
            <span class="flr" style="line-height: 62px;font-weight: bold;font-family: sas, Arial, sans-serif;padding-right: 10px" id="z"><i><?php echo get_bloginfo( 'description' ) ?></i></span>
            <span class="fll" style="line-height: 62px;font-weight: bold;font-family: sas, Arial, sans-serif;padding-left: 12px" id="tell"><i>09178459003</i></span>
            <span class="fll" style="line-height: 62px;font-weight: bold;font-family: sas, Arial, sans-serif;padding-left: 12px" id="mail"><?php echo get_bloginfo( 'admin_email' ) ?></span>

        </div>
    </div>
<header id="header">

    <div class="head-sub" id="inheader">
        <img src="<?php echo get_template_directory_uri().'/images/index.png' ?>" class="imuser flr" style="clear: right;" id="imguser">
        <span class="text_user" id="text-user">کاربر مهمان</span>
        <ul class="ullist"  id="uml"  >
            <li class="lim"><img src="<?php echo get_template_directory_uri().'/images/index.png' ?>" class="imuser flr">آموزش</li>
            <li class="lim"><img src="<?php echo get_template_directory_uri().'/images/index.png' ?>" class="imuser flr">گرافیک
                <ul>
                    <li>2بعدی
                        <ul style="margin-right: 120px;margin-top: -37px">
                            <li><a href="page1.php">photoshop</a></li>
                            <li>illustrator</li>
                        </ul>
                    </li>
                    <li>3بعدی

                        <ul style="margin-right: 120px;margin-top: -37px">
                            <li><a href="page1.php">photoshop</a></li>
                            <li>illustrator</li>

                        </ul></li>
                </ul>
            </li>
            <li class="lim">
                <img src="<?php echo get_template_directory_uri().'/images/index.png' ?>" class="imuser flr">سایت</li>
            <li class="lim">فروشگاه<img src="<?php echo get_template_directory_uri().'/images/index.png' ?>" class="imuser flr"></li>
            <li class="lim">اخبار<img src="<?php echo get_template_directory_uri().'/images/index.png' ?>" class="imuser flr"></li>

        </ul>
        <img src="<?php echo get_template_directory_uri().'/images/search.png'?>" onclick="scr_top(); show_search()" class="imgserch fll dis"  id="search-btn-head" >
    </div>
</header>

