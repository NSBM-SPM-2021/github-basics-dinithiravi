 <!-- Main content --> 
        <!-- title row -->
    <form action="" method="POST"> 
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i>Green Valley College Foundation INC.
            <small class="pull-right">Date: <?php echo date('m/d/Y'); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
      <div class="col-sm-6 invoice-col">
        
      </div>
        
        <div class="col-sm-4 invoice-col">
         Student 
          <address>
            <div class="form-group">
			  <input type="text"  name="txtsearch" class="form-control input-sm">
		  	</div>
          </address>
        </div>
 
           <!-- /.col -->
        <div class="col-sm-2 invoice-col"> 
        <br/>
        <address>
        <div class="form-group"> 
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		  </div>
		  
        </address>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i  class="fa fa-globe">List Of Schedules</i>
              <small class="pull-right"> <?php echo (isset($_POST['txtsearch'])) ? 'Student Id :' .$_POST['txtsearch'] : ''; ?></small>
          </h2>
        </div> 
      </div> 
    
       
	 		  <table  class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<!-- <th>ID</th> -->
				  		<th>
				  		 <!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">  -->
				  		 Time</th>
				  		<th>Days</th> 
				  		<th>Subject</th>
				  		<th>Semester</th>
				  		<th>School Year</th>
				  		<th>Course and Year</th>
				  		<th>Room</th> 
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php   

				  		if (isset($_POST['submit'])) {
				  			# code...
				  		$sql="SELECT * FROM `tblschedule` s, `course` c, subject subj
				  			 WHERE s.`COURSE_ID`=c.`COURSE_ID` AND s.SUBJ_ID=subj.SUBJ_ID 
				  			 AND CONCAT(COURSE_NAME,'-',COURSE_LEVEL) LIKE '%" . $_POST['Course'] ."%' 
          					 AND sched_semester  LIKE '%" . $_POST['Semester'] ."%'";;
				  		// $mydb->setQuery("SELECT * FROM `tblschedule`");
				  		$mydb->setQuery($sql);

				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
				  		// echo '<td width="5%" align="center"></td>';
				  		// echo '<td>' . $result->schedID.'</a></td>';
				  		echo '<td>'. $result->sched_time.'</td>';
				  		echo '<td>'. $result->sched_day.'</td>';
				  		echo '<td>' . $result->SUBJ_CODE.'</a></td>';
				  		echo '<td>'. $result->sched_semester.'</td>';
				  		echo '<td>'. $result->sched_sy.'</td>';
				  		echo '<td>' . $result->COURSE_NAME.'-' . $result->COURSE_LEVEL.'</a></td>';
				  		echo '<td>'. $result->sched_room.'</td>'; 
				  		 
				  	 
				  		} 
				  		}else{
				  		$sql="SELECT * FROM `tblschedule` s, `course` c, subject subj
				  			 WHERE s.`COURSE_ID`=c.`COURSE_ID` AND s.SUBJ_ID=subj.SUBJ_ID";;
				  		// $mydb->setQuery("SELECT * FROM `tblschedule`");
				  		$mydb->setQuery($sql);

				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
				  		// echo '<td width="5%" align="center"></td>';
				  		// echo '<td>' . $result->schedID.'</a></td>';
				  		echo '<td>'. $result->sched_time.'</td>';
				  		echo '<td>'. $result->sched_day.'</td>';
				  		echo '<td>' . $result->SUBJ_CODE.'</a></td>';
				  		echo '<td>'. $result->sched_semester.'</td>';
				  		echo '<td>'. $result->sched_sy.'</td>';
				  		echo '<td>' . $result->COURSE_NAME.'-' . $result->COURSE_LEVEL.'</a></td>';
				  		echo '<td>'. $result->sched_room.'</td>'; 
				  		 
				  	 
				  		} 
				  		}
				  		
				  	?>
				  </tbody>
					
				</table>
 
				<!-- <div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-default">New</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
 --> 
	</form>
	<form action="schedulesPrint.php" method="POST" target="_blank">
	<input type="hidden" name="Course" value="<?php echo (isset($_POST['Course'])) ? $_POST['Course'] : ''; ?>">
	 <input type="hidden" name="Semester" value="<?php echo (isset($_POST['Semester'])) ? $_POST['Semester'] : ''; ?> "> 
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
         <span class="pull-right"> <button type="submit" name="submit" class="btn btn-primary"  ><i class="fa fa-print"></i> Print</button></span>  
      </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
    <div class="clearfix"></div>
	

 