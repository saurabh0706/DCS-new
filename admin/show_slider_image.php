<?php include 'admin_sidebar.php';
	include 'db_connect.php';
?>
<?php
//delete image code
if(isset($_GET['slideimg']))
{
	$get_imglink="select sliderimg_path from slider_image where sliderimg_id='".$_GET['slideimg']."'";
	$res=mysql_query($get_imglink);
	if(mysql_num_rows($res)!=0)
	{
		$row=mysql_fetch_array($res);
		unlink($row['sliderimg_path']);
		$dlt_img="delete from slider_image where sliderimg_id='".$_GET['slideimg']."'";
		if(mysql_query($dlt_img))
		{
			$errormsg=array("msg"=>"Image deleted successfully.","type"=>"success");
		}
		else
		{
			$errormsg=array("msg"=>"Image deletion failed !","type"=>"fail");
		}
	}
	
		
		
}

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
                                                            <h1>SHOW SLIDER IMAGES</h1>
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
                                            <h5>ALL IMAGES</h5>
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
												if($_GET['error']==0)
												echo "Image succesfully updated.";
												if($_GET['error']==1)
												echo "Image updating failed.";
												if($_GET['error']==5)
												echo "image information updated succesfully.";
												if($_GET['error']==6)
												echo "Updating image information failed.";
											}
											?>
											<br>
										</div><?}?>
										
                                            <table class="table table-striped responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="td_font">#</th>
														<th class="td_font">Image Thumb</th>
                                                        <th class="td_font">Image Name</th>
                                                        <th class="td_font">Image Location</th>
														<th class="td_font">Priority</th>
														<th class="td_font">Status</th>
														<th class="td_font">Uploading Date</th>
                                                        <th class="td_font">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
													//$sql_fetchmenu="select @rownum:=@rownum+1 'Sr', m.* from menus p,(SELECT @rownum:=0) r ORDER BY priority ASC";
													$sql_fetchimg="select * from slider_image ORDER BY priority ASC";
													$result=mysql_query($sql_fetchimg);
													if(mysql_num_rows($result)!=0)
													{	$counter=1;
														while($row=mysql_fetch_array($result))
														{
												?>
                                                    <tr>
                                                        <td class="td_font"><?php echo $counter;?></td>
														<td class="td_font"><img src="<?php echo $row['sliderimg_path'];?>" class="imgthumb"></td>
														<td class="td_font"><?php echo $row['sliderimg_name'];?></td>
                                                        <td class="td_font"><?php echo $row['sliderimg_path'];?></td>
														<td class="td_font"><?php echo $row['priority'];?></td>
														<td class="td_font"><?php echo $row['status'];?></td>
                                                        <td class="td_font"><?php echo $row['date_added'];?></td>
														<td class="td_font">
                                                            <a href="add_slider_image.php?slideimg=<?php echo $row['sliderimg_id'];?>" class="btn edit"><i class="icon-edit"></i></a>
                                                            <a href="show_slider_image.php?slideimg=<?php echo $row['sliderimg_id'];?>" class="btn btn-danger remove" data-toggle="confirmation"><i class="icon-remove"></i></a>
                                                        </td>
                                                    </tr><?php $counter++;}
													}else
													{?>
													<tr>
                                                        <td colspan="10"><?php echo "There is no image available in database.";?></td>
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
                    
                </div>
                <!--End float inn wrap-->
            </div><!--End float inn-->
            
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