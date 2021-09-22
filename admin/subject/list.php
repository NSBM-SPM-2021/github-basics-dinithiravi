<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>

<div class="row">
      <div class="col-lg-12">
       	 <div class="col-lg-8">
            <h2 class="page-header">List of Subjects per Course/Year <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> New</a>  </h2>
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
				  		<!-- <th>Section</th> -->
				  		<th>Semester</th> 
				  		<th>Status</th>
				  		<th width="15%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php
				  	$mydb->setQuery("SELECT * FROM  `tblsection` sec, `subject` s, `course` c WHERE sec.`SECTIONID`=s.`SECTIONID` AND s.COURSE_ID=c.COURSE_ID ");

				  		// $mydb->setQuery("SELECT * FROM `subject` s, `course` c WHERE s.COURSE_ID=c.COURSE_ID");

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
				  		// echo '<td>'. $result->SECTION.'</td>';
				  		echo '<td>'. $result->SEMESTER.'</td>';  
				  		echo '<td>'. $result->CURRICULUM.'</td>';  


				  		 if($result->CURRICULUM=='Old Curriculum') {
				  		 	$status = 'New';
				  		 }else{
				  		 	$status='Old';
				  		 }
				  		echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->SUBJ_ID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></span></a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->SUBJ_ID.'" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span> </a>
				  					   <a title="Change Status" href="controller.php?action=curriculum&status='.$status.'&id='.$result->SUBJ_ID.'" class="btn btn-info btn-xs" ><span class="fa fa-wrench-o fw-fa">Change Status</span> </a>
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