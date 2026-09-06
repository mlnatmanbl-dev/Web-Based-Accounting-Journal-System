<?php

function index(){
    global $con;
    $sql ="SELECT * FROM accounts;";
    $result = mysqli_query($con, $sql);

    $rekening =[];
    while($row = mysqli_fetch_assoc($result)){
        $rekening[] = $row;
    }
    $data = [
        'title'=>'Daftar Rekening',
        'rekenings' => $rekening,
    ];
    
    load_view('rekening/rekening_list', $data);
}

function create(){
    $data = [
        'title'=>'Tambah Rekening'
    ];
    
    load_view('rekening/rekening_create', $data);
}

function store(){
    // echo "store";
    // debug($_POST);
    global $con;
    $sql = "INSERT INTO accounts(code,name,parent,types,sn,created_at,updated_at) ";
    $sql .= "VALUES('". $_POST['code'] ."',
            '". $_POST['name'] ."',
            '". $_POST['parent'] ."',
            '". $_POST['type'] ."',
            '". $_POST['sn'] ."',
            '". date('Y-m-d H:i:s') ."',
            '". date('Y-m-d H:i:s') ."')";

    try{
        // akan di jalankan jika tidak ada error/exception
     

        mysqli_query($con, $sql);
        flashSuccess("Data rekening sudah disimpan");
        redirect("rekening");
    }catch(Exception $e){
        // akan dijalankan jika ada error/exception
        flashDanger($e->getMessage());
        redirect("rekening/create");
    }

}


function edit($id=0){
    global $con;
    $sql = "SELECT";

    // try{
    //     // akan di jalankan jika tidak ada error/exception
     

    //     mysqli_query($con, $sql);
    //     flashSuccess("Data rekening sudah disimpan");
    //     redirect("rekening");
    // }catch(Exception $e){
    //     // akan dijalankan jika ada error/exception
    //     flashDanger($e->getMessage());
    //     redirect("rekening/create");
    // }
}

function update(){

}

function delete($id=0){
    global $con;
    //echo "hapus - ".$id;
    $sql ="DELETE FROM accounts WHERE code='$id';";
    //echo $sql;
    try{
        mysqli_query($con, $sql);
        flashSuccess("Data rekening sudah dihapus");
        redirect("rekening");
    }catch(Exception $e){
        flashDanger($e->getMessage());
        redirect("rekening");
    }
}

/*




*/