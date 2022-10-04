<?php include 'sidebar.php';?>
            <!--#main-wrap-->
            <div id="main-wrap">
                <div id="main" style="-webkit-transform-origin: 50% 665px;">
                    <div id="content">
                        <div id="post-574" class="post-574 page type-page status-publish hentry">
                            <div class="row-fluid " style="min-height: 799px;">
                                <div id="content_wrap" class="">
                                    <div class="content-wrap-inn top-space bottom-space ">
                                        <div class="pagebuilder-wrap">
                                            <div class="container">
                                                <div class="row-fluid">
                                                    <div class="span12 moudle">
                                                        <div data-post="20140425-001758-102"
                                                            class="text_block ux-mod-nobg ">
                                                            <a name="20140425-001758-102" class="20140425-001758-102"></a>
                                                            <br>
                                                            <h1>
                                                                OUR TEAM IS <span class="word-fadein-fadeout-ux"><span
                                                                    style="display: inline; opacity: 0.9396581550952778;">EXPERIENCED</span><span
                                                                    style="display: none;">CREATIVE</span><span
                                                                    style="display: none;">EFFCIENT</span></span>
                                                            </h1>
                                                            <br>
                                                            <br> <h4><p>A Darshan Consultancy services is a rising firm in textile services. Design and quality solution which is in partnership with its clients simplifies the strength and transform their business. We ensure the highest level of certainty and satisfaction through a deep set commitment to our clients. Comprehensive industry expenses in a wide network of innovation. </p>

<br/><p>DCS has been recognized by brand textile one stop solution “Yarn to garment”.</p> 
<p>We have built a team culture that is focused on client’s satisfaction and driven by our client’s needs. We have aligned our growth to our client’s gain in the market in which they operate.</p>
<br/><p><!--the bottom content right from here is dummy and not belongs to darshan consultancy-->
Darshan Febrics has worked in the textile industry for over 10+ years and has a highly technical background, coupled with his lengthly, practical, hands-on international industry experience.
Has extensive knowledge and experience in pre-treatment, dyeing, printing, coating, finishing and inkjet applications on textiles.</p>
</h4> 

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row-fluid">
                                                    <div
                                                        class="span12 moudle moudle_has_animation animation-default-ux animation-scroll-ux  bottom-space-40  animation_hidden fadeined"
                                                        style="opacity: 1;">
                                                        <!--gallery isotope-->
                                                        <div class="row-fluid">
                                                            <a name="20140425-001909-709" class="20140425-001909-709"></a>
                                                            <div class="container-isotope"
                                                                data-post="20140425-001909-709">
                                                                <div class="isotope grid_list team-isotope isotope_fade"
                                                                    data-space="40px"
                                                                    data-size="medium">
                                                                    <div
                                                                        class="width2 isotope-item animation-default-ux animation-scroll-ux fadeined">
                                                                        <div class="inside card" style="padding: 40px 0 0 40px;">
                                                                            <div class="team-item">
                                                                                <div class="img-wrap">
                                                                                    <img
                                                                                        src="img/port/port2.jpg"
                                                                                        class="team-img wp-post-image" alt="13">
                                                                                </div>
                                                                                
                                                                                <!--End team-item-con-back-->
                                                                            </div>
                                                                        </div>
                                                                        <!--End inside-->
                                                                    </div>
                                                                    
                                                                    
                                                                    <div
                                                                        class="width2 isotope-item animation-default-ux animation-scroll-ux fadeined abtcont">
                                                                        <div class="inside card" style="padding: 40px 0 0 40px;">
                                                                            <div class="team-item">
                                                                                <div class="img-wrap">
																				<h6><p>The promoters of DCS(Darshan Consultancy Service) have a strong background in the textile industry. With a remarkable work experience of more than five decades, they have carved an excellent goodwill and relations in the Indian textile industry</p></h6>
                                                                                   concentrates on specific textile processes as well as Research/Development in the textile industry. We offer many years of international experience and knowledge in pre-treatment, dyeing, finishing, printing, coating, inkjet technologies.
                                                                                </div>
                                                                                
                                                                                <!--End team-item-con-back-->
                                                                            </div>
                                                                        </div>
                                                                        <!--End inside-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End container-isotope-->
                                                        </div>
                                                        <!--End row-fluid-->
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            <div class="container">
                                                <div class="row-fluid">
                                                    <div class="span12 moudle    bottom-space-60 ">
                                                        <div class="promote-wrap promote-wrap-2c">
                                                            <a name="20140425-002959-938" class="20140425-002959-938"></a>
                                                            <div class="promote-text" style="margin-right: 155px;">
                                                                <h4 class="promote-big">FEATURED BY</h4>
                                                                <p class="promote-medium">India is emerging as a potential market for technical textiles and there is enormous potential, which is untapped. We invite you explore the world of opportunities with us.</p>
                                                            </div>
                                                            <div class="promote-button-wrap">
                                                                <a class="promote-button btn-dark ux-btn " title="CHECK IT!" href="contactus.php"
                                                                    pajx-click="true">CHECK IT!</a>
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
                        <!--<button class="social-share-linkedin" onclick="javascript:window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=http://ximudesign.com/aside/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-linkedin"></i></button>-->
                    </div>
                </div>
                <!--End float inn wrap-->
            </div><!--End float inn-->
            <div id="float-bar-triggler"><i class="float-bar-triggler-inn"></i></div> 
        </div>
        <!--End #float bar-->
        
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"> </script>
        <script type="text/javascript" src="./js/bootstrap.js"></script>
        <script type="text/javascript" src="./js/waypoints.min.js"></script>
        <script type="text/javascript" src="./js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="./js/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src="./js/jquery.gray.min.js"></script>
        <script type="text/javascript" src="./js/main.js"></script>
        <script type="text/javascript" src="./js/custom.theme.isotope.js"></script>
        <script type="text/javascript" src="./js/custom.theme.js"></script>
        <script type="text/javascript" src="./js/theme.pagebuilder.js"></script>
        <script type="text/javascript">
        jQuery(document).ready(function(){
            var ux_pb = new ThemePageBuilder();
            ux_pb.init();
        });
        </script>
    </body>
</html>