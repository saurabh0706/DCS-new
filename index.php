<?php include 'sidebar.php';?>
            <!--End Header-->
            <!--#main-wrap-->
            <div id="main-wrap">
                <div id="main">
                    <div id="content">
                        <div id="post-6" class="page type-page status-publish hentry">
                            <div id="content_wrap">
                                <div class="content-wrap-inn">
									
                                    <div class="page-portfolio-template page-portfolio-navi-bottom">
										
                                        <div class="galleria bordered" data-crop="true" data-transition="fade" data-interval="4000">
											
											<?php
												include 'db_connect.php';	
											$sql_sliderimg="select * from slider_image where status='Active' ORDER BY priority ASC";
											$result=mysql_query($sql_sliderimg);
											if(mysql_num_rows($result)!=0)
											{	
												while($row=mysql_fetch_array($result))
												{
													//str_replace("world","Peter","Hello world!"); //to replace string portion
											?>
											
											<img src="<? echo str_replace("../","",$row['sliderimg_path']);?>">
                                            
											<?}}else{echo "There is no image in slider.";}?>
                                        </div>
                                    </div>
                                    <!--end page-portfolio-template-->
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
    </body>
</html>