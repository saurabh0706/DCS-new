<?php include 'admin_sidebar.php';
//include 'ajaximage.php';
?>
<?php
include 'db_connect.php';
if(isset($_POST['btn_addsocial']))
{
	if($_POST['idi_socialname']=="" || $_POST['idi_sociallink']=="")
		{
			$errormsg=array("msg"=>"Required Fields Can't Be Empty.","type"=>"fail");
		}
		else
		{	
			if(!isset($_POST['chk_active']))
			{
				$status="Deactive";
			}
			else
			{
				$status=$_POST['chk_active'];
			}
		
		$sql_inssocial="update social_link SET link='".$_POST['idi_sociallink']."',status='".$status."',date_added='".date("Y-m-d")."' where social_id='".$_POST['idi_socialname']."'";
		if(mysql_query($sql_inssocial,$con))
		{	//die('Error: ' . mysql_error());
		$errormsg=array("msg"=>"Social link successfully added.","type"=>"success");
			
		}
		else
		{
			//die('Error: ' . mysql_error());
			$errormsg=array("msg"=>"Sorry, Social link is not added.","type"=>"fail");
			
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
                                                            <h1><?php if(isset($_GET['social'])){echo "UPDATE SOCIAL LINK";}else{?>ADD NEW SOCIAL LINK<?}?></h1>
                                                            <p>
                                                                <br>
                                                            </p>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row-fluid">
                                                    
                                                    <div class="span12 moudle">
                                                        <div class="contactform">
                                                            <a name="20140519-031128-253" class="20140519-031128-253"></a>
															
														<?php
														if(isset($_GET['social']))
														{
															$sql_fetchsoc="select * from social_link where social_id='".$_GET['social']."'";
															$result=mysql_query($sql_fetchsoc);
															$row=mysql_fetch_array($result);
														}	
														?>
															
                                                            <form action="<?php if(isset($_GET['social'])){ echo "update_row.php";}else{ echo stripcslashes($_SERVER['PHP_SELF']);}?>" id="addsocial-form" name="addsocial-form" class=""
                                                                method="POST">
																
																<? if(isset($errormsg) or isset($_SESSION['errorsoc'])){?>
																<div class="alert  <? if(isset($_GET['social']) or$errormsg['type']=="fail"){?>alert-danger<?}else{?>alert-success<?}?>">
																	<button type="button" class="close" data-dismiss="alert">
																		<i class="ace-icon fa fa-times"></i>
																	</button>
																	
																	<?php 
																	if(isset($errormsg))
																	{
																		echo $errormsg['msg'];
																	}
																	if(isset($_SESSION['errorsoc']))
																	{
																		echo $_SESSION['errorsoc'];
																	}
																	?>
																	<br>
																</div><?}?>
																
																<p>
                                                                    <input type="hidden" id="idi_socialid" name="idi_socialid"
                                                                        class="requiredField" value="<?php if(isset($_GET['social'])){ echo $row['social_id'];}?>" placeholder="SOCIAL ID">
                                                                </p>
																<p>
                                                                    <select name="idi_socialname" id="idi_socialname" class="span12 requiredField drop_category" <?php if(isset($_GET['social'])){ echo "disabled";}?>>
																	<option value="">CHOOSE SOCIAL ACCOUNT</option>
																	<?php
																	
																	$sql_social="select * from social_link ORDER BY social_id ASC";
																	$result=mysql_query($sql_social);
																	if(mysql_num_rows($result)!=0)
																	{	
																		while($row1=mysql_fetch_array($result))
																		{
																	?>
																	<option value="<?php echo $row1['social_id'];?>" <?php if(isset($_GET['social'])){if($row['social_id']==$row1['social_id']){ echo "Selected";}}?>><?php echo ucwords($row1['social_name']);?></option>
																	<? }}?>
																	</select>
                                                                </p>
                                                                <p>
                                                                    <input type="text" id="idi_sociallink" name="idi_sociallink"
                                                                        class="requiredField" value="<?php if(isset($_POST['idi_sociallink'])){ echo $_POST['idi_sociallink'];}?><?php if(isset($_GET['social'])){ echo $row['link'];}?>" placeholder="SOCIAL LINK">
                                                                </p>
                                                                <p>
                                                                    <input type="checkbox" value="Active" name="chk_active" id="chk_active" <?php if(isset($_POST['chk_active']) and $_POST['chk_active']=="Active"){ echo "checked";}?> <?php if(isset($_GET['social'])){ if($row['status']=='Active'){echo "checked";}}?>/>&nbsp;ACTIVE
                                                                </p>
																<br/>
                                                                <span>
																<?php 
																if(isset($errormsg))
																{
																	echo $errormsg;
																}
																if(isset($_SESSION['error']))
																{
																echo $_SESSION['error'];
																}
																?>
																</span>
                                                                   <br/>
																   <?php if(!isset($_GET['social'])){ ?>
                                                                    <input type="submit" id="btn_addsocial" name="btn_addsocial" value="ADD"><?}else {?>
																	<input type="submit" id="btn_updatesocial" name="btn_updatesocial" value="UPDATE">
																	<?}
																	
																	?>
																	
                                                                </div>
                                                            </form>
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