<?php
require_once ("../../include/initialize.php");
	 if (!isset($_SESSION['ACCOUNT_ID'])){
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
		if(isset($_POST['save'])){
			
  		if ($_POST['COURSE_NAME'] == "" OR $_POST['COURSE_LEVEL'] == "" OR $_POST['COURSE_MAJOR'] == "" OR $_POST['COURSE_DESC'] == "" OR $_POST['DEPT_ID'] == "none") {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	
			$course = New Course();
			// $course->USERID 		= $_POST['user_id'];
			$course->COURSE_NAME 		= $_POST['COURSE_NAME'];
			$course->COURSE_LEVEL		= $_POST['COURSE_LEVEL'];
			$course->COURSE_MAJOR		= $_POST['COURSE_MAJOR'];
			$course->COURSE_DESC		= $_POST['COURSE_DESC']; 
			$course->DEPT_ID			= $_POST['DEPT_ID'];
			$course->create();

						// $autonum = New Autonumber(); 
						// $autonum->auto_update(2);

			message("New [". $_POST['COURSE_NAME'] ."] created successfully!", "success");
			redirect("index.php");
			
		}
		}

	}

	function doEdit(){
	global $mydb;
	if(isset($_GET['id'])){

		$sql ="UPDATE `tblsemester` SET `SETSEM`=1  WHERE `SEMID`=".$_GET['id'];
		$mydb->setQuery($sql);
		

		$sql ="UPDATE `tblsemester` SET `SETSEM`=0  WHERE `SEMID`!=".$_GET['id'];
		$mydb->setQuery($sql);
		
 
			 

		 	message("Semester has been updated!", "success");
			redirect("index.php");
		}
	}


	function doDelete(){
		
		// if (isset($_POST['selector'])==''){
		// message("Select the records first before you delete!","info");
		// redirect('index.php');
		// }else{

		// $id = $_POST['selector'];
		// $key = count($id);

		// for($i=0;$i<$key;$i++){

		// 	$course = New User();
		// 	$course->delete($id[$i]);

		
				$id = 	$_GET['id'];

				$course = New Course();
	 		 	$course->delete($id);
			 
			message("Course already Deleted!","info");
			redirect('index.php');
		// }
		// }

		
	}

	 
?>