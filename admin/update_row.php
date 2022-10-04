<?php
include 'db_connect.php';
session_start();
//udate menus

if(isset($_POST['btn_updatemenu']))
{
	if($_POST['idi_menuname']=="" || $_POST['idi_redlink']=="")
	{
		$errormsg="Required Fields Can't Be Empty.";
		$_SESSION['errormenu']=$errormsg;
		header('location:add_menu.php?menu='.$_POST['idi_menuid']);
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
		$query="update menus SET menu_name='".$_POST['idi_menuname']."', redirect_link='".$_POST['idi_redlink']."',status='".$status."', date_of_creation='".date("Y-m-d")."' where menu_id='".$_POST['idi_menuid']."'";
		if(mysql_query($query,$con))
		{	//die('Error: ' . mysql_error());
			$errormsg="Menu succesfully updated.";
			header('location:show_menu.php?error=0');
		}
		else
		{
			//die('Error: ' . mysql_error());
			$errormsg="Sorry, Menu can not be updated right now. Maybe you are trying to add a common priority";
			header('location:show_menu.php?error=1');
		}
		
	}
}

//udate category

if(isset($_POST['btn_updatecategory']))
{
	if($_POST['idi_catname']=="")
	{
		$errormsg="Category Name Can't Be Empty.";
		$_SESSION['errorcat']=$errormsg;
		header('location:add_category.php?catg='.$_POST['idi_catid']);
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
		$query="update fabric_category SET category_name='".$_POST['idi_catname']."', status='".$status."', date_of_creation='".date("Y-m-d")."' where category_id='".$_POST['idi_catid']."'";
		if(mysql_query($query,$con))
		{	//die('Error: ' . mysql_error());
			$errormsg="Category succesfully updated.";
			header('location:show_category.php?error=0');
		}
		else
		{
			//die('Error: ' . mysql_error());
			$errormsg="Sorry, Category can not be updated right now.";
			header('location:show_category.php?error=1');
		}
		
	}
}


//to update an image to gallery
 if(isset($_POST['btn_updateimage']) and $_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['idi_imgid']))
	{	$path="gallery/";
		$valid_formats=array("jpg","png","jpeg","gif","bmp");
		if($_POST['img_category']=="" || $_POST['idi_imgtag']=="")
		{
			$errormsg="Required fields can't be empty.";
			$_SESSION['errorimg']=$errormsg;
			header('location:add_image.php?img='.$_POST['idi_imgid']);
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
		
		
				$image_name= $_FILES['photoimg']['name'];
				$size=$_FILES['photoimg']['size'];
				if(strlen($image_name))
				{
					list($txt,$ext)=explode(".", $image_name);
					if(in_array($ext,$valid_formats))
					{
						if($size<(3072*3072)) //image size maximum 3mb
						{
							$timestap_name= time().".".$ext;
							$tmp=$_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp,$path.$timestap_name))
							{
								if($_POST['idi_imgpath']=="")
								{
									echo "image path is missing";
									header('location:show_images.php?error=missingpath');
								}
								else
								{
									unlink($_POST['idi_imgpath']);
									
									$sql_update="update gallery set img_actual_name='".$image_name."',img_name='".$timestap_name."',tagline='".$_POST['idi_imgtag']."',description='".$_POST['idi_imgdesc']."',category_id='".$_POST['img_category']."',link='".$path.$timestap_name."',date_of_upload='".date("Y-m-d")."',status='".$status."' where img_id='".$_POST['idi_imgid']."'";
									if(mysql_query($sql_update,$con))
									{
										$errormsg="image updated succesfully";
										header('location:show_images.php?error=0');
									}
									else
									{
										$errormsg="image updating failed";
										header('location:show_images.php?error=1');
									}
								}
							}
							else
							{$errormsg="failed";header('location:add_image.php?error=2');}
						}
						else
						{$errormsg="Maximum image size is 3MB.";header('location:add_image.php?error=3');}
					}
					else
					{$errormsg="Invalid file format.";header('location:add_image.php?error=4');}
				}
				else
				{
					$sql_update="update gallery set tagline='".$_POST['idi_imgtag']."',description='".$_POST['idi_imgdesc']."',category_id='".$_POST['img_category']."',date_of_upload='".date("Y-m-d")."',status='".$status."' where img_id='".$_POST['idi_imgid']."'";
					if(mysql_query($sql_update,$con))
					{
						$errormsg="image information updated succesfully";
						header('location:show_images.php?error=5');
					}
					else
					{
						$errormsg="image information not updated";die();
						header('location:show_images.php?error=6');
					}
				}
		}
		

	}
	
	
	//to update slider image to gallery
 if(isset($_POST['btn_updatesliderimg']) and $_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['idi_slideid']))
	{	$path="../gallery/slider/";
		$valid_formats=array("jpg","png","jpeg","gif","bmp");
		if(isset($_POST['idi_priority']) and !preg_match('/^[0-9][0-9]{0,2}$/',$_POST['idi_priority']))
		{
			$errormsg="Please Enter digits only. Maximum two digits are allowed.";
			$_SESSION['errorslide']=$errormsg;
			header('location:add_slider_image.php?slideimg='.$_POST['idi_slideid']);
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
		
		
				$image_name= $_FILES['sliderimg']['name'];
				$size=$_FILES['sliderimg']['size'];
				if(strlen($image_name))
				{
					list($txt,$ext)=explode(".", $image_name);
					if(in_array($ext,$valid_formats))
					{
						if($size<(3072*3072)) //image size maximum 3mb
						{
							$timestap_name= time().".".$ext;
							$tmp=$_FILES['sliderimg']['tmp_name'];
							if(move_uploaded_file($tmp,$path.$timestap_name))
							{
								if($_POST['idi_imgpath']=="")
								{
									echo "image path is missing";
									header('location:show_slider_images.php?error=missingpath');
								}
								else
								{
									unlink($_POST['idi_imgpath']);
									
									$sql_update="update slider_image set sliderimg_name='".$image_name."',timestamp_name='".$timestap_name."',sliderimg_path='".$path.$timestap_name."',priority='".$_POST['idi_priority']."',date_added='".date("Y-m-d")."',status='".$status."' where sliderimg_id='".$_POST['idi_slideid']."'";
									if(mysql_query($sql_update,$con))
									{
										$errormsg="image updated succesfully";
										header('location:show_slider_image.php?error=0');
									}
									else
									{
										echo mysql_error();die();
										$errormsg="image updating failed";
										header('location:show_slider_image.php?error=1');
									}
								}
							}
							else
							{$errormsg="failed";header('location:add_slider_image.php?error=2');}
						}
						else
						{$errormsg="Maximum image size is 3MB.";header('location:add_slider_image.php?error=3');}
					}
					else
					{$errormsg="Invalid file format.";header('location:add_slider_image.php?error=4');}
				}
				else
				{
					$sql_update="update slider_image set priority='".$_POST['idi_priority']."',date_added='".date("Y-m-d")."',status='".$status."' where sliderimg_id='".$_POST['idi_slideid']."'";
					if(mysql_query($sql_update,$con))
					{
						$errormsg="image information updated succesfully";
						header('location:show_slider_image.php?error=5');
					}
					else
					{
						$errormsg="image information not updated";die();
						header('location:show_slider_image.php?error=6');
					}
				}
		}
		

	}
	
	//udate social link

