<?php  
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  $userid = $_GET['id'];
  $sectionid = $_GET['sectionid'];
  $subjectid =$_GET['subjectid'];

if($userid=="" or $sectionid=="" or $subjectid==""){
  redirect("index.php");
}
  $sql ="SELECT * FROM  useraccounts u, tblsection sec, `tblinstructorsubject` i,`subject` s, `course` c
  WHERE u.ACCOUNT_ID=i.ACCOUNT_ID AND sec.SECTIONID=i.SECTIONID AND i.`SUBJ_ID`=s.`SUBJ_ID` AND s.COURSE_ID=c.COURSE_ID  
  AND u.ACCOUNT_ID='{$userid}' AND s.`SUBJ_ID`='{$subjectid}' AND i.SECTIONID='{$sectionid}'";
  $mydb->setQuery($sql);
  $res = $mydb->loadSingleResult();

?> 



 
 <h2 class="page-header"> <small>Instructor Name: </small><?php echo $res->ACCOUNT_NAME; ?></h2>

 <div class="col-md-4" style="font-size:20px;"> <small>Subject: </small><?php echo $res->SUBJ_CODE; ?></div> 
 <div class="col-md-4" style="font-size:20px;"> <small>YearLevel: </small><?php echo $res->YEARLEVEL; ?></div> 
 <div class="col-md-4" style="font-size:20px;"> <small>Section: </small><?php echo $res->SECTION; ?></div> 
 <br/>
 <br/>
 <br/>
 <br/>


   <form action="controller.php?action=assignstudent" Method="POST" style="margin-bottom:20px;">   
      <input name="SUBJECTID"  type="Hidden" value="<?php echo $res->SUBJ_ID; ?>">
      <input name="SECTIONID"  type="Hidden" value="<?php echo $res->SECTIONID; ?>">
      
    <div class="table-responsive">      
        <table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
        
          <thead>
            <tr>
              <th><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">ID</th>
              <th>Fullname</th>
            <!--   <th>Description</th> 
              <th>Unit</th>
              <th>Pre-Requisite</th>
              <th>Course</th>
              <th>Year Level</th> 
              <th>Semester</th>
              <th>Status</th>  -->
         
            </tr> 
          </thead> 
          <tbody>
            <?php  
              // $mydb->setQuery("SELECT * FROM course c, `tblstudent` s, `studentsubjects` st WHERE c.COURSE_ID=s.COURSE_ID AND s.`IDNO`=st.`IDNO` AND `SUBJ_ID`=".$res->SUBJ_ID);

              $mydb->setQuery("SELECT * FROM `tblstudent` s, `studentsubjects` st WHERE s.`IDNO`=st.`IDNO` AND `SUBJ_ID`=".$res->SUBJ_ID);

              $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              echo '<tr>';
              // echo '<td width="5%" align="center"></td>';
              echo '<td  width="16%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->IDNO. '"/>' .$result->IDNO .'</td>'; 
              echo '<td>'. $result->FNAME.' '. $result->LNAME.'</td>';
              // echo '<td>'. $result->SUBJ_DESCRIPTION.'</td>';
              // echo '<td>' . $result->UNIT.'</a></td>';
              // echo '<td>'. $result->PRE_REQUISITE.'</td>';
              // echo '<td>'. $result->COURSE_NAME.'</td>';
              // // echo '<td>' . $result->AY.'</a></td>';
              // echo '<td>'. $result->YEARLEVEL.'</td>';
              // echo '<td>'. $result->SEMESTER.'</td>'; 
              // echo '<td>'. $result->CURRICULUM.'</td>';  
              echo '</tr>';
            } 
            ?>
          </tbody>
          
        </table>
 
        <div class="btn-group"> 
          <button type="submit" class="btn btn-primary" name="delete"><span class="fa fa-save"></span> Assign Selected Student</button>
        </div>

      </div>
</form>          
      

     