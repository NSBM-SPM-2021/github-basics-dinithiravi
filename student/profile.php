<?php  
 if (!isset($_SESSION['IDNO'])){
      redirect("index.php");
     }


    $student = New Student();
    $res = $student->single_student($_SESSION['IDNO']);

    $course = New Course();
    $resCourse = $course->single_course($res->COURSE_ID);
	?>
    
  <style type="text/css">
  #img_profile{
    width: 100%;
    height:auto;
  }
    #img_profile >  a > img {
    width: 100%;
    height:auto;
}


  </style>
  
 <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Profile</span></p>
            <h1 class="mb-0 bread">Profile</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 sidebar ftco-animate">
                       <div class="panel"  id="accordion">            
            <div id="img_profile" class="panel-body">
            <a href="" data-target="#myModal" data-toggle="modal" >
            <img title="profile image" class="img-hover"   src="<?php echo web_root. 'student/'.  $res->STUDPHOTO; ?>">
            </a>
             </div>
          <ul class="list-group  ">
               <li class="list-group-item text-right"><span class="pull-left"><strong>Real name</strong></span> <?php echo $res->FNAME .' '.$res->LNAME; ?> </li>
              <li class="list-group-item text-right"><span class="pull-left"><strong>Course</strong></span> <?php echo $resCourse->COURSE_NAME; ?> </li>
               <li class="list-group-item  "><span class=""> Change Password </span>  <a  data-toggle="collapse" data-parent="#accordion" class="fa fa-caret-down" href="#change_pass"></a>

                  
                        <div id="change_pass" class="panel-collapse collapse out" >
                          <div class="panel-body"> 
                          <form method="POST" action="<?php echo web_root ?>student/controller.php?action=changepassword"> 
                                <label class="control-label  " for=
                                "OLDPASS">Current Password:</label> 
                                <input class=" form-control input-sm" id="OLDPASS" name="OLDPASS" placeholder=
                                "Current Password" type="password" value=""> 
                                <label class=" control-label" for=
                                "NEWPASS">New Password:</label> 
                                <input class=" form-control input-sm" id="NEWPASS" name="NEWPASS" placeholder=
                                "New Password" type="password" value=""><br/>
                                <button class=" btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
                            </form>
                              </div>
                          </div> 

               </li>
               
            
          </ul> 
                
        </div>
          </div>

          <div class="col-lg-8 ftco-animate"> 
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a class="btn btn-success btn-sm"  href="#grades" data-toggle="tab">Grades</a></li> |
                <li><a href="#settings"  class="btn btn-success btn-sm" data-toggle="tab">Update Account</a></li> 
                <!-- <li><a href="#announcement" data-toggle="tab">Post Annoucement</a></li>  -->
              </ul> 
              <div class="tab-content">
               
                        <div class="tab-pane active" id="grades"> 
                          <?php require_once  "studentgrades.php" ?> 
                        </div>
                         
                         <div class="tab-pane" id="settings"> 
                          <?php require_once  "updateyearlevel.php" ?>  
                        </div><!--/tab-pane-->
                         <div class="tab-pane" id="announcement"> 
                          <?php require_once  "post_announcement.php" ?> 
                   
                        </div><!--/tab-pane-->
              </div><!--/tab-content-->
 
          </div> <!-- .col-md-8 -->

  

        </div>
      </div>
    </section> <!-- .section -->


























	  <!-- Modal photo -->
          <div class="modal fade" id="myModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal" type=
                  "button">×</button>

                  <h4 class="modal-title" id="myModalLabel">Choose Image.</h4>
                </div>

                <form action="student/controller.php?action=photos" enctype="multipart/form-data" method=
                "post">
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="rows">
                        <div class="col-md-12">
                          <div class="rows">
                            <div class="col-md-8">
                              <input name="MAX_FILE_SIZE" type=
                              "hidden" value="1000000"> <input id=
                              "photo" name="photo" type=
                              "file">
                            </div>

                            <div class="col-md-4"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" type=
                    "button">Close</button> <button class="btn btn-primary"
                    name="savephoto" type="submit">Upload Photo</button>
                  </div>
                </form>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
   