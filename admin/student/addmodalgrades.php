<?php  
require_once("../../include/initialize.php");
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  @$SUBJ_ID = $_GET['id'];
    if($SUBJ_ID==''){
  redirect("index.php");
}
if($_GET['IDNO']==''){
    redirect("index.php");
}

if($_GET['gid']==''){
    redirect("index.php");
}


  $subject = New Subject();
  $res = $subject->single_subject($SUBJ_ID);


  $grades = New Grade();
  $resgrades = $grades->single_grade($_GET['gid']);

?>  
 <form class="form-horizontal span6 ekko-lightbox-container" action="<?php echo web_root.'admin/student/'; ?>controller.php?action=addgrade" method="POST">
 <input class="form-control input-sm" id="IDNO" name="IDNO" placeholder=
"Account Id" type="Hidden" value="<?php echo $_GET['IDNO']; ?>">

<input class="form-control input-sm" id="SUBJ_ID" name="SUBJ_ID" placeholder=
"Account Id" type="Hidden" value="<?php echo $res->SUBJ_ID; ?>">

<input class="form-control input-sm" id="GRADEID" name="GRADEID" placeholder=
"Account Id" type="Hidden" value="<?php echo $_GET['gid']; ?>">
 <div id="errorMSG"></div>                
       <div class="form-group">
        <div class="col-md-12">
          <label class="col-md-4 control-label" for=
          "SUBJ_CODE">Subject:</label>

          <div class="col-md-6">
            <textarea  class="form-control input-sm" id="SUBJ_CODE" name="SUBJ_CODE" readonly="true" rows="4" cols="32"><?php echo $res->SUBJ_CODE .'['. $res->SUBJ_DESCRIPTION.']';?></textarea>
           </div>
        </div>
      </div>

       <div class="form-group">
        <div class="col-md-12">
          <label class="col-md-4 control-label" for=
          "PRE_REQUISITE">Pre-Requisite:</label>

          <div class="col-md-6"> 
             <input readonly="true" class="form-control input-sm" id="PRE_REQUISITE" name="PRE_REQUISITE"  type="text" value="<?php echo $res->PRE_REQUISITE; ?>" autocomplete="off"  required>
          </div>
        </div>
      </div>
      
 

      <div class="form-group">
        <div class="col-md-12">
          <label class="col-md-4 control-label" for=
          "AVERAGE">Average:</label>

          <div class="col-md-6">
            
             <input class="form-control input-sm" id="AVERAGE" name="AVERAGE" placeholder=
                "Add Grades" type="text" value="<?php echo $resgrades->AVE; ?>" autocomplete="off"  required>
          </div>
        </div>
      </div>
       
      <div class="form-group">
        <div class="col-md-12">
          <label class="col-md-4 control-label" for=
          "idno"></label>

          <div class="col-md-6">
           <button class="btn btn-primary btn-sm" id="saveGrade" name="save" type="button" ><span class="fa fa-save fw-fa"></span>  Save</button> 
              <!-- <a href="index.php?view=grades&id=<?php echo $_GET['IDNO']; ?>" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>Back</strong></a> -->
           </div>
        </div>
      </div>

          
        </form>
      
<script src="<?php echo web_root; ?>admin/jquery/jquery.min.js"></script>
<script type="text/javascript">
 $(document).on("click", "#saveGrade", function () {
 /* load all variables */
    var idno  = $("#IDNO").val();
    var subjid = $("#SUBJ_ID").val(); 
    var gradeid = $("#GRADEID").val(); 
    var average = $("#AVERAGE").val(); 
    $('#errorMSG').hide();  
 
       // alert(subjid);
         $.ajax({    //create an ajax request to load_page.php
            type:"POST",  
            url: "validateprerequisite.php",    
            dataType: "text",   //expect html to be returned  
            data:{SUBJECTID:subjid,IDNO:idno,GRADEID:gradeid,AVERAGE:average},               
            success: function(data){           
               // alert(data);         
              $('#errorMSG').html(data); 
              $('#errorMSG').fadeIn();           
              $('#errorMSG').css("background-color", "red"); 
              $('#errorMSG').css("color", "white");
              $('#errorMSG').css("margin-bottom", "5px");
              $('#errorMSG').css("padding", "5px");   
              $('#errorMSG').css("border-raduis", ".5px");    
            }

        });
 
}); 

    $("input").click(function(){
        this.select();

    });
</script>