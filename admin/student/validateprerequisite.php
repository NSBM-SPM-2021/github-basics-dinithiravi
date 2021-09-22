<?php
require_once ("../../include/initialize.php");

$idno = $_POST['IDNO'];
$subjid = $_POST['SUBJECTID'];
$gradeid = $_POST['GRADEID'];
 

				// // echo $array_subjcode = explode(',',$prerequisite);
		 
			 //   //  foreach ($array_subjcode as $subjcode) {
				// 	 // echo   $subjcode;
				 
	$sql = "SELECT * FROM subject WHERE `SUBJ_ID`='{$subjid}'";
	$mydb->setQuery($sql);
	$row = $mydb->loadSingleResult();

   $prerequisite = $row->PRE_REQUISITE;

   if (strtolower($prerequisite) == 'none') {
   	# code...
   		SaveGrade(); 
   }else{
	   	$sql = "SELECT * FROM subject s,grades g WHERE s.`SUBJ_ID`=g.`SUBJ_ID` AND s.`SUBJ_CODE` in ('{$prerequisite}')  AND IDNO='{$idno}'";
		$mydb->setQuery($sql);
		$pre = $mydb->loadSingleResult();

		if ($pre->AVE < 75) {
			# code...
			echo "Cannot take this subject";
		}else{
			SaveGrade();
		}

   }

function SaveGrade(){
	$idno = $_POST['IDNO'];
	$subjid = $_POST['SUBJECTID'];
	$gradeid = $_POST['GRADEID'];
	$remark = '';
	if($_POST['AVERAGE']>=75){
		$remark = 'Passed';
	}else{
		$remark = 'Failed';
	}

		$grade = New Grade();  
		$grade->AVE					= $_POST['AVERAGE']; 
		$grade->REMARKS				= $remark;  
		$grade->update($gradeid);


		$studentsubject = New StudentSubjects(); 
		$studentsubject->AVERAGE	= $_POST['AVERAGE'];
		$studentsubject->OUTCOME 	=  $remark; 
		$studentsubject->updateSubject($subjid,$idno);

		message("Grade has been updated!", "success");
		redirect("index.php?view=grades&id=".$_POST['IDNO']);
}

	
				// }


?>