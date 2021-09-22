 
 <form action="" method="POST" >
    <!-- Main content --> 
        <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i>Green Valley College Foundation INC.
            <small class="pull-right">Date: <?php echo date('m/d/Y'); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
      <div class="col-sm-6 invoice-col">
       
      </div>
        
        <div class="col-sm-4 invoice-col">
          Subject
          <address>
            <div class="form-group">
			  <select name="SUBJ_ID" class="form-control"> 
        <!-- <option>All</option> -->
      <?php 
        $mydb->setQuery("SELECT * FROM `subject` ");
        $cur = $mydb->loadResultList();

        foreach ($cur as $result) {
          echo '<option value="'.$result->SUBJ_ID.'" >'.$result->SUBJ_CODE.' </option>';

        }
      ?>
			  </select>
		  </div>
          </address>
        </div> 
        <!-- /.col -->
           <!-- /.col -->
        <div class="col-sm-2 invoice-col"> 
        <br/>
        <address>
        <div class="form-group"> 
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		  </div>
		  
        </address>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- title row -->
  <?php
  if (isset($_POST['submit'])) {
    # code...
    $subject = New Subject();
    $subjresult = $subject->single_subject($_POST['SUBJ_ID']);
  }
  ?>
   <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i  class="fa fa-globe">List Of Students Enrolled per Subject</i>
              <small class="pull-right"> <?php echo (isset($_POST['SUBJ_ID'])) ? 'Subject :' .$subjresult->SUBJ_CODE : ''; ?>
                 
                  </small>
          </h2>
        </div> 
      </div> 
   

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 col-md-12 table-responsive">
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
               if(isset($_POST['submit'])){ 
           
                 $sql ="SELECT * FROM course c,`tblstudent` s, `studentsubjects` st 
                 WHERE c.COURSE_ID=s.COURSE_ID AND s.`IDNO`=st.`IDNO` AND `SUBJ_ID`=".$_POST['SUBJ_ID'];

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
    <form action="printpersubject.php" method="POST" target="_blank">
    <input type="hidden" name="Course" value="<?php echo (isset($_POST['Course'])) ? $_POST['Course'] : ''; ?>">
     <input type="hidden" name="SUBJ_ID" value="<?php echo (isset($_POST['SUBJ_ID'])) ? $_POST['SUBJ_ID'] : ''; ?> ">  
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
  