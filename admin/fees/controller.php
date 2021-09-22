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
 // `schedID`, `sched_time`, `sched_day`, `sched_subject`, `sched_semester`, `sched_sy`, `empid`, `crs_yr`, `sched_room`
// `CLASS_CODE`, `SUBJ_ID`, `INST_ID`, `SYID`, `AY`, `DAY`, `C_TIME`, `IDNO`, `ROOM`, `SECTION`
		if ($_POST['IDNO'] == "" OR $_POST['FEES'] == ""   ) {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	

			$fee = New FEES();
			// $subj->USERID 		= $_POST['user_id'];
			$fee->EXPENSEID		= $_POST['DESCRIPTION'];  
			$fee->IDNO 			= $_POST['IDNO'];
			$fee->PAYMENT		= $_POST['FEES']; 
			$fee->REMARKS		= $_POST['REMARKS']; 
			$fee->USERNAME		= $_SESSION['ACCOUNT_USERNAME']; 
			$fee->TRANSDATE     = DATE('Y-m-d');
			$fee->create();
 
			message("Student is already paid.", "success");
			redirect("index.php");
			
		}
		}

	}

	function doEdit(){
	if(isset($_POST['save'])){

				$fee = New FEES();
			// $subj->USERID 		= $_POST['user_id'];
			$fee->EXPENSEID		= $_POST['DESCRIPTION'];  
			$fee->IDNO 			= $_POST['IDNO'];
			$fee->PAYMENT		= $_POST['FEES']; 
			$fee->REMARKS		= $_POST['REMARKS']; 
			$fee->USERNAME		= $_SESSION['ACCOUNT_USERNAME']; 
			$fee->TRANSDATE     = DATE('Y-m-d');
			$fee->update($_POST['FEEID']);

			  message("Payment has been updated!", "success");
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

		// 	$subj = New User();
		// 	$subj->delete($id[$i]);

		
				$id = 	$_GET['id'];

				$fee = New FEES();
	 		 	$fee->delete($id);
			 
			message("Payment already Deleted!","info");
			redirect('index.php');
		// }
		// }

		
	}
 
 
?>