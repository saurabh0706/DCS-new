<?php include 'sidebar.php';?>
            <!--#main-wrap-->
            <div id="main-wrap">
                <div id="main" style="-webkit-transform-origin: 50% 665px;">
                    <div id="content">
                        <div id="post-50" class="post-50 page type-page status-publish hentry">
                            <div class="row-fluid " style="min-height: 799px;">
                                <div id="content_wrap" class="">
                                    <div class="content-wrap-inn ">
                                        
                                        <div class="pagebuilder-wrap">
                                            <div class="fullwrap_moudle">
                                                <div class="row-fluid">
                                                    <div id="" class="fullwidth-wrap parallax" style="background-position: 50% 0px;" data-speed="19">
                                                        <div class="row-fluid">
                                                            <div class="span12 moudle moudle_has_animation animation-default-ux animation-scroll-ux  bottom-space-no  animation_hidden fadeined"
                                                                style="opacity: 1;">
                                                                <!--Portfolio isotope-->
                                                                <div class="row-fluid">
                                                                    <!--Filter-->
                                                                    <div class="clearfix filters filter-floating filter-floating-fixed">
                                                                        <ul>
																		 <li class="active">
                                                                                <a href="#" data-filter="*">All</a>
                                                                            </li>
																		<?php 
																			
																			$sql_fetchcat="select * from fabric_category where status='Active' ORDER BY priority ASC";
													$result=mysql_query($sql_fetchcat);
													if(mysql_num_rows($result)!=0)
													{	$counter=1;
														while($row=mysql_fetch_array($result))
														{
																		?>
                                                                           
                                                                            <li>
                                                                                <a data-filter="<? echo ".".$row['category_name'];?>" href="#"><? echo ucwords($row['category_name']);?></a>
                                                                            </li>
                                                                            <?php }}
																			else
																			{?>
																			<li>
                                                                                <a href="#"><? echo "No category added yet!";?></a>
                                                                            </li>
																			<?}?>
                                                                        </ul>
                                                                        <div class="filter-floating-triggle hidden-phone">
                                                                            <i class="fa fa-filter"></i>
                                                                        </div>
                                                                    </div><!--End filter-->
                                                                    <div class="container-isotope clear" data-post="20140424-122148-321">
                                                                        <div id="isotope-load" style="display: none;">
                                                                            <div class="ux-loading"></div>
                                                                            <div class="ux-loading-transform">
                                                                                <div class="loading-dot1">&nbsp;</div>
                                                                                <div class="loading-dot2">&nbsp;</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="isotope masonry less-space isotope_fade" data-space="0px"
                                                                            data-size="medium">
																			<?php
																			$sql_fetchimg="select * from gallery where status='Active' ORDER BY category_id ASC";
													$result=mysql_query($sql_fetchimg);
													if(mysql_num_rows($result)!=0)
													{	$counter=1;
														while($rows=mysql_fetch_array($result))
														{	
															$sql_fetchcat="select category_name from fabric_category where status='Active' and category_id='".$rows['category_id']."' ORDER BY category_name ASC";
															$rslt=mysql_query($sql_fetchcat);
															$row=mysql_fetch_array($rslt);
																		?>
																			
																			
                                                                            <div class="<? echo $row['category_name'];?> filter_blog filter_portfolio width2 isotope-item container3d animation-default-ux animation-scroll-ux fadeined">
                                                                                <div class="inside card">
                                                                                    <div class="flip_wrap_back back face">
                                                                                        <div class="flip_wrap_back_con centered-ux"
                                                                                           >
                                                                                            <h2>
                                                                                                <a href="image_description.php?imgid=<? echo $rows['img_id'];?>"><?php echo strtoupper($rows['tagline']);?></a>
                                                                                            </h2>
                                                                                            <ul class="hover_thumb_wrap">
                                                                                                <li class="hover_thumb_unit"><a
                                                                                                    href="<?php echo "admin/".$rows['link'];?>"
                                                                                                    title="" class="imgwrap lightbox"
                                                                                                    data-rel="post671"><img
                                                                                                        src="<?php echo "admin/".$rows['link'];?>"></a></li>
                                                                                             <!--   <li class="hover_thumb_unit"><a
                                                                                                    href="<?php echo "admin/".$rows['link'];?>"
                                                                                                    title="" class="imgwrap lightbox"
                                                                                                    data-rel="post671"><img
                                                                                                        src="<?php echo "admin/".$rows['link'];?>"></a></li> -->
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="flip_wrap_back_bg post-bgcolor-default" ></div>
                                                                                    </div>
                                                                                    <img src="<?php echo "admin/".$rows['link'];?>" class="front face">
                                                                                </div>
                                                                                <!--End inside-->
                                                                            </div>
                                                                            <?php }}?>
                                                                        </div>
                                                                    </div>
                                                                    <!--End container-isotope-->
                                                                </div>
                                                                <!--End row-fluid-->
                                                            </div>
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
                        </div>
                        <!--end post-->
                    </div>
                    <!--end content-->
                </div>
                <!--End #main-->        
            </div>
            <!--End #main-wrap-->
            <div id="hot-close-sidebar-touch"></div>
        </div><!--End #wrap-->    
        <div id="float-bar" class="hidden-phone">
            <div class="float-bar-inn-wrap">
                <div class="float-bar-inn">
                    <!--Social network share icon-->
                    <div class="float-bar-social-share">
                        <?php 
						include 'db_connect.php';
						$sql_fetchsoc="select * from social_link where status='Active' ORDER BY social_id ASC";
													$result=mysql_query($sql_fetchsoc);
													
													if(mysql_num_rows($result)!=0)
													{	
														while($row=mysql_fetch_array($result))
														{
					?>
                    
                        <button  onclick="javascript:window.open('<? echo $row['link']; ?>');return false;"><i class="fa <? echo $row['social_icon'];?>"></i></button>
                        
                    <?}}?>
                    </div>
                </div>
                <!--End float inn wrap-->
            </div><!--End float inn-->
            <div id="float-bar-triggler"><i class="float-bar-triggler-inn"></i></div> 
        </div>
        <!--End #float bar-->
    
        <script type="text/javascript" src="./js/bootstrap.js"></script>
        <script type="text/javascript" src="./js/waypoints.min.js"></script>
        <script type="text/javascript" src="./js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="./js/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src="./js/jquery.gray.min.js"></script>
		<script type="text/javascript" src="./js/lightbox/js/lightbox.min.js"></script>
        <script type="text/javascript" src="./js/main.js"></script>
        <script type="text/javascript" src="./js/custom.theme.isotope.js"></script>
        <script type="text/javascript" src="./js/custom.theme.js"></script>
        <script type="text/javascript" src="./js/theme.pagebuilder.js"></script>
    </body>
</html>