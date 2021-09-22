<?php  
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}
  $schoolyear = New SY();
  $sy = $schoolyear->single_sy($id);

?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Update Course/Year</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
      
                        
                         <input class="form-control input-sm" id="AYID" name="AYID" placeholder=
                            "Account Id" type="Hidden" value="<?php echo $sy->AYID; ?>">
                    
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SY">School Year:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="SY" name="SY" placeholder=
                            "School Year" type="text" value="<?php echo $sy->SY; ?>">
                      </div>
                    </div>
                  </div>
                   <div class="form-group">
                          <div class="col-md-8">
                            <label class="col-md-4 control-label" for=
                            "idno"></label>

                            <div class="col-md-8">
                               <button class="btn btn-primary " name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button>
                              </div>
                          </div>
                        </div>

              
             <div class="form-group">
                <div class="rows">
                  <div class="col-md-6">
                    <label class="col-md-6 control-label" for=
                    "otherperson"></label>

                    <div class="col-md-6">
                   
                    </div>
                  </div>

                  <div class="col-md-6" align="right">
                   

                   </div>
                  
              </div>
              </div>
          
        </form>
      

        </div><!--End of container-->