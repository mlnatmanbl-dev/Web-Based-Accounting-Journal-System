<?php

function index(){
    // menampilkan daftar jurnal
    global $con;
    $sql ="SELECT j.transaction_date, j.reff_code,
a.name, a.code, ji.debit, ji.credit 
FROM journals AS j
LEFT JOIN journal_items AS ji ON j.id=ji.journal_id
LEFT JOIN accounts AS a ON a.code=ji.code;";

    $result = mysqli_query($con, $sql);

    $jurnal =[];
    while($row = mysqli_fetch_assoc($result)){
        $jurnal[] = $row;
    }
    $data = [
        'title'=>'Daftar jurnal',
        'jurnals' => $jurnal,
    ];
    
    load_view('jurnal/jurnal_list', $data);
}

function create(){
	global $con;
	$sql = "SELECT parent, code, name, types FROM accounts";
	$result = mysqli_query($con, $sql);
	$accounts=[];
	while($row = mysqli_fetch_assoc($result)){
		$accounts[] = $row;
	}
	
	$groupAccounts = [];
	foreach($accounts as $account){
		$groupAccounts[$account['parent']][] = $account;
	}
	
	$data =[
		'title'=>'Module Jurnal - Tambah Data',
		'accounts' => $groupAccounts,
		'item' =>  $_GET['item'] ?? 2
	];
	load_view("jurnal/jurnal_create",$data);
}

function store(){
  global $con;
 
  mysqli_begin_transaction($con); // mulai transaction
  try{
    // untuk table journals
    $sql = "INSERT INTO journals(journal_type,transaction_date, reff_code, created_at, updated_at) ";
	$sql .= "VALUES (
        'umum',
  		'".$_POST['transaction_date']."',
  		'".$_POST['reff_code']."',
  		'". date("Y-m-d H:i:s") ."',
  		'". date("Y-m-d H:i:s") ."'
  		)";
  	mysqli_query($con, $sql);
  	$journal_id = mysqli_insert_id($con);
  	
  	$codes = $_POST['codes'];
  	$debits = $_POST['debits'];
  	$credits = $_POST['credits'];
  	
  	// untuk table journal_items
  	$sql_item="INSERT INTO journal_items(journal_id, code, debit, credit) ";
  	$sql_item .= "VALUES";
  	foreach($codes as $key => $code){
  	    $debit = !empty($debits[$key]) ? $debits[$key] : "0.00";
  	    $credit = !empty($credits[$key]) ? $credits[$key] : "0.00";
  	    
  		$sql_item .= '("'. $journal_id .'",';
  		$sql_item .= '"'. $code .'",';
  		$sql_item .= '"'. $debit .'",';
  		$sql_item .= '"'. $credit .'"),';
  	}
  	$sql_item = substr($sql_item, 0, -1);

  	mysqli_query($con, $sql_item);
  	
  	mysqli_commit($con); // commit jika semua query sukses
  	
  	flashSuccess('Data jurnal telah disimpan.');
    redirect("jurnal");
  }
  catch(Exception $e){
      mysqli_rollback($con); // roolback jika salahsatu atau seluruh query gagal
      flashDanger($e->getMessage());
  	  redirect('jurnal/create');
  }
}

