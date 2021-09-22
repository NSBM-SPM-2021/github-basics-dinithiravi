<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $title;?></title>

     <!-- Bootstrap Core CSS -->
<link href="<?php echo web_root; ?>admin/css/bootstrap.css" rel="stylesheet">

<link href="<?php echo web_root; ?>admin/css/metisMenu.min.css" rel="stylesheet">
 
<script src="<?php echo web_root; ?>admin/select2/select2.min.css"></script>  

<link href="<?php echo web_root; ?>admin/css/metisMenu.min.css" rel="stylesheet">
  
<!-- Custom CSS -->
<link href="<?php echo web_root; ?>admin/css/sb-admin-2.css" rel="stylesheet"> 
<!-- Custom Fonts -->
<link href="<?php echo web_root; ?>admin/font/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 
<link href="<?php echo web_root; ?>admin/css/dataTables.bootstrap.css" rel="stylesheet">

<!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/datepicker.css" rel="stylesheet" media="screen">

<link href="<?php echo web_root; ?>css/ekko-lightbox.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo web_root; ?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> 
 
<link rel="stylesheet" href="<?php echo web_root; ?>admin/css/jquery-ui.css"> 
<link href="<?php echo web_root; ?>admin/css/costum.css" rel="stylesheet">
<style type="text/css">
    #imglogo{
        width: 100px;
    }

 
</style>
</head>


<?php


admin_confirm_logged_in();

  
?>
      
