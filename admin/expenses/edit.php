<?php  
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}
  $expense = New Expenses();
  $res = $expense->single_expense($id);

?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">
  <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Update Expense</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
                
                   
                    
                 <input id="EXPENSEID" name="EXPENSEID"  
                 type="Hidden" value="<?php echo $res->EXPENSEID; ?>">
                  
                  
                     
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "AMOUNT">Amount:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="AMOUNT" name="AMOUNT" placeholder=
                            "Amount" type="text" value="<?php echo $res->AMOUNT; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "DESCRIPTION">Description:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                        <textarea  class="form-control input-sm" id="DESCRIPTION" name="DESCRIPTION" placeholder=
                            "Description" rows="5" cols="60"><?php echo $res->DESCRIPTION; ?></textarea>
                         <!-- <input class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
                            "Description" type="text" value=""> -->
                      </div>
                    </div>
                  </div>


                    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COURSE_ID">Course:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="COURSE_ID" id="COURSE_ID"> 
                          <?php 

                            $mydb->setQuery("SELECT * FROM `course` WHERE COURSE_ID=".$res->COURSE_ID );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                              echo '<option value='.$result->COURSE_ID.' >'.$result->COURSE_NAME.'</option>';

                            }
                          ?>

                          <?php 

                            $mydb->setQuery("SELECT * FROM `course` WHERE COURSE_ID!=".$res->COURSE_ID );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                              echo '<option value='.$result->COURSE_ID.' >'.$result->COURSE_NAME.'</option>';

                            }
                          ?>

                         
                        </select> 
                      </div>
                    </div>
                  </div>

 
            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                         <button class="btn btn-primary " name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button>
                          <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span>&nbsp;<strong>List of Users</strong></a> -->
                      </div>
                    </div>
                  </div>
 
        </form>
      

        </div><!--End of container-->