<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>

<div class="row">
     <div class="col-lg-12">
       	 <div class="col-lg-8">
            <h2 class="page-header">List of Instructors </h2>
       		</div>
       		<div class="col-lg-4" >
       			<img  id="imglogo"  style="float:right;" src="<?php echo web_root; ?>img/school_seal_100x100.jpg" >
       		</div>
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<!-- <th>ID</th> -->
				  		<th>Name</th>
				  	<!-- 	<th>Major</th>  
				  		<th>Contact No.</th>  -->
				  		<th width="20%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php  //`IDNO`, `FNAME`, `LNAME`, `MNAME`, `SEX`, `BDAY`, `BPLACE`,
				  	// `STATUS`, `AGE`, `NATIONALITY`, `RELIGION`, `CONTACT_NO`, `HOME_ADD`, `EMAIL`, `student_status`
				  		$mydb->setQuery("SELECT * FROM `useraccounts` WHERE `ACCOUNT_TYPE`='Instructor'");

				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
						 
				  		echo '<tr>';
				  		// echo '<td width="5%" align="center"></td>';
				  		echo '<td>' . $result->ACCOUNT_NAME.'</a></td>';
				  		// echo '<td>'. $result->INST_NAME.'</td>';
				  		// echo '<td>'. $result->INST_MAJOR.'</td>'; 
				  		// echo '<td>'. $result->INST_CONTACT.'</td>'; 
				  		 
				  		echo '<td align="center" > <a title="Edit" href="index.php?view=add&id='.$result->ACCOUNT_ID.'"  class="btn btn-primary btn-xs  ">Add Loads <span class="fa fa-plus-circle fw-fa"></span></a>
				  		<a title="Edit" href="index.php?view=view&id='.$result->ACCOUNT_ID.'"  class="btn btn-info btn-xs  ">View Loads <span class="fa fa-info fw-fa"></span></a>
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