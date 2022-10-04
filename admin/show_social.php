<?php include 'admin_sidebar.php';
	include 'db_connect.php';
?>

<?php
//delete category code
if(isset($_GET['social']))
{
	
	$sql_dltsoc="update social_link SET link='',status='',date_added='' where social_id='".$_GET['social']."'";
	if(mysql_query($sql_dltsoc,$con))
	{	//die('Error: ' . mysql_error());
		$errormsg=array("msg"=>"Link deleted successfully.","type"=>"success");
		
	}
	else
	{
		//die('Error: ' . mysql_error());
		$errormsg=array("msg"=>"Link deletion failed !","type"=>"fail");
		
	}
	
}

//edit category code
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
                                                            <h1>SHOW SOCIAL LINKS</h1>
                                                            <p>
                                                                <br>
                                                            </p>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
											<div class="row-fluid">
<div class="span12">
                                    <div class="box">
                                        <header>
                                            <div class="icons"><i class="icon-edit"></i></div>
                                            <h5>ALL LINKS</h5>
                                            <div class="toolbar">
                                                <a href="#actionTable" data-toggle="collapse" class="accordion-toggle minimize-box">
                                                    <i class="icon-chevron-up"></i>
                                                </a>
                                            </div>
                                        </header>
                                        <div id="actionTable" class="body collapse in">
										
										<? if(isset($errormsg)){?>
										<div class="alert  <? if($errormsg['type']=="fail"){?>alert-danger<?}else{?>alert-success<?}?>">
											<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button>
											
											<?php 
											if(isset($errormsg)){echo $errormsg['msg'];}
											if(isset($_GET['error']))
											{
											if($_GET['error']==0){echo "Social link succesfully updated.";}
											if($_GET['error']==1){echo "Social link Not updated.";}
											}
											?>
											<br>
										</div><?}?>
																
										
                                            <table class="table table-striped responsive">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Social Account</th>
                                                        <th>Link</th>
                                                        <th>Status</th>
														<th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
													//$sql_fetchmenu="select @rownum:=@rownum+1 'Sr', m.* from menus p,(SELECT @rownum:=0) r ORDER BY priority ASC";
													$sql_fetchsoc="select * from social_link where link!='' ORDER BY social_id ASC";
													$result=mysql_query($sql_fetchsoc);
													
													if(mysql_num_rows($result)!=0)
													{	$counter=1;
														while($row=mysql_fetch_array($result))
														{
												?>
                                                    <tr>
                                                        <td><?php echo $counter;?></td>
                                                        <td><?php echo $row['social_name'];?></td>
                                                        <td><?php echo $row['link'];?></td>
														<td><?php echo $row['status'];?></td>
														<td><?php echo $row['date_added'];?></td>
                                                        <td>
                                                            <a href="add_social.php?social=<?php echo $row['social_id'];?>" class="btn edit"><i class="icon-edit"></i></a>
                                                            <a href="show_social.php?social=<?php echo $row['social_id'];?>" class="btn btn-danger remove" data-toggle="confirmation"><i class="icon-remove"></i></a>
                                                        </td>
                                                    </tr><?php $counter++;}
													}else
													{?>
													<tr>
                                                        <td colspan="6"><?php echo "There is no social link in database.";?></td>
													</tr>
                                                    <?php }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
								
								<!-- this page ending tags and scripts -->
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
                     <!--<div class="float-bar-social-share">
                        <button class="social-share-facebook" onclick=""><i class="fa fa-facebook"></i></button>
                        <button class="social-share-twitter" onclick=""><i class="fa fa-twitter"></i></button>
                        <button class="social-share-google-plus" onclick=""><i class="fa fa-google-plus"></i></button>
                        <button class="social-share-pinterest" onclick=""><i class="fa fa-pinterest"></i></button>
                        <button class="social-share-linkedin" onclick=""><i class="fa fa-linkedin"></i></button>
                    </div>-->
                </div>
                <!--End float inn wrap-->
            </div><!--End float inn-->
             <!--<div id="float-bar-triggler"><i class="float-bar-triggler-inn"></i></div> -->
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