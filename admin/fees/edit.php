<?php  
require_once("../../include/initialize.php");
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

 @$id = $_GET['id'];
if($id==''){
  redirect("index.php");
}
  // $fees = new FEES();
  // $res = $fees->single_fees($id);
  // echo $res->FEEID;

  $sql = "SELECT * FROM tblfees f,tblexpenses e  WHERE f.EXPENSEID=e.EXPENSEID AND  FEEID=".$id;
  $mydb->setQuery($sql);
  $res = $mydb->loadSingleResult();
?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST" onsubmit="return validatePayment()">

      <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Update Transaction</h1>
          </div>
          <!-- /.col-lg-12  `schedID`, `sched_time`, `sched_day`, `sched_subject`, `sched_semester`, `sched_sy`, `empid`, `crs_yr`, `sched_room`-->
       </div> 
                    
         <input id="FEEID" name="FEEID"   type="Hidden" value="<?php echo $res->FEEID; ?>">  
                  
               <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "DECRIPTION">Expenses:</label>

                      <div class="col-md-8"> 
                        <select name="DESCRIPTION" id="DESCRIPTION" class="form-control input-sm">
                        <option>Select</option>
                          <?php 
                            $sql = "SELECT * FROM tblexpenses WHERE EXPENSEID=".$res->EXPENSEID;
                            $mydb->setQuery($sql);
                            $cur = $mydb->loadResultList();
                            foreach ($cur as $row) {
                              echo '<option SELECTED  value='.$row->EXPENSEID.'>'.$row->DESCRIPTION.'</option>';
                            }

                             $sql = "SELECT * FROM tblexpenses WHERE EXPENSEID!=".$res->EXPENSEID;
                            $mydb->setQuery($sql);
                            $cur = $mydb->loadResultList();
                            foreach ($cur as $row) {
                              echo '<option value='.$row->EXPENSEID.'>'.$row->DESCRIPTION.'</option>';
                            }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "AMOUNT">Amount:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm " id="AMOUNT" name="AMOUNT" placeholder=
                            "Amount" type="text" value="<?php echo $res->AMOUNT; ?>" readonly="true">
                      </div>
                    </div>
                  </div> 

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "IDNO">Student ID:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="singlename" name="IDNO" placeholder=
                            "Student ID" type="text" value="<?php echo $res->IDNO ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "FEES">Tender Amount:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="FEES" name="FEES" placeholder=
                            "Tender Amount" type="text" value="<?php echo $res->PAYMENT ?>">
                      </div>
                    </div>
                  </div> 
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "REMARKS">Remarks:</label>

                      <div class="col-md-8">
                        
                         <textarea class="form-control input-sm" id="REMARKS" name="REMARKS" placeholder=
                            "Remarks" type="text" value=""><?php echo $res->REMARKS ?></textarea>  
                      </div>
                    </div>
                  </div>      
                

            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
                          <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
                       </div>
                    </div>
                  </div>

          
        </form>
      

        </div><!--End of container-->