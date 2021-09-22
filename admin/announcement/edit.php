<?php  
    if(!isset($_SESSION['ACCOUNT_ID'])){
  redirect(web_root."admin/index.php");
}

  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}
  $announcement = New Announcement();
  $res = $announcement->single_announcement($id);

?> 
  <style type="text/css">
  .row {
    margin-bottom: 10px;
  }
  </style>
 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">
  <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Update Announcement</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 


                         <div class="row">
                    <div class="col-md-11">
                       <label class="col-md-2 control-label" for=
                      "ANNOUNCEMENT_TEXT">Title:</label>
                        <div class="col-md-10">
                        <input name="ANNOUNCEMENTID" type="hidden" value="<?php echo $res->ANNOUNCEMENTID ; ?>">
                           <input class="form-control input-sm" id="ANNOUNCEMENT_TEXT" name="ANNOUNCEMENT_TEXT" placeholder=
                            "Title" type="text" value="<?php echo $res->ANNOUNCEMENT_TEXT ; ?>">
                        </div>
                    </div>
                  </div> 

                  <div class="row">
                    <div class="col-md-11">
                       <label class="col-md-2 control-label" for=
                      "ANNOUNCEMENT_WHAT">Body:</label>
                        <div class="col-md-10">
                          <textarea  class="form-control input-sm" id="ANNOUNCEMENT_WHAT" name="ANNOUNCEMENT_WHAT" placeholder=
                            "Body" rows="12" cols="60"><?php echo $res->ANNOUNCEMENT_WHAT; ?></textarea>
                        </div>
                    </div>
                  </div>       
                
              

            
             <div class="row">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "idno"></label>

                      <div class="col-md-10">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
                          <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
                       </div>
                    </div>
                  </div>

               
        
          
        </form>
       
                
                 