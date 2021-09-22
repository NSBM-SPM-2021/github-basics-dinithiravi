<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>

<div class="row">
      <div class="col-lg-12">
       	 <div class="col-lg-6">
            <h1 class="page-header">List of Payments  <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Add New Payment</a>  </h1>
       		</div>
       		<div class="col-lg-6" >
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
				  		<!-- <th>ID</th> -->
				  		<th>Student ID</th>
				  		<th>Student Name</th> 
				  		<th>Course</th> 
				  		<th>Description</th> 
				  		<th>Amount</th> 
				  		<th>Payment</th>
				  		<th>Remarks</th> 
				  		<th width="10%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT * FROM course c, `tblstudent` s, `tblfees` f,tblexpenses e
				  					 WHERE c.COURSE_ID =s.COURSE_ID AND s.IDNO=f.IDNO AND f.EXPENSEID=e.EXPENSEID");
				  		// $mydb->setQuery($sql);

				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td>'. $result->IDNO.'</td>';
				  		echo '<td>'. $result->LNAME.', '. $result->FNAME.' '. $result->MNAME.'</td>'; 
				  		echo '<td>' . $result->COURSE_NAME.'</a></td>';
				  		echo '<td>'. $result->DESCRIPTION.'</td>';
				  		echo '<td>'. $result->AMOUNT.'</td>';
				  		echo '<td>'. $result->PAYMENT.'</td>';
				  		echo '<td>'. $result->REMARKS.'</td>'; 
				  		 
				  		echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->FEEID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></span></a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->FEEID.'" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span> </a>
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