<body >
 
   <div id="wrapper"> 
        <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-static-top  " role="navigation" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"  href="<?php echo web_root; ?>admin/index.php" >Student Management Admin Portal</a>
            </div> 

            <ul class="nav navbar-nav  navbar-top-links navbar-right"> 
                <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator') { ?>
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-plus fa-fw"></i> New  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo web_root; ?>admin/subject/index.php?view=add"><i class="fa fa-book fa-fw"></i> Subject</a></li>
                        <li><a href="<?php echo web_root; ?>admin/department/index.php?view=add"><i class="fa  fa-building  fa-fw"></i> Department</a> </li>
                        <li><a href="<?php echo web_root; ?>admin/course/index.php?view=add"><i class="fa  fa-graduation-cap fa-fw"></i> Course</a></li> 
                         <li><a href="<?php echo web_root; ?>admin/user/index.php?view=add"><i class="fa fa-user  fa-fw"></i> User</a></li> 
                    </ul> 
                </li>
                <?php }?>
                <?php
                 $user = New User();
                 $singleuser = $user->single_user($_SESSION['ACCOUNT_ID']);

              $sql="SELECT * FROM `tblstudent`  , `useraccounts` WHERE IDNO=`EMPID` AND ACCOUNT_ID=".$_SESSION['ACCOUNT_ID'];
              $mydb->setQuery($sql);  
              $res = $mydb->loadSingleResult(); 
                     

                ?>  
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
                        Hi, <?php echo $singleuser->ACCOUNT_NAME; ?> <i class="fa fa-caret-down"></i> 
                    </a>
                    <ul class="dropdown-menu dropdown-acnt">

                          <div class="divpic"> 
                         
                            <?php if ($_SESSION['ACCOUNT_TYPE']=='Officer') {
                              # code...
                              echo '<a><img width="70" height="80" src="'.web_root.'/student/'.$res->STUDPHOTO.'" /></a>';
                            }else{ ?> 
                             <a href="" data-target="#usermodal"  data-toggle="modal" > 
                                <img title="profile image" width="70" height="80" src="<?php echo web_root.'admin/user/'.$singleuser ->USERIMAGE ?>">  
                             </a>
                          <?php   } ?> 
                          </div> 
                    
                      <?php if ($_SESSION['ACCOUNT_TYPE']=='Officer') { ?>
                        <div class="divtxt">
                          <li><a href="<?php echo web_root; ?>index.php?q=profile"> <?php echo $singleuser->ACCOUNT_NAME; ?> </a> 
                          <li><a href="<?php echo web_root; ?>admin/logout.php"><i class="fa fa-sign-out fa-fw"></i> Log Out</a></li> 
                        </div>
                     <?php }else{  ?>
                         <div class="divtxt">
                          <li><a href="<?php echo web_root; ?>admin/user/index.php?view=edit&id=<?php echo $_SESSION['ACCOUNT_ID']; ?>"> <?php echo $singleuser->ACCOUNT_NAME; ?> </a>
                          <li><a title="Edit" href="<?php echo web_root; ?>admin/user/index.php?view=edit&id=<?php echo $_SESSION['ACCOUNT_ID']; ?>"  >Edit My Profile</a></li> 
                          <li><a href="<?php echo web_root; ?>admin/logout.php"><i class="fa fa-sign-out fa-fw"></i> Log Out</a></li> 
                        </div>
                       <?php   } ?>  
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul> 
            <!-- /.navbar-top-links --> 
            <div class="sidebar" role="navigation" >
                <div class="sidebar-nav navbar-collapse" >
                    <ul class="nav" id="side-menu">
                        <li class="logohead">  
                                <?php if ($_SESSION['ACCOUNT_TYPE']=='Officer') {
                              # code...
                              echo '<img   data-target="#usermodal"  data-toggle="modal" src="'.web_root.'/student/'.$res->STUDPHOTO.'" />';
                            }else{ ?>  
                                <img data-target="#usermodal"  data-toggle="modal" src="<?php echo web_root.'admin/user/'.$singleuser ->USERIMAGE ?>" /> 
                          <?php   } ?>  
                          
                            <br/>
                            <br/> 
                          <div ></div>   
                        </li> 
                        <li>
                            <a href="<?php echo web_root; ?>admin/index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>  
   
                         <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Instructor'  ) {  ?>
                        <li>
                             <a href="<?php echo web_root; ?>admin/student/index.php" ><i class="fa fa-group fa-fw"></i>  Students </a>
            
                        </li> 
                        <?php } ?>
                        <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Officer'  ) {  ?>
                        <li>
                             <a href="#" ><i class="fa fa-money fa-fw"></i>  Transaction  <span class="fa arrow"></span> </a>
                             <ul class="nav nav-second-level">
                                <li>  <a href="<?php echo web_root; ?>admin/fees/index.php" ><i class="fa fa-circle-o fa-fw"></i>  Payment </a></li> 
                                <li>
                                     <a href="<?php echo web_root; ?>admin/expenses/index.php"><i class="fa fa-circle-o fa-fw"></i> Expenses </a>
                                </li> 
                             </ul>
                        </li> 
                        <li>
                             <a href="<?php echo web_root; ?>admin/announcement/index.php" ><i class="fa fa-microphone fa-fw"></i>  Announcement </a>
                    
                        </li> 
                      <?php } ?>
                      <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator') {  ?> 
                        <li>
                            <a href="#"><i class="fa  fa-gear fa-fw"></i> Maintenance <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                               <!-- <li>
                                     <a href="<?php echo web_root; ?>admin/maintenance/index.php" ><i class="fa fa-circle-o fa-fw"></i>  Set Semester </a>
                                </li> -->
                                <li>
                                     <a href="<?php echo web_root; ?>admin/department/index.php" ><i class="fa  fa-circle-o fa-fw"></i>  Department</a>
                                </li> 
                                <li>
                                     <a href="<?php echo web_root; ?>admin/course/index.php" ><i class="fa  fa-circle-o fa-fw"></i>  Courses </a>
                                 </li> 
                               <!-- <li>
                                     <a href="<?php echo web_root; ?>admin/subject/index.php"><i class="fa fa-circle-o fa-fw"></i> Curriculum </a>
                                </li> -->
                                <li>
                                     <a href="<?php echo web_root; ?>admin/sy/index.php"><i class="fa fa-circle-o fa-fw"></i> School Year </a>
                                </li> 
                                <li>
                                     <a href="<?php echo web_root; ?>admin/level/index.php"><i class="fa fa-circle-o fa-fw"></i> Year Level </a>
                                </li> 
                                <li>
                                     <a href="<?php echo web_root; ?>admin/section/index.php"><i class="fa fa-circle-o fa-fw"></i> Section </a>
                                </li> 
                            </ul> 
                            <!-- /.nav-third-level -->
                        </li> 
                        <li>
                            <a href="<?php echo web_root; ?>admin/user/index.php" ><i class="fa fa-user fa-fw"></i> Users </a> 
                        </li> 
                         <?php }  ?>
                         <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Officer'  ) {  ?>
                        <li>
                            <a href="<?php echo web_root; ?>admin/report/index.php" ><i class="fa fa-info fa-fw"></i> Report </a> 
                        </li>
                        <?php } ?>
 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        

           <div id="page-wrapper">
            <div class="row" > 
                <div class="col-lg-12"> 
                   <?php   check_message();  ?>  
                    <?php 
                    if ($title<>'Home'){
                       echo   '  <p>  <a href="'. web_root.'admin/index.php" title="Home" >Home</a>  / 
                        <a href="index.php" title="'. $title.'" >'. $title.'</a> 
                        '.(isset($header) ? ' / '. $header : '') .'</p>'  ;
                    } ?>
 
                  <?php require_once $content; ?> 
                  </div>
                         <!-- /.col-lg-12 --> 
              </div>
              <!-- /.row --> 
          </div>
          <!-- /#page-wrapper --> 


    </div>
    <!-- /#wrapper --> 
 

    <!-- Modal -->
                    <div class="modal fade" id="usermodal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal" type=
                                    "button">×</button>

                                    <h4 class="modal-title" id="myModalLabel">Profile Image.</h4>
                                </div>

                                <form action="<?php echo web_root; ?>admin/user/controller.php?action=photos" enctype="multipart/form-data" method=
                                "post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="rows">
                                            <div class="col-md-12">
                                                <div class="rows">
                                                    <img title="profile image" width="500" height="360" src="<?php echo web_root.'admin/user/'.$singleuser ->USERIMAGE ?>">  
                          
                                                </div>
                                            </div><br/>
                                                <div class="col-md-12">
                                                    <div class="rows">
                                                        <div class="col-md-8">

                                                            <input type="hidden" name="MIDNO" id="MIDNO" value="<?php echo $_SESSION['ACCOUNT_ID']; ?>">
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
  
