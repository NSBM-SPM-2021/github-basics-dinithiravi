<?php 
require_once '../include/initialize.php';
// Four steps to closing a session
// (i.e. logging out)

// 1. Find the session
@session_start();

 $sql="INSERT INTO `tbllogs` (`USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) 
          VALUES (".$_SESSION['ACCOUNT_ID'].",'".date('Y-m-d H:i:s')."','".$_SESSION['ACCOUNT_TYPE']."','Logged out')";
          $mydb->InsertThis($sql) ; 

         if ($_SESSION['ACCOUNT_TYPE']=='Officer') { 
		    unset($_SESSION['IDNO']);   		 
		 	unset($_SESSION['ACC_USERNAME']); 	 
		 	unset($_SESSION['ACC_PASSWORD']); 	 
			unset($_SESSION['FNAME']);			 
			unset($_SESSION['LNAME']);			 
			unset($_SESSION['MI']);				 
			unset($_SESSION['PADDRESS']);	 
			unset($_SESSION['COURSEID']);		 
			unset($_SESSION['CONTACT']);		 
			unset($_SESSION['COURSELEVEL']);	 
			unset($_SESSION['ACCOUNTTYPE']);	 
          }

// 2. Unset all the session variables
unset($_SESSION['ACCOUNT_ID']);
unset($_SESSION['ACCOUNT_NAME']);   
unset($_SESSION['ACCOUNT_USERNAME']);  
unset($_SESSION['ACCOUNT_PASSWORD']); 	 
unset($_SESSION['ACCOUNT_TYPE'] );		



// 4. Destroy the session
// session_destroy();
// redirect(web_root."admin/login.php?logout=1");
redirect(web_root."admin/index.php?logout=1");
?>