<?php
if(!defined('BASE_PATH')){
	exit("Akses terlarang.");
}

try{
  	$con = mysqli_connect($host, $user, $password, $database) or die(mysqli_connect_error());
}
catch(Exception $e){
      exit($e->getMessage());
}
  



