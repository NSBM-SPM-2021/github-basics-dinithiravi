$(document).on("click", "#saveGrade", function () {
 /* load all variables */
    var idno  = $("#IDNO").val();
    var subjid = $("#SUBJ_ID").val(); 
 
       // alert(courseid);
         $.ajax({    //create an ajax request to load_page.php
            type:"POST",  
            url: "validateprerequisite.php",    
            dataType: "text",   //expect html to be returned  
            data:{SUBJ_ID:subjid,IDNO:idno},               
            success: function(data){                    
              $('#errorMSG').val(data); 
               // alert(data);
            }

        });
 
}); 