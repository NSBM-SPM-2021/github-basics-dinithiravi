<?php 
if (!isset($_SESSION['ACCOUNT_ID'])){
  redirect(web_root."admin/index.php");
 }

$studAuto = New Autonumber();
  $autonum = $studAuto->stud_autonumber();


?> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>




<form action="controller.php?action=add" class="form-horizontal well" method="post" >
<!-- <form action="index.php?q=subject" class="form-horizontal well" method="post" > -->
  <div class="table-responsive">
  <div class="col-md-7"><h2>Add New Student</h2></div> 
  <label class="col-md-2">Academic Year: </label>
  <div class="col-md-3">
     <select class="form-control input-sm" name="SY">
     <option>Select</option>
        <?php 

          $mydb->setQuery("SELECT * FROM `tblsy`");
          $cur = $mydb->loadResultList();

          foreach ($cur as $result) {
            echo '<option>'.$result->SY.'</option>';

          }
        ?> 
      </select> 
    </div> 
    
    <table class="table">
      <tr>
        <td><label>Id</label></td>
        <td >
<!--           <input class="form-control input-md"  id="STUDID" name="STUDID" placeholder="Student Id" type="text" value="<?php echo isset($_POST['STUDID']) ? $_POST['STUDID'] : DATE('Y').'-'.$autonum->AUTO; ?>"> -->
                  <input class="form-control input-md"  id="STUDID" name="STUDID" placeholder="Student Id" type="text" value="">
        </td>
        <td colspan="4"></td>

      </tr>
      <tr>
        <td><label>Firstname</label></td>
        <td>
          <input required="true"   class="form-control input-md" id="FNAME" name="FNAME" placeholder="First Name" type="text" value="<?php echo isset($_POST['FNAME']) ? $_POST['FNAME'] : ''; ?>">
        </td>
        <td><label>Lastname</label></td>
        <td colspan="2">
          <input required="true"  class="form-control input-md" id="LNAME" name="LNAME" placeholder="Last Name" type="text" value="<?php echo isset($_POST['LNAME']) ? $_POST['LNAME'] : ''; ?>">
        </td> 
        <td>
          <input class="form-control input-md" id="MI" name="MI" placeholder="MI"  maxlength="1" type="text" value="<?php echo isset($_POST['MI']) ? $_POST['MI'] : ''; ?>">
        </td>
      </tr>
      <tr>
        <td><label>Address</label></td>
        <td colspan="5"  >
        <input required="true"  class="form-control input-md" id="PADDRESS" name="PADDRESS" placeholder="Permanent Address" type="text" value="<?php echo isset($_POST['PADDRESS']) ? $_POST['PADDRESS'] : ''; ?>">
        </td> 
      </tr>
      <tr>
        <td ><label>Sex </label></td> 
        <td colspan="2">
          <label>
            <input checked id="optionsRadios1" name="optionsRadios" type="radio" value="Female">Female 
             <input id="optionsRadios2" name="optionsRadios" type="radio" value="Male"> Male
          </label>
        </td>
        <td ><label>Date of birth</label></td>
        <td colspan="2"> 
        <div class="input-group" >
                  <div class="input-group-addon"> 
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input  required="true" name="BIRTHDATE"  id="BIRTHDATE"  type="text" class="form-control input-md"  placeholder="mm/dd/yyyy"  data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="<?php echo isset($_POST['BIRTHDATE']) ? $_POST['BIRTHDATE'] : ''; ?>">
           </div>             
        </td>
         
      </tr>
      <tr><!--<td><label>Place of Birth</label></td>
        <td colspan="5">
        <input class="form-control input-md" id="BIRTHPLACE" name="BIRTHPLACE" placeholder="Place of Birth (* Optional)" type="text" value="<?php echo isset($_POST['BIRTHPLACE']) ? $_POST['BIRTHPLACE'] : ''; ?>">
         </td>-->
      </tr>
      <tr>
        <td><label>Nationality</label></td>
        <td colspan="2"><input class="form-control input-md" id="NATIONALITY" name="NATIONALITY" placeholder="Nationality (* Optional)" type="text" value="<?php echo isset($_POST['CONTACT']) ? $_POST['CONTACT'] : ''; ?>">
              </td>
        <!--<td><label>Religion</label></td>
        <td colspan="2"><input  class="form-control input-md" id="RELIGION" name="RELIGION" placeholder="Religion (* Optional)" type="text" value="<?php echo isset($_POST['RELIGION']) ? $_POST['RELIGION'] : ''; ?>">
        </td>-->
        
      </tr>
      <tr>
      <td><label>Contact No.</label></td>
        <td colspan="6"><input class="form-control input-md" id="CONTACT" name="CONTACT" placeholder="Contact Number (* Optional)" type="number" maxlength="11" value="<?php echo isset($_POST['CONTACT']) ? $_POST['CONTACT'] : ''; ?>">
              </td>
        
      </tr>
      <tr>
      <td><label>Course</label></td>
        <td colspan="2">
          
          <select class="form-control input-sm" name="COURSEID">
                <?php 

                            $mydb->setQuery("SELECT * FROM `course`");
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                              echo '<option value='.$result->COURSE_ID.' >'.$result->COURSE_NAME.' </option>';

                            }
                          ?> 
            </select> 

            


     

        </td>
        
       
        <td><label>Civil Status</label></td>
        <td colspan="2">
          <select class="form-control input-sm" name="CIVILSTATUS">
            <option value="<?php echo isset($_POST['CIVILSTATUS']) ? $_POST['CIVILSTATUS'] : 'Select'; ?>">Select (* Optional)</option>
             <option value="Single">Single</option>
             <option value="Married">Married</option> 
             
          </select>
        </td>
      </tr>
  <!--     <tr>
        <td><label>Username</label></td>
        <td colspan="2">
          <input class="form-control input-md" id="USER_NAME" name="USER_NAME" placeholder="Username" type="text"value="<?php echo isset($_POST['USER_NAME']) ? $_POST['USER_NAME'] : ''; ?>">
        </td>
        <td><label>Password</label></td>
        <td colspan="2">
            <input class="form-control input-md" id="PASS" name="PASS" placeholder="Password" type="password"value="<?php echo isset($_POST['PASS']) ? $_POST['PASS'] : ''; ?>">
        </td>
      </tr> -->
      <tr>
        <td><label>Gaurdian</label></td>
        <td colspan="2">
          <input class="form-control input-md" id="GUARDIAN" name="GUARDIAN" placeholder="Parents/Guardian Name (*optional)" type="text"value="<?php echo isset($_POST['GUARDIAN']) ? $_POST['GUARDIAN'] : ''; ?>">
        </td>
        <td><label>Contact No.</label></td>
        <td colspan="2"><input  class="form-control input-md" id="GCONTACT" name="GCONTACT" placeholder="Contact Number (*optional)" type="text" value="<?php echo isset($_POST['GCONTACT']) ? $_POST['GCONTACT'] : ''; ?>"></td>
      </tr>
      <tr>
      <td></td>
        <td colspan="5">  
          <button class="btn btn-success btn-lg" name="submit" type="submit">Save</button>
        </td>
      </tr>
    </table>
  </div>
</form>