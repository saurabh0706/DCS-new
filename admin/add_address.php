<?php include 'admin_sidebar.php';?>

<?php
include 'db_connect.php';
if(isset($_POST['btn_addaddress']))
{
	if($_POST['idi_street']=="" || $_POST['idi_pincode']=="" || $_POST['idi_address']=="" ||  $_POST['idi_mobno']=="")
	{
		$errormsg=array("msg"=>"Required Fields Can't Be Empty.","type"=>"fail");
	}
	elseif(!preg_match('/^[0-9]{6,6}$/',$_POST['idi_pincode']))
	{
		$errormsg=array("msg"=>"Please Enter valid pin-code.","type"=>"fail");
		
	}
	elseif(!preg_match('/^[0-9]{10}$/',$_POST['idi_mobno']))
	{
		$errormsg=array("msg"=>"Please Enter valid Mobile Number.","type"=>"fail");
		
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
		
		$sql_inscat="insert into address(plot_no,street,address,pincode,mobile_no,fax_no,status,date_added)values('".$_POST['idi_plotno']."','".$_POST['idi_street']."','".$_POST['idi_address']."','".$_POST['idi_pincode']."','".$_POST['idi_mobno']."','".$_POST['idi_faxno']."','".$status."','".date("Y-m-d")."')";
		if(mysql_query($sql_inscat,$con))
		{	//die('Error: ' . mysql_error());
			$errormsg=array("msg"=>"Address succesfully added.","type"=>"success");
			
		}
		else
		{
			//die('Error: ' . mysql_error());
			$errormsg=array("msg"=>"Sorry, Address can not be added right now.","type"=>"fail");
			
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
                                                            <h1><?php if(isset($_GET['addr'])){echo "UPDATE ADDRESS";}else{?>ADD NEW ADDRESS<?}?></h1>
                                                            <p>
                                                                <br>
                                                            </p>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
												<? if(isset($errormsg) or isset($_SESSION['erroraddr'])){?>
												<div class="alert  <? if(isset($_GET['addr']) or$errormsg['type']=="fail"){?>alert-danger<?}else{?>alert-success<?}?>">
													<button type="button" class="close" data-dismiss="alert">
														<i class="ace-icon fa fa-times"></i>
													</button>
													
													<?php 
													if(isset($errormsg))
													{
														echo $errormsg['msg'];
													}
													if(isset($_SESSION['erroraddr']))
													{
														echo $_SESSION['erroraddr'];
													}
													?>
													<br>
												</div><?}?>
                                                <div class="row-fluid">
                                                   <div class="span12 moudle">
                                                        <div class="contactform">
                                                            <a name="20140519-031128-253" class="20140519-031128-253"></a>
															
															<?php
															if(isset($_GET['addr']))
															{
																$sql_fetchcat="select * from address where address_id='".$_GET['addr']."'";
																$result=mysql_query($sql_fetchcat);
																$row=mysql_fetch_array($result);
															}
															?>
															
                                                            <form action="<?php if(isset($_GET['addr'])){ echo "update_row.php";}else{ echo stripcslashes($_SERVER['PHP_SELF']);}?>" id="addaddress-form" class=""
                                                                method="POST">
																
																
																
                                                                <p class="span2">
                                                                    <input type="text" id="idi_plotno" name="idi_plotno"
                                                                        class="requiredField" value="<?php if(isset($_POST['idi_plotno'])){ echo $_POST['idi_plotno'];}?><?php if(isset($_GET['addr'])){ echo $row['plot_no'];}?>" placeholder="PLOT NUMBER">
                                                                </p >
                                                                <p class="span6">
                                                                    <input type="text" id="idi_street" name="idi_street"
                                                                        class="requiredField" value="<?php if(isset($_POST['idi_street'])){ echo $_POST['idi_street'];}?><?php if(isset($_GET['addr'])){ echo $row['street'];}?>" placeholder="STREET">
                                                                </p>
																<p class="span4">
                                                                    <input type="text" id="idi_pincode" name="idi_pincode"
                                                                        class="requiredField" value="<?php if(isset($_POST['idi_pincode'])){ echo $_POST['idi_pincode'];}?><?php if(isset($_GET['addr'])){ echo $row['pincode'];}?>" placeholder="PINCODE">
                                                                </p>
																<p>
                                                                    <input type="hidden" id="idi_addrid" name="idi_addrid"
                                                                        class="requiredField" value="<?php if(isset($_GET['addr'])){ echo $row['address_id'];}?>" placeholder="ADDRESS ID">
                                                                </p>
																<p>
                                                                    <input type="text" id="idi_address" name="idi_address"
                                                                        class="requiredField" value="<?php if(isset($_POST['idi_address'])){ echo $_POST['idi_address'];}?><?php if(isset($_GET['addr'])){ echo $row['address'];}?>" placeholder="ADDRESS">
                                                                </p>
																<p>
                                                                    <input type="text" id="idi_mobno" name="idi_mobno"
                                                                        class="requiredField" value="<?php if(isset($_POST['idi_mobno'])){ echo $_POST['idi_mobno'];}?><?php if(isset($_GET['addr'])){ echo $row['mobile_no'];}?>" placeholder="MOBILE NUMBER">
                                                                </p>
																<p>
                                                                    <input type="text" id="idi_faxno" name="idi_faxno"
                                                                        class="requiredField" value="<?php if(isset($_POST['idi_faxno'])){ echo $_POST['idi_faxno'];}?><?php if(isset($_GET['addr'])){ echo $row['fax_no'];}?>" placeholder="FAX NUMBER">
                                                                </p>
                                                                <p>
                                                                    <input type="checkbox" value="Active" name="chk_active" id="chk_active" <?php if(isset($_POST['chk_active']) and $_POST['chk_active']=="Active"){ echo "checked";}?> <?php if(isset($_GET['addr'])){ if($row['status']=='Active'){echo "checked";}}?>/>&nbsp;ACTIVE
                                                                </p>
																<br/>
                                                                
                                                                   <br/>
																   <?php if(!isset($_GET['addr'])){ ?>
                                                                    <input type="submit" id="btn_addaddress" name="btn_addaddress" value="ADD"><?}else{?>
																	<input type="submit" id="btn_updateaddress" name="btn_updateaddress" value="UPDATE">
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
                        <button class="social-share-facebook" onclick=""><i class="fa fa-facebook"></i></button>
                        <button class="social-share-twitter" onclick=""><i class="fa fa-twitter"></i></button>
                        <button class="social-share-google-plus" onclick=""><i class="fa fa-google-plus"></i></button>
                        <button class="social-share-pinterest" onclick=""><i class="fa fa-pinterest"></i></button>
                        <button class="social-share-linkedin" onclick=""><i class="fa fa-linkedin"></i></button>
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