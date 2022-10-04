<?php include 'admin_sidebar.php';
	include 'db_connect.php';
?>

<?php
//delete image code
if(isset($_GET['img']))
{
	$get_imglink="select link from gallery where img_id='".$_GET['img']."'";
	$res=mysql_query($get_imglink);
	if(mysql_num_rows($res)!=0)
	{
		$row=mysql_fetch_array($res);
		unlink($row['link']);
		$dlt_img="delete from gallery where img_id='".$_GET['img']."'";
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
                                                            <h1>SHOW IMAGES</h1>
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
														<th class="td_font">Tagline</th>
														<th class="td_font">Category</th>
                                                        <th class="td_font">Status</th>
														<th class="td_font">Uploading Date</th>
                                                        <th class="td_font">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
												if (!isset($_GET['startrow']) or !is_numeric($_GET['startrow'])) {
											  //we give the value of the starting row to 0 because nothing was found in URL
												$startrow = 0;
												//otherwise we take the value from the URL
												} else {
												  $startrow = (int)$_GET['startrow'];
												}
													//$sql_fetchimg="select * from gallery LIMIT '".$startrow."' ORDER BY date_of_upload DESC";
													$result=mysql_query("SELECT * FROM gallery ORDER BY date_of_upload desc LIMIT $startrow, 10") or
die(mysql_error());
													$total_rows=mysql_num_rows($result);
													//echo mysql_error();
													if(mysql_num_rows($result)!=0)
													{	$counter=1;
														while($row=mysql_fetch_array($result))
														{
												?>
                                                    <tr>
                                                        <td class="td_font"><?php echo $counter;?></td>
														<td class="td_font"><img src="<?php echo $row['link'];?>" class="imgthumb"></td>
														<td class="td_font"><?php echo $row['img_actual_name'];?></td>
                                                        <td class="td_font"><?php echo $row['link'];?></td>
														<td class="td_font"><?php echo $row['tagline'];?></td>
                                                        <td class="td_font"><?php 
															$getcat_name="select category_name from fabric_category where category_id='".$row['category_id']."'";
															$res=mysql_query($getcat_name);
															if(mysql_num_rows($res)!=0)
															{
																$fabcat=mysql_fetch_array($res);
																echo ucwords($fabcat['category_name']);
															}
															else
															{
																echo "Undefined";
															}
															?>
														</td>
                                                        <td class="td_font"><?php echo $row['status'];?></td>
                                                        <td class="td_font"><?php echo $row['date_of_upload'];?></td>
														<td class="td_font">
                                                            <a href="add_image.php?img=<?php echo $row['img_id'];?>" class="btn edit"><i class="icon-edit"></i></a>
                                                            <a href="show_images.php?img=<?php echo $row['img_id'];?>" class="btn btn-danger remove" data-toggle="confirmation"><i class="icon-remove"></i></a>
                                                        </td>
                                                    </tr><?php $counter++;}
													}else
													{?>
													<tr>
                                                        <td colspan="9"><?php echo "There is no image available in database.";?></td>
													</tr>
                                                    <?php }
													?>
													
                                                </tbody>
                                            </table>
											<div class="pull-right ">
											<?
											$prev = $startrow - 10;
											if ($prev >= 0)
											{echo '<a class="btn btn-primary" href="'.$_SERVER['PHP_SELF'].'?startrow='.$prev.'">Previous</a>&nbsp;';}
											if($prev+10<=$total_rows )
											{
											echo '<a class="btn btn-success" href="'.$_SERVER['PHP_SELF'].'?startrow='.($startrow+10).'">Next</a>';}
											//only print a "Previous" link if a "Next" was clicked
											?><div>
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