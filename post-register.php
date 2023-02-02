<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $cfpwd = $_POST["cfm_pwd"];



    //echo $username;
    //echo $email;

    //Kiem tra thong tin (gia su kiem tra 2 password)
    if($pwd != $cfpwd){
        $msg = "Mat khau khong khop";
        $_SESSION["error"] = $msg;

        //Lud du lieu de hien thị lại khi co loi
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;

        //quay ve trang resigter
        header("Location: register.php");
        die(); //Lam cho luong web chet tai day ma khong di tiep
    }

    //Xu ly data nhan duoc va chuyen huong
    header("Location: index.php");
}



