<?php
if(!defined('BASE_PATH')){
	exit("Akses terlarang.");
}

Route("/", function(){
	//return "Halo ini halaman routing pertamaku";
});
Route("/home","HomeController","index");

//echo BASE_PATH;
// routing rekening
Route("/rekening","RekeningController","index");
Route("/rekening/create","RekeningController","create");
Route("/rekening/store","RekeningController","store");
Route("/rekening/edit/{id}","RekeningController","edit");
Route("/rekening/update","RekeningController","update");
Route("/rekening/delete/{id}","RekeningController","delete");

// routing jurnal
Route("/jurnal","JurnalController","index");
Route("/jurnal/create","JurnalController","create");
Route("/jurnal/store","JurnalController","store");
Route("/jurnal/edit/{id}","JurnalController","edit");
Route("/jurnal/update","JurnalController","update");
Route("/jurnal/delete/{id}","JurnalController","delete");

