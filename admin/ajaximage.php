 <?php
 
	include "db_connect.php";
	//to add an image to gallery
	if(isset($_POST['btn_addimage']) and $_SERVER['REQUEST_METHOD']=="POST")
	{	$path="gallery/";
		$valid_formats=array("jpg","png","jpeg","gif","bmp");
		if($_POST['img_category']=="" || $_POST['idi_imgtag']=="")
		{
			$errormsg=array("msg"=>"Required fields can't be empty.","type"=>"fail");
			
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
							$actual_image_name= time().".".$ext;
							$tmp=$_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp,$path.$actual_image_name))
							{
								$sql_insimg="insert into gallery(img_actual_name,img_name,tagline,description,category_id,link,status,date_of_upload)values('".$image_name."','".$actual_image_name."','".$_POST['idi_imgtag']."','".$_POST['idi_imgdesc']."','".$_POST['img_category']."','".$path.$actual_image_name."','".$status."','".date("Y-m-d")."')";
								if(mysql_query($sql_insimg,$con))
								{	//die('Error: ' . mysql_error());
									$errormsg=array("msg"=>"Image successfully uploaded.","type"=>"success");
									
								}
								else
								{
									//die('Error: ' . mysql_error());
									$errormsg=array("msg"=>"Sorry, Image can not be uploaded. Choose other one.","type"=>"fail");
									
								}
								//echo "<img src='gallery/".$actual_image_name."' class='preview'>";
							}
							else
							$errormsg=array("msg"=>"failed","type"=>"fail");
							
						}
						else
						$errormsg=array("msg"=>"Maximum image size is 3MB.","type"=>"fail");
						
					}
					else
					$errormsg=array("msg"=>"Invalid file format.","type"=>"fail");
					
				}
				else
				$errormsg=array("msg"=>"Please select image.","type"=>"fail");
				
		}
		

	}
 
 //to add a slider image
	if(isset($_POST['btn_addsliderimage']) and $_SERVER['REQUEST_METHOD']=="POST")
	{	$path="../gallery/slider/";
		$valid_formats=array("jpg","png","jpeg","gif","bmp");
			
		if(isset($_POST['idi_priority']) and !preg_match('/^[1-9][0-9]{0,2}$/',$_POST['idi_priority']))
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
		
		
				$image_name= $_FILES['sliderimg']['name'];
				$size=$_FILES['sliderimg']['size'];
				if(strlen($image_name))
				{
					list($txt,$ext)=explode(".", $image_name);
					if(in_array($ext,$valid_formats))
					{
						if($size<(3072*3072)) //image size maximum 3mb
						{
							$timestamp_name= time().".".$ext;
							$tmp=$_FILES['sliderimg']['tmp_name'];
							if(move_uploaded_file($tmp,$path.$timestamp_name))
							{
								$sql_insimg="insert into slider_image(sliderimg_name,timestamp_name,sliderimg_path,priority,status,date_added)values('".$image_name."','".$timestamp_name."','".$path.$timestamp_name."','".$_POST['idi_priority']."','".$status."','".date("Y-m-d")."')";
								if(mysql_query($sql_insimg,$con))
								{	//die('Error: ' . mysql_error());
									$errormsg=array("msg"=>"Image successfully uploaded.","type"=>"success");
									
								}
								else
								{
									//die('Error: ' . mysql_error());
									$errormsg=array("msg"=>"Sorry, Image can not be uploaded. Choose other one.","type"=>"fail");
									
								}
								//echo "<img src='gallery/".$actual_image_name."' class='preview'>";
							}
							else
							$errormsg=array("msg"=>"failed","type"=>"fail");
							
						}
						else
						$errormsg=array("msg"=>"Maximum image size is 3MB.","type"=>"fail");
						
					}
					else
					$errormsg=array("msg"=>"Invalid file format.","type"=>"fail");
					
				}
				else
				$errormsg=array("msg"=>"Please select image.","type"=>"fail");
				
		
		}

	}
 ?>