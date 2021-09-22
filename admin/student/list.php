<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>

<div class="row">
      <div class="col-lg-12">
       	 <div class="col-lg-6">
            <h1 class="page-header">List of Students <?php if ($_SESSION['ACCOUNT_TYPE'] =='Administrator') {?> <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> New</a><?php }?></h1>
       		</div>
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th>ID</th>
				  		<th>
				  		 <!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">  -->
				  		 Name</th>
				  		<th>Sex</th> 
				  		<th>Age</th>
				  		<th>Address</th>
				  		<th>Contact No.</th>
				  		<th>Course</th>
				  		<!-- <th>Status</th> -->
				  		<th>Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php  //`IDNO`, `FNAME`, `LNAME`, `MNAME`, `SEX`, `BDAY`, `BPLACE`,
				  	// `STATUS`, `AGE`, `NATIONALITY`, `RELIGION`, `CONTACT_NO`, `HOME_ADD`, `EMAIL`, `student_status`
				  	if ($_SESSION['ACCOUNT_TYPE']=='Instructor') {
				  		$sql ="SELECT * FROM course c ,`tblstudent` s, `studentsubjects` st , `tblinstructorsubject` i WHERE  s.COURSE_ID=c.COURSE_ID AND s.IDNO=st.IDNO AND st.`SUBJ_ID`=i.`SUBJ_ID` GROUP BY s.IDNO";
				  	# code...
				  	}else{
				  		$sql="SELECT * FROM `tblstudent` s,course c WHERE s.COURSE_ID=c.COURSE_ID";
				  	}

				  		$mydb->setQuery($sql);

				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
							
						if($result->BDAY!='0000-00-00'){
							$age = date_diff(date_create($result->BDAY),date_create('today'))->y;
						}else{
							$age='None';
						}
				  		echo '<tr>';
				  		// echo '<td width="5%" align="center"></td>';
				  		echo '<td>' . $result->IDNO.'</a></td>';
				  		echo '<td>'. $result->LNAME.','. $result->FNAME.' '. $result->MNAME.'</td>';
				  		echo '<td>'. $result->SEX.'</td>';
				  		echo '<td>' .$age.'</td>';
				  		echo '<td>'. $result->HOME_ADD.'</td>';
				  		echo '<td>'. $result->CONTACT_NO.'</td>';
				  		echo '<td>' . $result->COURSE_NAME.' </a></td>';
				  		// echo '<td>'. $result->student_status.'</td>'; 


				  		if ($_SESSION['ACCOUNT_TYPE'] =='Administrator') {
				  			# code...
				  			if ($result->ACCOUNTTYPE=='Officer') {
					  			# code...
					  			$status = ' <a title="Deactivate" href="controller.php?action=setofficer&status=Deactivate&id='.$result->IDNO.'" class="btn btn-primary btn-xs" >Deactivate <span class="fa fa-pencil fw-fa"></span> </a>';

					  		}else{
					  			$status = '<a data-title="Set Officer" href="setofficer.php?&id='.$result->IDNO.'" class="btn btn-primary btn-xs" data-toggle="lightbox">Set Officer <span class="fa fa-pencil fw-fa"></span> </a>';
					  		}
				  		 
					  		echo '<td align="center"  width="30%"  > 
					  					<a title="View Information" href="index.php?view=view&id='.$result->IDNO.'"  class="btn btn-info btn-xs  ">View <span class="fa fa-info-circle fw-fa"></span></a>
					  					 <a title="View Grades" href="index.php?view=grades&id='.$result->IDNO.'" class="btn btn-primary btn-xs" >Grades <span class="fa fa-info-circle fw-fa"></span> </a> 
					  					'.$status.'
					  					<a title="View Grades" href="controller.php?action=resetpassword&id='.$result->IDNO.'" class="btn btn-primary btn-xs" >Reset Password <span class="fa fa-pencil  fw-fa"></span> </a> 
					  	       </td>';
				  		}else{

					  		echo '<td align="center" > 
					  				<a title="View Grades" href="index.php?view=grades&id='.$result->IDNO.'" class="btn btn-primary btn-xs" >Grades <span class="fa fa-info-circle fw-fa"></span> </a> 
					  		     </td>';
				  		}
					  		
					  		// echo '<td align="center" > <a title="View Grades" href="index.php?view=grades&id='.$result->IDNO.'" class="btn btn-primary btn-xs" >Grades <span class="fa fa-info-circle fw-fa"></span> </a>
					  		// 			 </td>';
					  		echo '</tr>';
				  		}  
				  	?>
				  </tbody>
					
				</table>
 
				<!-- <div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-default">New</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
 -->
			</div>
				</form>
	

</div> <!---End of container-->