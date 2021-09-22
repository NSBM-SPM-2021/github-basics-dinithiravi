<?php
require_once ("../../include/initialize.php");
	if(!isset($_SESSION['ACCOUNT_ID'])){
	redirect(web_root."admin/index.php");
}

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;

	case 'photos' :
	doupdateimage();
	break;

 
	}
   
	function doInsert(){
		global $mydb; 
		if(isset($_POST['save'])){

			$autonum = new Autonumber();
			$id = $autonum->set_autonumber("BLOGID");
			$BLOGID = date("Y").$id->AUTO;

			$ANNOUNCEMENT_TEXT = $_POST['ANNOUNCEMENT_TEXT'];
			$ANNOUNCEMENT_WHAT = $_POST['ANNOUNCEMENT_WHAT'];  

			$ANNOUNCEMENT_WHEN = ""; 
			$ANNOUNCEMENT_WHERE = "";

		if ($_POST['ANNOUNCEMENT_TEXT'] == "" OR $_POST['ANNOUNCEMENT_WHAT'] == "" ){
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	

			$annoucement = New Announcement();
			$annoucement->ANNOUNCEMENTID 	= $BLOGID;
			$annoucement->ANNOUNCEMENT_TEXT = $ANNOUNCEMENT_TEXT;
			$annoucement->ANNOUNCEMENT_WHAT = $ANNOUNCEMENT_WHAT;  
			$annoucement->DATEPOSTED 		= date("Y-m-d H:i:s");
			$annoucement->AUTHOR 			= $_SESSION['ACCOUNT_NAME'];
			$annoucement->create();  

			// $sql ="INSERT INTO `tblblogpost` (`BLOGID`,`BLOGS`, `BLOG_WHAT`, `BLOG_WHEN`, `BLOG_WHERE`, `DATEPOSTED`, `CATEGORY`,`AUTHOR`) 
			// VALUES('{$BLOGID}','{$ANNOUNCEMENT_TEXT}','{$ANNOUNCEMENT_WHAT}','{$ANNOUNCEMENT_WHEN}','{$ANNOUNCEMENT_WHERE}',NOW(),'ANNOUNCEMENT','".$_SESSION['NAME']."')";
			// $mydb->setQuery($sql);
			// $mydb->executeQuery();


			// $sql = "SELECT * FROM tblstudent";
			// $mydb->setQuery($sql);
			// $cur = $mydb->loadResultList();
			// foreach ($cur as $result) {
			// 	# code...
			// 	$sql = "INSERT INTO `tblnotifblogs` (`BlogID`, `IDNO`) VALUES ('{$BLOGID}','".$result->IDNO."')";
			// 	$mydb->setQuery($sql);
			// 	$mydb->executeQuery();
			// }

			

			$autonum = New Autonumber(); 
			$autonum->auto_update("BLOGID");

			message("Announcement has been posted successfully!", "success");
			redirect("index.php");
			
		}
		}

	}

	function doEdit(){

		global $mydb; 

	if(isset($_POST['save'])){  
			$BLOGID =$_POST['ANNOUNCEMENTID'];
			$ANNOUNCEMENT_TEXT = $_POST['ANNOUNCEMENT_TEXT'];
			$ANNOUNCEMENT_WHAT = $_POST['ANNOUNCEMENT_WHAT'];  
			$ANNOUNCEMENT_WHEN = ""; 
			$ANNOUNCEMENT_WHERE = "";


			if ($_POST['ANNOUNCEMENT_TEXT'] == "" OR $_POST['ANNOUNCEMENT_WHAT'] == ""){
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	

			$annoucement = New Announcement();
			$annoucement->ANNOUNCEMENT_TEXT = $ANNOUNCEMENT_TEXT;
			$annoucement->ANNOUNCEMENT_WHAT = $ANNOUNCEMENT_WHAT;  
			$annoucement->AUTHOR 			= $_SESSION['ACCOUNT_NAME'];
			$annoucement->update($BLOGID);  

			// $sql ="UPDATE `tblblogpost` SET `BLOGS`='{$ANNOUNCEMENT_TEXT}', `BLOG_WHAT`='{$ANNOUNCEMENT_WHAT}', `BLOG_WHEN`='{$ANNOUNCEMENT_WHEN}', `BLOG_WHERE`='{$ANNOUNCEMENT_WHERE}'  WHERE`BLOGID`='{$BLOGID}'";
			// $mydb->setQuery($sql);
			// $mydb->executeQuery();

			  message("Announcement has been updated!", "success");
			redirect("index.php");
			 
			}
		}
	}


	function doDelete(){
		
		global $mydb; 
	 
				$BLOGID = 	$_GET['id'];

				$annoucement = New Announcement();
	 		 	$annoucement->delete($BLOGID);
 
			 
			message("Announcement has been removed!","info");
			redirect('index.php');
		 
		
	}

	 
 
?>