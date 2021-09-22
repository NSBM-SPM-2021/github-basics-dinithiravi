<?php
session_start();
foreach($_SESSION as $k => $val){
	unset($_SESSION[$k]);
}
header("location:index.php?q=login");