if(isset($_POST['btn_updatesocial']))
{
	if($_POST['idi_sociallink']=="")
	{
		$errormsg="Required fields can't be empty.";
		$_SESSION['errorsoc']=$errormsg;
		header('location:add_social.php?social='.$_POST['idi_socialid']);
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
		$sql_inssocial="update social_link SET link='".$_POST['idi_sociallink']."',status='".$status."',date_added='".date("Y-m-d")."' where social_id='".$_POST['idi_socialid']."'";
		if(mysql_query($sql_inssocial,$con))
		{	//die('Error: ' . mysql_error());
			$errormsg="Social link succesfully updated.";
			header('location:show_social.php?error=0');
		}
		else
		{
			die('Error: ' . mysql_error());
			$errormsg="Sorry, Social link can not be updated right now.";
			header('location:show_social.php?error=1');
		}
		
	}
}


//udate address

if(isset($_POST['btn_updateaddress']))
{	
	
	//$_SESSION['addrid']=$_POST['idi_addrid'];
	
	if($_POST['idi_street']=="" || $_POST['idi_pincode']=="" || $_POST['idi_address']=="" ||  $_POST['idi_mobno']=="")
	{
		$errormsg="Required field can't be empty.";
		$_SESSION['erroraddr']=$errormsg;
		header('location:add_address.php?addr='.$_POST['idi_addrid']);
	}
	elseif(!preg_match('/^[0-9]{6,6}$/',$_POST['idi_pincode']))
	{
		$errormsg="Please Enter valid pin-code.";
		$_SESSION['error']=$errormsg;
		header('location:add_address.php?addr='.$_POST['idi_addrid']);
	}
	elseif(!preg_match('/^[0-9]{10}$/',$_POST['idi_mobno']))
	{
		$errormsg="Please Enter valid Mobile Number.";
		$_SESSION['error']=$errormsg;
		header('location:add_address.php?addr='.$_POST['idi_addrid']);
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
		$query="update address SET plot_no='".$_POST['idi_plotno']."',street='".$_POST['idi_street']."',address='".$_POST['idi_address']."',pincode='".$_POST['idi_pincode']."',mobile_no='".$_POST['idi_mobno']."',fax_no='".$_POST['idi_faxno']."', status='".$status."', date_added='".date("Y-m-d")."' where address_id='".$_POST['idi_addrid']."'";
		if(mysql_query($query,$con))
		{	//die('Error: ' . mysql_error());
			$errormsg="Address succesfully updated.";
			header('location:show_address.php?error=0');
		}
		else
		{
			//die('Error: ' . mysql_error());
			$errormsg="Sorry, Address can not be updated right now.";
			header('location:show_address.php?error=1');
		}
		
	}
}

?>