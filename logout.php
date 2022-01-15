<?php
    session_start();

    if(isset($_SESSION['isLoginOK'])){
        unset($_SESSION['isLoginOK']);
        header("location:login.php");
    }

    if(isset($_SESSION['isLoginAdOK'])){
        unset($_SESSION['isLoginAdOK']);
        header("location:myadmin.php");
    }

?>