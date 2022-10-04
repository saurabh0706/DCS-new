<?php session_start();
include 'sidebar.php';
?>
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
                                                        <div data-post="20140519-081623-266"
                                                            class="text_block ux-mod-nobg ">
                                                            <a name="20140519-081623-266" class="20140519-081623-266"></a>
                                                            <h1>KEEP IN TOUCH</h1>
                                                            <p>
                                                                <br>
                                                            </p>
                                                            <p>
															We are the best textile consultancy firm in the udaipur. We provide valuable response to your business and gather a unstoppable traffic of fabrication. lets have a cup of coffee at our office cabin. 
															</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row-fluid">
                                                    <div class="span6 moudle">
                                                        <a name="20140519-031053-577" class="20140519-031053-577"></a>
                                                        <div class="module-map-canvas" data-add="Sydney, NSW"
                                                            style="height: 360px; position: relative; overflow: hidden; -webkit-transform: translateZ(0px); background-color: rgb(229, 227, 223);"
                                                            data-l="24.5794414" data-r="73.6961389"
                                                            data-zoom="12" data-pin="t" data-view="map" data-dismouse="f"
                                                            data-pin-custom="" data-style="f">
                                                        </div>
                                                        <textarea class="form-control hidden module-map-style-code"
                                                            rows="3"></textarea>
                                                    </div>
                                                    <div class="span6 moudle">
                                                        <div class="contactform">
                                                            <a name="20140519-031128-253" class="20140519-031128-253"></a>
                                                            <form action="contact.php" id="contact-form" class=""
                                                                method="POST">
                                                                <p>
                                                                    <input type="text" id="idi_name" name="idi_name"
                                                                        class="requiredField" placeholder="YOUR NAME">
                                                                </p>
                                                                <p>
                                                                    <input type="text" id="idi_email" name="idi_email"
                                                                        class="requiredField email" placeholder="YOUR EMAIL" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                                                </p><br/>
                                                                <p>
                                                                    <textarea type="text" name="idi_text" 
                                                                        class="requiredField" cols="4" rows="4"
                                                                        placeholder="YOUR REVIEW"></textarea>
                                                                </p>
                                                                <p>
																<?php
																if(isset($_SESSION['error']))
																{
																echo $_SESSION['error'];
																}
																if(isset($_GET['status']))
																{
																	if($_GET['status']==0)
																	echo "Email sent successfully.";
																	else
																	echo "Email not sent.";
																}
																?>
																</p>
                                                                <div class="btnarea">
                                                                    
                                                                    <input type="submit" id="btn_send" name="btn_send"
                                                                        value="SEND">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row-fluid">
                                                    <div class="span12 moudle    bottom-space-60 ">
                                                        <div class="promote-wrap promote-wrap-2c">
                                                            <a name="20140425-002959-938" class="20140425-002959-938"></a>
															<?php
															//solve the error occuring in displaying contact detail.
															$sql_fetchaddr="select * from address where status='Active' ORDER BY address_id ASC";
													$result=mysql_query($sql_fetchaddr);
													if(mysql_num_rows($result)!=0)
													{	
														while($row=mysql_fetch_array($result))
														{
															?>
                                                            <div class="promote-text" style="margin-right: 155px;">
                                                                <h4 class="promote-big">Our Address</h4>
                                                                <span style="color: #444444;"><? if(isset($row['plot_no'])){echo $row['plot_no'].",";}?> <? if(isset($row['street'])){echo $row['street'];}?>
                                                                            </span><br style="color: #444444;">
                                                                        <span style="color: #444444;"><?php if(isset($row['address'])){echo $row['address'].","; }?>
                                                                            <? if(isset($row['pincode'])){echo $row['pincode']; }?></span><br style="color: #444444;">
                                                                        <span style="color: #444444;">Phone: <?php if(isset($row['mobile_no'])){echo $row['mobile_no']; }?></span><br
                                                                            style="color: #444444;">
                                                                        <span style="color: #444444;">Fax: <?php if(isset($row['fax_no'])){echo $row['fax_no'];} ?></span>
                                                            </div><br/><?php }}?>
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