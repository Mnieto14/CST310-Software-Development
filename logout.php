<?php
    error_reporting(E_ALL ^ E_NOTICE);
    require_once('dbconn.php');
    require 'main.php';

    session_start();
    unset($_SESSION['name']);  
    header("Location: index.php");
?>