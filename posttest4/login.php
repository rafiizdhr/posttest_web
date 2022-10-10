<?php 
    $akun = ['username' => 'admin', 'password' => 'admin123']; 

    if ( $akun['username'] !== $_POST['uname'] OR $akun['password'] !== $_POST['psw'] ) { 
        header('Location: ' . $_SERVER['HTTP_REFERER']); 
        exit(); 
    } 

    session_start(); 
    $_SESSION["isLogged"] = "1"; 
    header('Location: admin.php'); 
    exit();
?>