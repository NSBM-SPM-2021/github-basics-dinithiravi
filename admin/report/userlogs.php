 
 <form action="" method="POST" >
    <!-- Main content --> 
        <!-- title row -->
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
      <div class="col-sm-4 invoice-col">
        
      </div>
        
        <div class="col-sm-4 invoice-col">
          
        </div>

        <!-- /.col -->
        <div class="col-sm-2 invoice-col">
         Users
          <address> 
		         <select name="Users" class="form-control">
             <option>All</option>
              <option value="Administrator">Administrator</option>
              <option value="Registrar">Registrar</option> 
              <option value="Student">Student</option> 
            </select>
          </address>
        </div>
      
        <!-- /.col -->
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
      <!-- title row -->
 
   <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i  class="fa fa-globe">User Logs</i>
              <small class="pull-right"> <?php echo (isset($_POST['Users'])) ? 'User logs :' .$_POST['Users'] : ''; ?> </small>
          </h2>
        </div> 
      </div> 
   

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 col-md-12 table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>Name.</th>
              <th>Date</th> 
              <th>User Type</th> 
              <th>Log Mode</th>
               
            </tr>
            </thead>
            <tbody>
             <?php
             if(isset($_POST['submit'])){ 
                if ($_POST['Users']=="All") {
                  # code...
                    $sql ="SELECT * FROM `tbllogs`  l ,`useraccounts` u
                      WHERE l.`USERID`=u.`ACCOUNT_ID`" ;
                     

                  $mydb->setQuery($sql);
                  $res = $mydb->executeQuery();
                  $row_count = $mydb->num_rows($res);
                  $cur = $mydb->loadResultList();
                 
                    if ($row_count > 0){
                            foreach ($cur as $result) {
                                   ?>
                                  <tr> 
                                   <td><?php echo $result->ACCOUNT_NAME;?></td>
                                     <td><?php echo $result->LOGDATETIME;?></td>
                                    <td><?php echo $result->LOGROLE;?></td>
                                    <td><?php echo $result->LOGMODE;?></td> 
                                  </tr>
                                  <?php 
                                    
                      } 

                      }
                         $sql ="SELECT * FROM `tbllogs`  l ,`tblstudent` u
                          WHERE l.`USERID`=u.`IDNO`" ;
                         

                  $mydb->setQuery($sql);
                  $res = $mydb->executeQuery();
                  $row_count = $mydb->num_rows($res);
                  $cur = $mydb->loadResultList();
                 
                    if ($row_count > 0){
                            foreach ($cur as $result) {
                                   ?>
                                  <tr> 
                                   <td><?php echo $result->FNAME . ' '. $result->LNAME;?></td>
                                     <td><?php echo $result->LOGDATETIME;?></td>
                                    <td><?php echo $result->LOGROLE;?></td>
                                    <td><?php echo $result->LOGMODE;?></td> 
                                  </tr>
                                  <?php 
                                    
                      } 

                      }
                }else{

                   if ($_POST['Users']=='Administrator' ||  $_POST['Users']=='Registrar') {
                # code...
                  $sql ="SELECT * FROM `tbllogs`  l ,`useraccounts` u
                      WHERE l.`USERID`=u.`ACCOUNT_ID` AND  LOGROLE LIKE '%" . $_POST['Users'] ."%'" ;
                     

                  $mydb->setQuery($sql);
                  $res = $mydb->executeQuery();
                  $row_count = $mydb->num_rows($res);
                  $cur = $mydb->loadResultList();
                 
                    if ($row_count > 0){
                            foreach ($cur as $result) {
                                   ?>
                                  <tr> 
                                   <td><?php echo $result->ACCOUNT_NAME;?></td>
                                     <td><?php echo $result->LOGDATETIME;?></td>
                                    <td><?php echo $result->LOGROLE;?></td>
                                    <td><?php echo $result->LOGMODE;?></td> 
                                  </tr>
                                  <?php 
                                    
                      } 

                      }
                  }else{
                     # code...
                      $sql ="SELECT * FROM `tbllogs`  l ,`tblstudent` u
                          WHERE l.`USERID`=u.`IDNO` AND  LOGROLE LIKE '%" . $_POST['Users'] ."%'" ;
                         

                  $mydb->setQuery($sql);
                  $res = $mydb->executeQuery();
                  $row_count = $mydb->num_rows($res);
                  $cur = $mydb->loadResultList();
                 
                    if ($row_count > 0){
                            foreach ($cur as $result) {
                                   ?>
                                  <tr> 
                                   <td><?php echo $result->FNAME . ' '. $result->LNAME;?></td>
                                     <td><?php echo $result->LOGDATETIME;?></td>
                                    <td><?php echo $result->LOGROLE;?></td>
                                    <td><?php echo $result->LOGMODE;?></td> 
                                  </tr>
                                  <?php 
                                    
                      } 

                      }
                  } 

                } 
              } 
            ?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
 
</form>
<form action="printlogs.php" method="POST" target="_blank">
<input type="hidden" name="Users" value="<?php echo (isset($_POST['Users'])) ? $_POST['Users'] : ''; ?>">
 <!-- <input type="hidden" name="Semester" value="<?php echo (isset($_POST['Semester'])) ? $_POST['Semester'] : ''; ?> ">  -->
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
         <span class="pull-right"> <button type="submit" class="btn btn-primary"  ><i class="fa fa-print"></i> Print</button></span>  
      </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
    <div class="clearfix"></div>
 
</div>
<!-- ./wrapper -->
 