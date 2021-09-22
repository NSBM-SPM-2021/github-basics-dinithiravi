<?php
 require_once ("../../include/initialize.php");

//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
 $mydb->setQuery("SELECT * FROM `subject` WHERE `SUBJ_CODE` LIKE '%".$searchTerm."%' GROUP BY SUBJ_CODE");
 $res = $mydb->loadResultList();
 foreach ($res as $row ) {
 	# code...
 	  // $data[] = $row->FNAME . ' ' . $row->LNAME;
 	  $data[] = $row->SUBJ_CODE;
 }
 
//return json data
echo json_encode($data);
?>