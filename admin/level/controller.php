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
			
  		if ($_POST['YEARLEVEL'] == "" ) {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	
			$level = New YearLevel(); 
			$level->YEARLEVEL 	= $_POST['YEARLEVEL']; 
			$level->create();
 
			message("New [". $_POST['YEARLEVEL'] ."] created successfully!", "success");
			redirect("index.php");
			
		}
		}

	}

	function doEdit(){
	if(isset($_POST['save'])){

			$level = New YearLevel(); 
			$level->YEARLEVEL 		= $_POST['YEARLEVEL']; 
			$level->update($_POST['LEVELID']);

			message("[". $_POST['YEARLEVEL'] ."] has been updated!", "success");
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

				$level = New YearLevel(); 
	 		 	$level->delete($id);
			 
			message("Year Level already Deleted!","info");
			redirect('index.php');
		// }
		// }

		
	}

	 
?>