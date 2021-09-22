<?php
 require_once ("../../include/initialize.php");

//get search term
$searchTerm = $_POST['desc'];
//get matched data from skills table
 $mydb->setQuery("SELECT * FROM `tblexpenses` WHERE `EXPENSEID` LIKE '%".$searchTerm."%'");
 $res = $mydb->loadSingleResult(); 

    echo $res->AMOUNT; 
?>
