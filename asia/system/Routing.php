<?php

function Route($path, $controllerName, $function="index"){

  $requestMethod = $_SERVER['REQUEST_METHOD'];
  $requestUri =  $_SERVER['REQUEST_URI'];
  $requestUri = strtok($_SERVER['REQUEST_URI'], '?');
 
  $path = preg_replace('/\{(.*)+\}$/s', '[0-9a-zA-Z-]+', $path);
  $pattern = '#^' . ROOT_DIR . $path. '$#siD';
  
  

  if($path == "/" && !isset($_SERVER["PATH_INFO"])){
	
  	if(is_object($controllerName)){
  	  echo $controllerName();
    }else{
  		require_once APP_PATH."controllers/".$controllerName. '.php';
  		$function();
  	}
  }else{
	
  	if(preg_match($pattern, $requestUri)){
  	      if(is_object($controllerName)){
  					echo $controllerName();
  				}
  				else{
  					call_function($requestUri, $controllerName, $function);
  				}
        }
  }
} 

function call_function($requestUri, $controllerName, $function){

  	require_once APP_PATH."controllers/".$controllerName. '.php';
  	
  	$path_info=explode("/",$_SERVER["REQUEST_URI"]);
  	
  	if(!isset($path_info[2]) || empty($path_info[2])){
    	   $path_info[2] = "index";
        }
        
    //debug($path_info);
  	//if($path_info[4] == $function){ 
		// print_r($path_info); 
  	    $id = $path_info[5] ?? "";
            $function($id);
    //    }
  
}

function site_url($path){
   return SITE_URL.'/'. $path; 
}

function base_url($path){
   return BASE_URL. str_replace('index.php','',ROOT_DIR).'/'. $path; 
}


function redirect($path){
   header("Location: ".site_url($path));
   exit;
}  
