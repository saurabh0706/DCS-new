<?php include 'admin_sidebar.php';
	include 'db_connect.php';
?>
<?php
//delete menu code
if(isset($_GET['menu']))
{
	$dlt_menu="delete from menus where menu_id='".$_GET['menu']."'";
	if(mysql_query($dlt_menu))
	{
		$errormsg=array("msg"=>"Menu deleted successfully.","type"=>"success");
	}
	else
	{
		$errormsg=array("msg"=>"Menu deletion failed !","type"=>"fail");
	}
}

//edit menu code
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
                                                            <h1>SHOW MENU</h1>
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
                                            <h5>ALL MENUS</h5>
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
											if($_GET['error']==0){echo "Menu succesfully updated.";}
											if($_GET['error']==1){echo "Menu Not updated.";}
											}
											?>
											<br>
										</div><?}?>
										
                                            <table class="table table-striped responsive">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Menu Name</th>
                                                        <th>Redirect Link</th>
														<th>Priority</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
													//$sql_fetchmenu="select @rownum:=@rownum+1 'Sr', m.* from menus p,(SELECT @rownum:=0) r ORDER BY priority ASC";
													$sql_fetchmenu="select * from menus ORDER BY priority ASC";
													$result=mysql_query($sql_fetchmenu);
													if(mysql_num_rows($result)!=0)
													{	$counter=1;
														while($row=mysql_fetch_array($result))
														{
												?>
                                                    <tr>
                                                        <td><?php echo $counter;?></td>
                                                        <td><?php echo $row['menu_name'];?></td>
                                                        <td><?php echo $row['redirect_link'];?></td>
                                                        <td><?php echo $row['priority'];?></td>
														<td><?php echo $row['status'];?></td>
                                                        <td>
                                                            <a href="add_menu.php?menu=<?php echo $row['menu_id'];?>" class="btn edit faedit" title="Edit"><i class="faicon fa fa-pencil"></i></a>
                                                            <a href="show_menu.php?menu=<?php echo $row['menu_id'];?>" class="btn btn-danger faedit" data-toggle="confirmation" title="Delete"><i class="fa fa-times faicon"></i></a>
                                                        </td>
                                                    </tr><?php $counter++;}
													}else
													{?>
													<tr>
                                                        <td colspan="6"><?php echo "There is no menu in database.";?></td>
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