<?php
	if(!isset($_SESSION['ACCOUNT_ID'])){
	redirect(web_root."admin/index.php");
}

?>
<style>
#example{
	white-space: nowrap;
}
</style>

 <div class="row">
      <div class="col-lg-12"> 
            <h1 class="page-header">List of Announcements <small>  <label class="label label-xs" style="font-size: 12px"><a href="index.php?view=add" class="btn btn-primary btn-xs">  <i class="fa fa-plus-circle fw-fa"></i> New</a></label> </small></h1> 
       		 
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr> 
				  		 <th>Title</th>
				  		<th>Body</th>
				  	<!-- 	<th>When</th> 
				  		<th>Where</th> -->
				  	 	<th width="10%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php   
				  		// $mydb->setQuery("SELECT * 
								// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
				  		$mydb->setQuery("SELECT * 
											FROM  `tblannouncement` ORDER BY ANNOUNCEMENTID DESC");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';  
				  		echo '<td>'. $result->ANNOUNCEMENT_TEXT.'</td>';
				  		echo '<td class="tds">'. $result->ANNOUNCEMENT_WHAT.'</td>'; 

				  	  
				  		echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->ANNOUNCEMENTID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></span></a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->ANNOUNCEMENTID.'" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span> </a>
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