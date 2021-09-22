 <?php
 require_once ("include/initialize.php"); 
//  if (@$_GET['page'] <= 2 or @$_GET['page'] > 5) {
//   # code...
//     // unset($_SESSION['PRODUCTID']);
//     // // unset($_SESSION['QTY']);
//     // // unset($_SESSION['TOTAL']);
// } 


 
if(isset($_POST['sidebarLogin'])){
  $email = trim($_POST['U_USERNAME']);
  $upass  = trim($_POST['U_PASS']);
  $h_upass = sha1($upass);
  
   if ($email == '' OR $upass == '') {

      message("Invalid Username and Password!", "error");
      redirect(web_root."index.php?q=login");
         
    } else {   
        $stud = new Student();
        $studres = $stud::studAuthentication($email,$h_upass);

        if ($studres==true){
          
          $sql="INSERT INTO `tbllogs` (`USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) 
          VALUES (".$_SESSION['IDNO'].",'".date('Y-m-d H:i:s')."','Student','Logged in')";
          $mydb->setQuery($sql) ;
          $mydb->executeQuery();

          if ($_SESSION['ACCOUNTTYPE']=='Officer') {
            # code...
                  //it creates a new objects of member
                  $user = new User();
                  //make use of the static function, and we passed to parameters
                  $res = $user::userAuthentication($email, $h_upass);
                   if ($res==true) { 
                     message("You logon as ".$_SESSION['ACCOUNT_TYPE'].".","success");
                    redirect(web_root."index.php?q=profile");
                   }
          }else{
              redirect(web_root."index.php?q=profile");
          }

         
        }else{

                  //it creates a new objects of member
                  $user = new User();
                  //make use of the static function, and we passed to parameters
                  $res = $user::userAuthentication($email, $h_upass);
                  if ($res==true) { 
                     message("You logon as ".$_SESSION['ACCOUNT_TYPE'].".","success");
                     
                     $sql="INSERT INTO `tbllogs` (`USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) 
                        VALUES (".$_SESSION['ACCOUNT_ID'].",'".date('Y-m-d H:i:s')."','".$_SESSION['ACCOUNT_TYPE']."','Logged in')";
                        $mydb->setQuery($sql) ;
                        $mydb->executeQuery();

                    if ($_SESSION['ACCOUNT_TYPE']=='Administrator'){ 
                       redirect(web_root."admin/index.php");
                    }elseif($_SESSION['ACCOUNT_TYPE']=='Instructor'){
                        redirect(web_root."admin/index.php");

                    }else{
                         redirect(web_root."index.php");
                    }
                  }else{
                    message("Account does not exist! Please contact Administrator.", "error");
                     redirect(web_root."index.php?q=login"); 
                  }
             // message("Invalid Username and Password! Please contact administrator", "error");
             // redirect(web_root."index.php");
        }
 
 }
}

 
 ?> 
 
