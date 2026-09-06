<?php
if(!defined('BASE_PATH')){
	exit("Akses terlarang.");
}


function load_view($view_name, $data=[],$template_name="template"){
  extract($data);
  
  require_once VIEW_PATH."/layouts/$template_name.php";
}

function debug($var){
 echo "<pre>";
 print_r($var);
 echo "</pre>";
 exit;
}
