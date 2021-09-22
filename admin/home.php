<style type="text/css">
	.panel-body{
		min-height: 150px;
		text-align: center;
		font-size: 75px; 
	}
</style> 
<h1>Dashboard</h1>
<div class="col-md-3">
	<div class="panel panel-green">
		<div class="panel-heading" >
			Collection of Student
		</div>
		<div class="panel-body" style="color:green">
			<?php 
				$sql ="SELECT * FROM `tblstudent`";
				$cur =  $mydb->setQuery($sql); 
				$allstudent = $mydb->num_rows($cur);

				echo $allstudent;
			?>
		</div>
	</div>
</div>
 
<div class="col-md-3">
	<div class="panel panel-red">
		<div class="panel-heading">
			Collection of Officer
		</div>
		<div class="panel-body" style="color:red">
		   <?php 
				$sql ="SELECT * FROM `tblstudent` WHERE ACCOUNTTYPE='Officer'";
					$cur = $mydb->setQuery($sql); 
				$allofficer = $mydb->num_rows($cur);

				echo $allofficer;
			?>
		</div>
	</div>
</div>
<div class="col-md-3">
	<div class="panel panel-yellow">
		<div class="panel-heading">
			Collection of User
		</div>
		<div class="panel-body" style="color:yellow">
			<?php 
				$sql ="SELECT * FROM `useraccounts`";
					$cur = $mydb->setQuery($sql); 
				$alluser = $mydb->num_rows($cur);

				echo $alluser;
			?>
		</div>
	</div>
</div>  
<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Collection of Payments
		</div>
		<div class="panel-body"  style="color:blue">
			<?php 

			// $sql = "SELECT * FROM `course`";
			// $mydb->setQuery($sql);
			// $cur  = $mydb->loadResultList();

			// foreach ($cur as $result) {
				# code...
					$sql ="SELECT SUM(`PAYMENT`) as 'Payment',COURSE_NAME FROM course c, `tblexpenses` e, `tblfees` f WHERE c.`COURSE_ID`=e.`COURSE_ID` AND e.`EXPENSEID`=f.`EXPENSEID`";
					$mydb->setQuery($sql);
					$collection = $mydb->loadSingleResult();
				 

					echo $collection->Payment .'<br>';
			// }




			
			?>
		</div>
	</div>
</div>
  