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
            Class List 
             
          </h2>
        </div> 
      </div> 
<?php
if (isset($_POST['INST_ID'])) {
  # code...
   $inst = New Instructor();
  $resInst = $inst->single_instructor($_POST['INST_ID']);

  $sql = "SELECT * FROM `subject` s,tblschedule sc, tblinstructor i 
    WHERE s.SUBJ_ID=sc.SUBJ_ID AND sc.INST_ID=i.INST_ID AND i.INST_ID= ".$_POST['INST_ID']." 
    AND CONCAT(s.SUBJ_ID,sched_day)='".$_POST['Subject']."'";
    $mydb->setQuery($sql);
    $res = $mydb->executeQuery(); 
    $cur = $mydb->loadSingleResult();
}
 

if (isset($_POST['Subject'])) {
  # code...
    $subj = New Subject();
    $resSubj = $subj->single_subject($_POST['Subject']);




}


?> 
       <div class="container">
        <table style="max-width:100%" cellpadding="4" cellspacing="7" class="table">
          <thead>
            <th><label>Instructor :</label></th><th  ><label><?php echo  isset($resInst->INST_NAME) ? $resInst->INST_NAME :'';?></label></th> 
            <th></th>
            <th>Day(s)/Time</th><th><?php echo isset($cur->sched_time) ? $cur->sched_time . ' / ' .$cur->sched_day  : ''; ?></th>
            <!-- <th><label>Course/Year :</label></th><th colspan="2"><label><?php echo isset($_POST['Course']) ? $_POST['Course'] : '';?></label></th>  -->
          </thead>
           <thead> 
            <th><label>Subject :</label></th><th  ><label><?php echo isset($resSubj->SUBJ_CODE) ? $resSubj->SUBJ_CODE :'';?></label></th> 
            <th></th>
            <th><label>Section :</label></th><th  ><label><?php echo isset($_POST['Section']) ? $_POST['Section'] : '';?></label></th>
          </thead>
        </table>
      </div>
   


      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <table class="table table-bordered table-striped" style="font-size:11px" cellspacing="0" >
            <thead>
            <tr>
              <th>IdNo.</th>
              <th>Name</th> 
              <th>Address</th>
              <th>Sex</th> 
              <th>AGE</th>
              <th>Contact No.</th>
              <th>Civil Status</th>
              <th>Course/Year</th>
              <th>Status</th>
            </tr>
            </thead>
            <tbody>
              <?php
                $tot = 0; 
            
                   $sql = "SELECT * FROM `tblinstructor` i,`tblschedule` sc, `studentsubjects` ss,`tblstudent` s,course c
                 WHERE i.`INST_ID`=sc.`INST_ID` AND sc.`SUBJ_ID`=ss.`SUBJ_ID` AND STUDSECTION=SECTION AND ss.`IDNO`=s.`IDNO` 
                 AND s.COURSE_ID = c.COURSE_ID  AND i.`INST_ID`=" .$_POST['INST_ID']. " AND SECTION = ".$_POST['Section']." 
                 AND CONCAT(sc.SUBJ_ID,sched_day)='".$_POST['Subject']."' LIMIT 40";

                $mydb->setQuery($sql);
                $res = $mydb->executeQuery();
                $row_count = $mydb->num_rows($res);
                $cur = $mydb->loadResultList();
               
                  if ($row_count > 0){
                    foreach ($cur as $result) {
                      $dbirth =  date($result->BDAY);
                      $today = date('Y-M-d'); 
              ?>
                       <tr> 
                        <td><?php echo $result->IDNO;?></td>
                        <td><?php echo $result->FNAME . ' ' .  $result->MNAME . '  ' .  $result->LNAME;?></td>
                        <td><?php echo $result->HOME_ADD;?></td>
                        <td><?php echo $result->SEX;?></td>
                        <td><?php echo  date_diff(date_create($dbirth),date_create($today))->y;?></td>
                        <td><?php echo $result->CONTACT_NO;?></td>
                        <td><?php echo $result->STATUS;?></td>
                        <td><?php echo $result->COURSE_NAME .'-'.$result->COURSE_LEVEL;?></td>
                        <td><?php echo $result->student_status;?></td>
                      </tr> 
              <?php  
                         $tot =  count($cur);
                        
                    }  
                  }   
              ?>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="8" align="right"><h2>Total Number of Student/s : </h2></td><td><h2><?php echo $tot ; ?></h2></td>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

        </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
