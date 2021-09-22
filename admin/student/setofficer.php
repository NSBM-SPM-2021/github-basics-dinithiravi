<?php  
require_once("../../include/initialize.php");
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

 
if($_GET['id']==''){
    redirect("index.php");
}
 
 $sql = "SELECT * FROM `tblstudent` s, `course` c WHERE s.`COURSE_ID`=c.`COURSE_ID` AND IDNO='".$_GET['id']."'";
 $mydb->setQuery($sql);
 $res = $mydb->loadSingleResult(); 

 

?>  
 <form class="form-horizontal span6 ekko-lightbox-container" action="<?php echo web_root.'admin/student/'; ?>controller.php?action=setofficer&status=Set Officer" method="POST">
 
                 
       <div class="form-group">
        <div class="col-md-10">
          <label class="col-md-4 control-label" for=
          "NAME">Name:</label>

          <div class="col-md-8">
            <input type="hidden" name="ID" value="<?php echo $res->IDNO; ?>">
            <textarea  class="form-control input-sm" id="NAME" name="NAME" readonly="true" rows="4" cols="32"><?php echo $res->FNAME .' '. $res->LNAME;?></textarea>
           </div>
        </div>
      </div>

       <div class="form-group">
        <div class="col-md-10">
          <label class="col-md-4 control-label" for=
          "COURSE">Course:</label>

          <div class="col-md-8"> 
             <input readonly="true" class="form-control input-sm" id="COURSE" name="COURSE"  type="text" value="<?php echo $res->COURSE_NAME; ?>" autocomplete="off"  required>
          </div>
        </div>
      </div>
      
 

      <div class="form-group">
        <div class="col-md-10">
          <label class="col-md-4 control-label" for=
          "POSITION">Position:</label>

          <div class="col-md-8">
             <select class="form-control input-sm" id="POSITION" name="POSITION" >
               <option>President</option>
               <option>Vice-President</option>
               <option>Secretary</option>
               <option>Sub-Secretary</option>
               <option>Auditor</option>
               <option>Treasurer-1</option>
               <option>Treasurer-2</option>
               <option>PIO-1</option>
               <option>PIO-2</option>
               <option>Business Manager-1</option>
               <option>Business Manager-2</option>
               <option>First Year Rep.</option>
               <option>Second Year Rep.</option>
               <option>Third Year Rep.</option>
               <option>Fourth Year Rep.</option>
               <option>Adonis</option>
               <option>Muse</option>
             </select>
          </div>
        </div>
      </div>
       
      <div class="form-group">
        <div class="col-md-10">
          <label class="col-md-4 control-label" for=
          "idno"></label>

          <div class="col-md-8">
           <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
              <!-- <a href="index.php?view=grades&id=<?php echo $_GET['IDNO']; ?>" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>Back</strong></a> -->
           </div>
        </div>
      </div>

          
        </form>
      
<script src="<?php echo web_root; ?>admin/jquery/jquery.min.js"></script>
<script type="text/javascript">
 

    $("input").click(function(){
        this.select();

    });
</script>