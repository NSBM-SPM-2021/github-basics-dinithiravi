<?php  
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  @$SUBJ_ID = $_GET['id'];
    if($SUBJ_ID==''){
  redirect("index.php");
}
  $subject = New Subject();
  $res = $subject->single_subject($SUBJ_ID);

?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

      <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Update Subject</h1>
          </div>
          <!-- /.col-lg-12 `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`-->
       </div> 
                   
                    <!-- <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_id">User Id:</label> -->

                      <!-- <div class="col-md-8"> -->
                        
                         <input class="form-control input-sm" id="SUBJ_ID" name="SUBJ_ID" placeholder=
                            "Account Id" type="Hidden" value="<?php echo $res->SUBJ_ID; ?>">
                   <!--    </div>
                    </div>
                  </div>      -->      
                  
                  
                   
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SUBJ_CODE">Subject Code:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="SUBJ_CODE" name="SUBJ_CODE" placeholder=
                            "Subject" type="text" value="<?php echo $res->SUBJ_CODE; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SUBJ_DESCRIPTION">Description:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="SUBJ_DESCRIPTION" name="SUBJ_DESCRIPTION" placeholder=
                            "Description" type="text" value="<?php echo $res->SUBJ_DESCRIPTION; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "UNIT">Unit:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="UNIT" name="UNIT" placeholder=
                            "Unit" type="text" value="<?php echo $res->UNIT; ?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PRE_REQUISITE">Pre-Requisite:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="name" name="PRE_REQUISITE" placeholder=
                            "Pre-Requisite" type="text" value="<?php echo $res->PRE_REQUISITE; ?>" required>
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
                      "YEARLEVEL">Year Level:</label>

                      <div class="col-md-8"> 
                      <select class="form-control input-sm" name="YEARLEVEL" id="YEARLEVEL">
                       <option value="none" >Select</option>
                            <?php 

                            $mydb->setQuery("SELECT * FROM `tbllevel` WHERE YEARLEVEL='".$res->YEARLEVEL."'");
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                              echo '<option SELECTED  >'.$result->YEARLEVEL.'</option>';

                            }

                            $mydb->setQuery("SELECT * FROM `tbllevel` WHERE YEARLEVEL!='".$res->YEARLEVEL."'");
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                              echo '<option SELECTED   >'.$result->YEARLEVEL.'</option>';

                            }
                          ?>



                         
                        </select>  
                      </div>
                    </div>
                  </div>

                    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "AY">Academic Year:</label>

                      <div class="col-md-8"> 
                      <select class="form-control input-sm" name="AY" id="AY">
                       <option value="none" >Select</option>
                          <?php 

                            $mydb->setQuery("SELECT * FROM `tblsy` WHERE SY='".$res->AY."'");
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                              echo '<option SELECTED >'.$result->SY.'</option>';

                            }

                           $mydb->setQuery("SELECT * FROM `tblsy` WHERE SY!='".$res->AY."'");
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                              echo '<option >'.$result->SY.'</option>';

                            }
                          ?>


                         
                        </select>  
                      </div>
                    </div>
                  </div> 
                 <!--  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "AY">Academic Year:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="AY" name="AY" placeholder=
                            "Academic Year" type="text" value="<?php echo $res->AY; ?>" required>
                      </div>
                    </div>
                  </div> -->
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SEMESTER">Semester:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="SEMESTER" id="SEMESTER"> 
                        <option value="First"  <?php echo ($res->SEMESTER=='First') ? 'selected="true"': '' ; ?>>First</option>
                         <option value="Second" <?php echo ($res->SEMESTER=='Second') ? 'selected="true"': '' ; ?> >Second</option> 
                         <option value="Summer" <?php echo ($res->SEMESTER=='Summer') ? 'selected="true"': '' ; ?> >Summer</option> 
                        </select> 
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