 
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
      <div class="col-sm-4 invoice-col">
        
      </div>
        
        <div class="col-sm-3 invoice-col">
        
		  </div> 

        <!-- /.col -->
        <div class="col-sm-3 invoice-col">
          Student Id:
          <address> 
		         <input type="text" name="IDNO" class="form-control input">
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
  ?>
   <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i  class="fa fa-globe">Transcript of Academic Records</i>
           </h2>
        </div> 
      </div> 
<table>
<?php
  # code...
  if ($_POST['IDNO']!="") {
    # code... 
      $sql = "SELECT * FROM `tblstudent` s, `course` c , department d
      WHERE s.`COURSE_ID`=c.`COURSE_ID` AND c.DEPT_ID=d.DEPT_ID AND IDNO LIKE '%" .$_POST['IDNO']. "%'";
      $mydb->setQuery($sql);
      $res = $mydb->executeQuery();
      $row_count = $mydb->num_rows($res);
      $cur = $mydb->loadResultList();

  if ($row_count > 0){
   foreach ($cur as $result) {
 ?>

  
    <tr>
      <td>Student Name :</td>
      <td><?php echo $result->FNAME; ?></td>
      <td><?php echo $result->MNAME . '.'; ?></td>
      <td><?php echo $result->LNAME; ?></td>
    </tr>
      <td>Department :</td><td><?php echo $result->DEPARTMENT_NAME . ' [ ' .$result->DEPARTMENT_DESC. ' ]'; ?></td>
    </tr>
      <td>Programme Tittle:</td><td><?php echo $result->COURSE_NAME . '  ' .$result->COURSE_MAJOR. ' [ '. $result->COURSE_DESC . ' ] '; ?></td>
    </tr>
      <td>Lang of Instruction:</td><td> English</td>
    </tr>
    <tr>
      <td>Start Date:</td><td></td> 
    </tr>
    <tr>
      <td>Award Name:</td><td><?php echo  $result->COURSE_DESC; ?></td> 
    </tr>
    <tr>
      <td>Date of Award:</td><td></td>
    </tr>
 <?php 
   }
  }
 }

?>
</table>















<table class="table">
     <tr><td>Year <?php ?> Results (<?php ?>)</td></tr>

     <tr>
       <td>Unit Code</td>
       <td>Unit Title</td>
       <td>Credits Awarded</td>
       <td>Attempt</td>
       <td>Mark(%)</td>
       <td>Outcome</td> 
     </tr>
       <?php
              if(isset($_POST['submit'])){ 

              
              $sql =" SELECT * FROM `tblstudent`  st ,`course` c , `studentsubjects`  ss, `subject` s
               WHERE st.`COURSE_ID`=c.`COURSE_ID` AND st.`IDNO`=ss.`IDNO` AND ss.`SUBJ_ID`=s.`SUBJ_ID` AND st.`IDNO`  LIKE '%" . $_POST['IDNO'] ."%'";
              

              $mydb->setQuery($sql);
              $res = $mydb->executeQuery();
              $row_count = $mydb->num_rows($res);
              $cur = $mydb->loadResultList();
             
                if ($row_count > 0){
                 foreach ($cur as $result) {
                  echo "<tr>";
                  echo "<td>".$result->SUBJ_CODE."</td>";
                  echo "<td>".$result->SUBJ_DESCRIPTION."</td>";
                  echo "<td>".$result->UNIT."</td>";
                  echo "<td>".$result->ATTEMP."</td>";
                  echo "<td>".$result->AVERAGE."</td>";
                  echo "<td>".$result->OUTCOME."</td>";
                  echo "</tr>";
                 }
               }
             }
        ?>
     
   </table>
 
</form>
<form action="ListStudentPrint.php" method="POST" target="_blank">
<input type="hidden" name="Course" value="<?php echo (isset($_POST['Course'])) ? $_POST['Course'] : ''; ?>">
 <input type="hidden" name="Semester" value="<?php echo (isset($_POST['Semester'])) ? $_POST['Semester'] : ''; ?> "> 
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
         <span class="pull-right"> <button type="submit" class="btn btn-primary"  ><i class="fa fa-print"></i> Print</button></span>  
      </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
    <div class="clearfix"></div>
 
</div>
<!-- ./wrapper -->
<?php
   }
?>