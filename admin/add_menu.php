<?php include 'admin_sidebar.php';?>

<?php
include 'db_connect.php';
if(isset($_POST['btn_addmenu']))
{
	if($_POST['idi_menuname']=="" || $_POST['idi_redlink']=="")
	{
		$errormsg=array("msg"=>"Required Fields Can't Be Empty.","type"=>"fail");
		
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
		
		$sql_insmenu="insert into menus(menu_name,redirect_link,priority,status,date_of_creation)values('".$_POST['idi_menuname']."','".$_POST['idi_redlink']."','".$_POST['idi_priority']."','".$status."','".date("Y-m-d")."')";
		if(mysql_query($sql_insmenu,$con))
		{	//die('Error: ' . mysql_error());
			
			$errormsg=array("msg"=>"Menu succesfully added.","type"=>"success");
		}
		else
		{
			//die('Error: ' . mysql_error());
			$errormsg=array("msg"=>"Sorry, Menu not added. Menu already exist","type"=>"fail");
			
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
                                                            <h1><?php if(isset($_GET['menu'])){echo "UPDATE MENU";}else{?>ADD NEW MENU<?}?></h1>
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
															if(isset($_GET['menu']))
															{
																$sql_fetchmenu="select * from menus where menu_id='".$_GET['menu']."'ORDER BY priority ASC";
																$result=mysql_query($sql_fetchmenu);
																$row=mysql_fetch_array($result);
															}
																	
															?>
															
                                                            <form action="<?php if(isset($_GET['menu'])){ echo "update_row.php";}else{ echo stripcslashes($_SERVER['PHP_SELF']);}?>" id="addmenu-form" class=""
                                                                method="POST">
																
																<?if(isset($errormsg) or isset($_SESSION['errormenu'])){?>
															<div class="alert  <? if(isset($_GET['menu']) or$errormsg['type']=="fail"){?>alert-danger<?}else{?>alert-success<?}?>">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																
																<?php 
																if(isset($errormsg))
																{
																	echo $errormsg['msg'];
																}
																if(isset($_SESSION['errormenu']))
																{
																	echo $_SESSION['errormenu'];
																}
																?>
																<br>
															</div><?}?>
																<p><input type="hidden" id="idi_menuid" name="idi_menuid" value="<?php if(isset($_GET['menu'])){ echo $row['menu_id'];} ?>"/></p>
                                                                <p>
                                                                    <input type="text" id="idi_menuname" name="idi_menuname"
                                                                        class="requiredField" value="<?php if(isset($_POST['idi_menuname'])){ echo $_POST['idi_menuname'];}?><?php if(isset($_GET['menu'])){ echo $row['menu_name'];} ?>" placeholder="MENU NAME">
                                                                </p>
                                                                <p>
                                                                    <input type="text" id="idi_redlink" name="idi_redlink"
                                                                        class="requiredField" value="<?php if(isset($_POST['idi_redlink'])){ echo $_POST['idi_redlink'];}?><?php if(isset($_GET['menu'])){ echo $row['redirect_link'];}?>"placeholder="REDIRECT LINK">
                                                                </p>
																<p>
																<?php if(!isset($_GET['menu'])){?>
                                                                    <input type="text" id="idi_priority" name="idi_priority"
                                                                        class="requiredField" value="<?php if(isset($_POST['idi_priority'])){ echo $_POST['idi_priority'];}?>" placeholder="PRIORITY"><?}?>
                                                                        
                                                                </p>
                                                                <p>
                                                                    <input type="checkbox" value="Active" name="chk_active" id="chk_active" <?php if(isset($_POST['chk_active']) and $_POST['chk_active']=="Active"){ echo "checked";}?> <?php if(isset($_GET['menu'])){ if($row['status']=='Active'){echo "checked";}}?>/>&nbsp;ACTIVE
                                                                </p>
																
                                                                
                                                                   <br/>
																   <?php if(!isset($_GET['menu'])){ ?>
                                                                    <input type="submit" id="btn_addmenu" name="btn_addmenu"
                                                                        value="ADD">
																		<? }else{?>
																		<input type="submit" id="btn_updatemenu" name="btn_updatemenu"
                                                                        value="UPDATE">
																		<??>
                                                                </div>
                                                            </form>
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