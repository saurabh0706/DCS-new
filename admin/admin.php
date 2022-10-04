<?php 

include 'admin_sidebar.php';
include 'db_connect.php';
?>
            <!--End Header-->
            <!--#main-wrap-->
            <div id="main-wrap">
                <div id="main">
                    <div id="content">
                        <div id="post-6" class="page type-page status-publish hentry">
                            <div id="content_wrap" class="">
                                    <div class="content-wrap-inn ">
                                        <div class="container">
                                            <div class="title-bar-wrap " id="title-bar">
                                                <div id="title-wrap">
                                                    <div class="title-wrap-inn">
                                                        <div id="main-title">
                                                            <h1 class="main-title pull-right">WELCOME <b class="theme-color-6"><? echo strtoupper($_SESSION['adminname']);?></b></h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End #title-wrap-->
                                            </div>
                                            <!--End #title-bar-wrap"-->
                                        </div>
										<div class="container">
                                                <div class="row-fluid">
                                                    <div class="span12 moudlemargin-bottom: 0px;">
                                                        <div class="separator without-title  blank-divider height-80" style="opacity: 1;">
                                                            <a name="20140404-055112-744" class="20140404-055112-744"></a>
                                                            <div class="separator_inn bg-" style="top: 8px; z-index: 0;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="pagebuilder-wrap">
                                            
                                            <div class="container">
                                                <div class="row-fluid">
                                                    <div class="span3 moudle">
                                                        <section class="infrographic bignumber ux-mod-nobg">
														<?php 
																
																$sql_fetchgal="select * from gallery";
																$result= mysql_query($sql_fetchgal);
																if(mysql_num_rows($result)!=0)
																$rowcount=mysql_num_rows($result);
																else
																$rowcount=0;
															?>
                                                            <a href="show_images.php"><div class="bignumber-item post-color-default" data-digit="<? echo $rowcount;?>"><? echo $rowcount;?></div></a>
                                                            <h1 class="infrographic-tit">GALLERY ITEM</h1>
                                                            <p class="infrographic-subtit">Choose better to attract.</p>
                                                        </section>
                                                        <!--End infrographic bignumber-->
                                                    </div>
                                                    <div class="span3 moudle">
                                                        <section class="infrographic bignumber ux-mod-nobg">
														<?php 
																
																$sql_fetchslider="select * from slider_image";
																$result= mysql_query($sql_fetchslider);
																if(mysql_num_rows($result)!=0)
																$rowcount=mysql_num_rows($result);
																else
																$rowcount=0;
															?>
                                                            <a href="show_slider_image.php"><div class="bignumber-item theme-color-7" data-digit="<? echo $rowcount;?>"><? echo $rowcount;?></div></a>
                                                            <h1 class="infrographic-tit">SLIDER IMAGES</h1>
                                                            <p class="infrographic-subtit">These images are appearing on front page.</p>
                                                        </section>
                                                        <!--End infrographic bignumber-->
                                                    </div>
                                                    <div class="span3 moudle">
                                                        <section class="infrographic bignumber ux-mod-nobg">
															<?php 
																
																$sql_fetchcat="select * from fabric_category";
																$result= mysql_query($sql_fetchcat);
																if(mysql_num_rows($result)!=0)
																$rowcount=mysql_num_rows($result);
																else
																$rowcount=0;
															?>
                                                            <a href="show_category.php"><div class="bignumber-item theme-color-5" data-digit="<? echo $rowcount;?>"><? echo $rowcount;?></div></a>
                                                            <h1 class="infrographic-tit">CATEGORIES</h1>
                                                            <p class="infrographic-subtit">Varieties are good for business.</p>
                                                        </section>
                                                        <!--End infrographic bignumber-->
                                                    </div>
                                                    <div class="span3 moudle">
                                                        <section class="infrographic bignumber ux-mod-nobg">
															<?php 
																
																$sql_fetchsoc="select * from social_link where link!=''";
																$result= mysql_query($sql_fetchsoc);
																if(mysql_num_rows($result)!=0)
																$rowcount=mysql_num_rows($result);
																else
																$rowcount=0;
															?>
                                                            <a href="show_social.php"><div class="bignumber-item theme-color-4" data-digit="<? echo $rowcount;?>"><? echo $rowcount;?></div></a>
                                                            <h1 class="infrographic-tit">SOCIAL LINKS</h1>
                                                            <p class="infrographic-subtit">The more you share, the more you grow.</p>
                                                        </section>
                                                        <!--End infrographic bignumber-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row-fluid">
                                                    <div class="span12 moudlemargin-bottom: 0px;">
                                                        <div class="separator without-title  blank-divider height-80" style="opacity: 1;">
                                                            <a name="20140404-055112-744" class="20140404-055112-744"></a>
                                                            <div class="separator_inn bg-" style="top: 8px; z-index: 0;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                    </div>
                                    <!--End content-wrap-inn-->
                                </div>
                            <!--end content_wrap-->
                        </div>
                        <!--end post-->
                    </div>
                    <!--end content-->
                </div>
                <!--End #main-->
            </div>
            <!--End #main-wrap-->
            <div id="hot-close-sidebar-touch">
            </div>
        </div><!--End #wrap-->
        <script type="text/javascript" src="./js/bootstrap.js"></script>
        <script type="text/javascript" src="./js/galleria/galleria-1.3.5.js?ver=1.3.5"></script>
        <script type="text/javascript" src="./js/galleria/themes/classic/galleria.classic.min.js?ver=1.3.5"></script>
        <script type="text/javascript" src="./js/waypoints.min.js"></script>
        <script type="text/javascript" src="./js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="./js/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src="./js/jquery.gray.min.js"></script>
        <script type="text/javascript" src="./js/main.js"></script>
        <script type="text/javascript" src="./js/custom.theme.isotope.js"></script>
        <script type="text/javascript" src="./js/custom.theme.js"></script>
        <script type="text/javascript" src="./js/theme.pagebuilder.js"></script>
		<script type="text/javascript" src="./js/infographic.js"></script>
		<script type="text/javascript">
            jQuery(document).ready(function() {
                var ux_pb = new ThemePageBuilder();
                ux_pb.init();
            });
        </script>
    </body>
</html>