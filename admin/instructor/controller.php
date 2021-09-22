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

	case 'assignstudent' :
	doAssignStudent();
	break;
  
 
	}
   
	function doInsert(){
		global $mydb;
		if (isset($_POST['selector'])==''){
			message("Select the subject(s) first enable to add","error");
			redirect('index.php');
			}else{
			$userid = $_POST['USERID'];
			$section = $_POST['SECTION'];
			$ay = $_POST['SY'];
			$id = $_POST['selector'];
			$key = count($id);

			for($i=0;$i<$key;$i++){ 

				// $sql = "SELECT * FROM `tblinstructorsubject` WHERE `SUBJ_ID`='{$id[$i]}'";
				// $mydb->setQuery($sql);
				// $cur = $mydb->executeQuery();
				// $maxrow = $mydb->num_rows($cur);

				// if ($maxrow < 1) {
					# code...
					$sql ="INSERT INTO  `tblinstructorsubject` (`ACCOUNT_ID`, `SUBJ_ID`,`SECTIONID`, `AY`) VALUES ('{$userid}','{$id[$i]}','{$section}','{$ay}')";
					$mydb->setQuery($sql);
					$mydb->executeQuery();
					message("All selected Subject has been Added!","info");
				// } else{
				// 	message("Some selected Subject cannot be Added!","info");
				// }


				

			// $student = New student();
			// $student->delete($id[$i]);

 		// 	$sy = new Schoolyear();
 		// 	$sy->delete($id[$i]);


			// $parent = New Parents();
			// $parent->delete($id[$i]);

		
			
			redirect('index.php');

			}
		} 
	}

	function doEdit(){
	if(isset($_POST['save'])){

		if ($_POST['INST_NAME'] == "" OR $_POST['INST_MAJOR'] == "" OR $_POST['INST_CONTACT'] == "" ) {
			message("All field is required!","error");
			redirect('index.php?view=edit&id='.$_POST['INST_ID']);
		}else{

 
			$inst = New Instructor();
			$inst->INST_NAME 	= $_POST['INST_NAME'];
			$inst->INST_MAJOR	= $_POST['INST_MAJOR']; 
			$inst->INST_CONTACT	= $_POST['INST_CONTACT']; 
			$inst->update($_POST['INST_ID']);


		 
			message("Instructor has been updated!", "success");
			redirect("index.php");
	 
 		 }

		}
	}


	function doDelete(){
		global $mydb;
	 	$id = 	$_GET['id'];

	 	$sql = "SELECT * FROM `tblinstructorsubject` WHERE `INST_ID`=$id";
		$mydb->setQuery($sql);
		$res = $mydb->loadSingleResult();

			 $sql ="DELETE FROM `tblinstructorsubject` WHERE `INST_ID`=$id";
			 $mydb->setQuery($sql);
			 $mydb->executeQuery();
			 
			message("Instructor's subject already Deleted!","info");
			redirect('index.php?view=view&id='.$res->ACCOUNT_ID);
		 
		
	}

	function doAssignStudent(){
		global $mydb;
		  
		if (isset($_POST['selector'])==''){
			message("Select the subject(s) first enable to add","error");
			redirect('index.php');
			}else{
			$subjectid = $_POST['SUBJECTID'];
			$sectionid = $_POST['SECTIONID']; 

			$id = $_POST['selector'];
			$key = count($id);

			for($i=0;$i<$key;$i++){ 
 
					$sql ="UPDATE  `studentsubjects` SET `SECTIONID`='{$sectionid}' WHERE `IDNO`='{$id[$i]}' AND `SUBJ_ID`='{$subjectid}'";
					$mydb->setQuery($sql);
					$mydb->executeQuery(); 

			}

			$sql = "SELECT * FROM `tblsection` WHERE `SECTIONID`='{$sectionid}'";
			$mydb->setQuery($sql);
			$res = $mydb->loadSingleResult();

					
		   message("All selected Student has been assigned in the section ".$res->SECTION,"info"); 
		   redirect('index.php');
		} 
	}
  
 
?>