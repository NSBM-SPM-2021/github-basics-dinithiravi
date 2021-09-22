                      <?php 
                       if (!isset($_SESSION['ACCOUNT_ID'])){
                          redirect(web_root."admin/index.php");
                         }

                      // $autonum = New Autonumber();
                      // $res = $autonum->single_autonumber(2);

                       ?> 
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST">

           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Add New Subject</h1>
          </div>
          <!-- /.col-lg-12 `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`-->
       </div> 
                   
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SUBJ_CODE">Subject Code:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="singlename" name="SUBJ_CODE" placeholder=
                            "Subject" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SUBJ_DESCRIPTION">Description:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="SUBJ_DESCRIPTION" name="SUBJ_DESCRIPTION" placeholder=
                            "Description" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "UNIT">Unit:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="UNIT" name="UNIT" placeholder=
                            "Unit" type="text" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PRE_REQUISITE">Pre-Requisite:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="name" name="PRE_REQUISITE" placeholder=
                            "Pre-Requisite" type="text" value="" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COURSE_ID">Course:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="COURSE_ID" id="COURSE_ID">
                       <option value="none" >Select</option>
                          <?php 

                            $mydb->setQuery("SELECT * FROM `course`");
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                              echo '<option value='.$result->COURSE_ID.' >'.$result->COURSE_NAME.' </option>';

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

                            $mydb->setQuery("SELECT * FROM `tbllevel`");
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                              echo '<option >'.$result->YEARLEVEL.'</option>';

                            }
                          ?>


                         
                        </select>  
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SECTIONID">Section:</label>

                      <div class="col-md-8"> 
                      <select class="form-control input-sm" name="SECTIONID" id="SECTIONID">
                       <option value="none" >Select</option>
                          <?php 

                            $mydb->setQuery("SELECT * FROM `tblsection`");
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                              echo '<option value='.$result->SECTIONID.'>'.$result->SECTION.'</option>';

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

                            $mydb->setQuery("SELECT * FROM `tblsy`");
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                              echo '<option >'.$result->SY.'</option>';

                            }
                          ?>


                         
                        </select>  
                      </div>
                    </div>
                  </div> 

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SEMESTER">Semester:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="SEMESTER" id="SEMESTER">
                        <option value="First" >First</option>
                         <option value="Second" >Second</option> 

                       <option value="Summer" >Summer</option>
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
       