<!DOCTYPE html>
<html lang="en-US">
    <head>
	<?php
session_start();

if(isset($_SESSION['is_login']) and $_SESSION['is_login']==0 or $_SESSION['is_login']=='')
{
header('location:../index.php'); 
?>
<script>window.location.href = '../index.php';</script>
<?php
}
else
{
	$_SESSION['is_login']=1;
}
?>
        <title>Darshan Fabrics | Textile Consultancy</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Favicons -->
        <link rel="shortcut icon" href="#">
        <link rel="apple-touch-icon-precomposed" href="#">
        
        <!-- Google fonts styles -->
        <link rel="stylesheet" id="google-fonts-Roboto-css" href="http://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&amp;ver=3.9.1" type="text/css" media="all">
        <link rel="stylesheet" id="google-fonts-Playfair+Display-css" href="http://fonts.googleapis.com/css?family=Playfair+Display%3Aregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;ver=3.9.1" type="text/css" media="all">

        <!--  styles -->
		<link rel="stylesheet" id="bootstrap-css" href="./styles/custom.css" type="text/css" media="screen">
		<link rel="stylesheet" id="bootstrap-css" href="./styles/ace.min.css" type="text/css" media="screen">
        <link rel="stylesheet" id="bootstrap-css" href="./styles/bootstrap.css" type="text/css" media="screen">
        <link rel="stylesheet" id="font-awesome-css" href="./styles/font-awesome.min.css" type="text/css" media="screen">
        <link rel="stylesheet" id="ux-interface-galleria-classic-css" href="./js/galleria/themes/classic/galleria.classic.css?ver=1.3.5" type="text/css" media="screen">
        <link rel="stylesheet" id="pagebuild-css" href="./styles/pagebuild.css" type="text/css" media="screen">
        <link rel="stylesheet" id="ux-aside-css" href="./styles/style.css" type="text/css" media="screen">
        <link rel="stylesheet" id="icons-css" href="./styles/icons.css" type="text/css" media="screen">
        
        <!-- Jquery Lib version 1.11.0 -->
        <script type="text/javascript" src="./js/jquery.min.js"></script>
		<script type="text/javascript" src="./js/jquery-1.9.1.min.js"></script>
        
        <!-- IE hack -->
        <!--[if lte IE 9]>
        <link rel='stylesheet' id='cssie'  href='./styles/ie.css' type='text/css' media='screen' />
        <![endif]-->
        <!--[if lt IE 9]>
        <script type="text/javascript" src="./js/ie.js"></script>
        <link rel='stylesheet' id='cssie8'  href='./styles/ie8.css' type='text/css' media='screen' />
        <![endif]-->
        <!--[if lte IE 7]>
        <div style="width: 100%;" class="messagebox_orange">Your browser is obsolete and does not support this webpage. Please use newer version of your browser or visit <a href="http://www.ie6countdown.com/" target="_new">Internet Explorer 6 countdown page</a>  for more information. </div>
        <![endif]-->
		
    </head>
    <body class="home page page-id-122 page-template-default  responsive-ux boxed-line aside-layout-ux" style="height: auto;">
        <!-- Page Loading 
        <div class="page-loading visible">
            <div class="page-loading-inn">
                <div class="page-loading-transform">
                    <div class="ux-loading"></div>
                    <div class="ux-loading-transform">
                        <div class="loading-dot1">&nbsp;</div>
                        <div class="loading-dot2">&nbsp;</div>
                    </div>
                    <div class="site-loading-logo centered-ux">Darshan</div>
                </div>
            </div>
        </div>-->

        <!-- Jplayer -->
        <div id="jquery_jplayer" class="jp-jplayer"></div>
        
        <!--Mobild Header meta-->
        <div id="mobile-header-meta">
            <!--Search Form-->
            <!--<form id="search_form" name="" method="get" class="search-form_header" action="http://ximudesign.com/aside/">
                <input type="text" onblur="if (this.value == '') {this.value = 'SEARCH';}" onfocus="if (this.value == 'SEARCH') {this.value = '';}" id="s" name="s" value="SEARCH" class="textboxsearch">
                <span class="submit-wrap">
                    <input type="submit" value="" class="submitsearch" name="submitsearch">
                    <i class="fa fa-long-arrow-right middle-ux"></i>
                </span>
            </form> -->
            <!--Social icons-->
            <div class="social-icons-sidebar">
                <a class="icons-sidebar-unit" href="#" title="Follow us"><i class="fa fa-twitter-square"></i></a>    
                <a class="icons-sidebar-unit" href="#" title="Follow us"><i class="fa fa-facebook-square"></i></a>
                <a class="icons-sidebar-unit" href="#" title=""><i class="fa fa-google-plus-square"></i></a>
                <a class="icons-sidebar-unit" href="#" title=""><i class="fa fa-youtube-square"></i></a>
            </div>
            <div class="mobile-meta-con">
                <div class="copyright">Copyright <a href="index.php" title="Darshan Fabrics">Darshan Fabrics</a></div>
            </div>
            <!--End header-info-mobile-->
        </div>
        <!--End mobile-header-meta-->
        <div id="wrap">
            <!--Sidaber-->
            <aside id="sidebar" class="sidebar_hide">
                <div id="sidebar-trigger">
                    <div class="menu-icon"><i class="icon-m-menu"></i></div>
                </div>
                <!--End sidebar-trigger-->
                <div class="sidebar-main">
                      
                    <!--Logo-->
                    <h1 id="logo"><a href="index.php" title="Darshan Consultancy | Home"><h3><img src="img/d2.png"/></h3></a></h1>

                    <!--Menu-->
                    <nav id="navi" class=" clearfix">
                        <div id="navi_wrap" class="menu-demo-menu-container">
                            <ul class="menu">
                                <li id="menu-item-885" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-122 current_page_item menu-item-has-children">
                                    <a href="#" title="Manage Menu">MANAGE MENUS</a>
                                    <ul class="sub-menu">
                                        <!--<li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="add_menu.php">ADD MENU</a></li>-->
										<li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="show_menu.php">SHOW MENU</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-883" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-883">
                                    <a href="#" title="Manage Category">MANAGE CATEGORY</a>
									<ul class="sub-menu">
                                        <li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="add_category.php">ADD CATEGORY</a></li>
										<li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="show_category.php">SHOW CATEGORY</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-887" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                                    <a href="#" title="Manage Gallery">MANAGE GALLERY</a>
                                   <ul class="sub-menu">
                                        <li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="add_image.php">ADD IMAGE</a></li>
										<li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="show_images.php">SHOW IMAGES</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-882" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-882">
                                    <a href="#" title="Manage Slider">MANAGE SLIDER</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="add_slider_image.php">ADD SLIDER IMAGE</a></li>
										<li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="show_slider_image.php">SHOW SLIDER IMAGE</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-882" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-882">
                                    <a href="#" title="Manage Address">MANAGE ADDRESS</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="add_address.php">ADD ADDRESS</a></li>
										<li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="show_address.php">SHOW ADDRESS</a></li>
                                    </ul>
                                </li>
								<li id="menu-item-882" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-882">
                                    <a href="#" title="Manage Social Link">MANAGE SOCIAL LINKS</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="add_social.php">ADD LINKS</a></li>
										<li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="show_social.php">SHOW LINKS</a></li>
                                    </ul>
                                </li>
								<li id="menu-item-882" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-882">
                                    <a href="logout.php?logout" title="Logout">LOGOUT</a>
                                </li>
                            </ul>
                        </div>
                        <!--End #navi_wrap-->
                    </nav>
                    <!-- End Menu -->
                    <div class="sidebar-bottom-wrap">
                        <!--
						<form id="search_form_1" name="" method="get" class="search-form_header" action="#">
                            <input type="text" onblur="if (this.value == '') {this.value = 'SEARCH';}" onfocus="if (this.value == 'SEARCH') {this.value = '';}" id="search" name="search" value="SEARCH" class="textboxsearch">
                            <span class="submit-wrap"><input type="submit" value="" class="submitsearch" name="submitsearch"><i class="fa fa-long-arrow-right middle-ux"></i></span>
                        </form> -->
                        <!--Social icons-->
                        <div class="social-icons-sidebar">
                            <a class="icons-sidebar-unit" href="#" title="Follow us"><i class="fa fa-twitter-square"></i></a>    
                            <a class="icons-sidebar-unit" href="#" title="Follow us"><i class="fa fa-facebook-square"></i></a>
                            <a class="icons-sidebar-unit" href="#" title=""><i class="fa fa-google-plus-square"></i></a>
                            <a class="icons-sidebar-unit" href="#" title=""><i class="fa fa-youtube-square"></i></a>
                        </div>
                        <!--End Social icons-->
                        <div class="copyright">Copyright <a href="index.php" title="Darshan Fabrics">Darshan Fabrics</a></div><!--End copyright-->
                    </div>
                    <!--END sidebar-bottom-wrap-->
                </div>
                <!--end sidebar-main-->
            </aside>
            <!--Header-->
            <header id="header" class="">
                <h1 id="logo-mobile"><a href="index.php" title="Darshan Fabrics"><img src="img/d2.png"/></a></h1>
            </header>
            <!--End Header-->