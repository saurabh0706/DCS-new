<?php include 'admin_sidebar.php';
include 'ajaximage.php';
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
                                                            <h1><?php if(isset($_GET['img'])){echo "UPDATE IMAGE";}else{?>ADD NEW IMAGE<?}?></h1>
                                                            <p>
                                                                <br>
                                                            </p>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row-fluid">
                                                    
                                                    <div class="<?php if(isset($_GET['img'])){echo "span8";}else{?>span8<?}?> moudle">
                                                        <div class="contactform">
                                                            <a name="20140519-031128-253" class="20140519-031128-253"></a>
															
															<?php
													if(isset($_GET['img']))
													{
														$sql_fetchimg="select * from gallery where img_id='".$_GET['img']."' ORDER BY date_of_upload ASC";
														$result=mysql_query($sql_fetchimg);
														$row=mysql_fetch_array($result);
													}	
												?>
															
                                                            <form action="<?php if(isset($_GET['img'])){ echo "update_row.php";}else{ echo stripcslashes($_SERVER['PHP_SELF']);}?>" id="addimage-form" name="addimage-form" class=""
                                                                method="POST" enctype="multipart/form-data">
                                                               
															   <?if(isset($errormsg) or isset($_SESSION['errorimg'])){?>
															<div class="alert  <? if(isset($_GET['img']) or $errormsg['type']=="fail"){?>alert-danger<?}else{?>alert-success<?}?>">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																
																<?php 
																if(isset($errormsg))
																{
																	echo $errormsg['msg'];
																}
																if(isset($_SESSION['errorimg']))
																{
																	echo $_SESSION['errorimg'];
																}
																if(isset($_GET['error']))
																{
																	
																	if($_GET['error']==2)
																	echo "File not uploaded to folder.";
																	if($_GET['error']==3)
																	echo "Maximum image size is 3MB.";
																	if($_GET['error']==4)
																	echo "Invalid file format.";
																}
																?>
																<br>
															</div><?}?>
															
															   <p>
                                                                    <input type="hidden" id="idi_imgid" name="idi_imgid"
                                                                        class="requiredField" value="<?php if(isset($_GET['img'])){ echo $row['img_id'];}?>" placeholder="IMAGE ID">
                                                                </p>
															   <p class="">
																	<label class="ace-file-input">
																	<input type="file" id="photoimg" name="photoimg">
																	<span class="ace-file-container" data-title="Choose">
																	<span class="ace-file-name" data-title="CHOOSE FILE ...">
																	<i class=" ace-icon fa fa-upload"></i>
																	</span>
																	</span>
																	<a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a>
																	</label>
																</p>
																<br/><br/>
																<p>
																		<?php if(isset($_GET['img'])){?>
																		<input type="text" id="idi_imgpath" name="idi_imgpath"
                                                                        class="requiredField" value="<?php  echo $row['link'];?>" placeholder="IMAGE PATH" readonly><?}?>
                                                                </p>
																
                                                                <p>
                                                                    <select name="img_category" id="img_category" class="span12 requiredField drop_category">
																	<option value="">CHOOSE CATEGORY</option>
																	<?php
																	include "db_connect.php";
																	$sql_fetchcat="select * from fabric_category ORDER BY priority ASC";
																	$result=mysql_query($sql_fetchcat);
																	if(mysql_num_rows($result)!=0)
																	{	
																		while($row1=mysql_fetch_array($result))
																		{
																	?>
																	<option value="<?php echo $row1['category_id'];?>" <?php if(isset($_GET['img'])){if($row['category_id']==$row1['category_id']){ echo "Selected";}}?>><?php echo ucwords($row1['category_name']);?></option>
																	<? }}?>
																	</select>
                                                                </p>
																<p>
                                                                    <input type="text" id="idi_imgtag" name="idi_imgtag"
                                                                        class="requiredField" value="<?php if(isset($_POST['idi_imgtag'])){ echo $_POST['idi_imgtag'];}?><?php if(isset($_GET['img'])){ echo $row['tagline'];}?>" placeholder="TAGLINE">
                                                                </p>
																<p>
                                                                    <input type="text" id="idi_imgdesc" name="idi_imgdesc"
                                                                        class="requiredField" value="<?php if(isset($_POST['idi_imgdesc'])){ echo $_POST['idi_imgdesc'];}?><?php if(isset($_GET['img'])){ echo $row['description'];}?>" placeholder="IMAGE DESCRIPTION">
                                                                </p>
                                                                <p class="pull-left">
                                                                    <input type="checkbox" value="Active" name="chk_active" id="chk_active" <?php if(isset($_POST['chk_active']) and $_POST['chk_active']=="Active"){ echo "checked";}?> <?php if(isset($_GET['img'])){ if($row['status']=='Active'){echo "checked";}}?>/>&nbsp;ACTIVE
                                                                </p>
																<br/>
                                                                
                                                                   <br/>
																   <?php if(!isset($_GET['img'])){ ?>
                                                                    <input type="submit" id="btn_addimage" name="btn_addimage"
                                                                        value="ADD"><?}else{?>
																		<input type="submit" id="btn_updateimage" name="btn_updateimage"
                                                                        value="UPDATE">
																		<?}?>
                                                                </div>
                                                            </form>
                                                        </div>
														<div class="span4 imgpreview" id="preview">
														<?php if(!isset($_GET['img'])){
														//if(isset($actual_image_name)){?>
														<img id="preview1" src="<?// echo $path.$actual_image_name;?>">
														<?//}
														}else{?>
                                                        <img class="imgdisplay" src="<?echo $row['link'];?>"
                                                          <?}?>      
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
		//image upload script
		
			$("#photoimg").change(function(){
				
				if(this.files && this.files[0])
				{//alert("hi");
				var reader=new FileReader();
				reader.onload=function(e)
				{
					$("#preview1").attr('src', e.target.result);
					$(".imgdisplay").attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
				}
			});
		
        </script>
    </body>
</html>