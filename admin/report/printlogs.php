<?php
require_once("../../include/initialize.php");
  if(!isset($_SESSION['ACCOUNT_ID'])){
  redirect(web_root."admin/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Green Valley Foundation College INC.  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="<?php echo web_root; ?>admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo web_root; ?>admin/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo web_root; ?>admin/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo web_root; ?>admin/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
 
   <link href="<?php echo web_root; ?>admin/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo web_root; ?>admin/font/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="<?php echo web_root; ?>admin/font/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="<?php echo web_root; ?>admin/css/dataTables.bootstrap.css" rel="stylesheet">
 
     <!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 <link href="<?php echo web_root; ?>css/datepicker.css" rel="stylesheet" media="screen">
 
 <link href="<?php echo web_root; ?>admin/css/costum.css" rel="stylesheet">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h4 class="page-header ">
          <i class="fa fa-globe"></i> Green Valley Foundation College INC.
           <small class="pull-right">Printed Date: <?php echo date('m/d/Y'); ?></small>
        </h4>
      </div>
      <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header" align="center">
           User Logs 
              
          </h2>
        </div> 
      </div> 
   

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 col-md-12  ">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Name.</th>
              <th>Date</th> 
              <th>User Type</th> 
              <th>Log Mode</th>
               
            </tr>
            </thead>
            <tbody>
            <?php 
                if ($_POST['Users']=="All") {
                  # code...
                    $sql ="SELECT * FROM `tbllogs`  l ,`useraccounts` u
                      WHERE l.`USERID`=u.`ACCOUNT_ID`" ;
                     

                  $mydb->setQuery($sql);
                  $res = $mydb->executeQuery();
                  $row_count = $mydb->num_rows($res);
                  $cur = $mydb->loadResultList();
                 
                    if ($row_count > 0){
                            foreach ($cur as $result) {
                                   ?>
                                  <tr> 
                                   <td><?php echo $result->ACCOUNT_NAME;?></td>
                                     <td><?php echo $result->LOGDATETIME;?></td>
                                    <td><?php echo $result->LOGROLE;?></td>
                                    <td><?php echo $result->LOGMODE;?></td> 
                                  </tr>
                                  <?php 
                                    
                      } 

                      }
                         $sql ="SELECT * FROM `tbllogs`  l ,`tblstudent` u
                          WHERE l.`USERID`=u.`IDNO`" ;
                         

                  $mydb->setQuery($sql);
                  $res = $mydb->executeQuery();
                  $row_count = $mydb->num_rows($res);
                  $cur = $mydb->loadResultList();
                 
                    if ($row_count > 0){
                            foreach ($cur as $result) {
                                   ?>
                                  <tr> 
                                   <td><?php echo $result->FNAME . ' '. $result->LNAME;?></td>
                                     <td><?php echo $result->LOGDATETIME;?></td>
                                    <td><?php echo $result->LOGROLE;?></td>
                                    <td><?php echo $result->LOGMODE;?></td> 
                                  </tr>
                                  <?php 
                                    
                      } 

                      }
                }else{

                   if ($_POST['Users']=='Administrator' ||  $_POST['Users']=='Registrar') {
                # code...
                  $sql ="SELECT * FROM `tbllogs`  l ,`useraccounts` u
                      WHERE l.`USERID`=u.`ACCOUNT_ID` AND  LOGROLE LIKE '%" . $_POST['Users'] ."%'" ;
                     

                  $mydb->setQuery($sql);
                  $res = $mydb->executeQuery();
                  $row_count = $mydb->num_rows($res);
                  $cur = $mydb->loadResultList();
                 
                    if ($row_count > 0){
                            foreach ($cur as $result) {
                                   ?>
                                  <tr> 
                                   <td><?php echo $result->ACCOUNT_NAME;?></td>
                                     <td><?php echo $result->LOGDATETIME;?></td>
                                    <td><?php echo $result->LOGROLE;?></td>
                                    <td><?php echo $result->LOGMODE;?></td> 
                                  </tr>
                                  <?php 
                                    
                      } 

                      }
                  }else{
                     # code...
                      $sql ="SELECT * FROM `tbllogs`  l ,`tblstudent` u
                          WHERE l.`USERID`=u.`IDNO` AND  LOGROLE LIKE '%" . $_POST['Users'] ."%'" ;
                         

                  $mydb->setQuery($sql);
                  $res = $mydb->executeQuery();
                  $row_count = $mydb->num_rows($res);
                  $cur = $mydb->loadResultList();
                 
                    if ($row_count > 0){
                            foreach ($cur as $result) {
                                   ?>
                                  <tr> 
                                   <td><?php echo $result->FNAME . ' '. $result->LNAME;?></td>
                                     <td><?php echo $result->LOGDATETIME;?></td>
                                    <td><?php echo $result->LOGROLE;?></td>
                                    <td><?php echo $result->LOGMODE;?></td> 
                                  </tr>
                                  <?php 
                                    
                      } 

                      }
                  } 

                }  
            ?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
        <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
