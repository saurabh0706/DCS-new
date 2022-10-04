<?php include 'admin_sidebar.php';?>

<?php
include 'db_connect.php';
if(isset($_POST['btn_addcategory']))
{
	if(!isset($_GET['catg']))
	{
	if($_POST['idi_catname']=="")
	{
		$errormsg=array("msg"=>"Enter Category Name.","type"=>"fail");
	}
	elseif(!preg_match('/^[1-9][0-9]{0,2}$/',$_POST['idi_priority']))
	{
		$errormsg=array("msg"=>"Please Enter Priority. Maximum two digits are allowed.","type"=>"fail");
		
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
		
		$sql_inscat="insert into fabric_category(category_name,priority,status,date_of_creation)values('".$_POST['idi_catname']."','".$_POST['idi_priority']."','".$status."','".date("Y-m-d")."')";
		if(mysql_query($sql_inscat,$con))
		{	//die('Error: ' . mysql_error());
		$errormsg=array("msg"=>"Category successfully added.","type"=>"success");
			
		}
		else
		{
			//die('Error: ' . mysql_error());
			$errormsg=array("msg"=>"Sorry, Category not added. Category already exist.","type"=>"fail");
			
		}
		
		
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
                                                            <h1><?php if(isset($_GET['catg'])){echo "UPDATE CATEGORY";}else{?>ADD NEW CATEGORY<?}?></h1>
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
															if(isset($_GET['catg']))
															{
																$sql_fetchcat="select * from fabric_category where category_id='".$_GET['catg']."'";
																$result=mysql_query($sql_fetchcat);
																$row=mysql_fetch_array($result);
															}
																	
															?>
                                                            <form action="<?php if(isset($_GET['catg'])){ echo "update_row.php";}else{ echo stripcslashes($_SERVER['PHP_SELF']);}?>" id="addcategory-form" class=""
                                                                method="POST">
															<?if(isset($errormsg) or isset($_SESSION['errorcat'])){?>
															<div class="alert  <? if(isset($_GET['catg']) or$errormsg['type']=="fail"){?>alert-danger<?}else{?>alert-success<?}?>">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																
																<?php 
																if(isset($errormsg))
																{
																	echo $errormsg['msg'];
																}
																if(isset($_SESSION['errorcat']))
																{
																echo $_SESSION['errorcat'];
																}
																?>
																<br>
															</div><?}?>
															
																 
																<p>
                                                                    <input type="hidden" id="idi_catid" name="idi_catid"
                                                                        class="requiredField" value="<?php if(isset($_GET['catg'])){ echo $row['category_id'];}?>" placeholder="CATEGORY ID">
                                                                </p>
                                                                <p>
                                                                    <input type="text" id="idi_catname" name="idi_catname"
                                                                        class="requiredField" value="<?php if(isset($_POST['idi_catname'])){ echo $_POST['idi_catname'];}?><?php if(isset($_GET['catg'])){ echo $row['category_name'];}?>" placeholder="CATEGORY NAME">
                                                                </p>
                                                                <p>
                                                                    <?php if(!isset($_GET['catg'])){?>
																	<input type="text" id="idi_priority" name="idi_priority"
                                                                        class="requiredField" value="<?php if(isset($_POST['idi_priority'])){ echo $_POST['idi_priority'];}?><?php if(isset($_GET['catg'])){ echo $row['priority'];}?>" placeholder="PRIORITY"><?}?>
                                                                </p>
                                                                <p>
                                                                    <input type="checkbox" value="Active" name="chk_active" id="chk_active" <?php if(isset($_POST['chk_active']) and $_POST['chk_active']=="Active"){ echo "checked";}?> <?php if(isset($_GET['catg'])){ if($row['status']=='Active'){echo "checked";}}?>/>&nbsp;ACTIVE
                                                                </p>
																<br/>
                                                               
                                                                   <br/> 
																   <?php if(!isset($_GET['catg'])){ ?>
                                                                    <input type="submit" id="btn_addcategory" name="btn_addcategory" value="ADD"><?}else{?>
																	<input type="submit" id="btn_updatecategory" name="btn_updatecategory" value="UPDATE">
																	<?}?>
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