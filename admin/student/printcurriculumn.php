 <?php
require_once("../../include/initialize.php");
  if(!isset($_SESSION['ACCOUNT_ID'])){
  redirect(web_root."admin/index.php");
}

$sql ="SELECT * FROM `tblstudent` s,`course` c WHERE s.`COURSE_ID`=c.`COURSE_ID` AND IDNO='".$_GET['id']."'";
$mydb->setQuery($sql);
$stud = $mydb->loadSingleResult();





?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online  Student Management System</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="<?php echo web_root; ?>admin/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="<?php echo web_root; ?>admin/font/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
    <link href="<?php echo web_root; ?>admin/font/font-awesome.min.css" rel="stylesheet" type="text/css"> 
    <link href="<?php echo web_root; ?>admin/css/dataTables.bootstrap.css" rel="stylesheet">  
    <style type="text/css">
      .print_head{
        text-align: center;
      }
      .tbl {
        width: 100%;
        border: .5px solid #ddd; 
      }
      .tbl > thead  ,
      .tbl > tbody > tr{ 
        border: .5px solid #ddd; 
      }
 
    </style>
</head>
<body onload="window.print();">
  <div class="print_head"> 
      managemet system <br/>       
      <b>aaaa acadamy</b>  <br/>          
             
          
      <b><?php echo $stud->COURSE_DESC;?></b> <br/>          
      (FOR EVALUATION ONLY)  <br/>    
  </div>


<?php include 'firstyearsubject.php';?>
<?php include 'firstsummer.php';?>
<?php include 'secondyearsubject.php';?>
<?php include 'secondsummer.php';?>
<?php include 'thirdyearsubject.php';?>
<?php include 'thirdsummer.php';?>
<?php include 'fourthyearsubject.php';?>





</body>
</html>
