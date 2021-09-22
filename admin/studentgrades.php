<?php 
	$subjid = $_GET['id'];
	$userid = $_SESSION['ACCOUNT_ID'];

	  $sql ="SELECT * FROM  `tblinstructorsubject` i,`subject` s 
  WHERE  i.`SUBJ_ID`=s.`SUBJ_ID`  AND s.SUBJ_ID='{$subjid}'";
  $mydb->setQuery($sql);
  $res = $mydb->loadSingleResult();
?>
 <h1 class="page-header">Dashboard/Student Grades</h1>
  <h2 class="page-header">Subject : <?php echo $res->SUBJ_CODE;?></h2> 
<div class="table-responsive">      
        <table id="dash-table" class="table table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
        
          <thead>
            <tr>
              <th>Student</th> 
              <th>Grade</th> 
              <th>Remarks</th> 
            </tr> 
          </thead> 
          <tbody>
            <?php  

             $sql ="SELECT * FROM  useraccounts u, tblsection sec, `tblinstructorsubject` i,`subject` s, `course` c,`tblstudent` stud, `grades` g 
			  WHERE u.ACCOUNT_ID=i.ACCOUNT_ID AND sec.SECTIONID=i.SECTIONID AND i.`SUBJ_ID`=s.`SUBJ_ID` AND s.COURSE_ID=c.COURSE_ID  AND i.SUBJ_ID=g.SUBJ_ID AND stud.IDNO=g.IDNO
			  AND u.ACCOUNT_ID='{$userid}' AND i.SUBJ_ID='{$subjid}' Group By g.GROUP_ID ";
			  $mydb->setQuery($sql);
			  $res = $mydb->loadResultList();

			  foreach ($res as $row) {
			  	# code...

			 //  	$r1 = range(97, 100);
				// $r2 = range(100, 200);

				if ($row->AVE <=100 && $row->AVE >= 97) { 
			  			$ave = 1.00;
				}elseif ($row->AVE <=96 && $row->AVE >=94) {
			  			$ave = 1.25; 
				}elseif ($row->AVE <=93 && $row->AVE >=91) {
			  			$ave = 1.50;

				}elseif ($row->AVE <=90 && $row->AVE >=88) {
			  			$ave = 1.75;

				}elseif ($row->AVE <=87 && $row->AVE >=85) {
			  			$ave = 2.00;

				}elseif ($row->AVE <=84 && $row->AVE >=82) { 
			  			$ave = 2.25;

				}elseif ($row->AVE <=81 && $row->AVE >=79) {

			  			$ave = 2.50;
				}elseif ($row->AVE <=78 && $row->AVE >=76) {
			  			$ave = 2.75;

				}else{
					$ave = 3.00;
				}

			   

// 100 to 97 = 1.00
// 96 to 94 = 1.25
// 93 to 91 = 1.50
// 90 to 88 = 1.75
// 87 to 85 = 2.00
// 84 to 82 = 2.25
// 81 to 79 = 2.50
// 78 to 76 = 2.75
// 75 = 3.00



 					echo '<tr>'; 
 					  echo '<td>'. $row->FNAME.' '. $row->LNAME.'</td>';  
		              echo '<td> '. $ave.'</td>';
		              echo '<td>' .   $row->REMARKS  .'</td>'; 
		              echo '</tr>'; 
			  }
             

            ?>
          </tbody>
          
        </table>
 
     
      </div>