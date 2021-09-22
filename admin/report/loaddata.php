 
      <div class="col-md-2">
          <div class="form-group ">
           <label>Subject</label> 
               <select name="Subject" class="form-control " style="width: 100%;">
               <!--  <option value="First">First</option>
                <option value="Second">Second</option>  --> 

                <?php 
                 require_once ("../../include/initialize.php");
                  $mydb->setQuery("SELECT * FROM `subject` s,tblschedule sc, tblinstructor i WHERE s.SUBJ_ID=sc.SUBJ_ID AND sc.INST_ID=i.INST_ID AND i.INST_ID= ".$_POST['id']);
                  $cur = $mydb->loadResultList();

                  foreach ($cur as $result) {
                    echo '<option value="'.$result->SUBJ_ID.$result->sched_day.'" >'.$result->SUBJ_CODE.'('.$result->sched_day.')</option>';

                  }
                 ?> 
              </select> 
          </div> 
        </div> 
  <div class="col-md-3">
        <div class="form-group">
         <label>Course/Year</label> 
            <select id="COURSE_ID" name="COURSE_ID" class="form-control"> 
            <!-- <option>All</option> -->
                  <?php 
                       $mydb->setQuery("SELECT * FROM `subject` s,tblschedule sc, tblinstructor i WHERE s.SUBJ_ID=sc.SUBJ_ID AND sc.INST_ID=i.INST_ID AND i.INST_ID= ".$_POST['id']);
                  $cur = $mydb->loadResultList();

                  foreach ($cur as $result) {
                  $mydb->setQuery("SELECT * FROM `course`  WHERE COURSE_ID=".$result->COURSE_ID);
                    $cur = $mydb->loadResultList();

                    foreach ($cur as $result) {
                      echo '<option value="'.$result->COURSE_ID.'" >'.$result->COURSE_NAME.'-'.$result->COURSE_LEVEL.' </option>';

                    }

                  }
                   
                  ?>
            </select>
        </div> 
     </div>
 