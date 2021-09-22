<?php
require_once ("../../include/initialize.php");
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'backup' :
	doBackup();
	break;
	
	case 'restore' :
	doEdit();
	break;
 

 
	}
   
	function doBackup(){
		//  define("BACKUP_PATH", "c:/");

		// $server_name   = "localhost";
		// $username      = "root";
		// $password      = "";
		// $database_name = "dbgreenvalley";
		// $date_string   = date("Y-m-d");

		// $cmd = "mysqldump --routines -h {$server_name} -u {$username} -p{$password} {$database_name} > " . BACKUP_PATH . "{$date_string}_{$database_name}.sql";

		// // exec($cmd);
		require_once('backup_restore.class.php'); 
		
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$dbname = 'dbgreenvalley';

		 $newImport = new backup_restore($db_host,$db_name,$db_user,$db_pass);
    
	    $fileName = $db_name . "_" . date("Y-m-d_H-i-s") . ".sql";    
	    // Header description Taken from http://stackoverflow.com/a/10766725
	    header("Content-disposition: attachment; filename=".$fileName);
	    header("Content-Type: application/force-download");
	    //header("Content-Transfer-Encoding: application/zip;\n");
	    header("Pragma: no-cache");
	    header("Cache-Control: must-revalidate, post-check=0, pre-check=0, public");
	    header("Expires: 0");

	    //call of backup function
	    echo $newImport -> backup(); die();

		// $output = "D:/dbgreenvalley.sql";
		// exec("D:/xampp/mysql/bin/mysqldump --opt -h $dbhost -u $dbuser -p $dbpass $dbname > $output");
		//   message("Backup complete!", "success");
		//   redirect("index.php");

    // $newImport = new backup_restore($db_host,$db_name,$db_user,$db_pass);
    
    // $fileName = $db_name . "_" . date("Y-m-d_H-i-s") . ".sql";    
    // // Header description Taken from http://stackoverflow.com/a/10766725
    // header("Content-disposition: attachment; filename=".$fileName);
    // header("Content-Type: application/force-download");
    // //header("Content-Transfer-Encoding: application/zip;\n");
    // header("Pragma: no-cache");
    // header("Cache-Control: must-revalidate, post-check=0, pre-check=0, public");
    // header("Expires: 0");

    // //call of backup function
    // echo $newImport -> backup(); die();
    // 		// echo "Backup complete!";
	}

	function doRestore(){
 

			  message("[". $_POST['SUBJ_CODE'] ."] has been updated!", "success");
			redirect("index.php");
	 }


 