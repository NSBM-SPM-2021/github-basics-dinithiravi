<?php 
require_once("../include/initialize.php");
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/login.php");
     } 

$content='home.php';
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
switch ($view) {
	case 'grades' :
        $title="Grades";	
		$content = 'studentgrades.php';		
		break;	
	default :
	  $title="Home";	
	    if ($_SESSION['ACCOUNT_TYPE'] =='Administrator') {
	    	# code...
	    	$content ='home.php';	
	    }elseif ($_SESSION['ACCOUNT_TYPE'] =='Officer'){
	    	$content = 'officer.php';
	    }else{
	     $content = 'instructor.php';
	    }
			
}
require_once("theme/templates.php");
?>