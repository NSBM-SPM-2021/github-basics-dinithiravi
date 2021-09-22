<?php  
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  @$dept_id = $_GET['id'];
    if($dept_id==''){
  redirect("index.php");
}
  $dept = New Department();
  $singledepartment = $dept->single_departments($dept_id);

?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">
  <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Update Department</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
                
                   
                    
                 <input id="DEPT_ID" name="DEPT_ID"  
                 type="Hidden" value="<?php echo $singledepartment->DEPT_ID; ?>">
                  
                  
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "DEPARTMENT_NAME">Department:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="DEPARTMENT_NAME" name="DEPARTMENT_NAME" placeholder=
                            "Department Name" type="text" value="<?php echo $singledepartment->DEPARTMENT_NAME; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "DESCRIPTION">Description:</label>

                      <div class="col-md-8"> 
                        <textarea class="form-control input-sm" id="DESCRIPTION" name="DESCRIPTION" placeholder=
                    "Description" type="text" rows="6"><?php echo $singledepartment->DEPARTMENT_DESC; ?></textarea>
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