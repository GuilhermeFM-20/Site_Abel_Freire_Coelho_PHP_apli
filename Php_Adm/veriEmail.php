<?php
session_start();
include_once "DAO.classes.php";
$con = new Conexao();
$ema = $_POST['email'];
$_SESSION['$email_prof'] = $ema;
if($con->veriEma($ema) == 1){
header('Location: log_tro.php');
    }else{
        $_SESSION['avi'] = 1;
        header('Location: trocLog.php');
        }