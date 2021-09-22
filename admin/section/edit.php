<?php  
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}
  $section = New SECTION();
  $res = $section->single_section($id);

?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Update Section</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
      
                        
                <input id="SECTIONID" name="SECTIONID"   type="Hidden" value="<?php echo $res->SECTIONID; ?>">
                    
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SECTION">Section:</label>

                      <div class="col-md-8"> 
                         <input class="form-control input-sm" id="SECTION" name="SECTION" placeholder=
                            "Section" type="text" value="<?php echo $res->SECTION; ?>">
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