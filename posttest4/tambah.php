<?php
    session_start();
    if(!isset($_SESSION["koleksi"])){
        $arr = [[]];
    }else{
        $arr = $_SESSION["koleksi"];
    }
    
    $data = array(
                'artis'=>$_POST['artis'],
                'email'=>$_POST['email'],
                'judul'=>$_POST['judul'],
                'harga'=>$_POST['harga'],
                'jenis'=>$_POST['jenis'],
                'tanggal'=>$_POST['tanggal'],
                '');
    
    for($i = 0; $i < count($arr); $i++){
        if($i == count($arr)-1){
            if(count($arr[$i])!=4){
                array_push($arr[$i], $data);
            }else{
                array_push($arr, []);
            }
        }
    }
    $_SESSION["koleksi"] = $arr;
    header('Location: admin.php');
    exit();
?>