<?php  
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  @$USERID = $_GET['id'];
    if($USERID==''){
  redirect("index.php");
}
  $user = New User();
  $singleuser = $user->single_user($USERID);

?> 



 
 <h2 class="page-header"> <small>Instructor Name: </small><?php echo $singleuser->ACCOUNT_NAME; ?></h2> 
   <form action="controller.php?action=add" Method="POST" style="margin-bottom:20px;">  
     <input name="USERID"  type="Hidden" value="<?php echo $singleuser->ACCOUNT_ID; ?>">
     <div class="col-md-6" style="padding:0;margin:0">
         <div class="form-group">
            <div class="col-md-12">
              <label class="col-md-4 control-label" for=
              "SECTION">Section:</label> 
              <div class="col-md-8"> 
              <select class="form-control input-sm" name="SECTION" id="SECTION">
               <option value="none" >Select</option>
                  <?php 

                    $mydb->setQuery("SELECT * FROM `tblsection`");
                    $cur = $mydb->loadResultList();

                    foreach ($cur as $result) {
                      echo '<option value='.$result->SECTIONID.'>'.$result->SECTION.'</option>';

                    }
                  ?> 
                </select>  
              </div>
            </div>
          </div>
     </div>
     <div class="col-md-6" style="padding:0;margin:0">
         <div class="form-group">
            <div class="col-md-12">
              <label class="col-md-4 control-label" for=
              "SY">Academic Year:</label> 
              <div class="col-md-8"> 
              <select class="form-control input-sm" name="SY" id="SY">
               <option value="none" >Select</option>
                  <?php 

                    $mydb->setQuery("SELECT * FROM `tblsy`");
                    $cur = $mydb->loadResultList();

                    foreach ($cur as $result) {
                      echo '<option >'.$result->SY.'</option>';

                    }
                  ?> 
                </select>  
              </div>
            </div>
          </div>
     </div>
     <br/>
     <br/>
     <br/> 
    <div class="table-responsive">      
        <table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
        
          <thead>
            <tr>
              <th><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">ID</th>
              <th>Subject Code</th>
              <th>Description</th> 
              <th>Unit</th>
              <th>Pre-Requisite</th>
              <th>Course</th>
              <th>Year Level</th>
              <!-- <th>Academic Year</th> -->
              <th>Semester</th>
              <th>Status</th> 
         
            </tr> 
          </thead> 
          <tbody>
            <?php  //`SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`
              // $mydb->setQuery("SELECT * 
                //      FROM  `tblusers` WHERE TYPE != 'Customer'");
              $mydb->setQuery("SELECT * FROM `subject` s, `course` c WHERE s.COURSE_ID=c.COURSE_ID");

              $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              echo '<tr>';
              // echo '<td width="5%" align="center"></td>';
              echo '<td  width="6%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->SUBJ_ID. '"/>' .$result->SUBJ_ID .'</td>'; 
              echo '<td>'. $result->SUBJ_CODE.'</td>';
              echo '<td>'. $result->SUBJ_DESCRIPTION.'</td>';
              echo '<td>' . $result->UNIT.'</a></td>';
              echo '<td>'. $result->PRE_REQUISITE.'</td>';
              echo '<td>'. $result->COURSE_NAME.'</td>';
              // echo '<td>' . $result->AY.'</a></td>';
              echo '<td>'. $result->YEARLEVEL.'</td>';
              echo '<td>'. $result->SEMESTER.'</td>'; 
              echo '<td>'. $result->CURRICULUM.'</td>';  
              echo '</tr>';
            } 
            ?>
          </tbody>
          
        </table>
 
        <div class="btn-group"> 
          <button type="submit" class="btn btn-primary" name="delete"><span class="fa fa-save"></span> Add Selected Subject</button>
        </div>

      </div>
</form>          
      

     