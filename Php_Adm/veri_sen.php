<?php
session_start();
include "DAO.classes.php";
$con = new Conexao();
$sen_adm = $_POST['senha_adm'];
$sen = $_POST['senha'];
if($con->veriSenha($_SESSION['$login'],$sen_adm) == 1){
    $con->recaSen($sen, $_SESSION['$email_prof']);
    unset($_SESSION['$email_prof']);
    session_start();
    $_SESSION['suce'] = 1;
    header('Location: Menu.php');
}else{
    $_SESSION['avi'] = 1;
    header('Location: log_tro.php');
}