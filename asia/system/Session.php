<?php
if(!defined('BASE_PATH')){
	exit("Akses terlarang.");
}

session_start();
const FLASH = "SESS_FLASH";
const ALERT_SUCCESS	= 'success';
const ALERT_DANGER	= 'danger';
const ALERT_WARNING	= 'warning';
const ALERT_INFO	= 'info';


if(count($_REQUEST) > 0){
   foreach($_REQUEST as $key => $input){
   	$_SESSION['OLD'][$key] = $input;
   }
}


function createFlash($name, $message, $alertType){

         if(isset($_SESSION[FLASH][$name])){
         	unset($_SESSION[FLASH][$name]);
         }
         
         $_SESSION[FLASH][$name] = parseAlert($message, $alertType);
	 

}

function createAlert($message, $alertType){
	return parseAlert($message, $alertType);
}

function parseAlert($messages, $alertType){
	$bi=[
	  'success'=>'check-circle-fill',
	  'danger'=>'x-circle-fill',
	  'warning'=>'exclamation-triangle-fill',
	  'info'=>'info-circle-fill',
	];
	
	if(is_array($messages)){
		$message ="<ol>";
		foreach($messages as $key => $msgArray){
			foreach($msgArray as $msg){ 
				$message .= "<li>{$msg}</li>"; 
			}
		}
		$message .="</ol>";
	
	}else{
	
		$message = $messages;
	}
	

	return sprintf('<div class="alert alert-%s alert-dismissible fade show">
		<i class="bi bi-%s"></i>
		%s
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>',
		$alertType,
		$bi[$alertType],  
		$message
	);

}


function setFlash($name, $message, $alertType){
        createFlash($message, $alertType);
       
}

function flashDanger($message){
	createFlash('alert', $message, ALERT_DANGER);

}

function flashInfo($message){

	createFlash('alert', $message, ALERT_INFO);
}

function flashWarning($message){
	createFlash('alert', $message, ALERT_WARNING);

}


function flashSuccess($message){
	createFlash('alert', $message, ALERT_SUCCESS);

}

function getFlash($name='alert'){
	if(isset($_SESSION[FLASH][$name])){
		$flash = $_SESSION[FLASH][$name]; 
		unset($_SESSION[FLASH][$name]);
		return $flash;
	}
}

function old($name,$default=""){
  if(!empty($default)){
  	return $default;
  }
	$old="";
	if(isset($_SESSION['OLD'][$name])){
		$old = $_SESSION['OLD'][$name];
		unset($_SESSION['OLD'][$name]);
   	}
   	
   	return $old;
}
