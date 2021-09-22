<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>

<div class="row">
      <div class="col-lg-12">
       	 <div class="col-lg-8">
            <h2 class="page-header">Curriculum </h2>
       		</div>
       		<div class="col-lg-4" >
       			<img id="imglogo" style="float:right;" src="<?php echo web_root; ?>img/school_seal_100x100.jpg" >
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
				  		 Subject Code</th>
				  		<th>Description</th> 
				  		<th>Unit</th>
				  		<th>Pre-Requisite</th>
				  		<th>Course</th>
				  		<th>Year Level</th>
				  		<!-- <th>Academic Year</th> -->
				  		<th>Semester</th>
				  		<th>Status</th>
				  		<th width="10%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php  //`SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`
				  		// $mydb->setQuery("SELECT * 
								// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
				  		$mydb->setQuery("SELECT * FROM `subject` s, `course` c WHERE s.COURSE_ID=c.COURSE_ID GROUP BY SUBJ_CODE");

				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
				  		// echo '<td width="5%" align="center"></td>';
				  		echo '<td>' . $result->SUBJ_ID.'</a></td>';
				  		echo '<td>'. $result->SUBJ_CODE.'</td>';
				  		echo '<td>'. $result->SUBJ_DESCRIPTION.'</td>';
				  		echo '<td>' . $result->UNIT.'</a></td>';
				  		echo '<td>'. $result->PRE_REQUISITE.'</td>';
				  		echo '<td>'. $result->COURSE_NAME.'</td>';
				  		// echo '<td>' . $result->AY.'</a></td>';
				  		echo '<td>'. $result->YEARLEVEL.'</td>';
				  		echo '<td>'. $result->SEMESTER.'</td>'; 
				  		echo '<td>'. $result->CURRICULUM.'</td>'; 
				  		 

				  		 if($result->CURRICULUM=='Old Curriculum') {
				  		 	$status = 'New';
				  		 }else{
				  		 	$status='Old';
				  		 }
				  		echo '<td align="center" > 
				  					  <a title="Change Status" href="controller.php?action=curriculum&status='.$status.'&id='.$result->SUBJ_CODE.'" class="btn btn-info btn-xs" ><span class="fa fa-wrench-o fw-fa">Change Status</span> </a>
				  					 </td>';
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