<?php
    require_once 'configure.php';
    require_once './functions/cart_functions.php';
    //require_once 'admin_verify.php';
    session_start();
    if((isset($_SESSION['username']) && !empty($_SESSION['username']))){
        include 'header2.php';
    }
    else {
        if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])){
        include 'header3.php';}
    else{
    include 'header.php';}
    }
    ?>