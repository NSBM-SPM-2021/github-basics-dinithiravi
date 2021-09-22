
 <h1 class="page-header">Dashboard</h1>
<?php  
 
  $userid = $_SESSION['ACCOUNT_ID']; 

 
  $sql ="SELECT * FROM  useraccounts u, tblsection sec, `tblinstructorsubject` i,`subject` s, `course` c
  WHERE u.ACCOUNT_ID=i.ACCOUNT_ID AND sec.SECTIONID=i.SECTIONID AND i.`SUBJ_ID`=s.`SUBJ_ID` AND s.COURSE_ID=c.COURSE_ID  
  AND u.ACCOUNT_ID='{$userid}'";
  $mydb->setQuery($sql);
  $res = $mydb->loadSingleResult();

?>  

 
    <div class="table-responsive">      
        <table id="dash-table" class="table table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
        
          <thead>
            <tr> 
              <th>Subject</th> 
              <th>Unit</th>
              <th>Pre-Requisite</th>
              <th>Course</th>
              <th>Year Level</th> 
              <th>Section</th> 
              <th>Semester</th> 
            </tr> 
          </thead> 
          <tbody>
            <?php  

             $sql ="SELECT *,s.YEARLEVEL as 'LEVEL' FROM  useraccounts u, tblsection sec, `tblinstructorsubject` i,`subject` s, `course` c
			  WHERE u.ACCOUNT_ID=i.ACCOUNT_ID AND sec.SECTIONID=i.SECTIONID AND i.`SUBJ_ID`=s.`SUBJ_ID` AND s.COURSE_ID=c.COURSE_ID  
			  AND u.ACCOUNT_ID='{$userid}' GROUP BY s.SUBJ_ID";
			  $mydb->setQuery($sql);
			  $res = $mydb->loadResultList();

			  foreach ($res as $row) {
			  	# code...
 					echo '<tr>';  
		              echo '<td><a href="index.php?view=grades&id='.$row->SUBJ_ID.'"> '. $row->SUBJ_CODE.' | '. $row->SUBJ_DESCRIPTION.'</a></td>';
		              echo '<td>' . $row->UNIT.'</a></td>';
		              echo '<td>'. $row->PRE_REQUISITE.'</td>';
		              echo '<td>'. $row->COURSE_NAME.'</td>'; 
		              echo '<td>'. $row->LEVEL.'</td>';
		              echo '<td>'. $row->SECTION.'</td>';
		              echo '<td>'. $row->SEMESTER.'</td>';  
		              echo '</tr>'; 
			  }
             
             
            ?>
          </tbody>
          
        </table>
 
     
      </div>
</form>   
 