<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>
 <div class="row">
      <div class="col-lg-12">
       	 <div class="col-lg-6">
            <h1 class="page-header">Set the Current Semester  </h1>
       		</div>
			   <!-- <div class="col-lg-6" >
       			<img  id="imglogo" style="float:right;" src="<?php echo web_root; ?>img/school_seal_100x100.jpg" >
       		</div> -->
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th>Semester</th>
				  		<th>Set</th> 
				  		<th width="10%" >Action</th>
				 
				  	</tr>	
				  </thead>  
              
				  <tbody>
				  	<?php 
				  	 	$mydb->setQuery("SELECT * 
											FROM  `tblsemester`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
				  		echo '<td >'. $result->SEMESTER.'</td>';
				  		echo '<td>' . $result->SETSEM.'</a></td>'; 

				  		echo '<td align="center" ><a title="Edit" href="controller.php?action=edit&id='.$result->SEMID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"> Set</span></a>
				  					  </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table>
  	</div>
				</form>
	

</div> <!---End of container-->