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


		if ($_POST['AMOUNT'] == "" OR $_POST['DESCRIPTION'] == "") {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	
			$expense = New Expenses(); 
		    $expense->AMOUNT 		= $_POST['AMOUNT'];
			$expense->DESCRIPTION		= $_POST['DESCRIPTION']; 
			$expense->COURSE_ID		= $_POST['COURSE_ID']; 
			$expense->create();
  

			message("New [". $_POST['DESCRIPTION'] ."] created successfully!", "success");
			redirect("index.php");
			
		}
		}

	}

	function doEdit(){
	if(isset($_POST['save'])){ 

 		$desc = $_POST['DESCRIPTION'];

			$expense = New Expenses(); 
			$expense->AMOUNT 		= $_POST['AMOUNT'];
			$expense->DESCRIPTION		= $desc;  
			$expense->COURSE_ID		= $_POST['COURSE_ID']; 
			$res = $expense->update($_POST['EXPENSEID']);

			  message("[". $_POST['DESCRIPTION'] ."] has been updated!", "success");
			redirect("index.php");
			 
			
		}
	}


	function doDelete(){
		
	 
				$id = 	$_GET['id'];

				$expense = New Expenses();
	 		 	$expense->delete($id);
			 
			message("Expenses already Deleted!","info");
			redirect('index.php');
		 
		
	}

	 
 
?>