<!-- jQuery -->
<script src="<?php echo web_root; ?>admin/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo web_root; ?>admin/js/bootstrap.min.js"></script> 
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo web_root; ?>admin/js/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo web_root; ?>admin/js/jquery.dataTables.min.js"></script>
<script src="<?php echo web_root; ?>admin/js/dataTables.bootstrap.min.js"></script>

<script src="<?php echo web_root; ?>admin/select2/select2.full.min.js"></script>
<script src="<?php echo web_root; ?>admin/slimScroll/jquery.slimscroll.min.js"></script>

<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script> 



<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.date.extensions.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.extensions.js"></script> 
 

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/meiomask.min.js"></script> 
<script src="<?php echo web_root; ?>js/ekko-lightbox.js"></script>


<!-- Custom Theme JavaScript -->
<script src="<?php echo web_root; ?>admin/js/sb-admin-2.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/js/janobe.js"></script> 

<script src="<?php echo web_root;?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script type="text/javascript" src="<?php echo web_root; ?>admin/js/jquery-ui.js"></script> 
<script type="text/javascript" src="<?php echo web_root; ?>admin/js/autofunc.js"></script> 
<script type="text/javascript" src="<?php echo web_root; ?>admin/js/singleAutoFunc.js"></script> 
 

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script> 
$(function () {
//Add text editor 
$("#ANNOUNCEMENT_WHAT").wysihtml5(); 
});
    
    $(function () {
         $(".select2").select2();
    })
  

     $('input[data-mask]').each(function() {
        var input = $(this);
        input.setMask(input.data('mask'));
      });

   //Datemask2 mm/dd/yyyy
    $("#datetime12").inputmask("hh:mm t", {"placeholder": "hh:mm t"});

       //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();


    $(document).ready(function() {  
         var t = $('#example').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],  
          // "sort": false,
        //ordering start at column 1
        "order": [[ 6, 'desc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );
 

     
 $(document).ready(function() {
    $('#dash-table').DataTable({
                responsive: true ,
                  "sort": false
        });
 
    });

 $(document).ready(function() {
    $('#dash-table1').DataTable({
                responsive: true ,
                  "sort": false
        });
 
    });


 
$('.date_pickerfrom').datetimepicker({
  format: 'mm/dd/yyyy',
   startDate : '01/01/2000', 
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1, 
    startView: 2,
    minView: 2,
    forceParse: 0 

    });


$('.date_pickerto').datetimepicker({
  format: 'mm/dd/yyyy',
   startDate : '01/01/2000', 
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1, 
    startView: 2,
    minView: 2,
    forceParse: 0   

    });
 
 
$('#date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0,
     changeMonth: true,
      changeYear: true,
      yearRange: '1945:'+(new Date).getFullYear() 
    });


    $(document).ready(function(){
 
        $(".customer").toggle();
    
});

 $(document).ready(function(){
    $("#a").click(function(){
        $(".customer").show();
    });
});
    
       $(document).ready(function(){
    $("#b").click(function(){
        $(".customer").hide();
    });
});

$(document).ready(function(){
    $("#c").click(function(){
        $(".customer").hide();
    });
});
 
</script>  
   

<script type="text/javascript" > 

$(document).on("change", "#DESCRIPTION", function () {
 /* load all variables */
   
    var DESCRIPTION = $("#DESCRIPTION").val(); 
   if (DESCRIPTION=='Select') {
        alert("Select the correct fees");
         $('#AMOUNT').val(0); 
   }else{
       // alert(courseid);
         $.ajax({    //create an ajax request to load_page.php
            type:"POST",  
            url: "loadDetails.php",    
            dataType: "text",   //expect html to be returned  
            data:{desc:DESCRIPTION},               
            success: function(data){                    
              $('#AMOUNT').val(data); 
               // alert(data);
            }

        });

   }; 
  
}); 

function validatePayment(){
    var amount = document.getElementById("AMOUNT").value;
    var fees = document.getElementById("FEES").value;

    if (amount > fees) {
        alert("Input amount is invalid.");
        return false;
    }else{
         return true;
    };
}


$(document).on("change", "#sched_semester", function () {
 /* load all variables */
   
   var courseid =  document.getElementById('COURSE_ID').value
   var semester = document.getElementById('sched_semester').value
   
$("#loadedit").hide();

 // $("#subjFirst").hide();
   // alert(courseid);
     $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php",    
        dataType: "text",   //expect html to be returned  
        data:{id:courseid, SEMESTER:semester},               
        success: function(data){                    
         $('#loaddata').html(data); 
          

        }

    }); 
  
}); 


