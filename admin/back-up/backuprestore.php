<?php 
 if (!isset($_SESSION['ACCOUNT_ID'])){
    redirect(web_root."admin/index.php");
   }  
$db_host ="localhost";
$db_user = "root";
$db_pass ="";
$db_name ="db_studentmanagement";
/****************/
 require_once('backup_restore.class.php'); 


    $newImport = new backup_restore($db_host,$db_name,$db_user,$db_pass);

    if(isset($_GET['process'])){
        $process = $_GET['process'];
        if($process == 'backup'){
            $message = $newImport -> backup ();   
        }else if($process == 'restore'){
            $message = $newImport -> restore (); 
            @unlink('backup/database_'.$db_name.'.sql');
            
        }
    }

?>
 <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Back-up and Restore</h1>
          </div>
           </div> 
   <?php if(isset($_GET['process'])): ?>
                            <?php 
                                $msg = $_GET['process'];   
                                $class = 'text-center';
                                switch($msg){
                                    case 'backup':
                                        $msg = 'Backup Successfully!<br />Download the <a href=backup/'.$message.' target=_blank >SQL FILE </a> OR RESTORE IT ANY TIME'; 
                                        break;
                                    case 'restore':
                                        $msg = $message; 
                                        break;
                                    case 'upload':
                                        $msg = $message; 
                                        break;
                                    default:
                                        $class = 'hide';
                                }                                
                            ?>
                                <strong><?php echo $msg; ?></strong><br>
                        <?php endif; ?>
                        
        
                <br>
                            <a href="index.php?process=backup"  class="btn btn-success btn-lg span4" >
                               <i class="fa fa-database"></i> BACKUP DATABASE 
                            </a>
                      
                            <a href="index.php?process=restore" class="btn btn-info btn-lg span4">
                                 <i class="fa fa-database"></i> RESTORE DATABASE 
                            </a>


 
       