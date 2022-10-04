<?php include 'sidebar.php';?>
            <!--#main-wrap-->
            <div id="main-wrap">
                <div id="main" style="-webkit-transform-origin: 50% 665px;">
                    <div id="content">
                        <div id="post-671" class="post-671 post type-post status-publish format-gallery has-post-thumbnail hentry category-architecture category-blog category-portfolio tag-architecture-2 tag-photography">
                            <div id="content_wrap" class="">
                               <div class="row-fluid gallery-wrap gallery-wrap-sidebar " style="position: relative;">
                                    <div class="gallery-info-wrap container span4" style="position: fixed; width: 35%;">
                                        <div class="title-bar-wrap " id="title-bar">
                                            <div id="title-wrap">
                                                <div class="title-wrap-inn">
                                                    <div id="main-title">
                                                        <h1 class="main-title">
                                                            IMAGE INFORMATION
                                                        </h1>
                                                        <div class="post-meta">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End #title-wrap-->
                                        </div>
                                        <!--End #title-bar-wrap"-->
                                        <ul class="gallery-info-property span3">
										<?php 
											if(isset($_GET['imgid']))
											{
												$sql_fetchimg="select * from gallery where img_id='".$_GET['imgid']."'";
												$result=mysql_query($sql_fetchimg);
												$row=mysql_fetch_array($result);
											}
										?>
                                            <li>
                                                <span class="gallery-info-property-tit">Tagline:</span>
                                                <span><? echo ucwords($row['tagline']);?></span>
                                            </li>
                                            <li>
                                                <span class="gallery-info-property-tit">Category:</span>
                                                <span>
												<? $sql_fetchcat="select category_name from fabric_category where category_id='".$row['category_id']."'";
												$result=mysql_query($sql_fetchcat);
												$cat=mysql_fetch_array($result);
												echo ucwords($cat['category_name']);
												?>
												</span>
                                            </li>
                                            <li>
                                                <span class="gallery-info-property-tit date">Date: </span>
                                                <span><? echo ucwords($row['date_of_upload']);?></span>
                                            </li>
                                            <li>
                                                <span class="gallery-info-property-tit tag">Photograph by: </span>
                                                <span>Darshan Consultancy Service</span>
                                            </li>
                                        </ul>
                                        <div class="entry">
                                            <p><? echo ucfirst($row['description']);?></p>
                                        </div>
                                        <!--end entry-->
                                    </div>
                                    <!--end gallery-info-wrap -->
                                    <div class="gallery-images-wrap span8" style="position: relative; left: 35%;">
                                        <div class="row-fluid ">
                                            <div class="gallery-wrap-slider clear gallery-post-wrap">
                                                <div class="vertical-list">
                                                    <img src="admin/<?echo $row['link'];?>" title="">
                                                    
                                                </div>
                                            </div>
                                            
                                            <!--End related-post-wrap-->
                                            
                                        </div>
                                        <!--end row-fluid-->
                                    </div>
                                    <!--end gallery-images-wrap -->
                                </div>
                                <!--end row-fluid gallery-wrap-->
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
        <script type="text/javascript" src="./js/main.js"></script>
        <script type="text/javascript" src="./js/custom.theme.isotope.js"></script>
        <script type="text/javascript" src="./js/custom.theme.js"></script>
        <script type="text/javascript" src="./js/theme.pagebuilder.js"></script>
    </body>
</html>