$(document).on("change", "#INST_ID", function () {
 /* load all variables */
   
   var instid =  document.getElementById('INST_ID').value 
   
$("#spacing").hide();
$("#HideMe").hide();

 // $("#subjFirst").hide();
   // alert(courseid);
     $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php",    
        dataType: "text",   //expect html to be returned  
        data:{id:instid},               
        success: function(data){                    
         $('#loadsubject').html(data); 
          

        }

    }); 
  
});

$("#gosearch").click(function() {
    var instructor = document.getElementById("INST_ID").value;
    if (instructor == 'Select') {
        alert("Pls. Select Instructor.");
        return false;
    }else{
        return true;
    };
})
</script>
<script type="text/javascript">
    $("#FIRSTGRADING").keyup(function(){
        //alert('FIRSTGRADING');

   var first = document.getElementById('FIRSTGRADING').value;
   var second = document.getElementById('SECONDGRADING').value;
   var third = document.getElementById('THIRDGRADING').value;
   var fourth = document.getElementById('FOURTHGRADING').value;
   var tot;


    first = parseFloat(first) * .20;
    second = parseFloat(second) * .20;
    third = parseFloat(third) * .20;
    fourth = parseFloat(fourth) * .40

    tot = parseFloat(first) +  parseFloat(second)  +  parseFloat(third)  +  parseFloat(fourth) ;

    // tot = tot /  4;

   document.getElementById('AVERAGE').value = tot;







    });
    $("#SECONDGRADING").keyup(function(){
      var first = document.getElementById('FIRSTGRADING').value;
   var second = document.getElementById('SECONDGRADING').value;
   var third = document.getElementById('THIRDGRADING').value;
   var fourth = document.getElementById('FOURTHGRADING').value;
   var tot;


    first = parseFloat(first) * .20;
    second = parseFloat(second) * .20;
    third = parseFloat(third) * .20;
    fourth = parseFloat(fourth) * .40

    tot = parseFloat(first) +  parseFloat(second)  +  parseFloat(third)  +  parseFloat(fourth) ;

    // tot = tot /  4;

   document.getElementById('AVERAGE').value = tot;

    });
    $("#THIRDGRADING").keyup(function(){
        // alert('THIRDGRADING');
   var first = document.getElementById('FIRSTGRADING').value;
   var second = document.getElementById('SECONDGRADING').value;
   var third = document.getElementById('THIRDGRADING').value;
   var fourth = document.getElementById('FOURTHGRADING').value;
   var tot;


    first = parseFloat(first) * .20;
    second = parseFloat(second) * .20;
    third = parseFloat(third) * .20;
    fourth = parseFloat(fourth) * .40

    tot = parseFloat(first) +  parseFloat(second)  +  parseFloat(third)  +  parseFloat(fourth) ;

    // tot = tot /  4;

   document.getElementById('AVERAGE').value = tot;

    });
    $("#FOURTHGRADING").keyup(function(){
        // alert('FOURTHGRADING');
 var first = document.getElementById('FIRSTGRADING').value;
   var second = document.getElementById('SECONDGRADING').value;
   var third = document.getElementById('THIRDGRADING').value;
   var fourth = document.getElementById('FOURTHGRADING').value;
   var tot;


    first = parseFloat(first) * .20;
    second = parseFloat(second) * .20;
    third = parseFloat(third) * .20;
    fourth = parseFloat(fourth) * .40

    tot = parseFloat(first) +  parseFloat(second)  +  parseFloat(third)  +  parseFloat(fourth) ;

    // tot = tot /  4;

   document.getElementById('AVERAGE').value = tot;

    });


    
</script>
</body>
</html>