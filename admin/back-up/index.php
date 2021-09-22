<?php
require_once("../../include/initialize.php");
if(!isset($_SESSION['ACCOUNT_ID'])){
	redirect(web_root."admin/index.php");
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="Back-up and Restore"; 
 $header=$view; 
switch ($view) {
	case 'backuprestore' :
		$content    = 'backuprestore.php';		
		break;
 
	default :
		$content    = 'backuprestore.php';		
}
require_once ("../theme/templates.php");
?>
  
