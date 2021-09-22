 
 <form action="" method="POST" > 
      <!-- info row -->
     <div class="row"> 
     <div id="HideMe"class="col-md-3">
       
     </div>
     <div id="spacing" class="col-md-2"></div>
       <div class="col-md-3">
        <div class="form-group">
         <label>Instructor</label> 
            <select id="INST_ID" name="INST_ID" class="form-control"> 
            <option>Select</option>
                  <?php 
                    $mydb->setQuery("SELECT * FROM `tblinstructor` ");
                    $cur = $mydb->loadResultList();

                    foreach ($cur as $result) {
                      echo '<option value="'.$result->INST_ID.'" >'.$result->INST_NAME.' </option>';

                    }
                  ?>
            </select>
        </div> 
      </div>  
           <!-- /.col -->
      <div class="col-md-2">
        <div class="form-group">
           <label>Section</label>  
           <select name="Section" class="form-control"> 
            <option value="1">Section 1</option>
            <option value="2">Section 2</option> 
          </select> 
        </div> 
      </div>
      <div id="loadsubject"></div>

 
 
      <div class="col-sm-2 invoice-col"> 
        <br/> 
          <div class="form-group"> 
              <button type="submit" id="gosearch" name="submit" class="btn btn-primary">Submit</button>
         </div>  
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
 
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
        <div class="col-xs-12 col-md-12 table-responsive">
          <table  class="table table-bordered table-striped" style="font-size:11px" cellspacing="0" >
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
               if(isset($_POST['submit'])){ 
  
            
                $sql = "SELECT * FROM `tblinstructor` i,`tblschedule` sc, `studentsubjects` ss,`tblstudent` s,course c
                 WHERE i.`INST_ID`=sc.`INST_ID` AND sc.`SUBJ_ID`=ss.`SUBJ_ID` AND STUDSECTION=SECTION AND ss.`IDNO`=s.`IDNO` 
                 AND s.COURSE_ID = c.COURSE_ID  AND i.`INST_ID`=" .$_POST['INST_ID']. " AND SECTION = ".$_POST['Section']." 
                 AND CONCAT(sc.SUBJ_ID,sched_day)='".$_POST['Subject']."' AND sc.COURSE_ID=".$_POST['COURSE_ID']." LIMIT 40";

                // $sql ="SELECT *
                //         FROM  `tblstudent` s,  `course` c,  `tblschedule` sc
                //         WHERE s.`COURSE_ID` = c.`COURSE_ID` 
                //         AND c.`COURSE_ID` = sc.`COURSE_ID` AND c.COURSE_ID=".$cur->COURSE_ID."
                //         AND  `STUDSECTION` =".$_POST['Section']." AND sched_time='".$cur->sched_time."'
                //         AND SUBJ_ID =".$resSubj->SUBJ_ID ." AND INST_ID=".$resInst->INST_ID;


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
                       // $_SESSION['tot'] = $tot;
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
 
</form>
    <form action="printClassrecord.php" method="POST" target="_blank">
    <!-- <input type="hidden" name="Course" value="<?php echo (isset($_POST['Course'])) ? $_POST['Course'] : ''; ?>"> -->
     <input type="hidden" name="INST_ID" value="<?php echo (isset($_POST['INST_ID'])) ? $_POST['INST_ID'] : ''; ?> "> 
     <input type="hidden" name="Subject" value="<?php echo (isset($_POST['Subject'])) ? $_POST['Subject'] : ''; ?> ">
     <input type="hidden" name="Section" value="<?php echo (isset($_POST['Section'])) ? $_POST['Section'] : ''; ?> "> 
          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
             <span class="pull-right"> <button type="submit" class="btn btn-primary"  ><i class="fa fa-print"></i> Print</button></span>  
          </div>
          </div> 
    </form>
    <!-- /.content -->
    <div class="clearfix"></div>
 
</div>
<!-- ./wrapper -->
  