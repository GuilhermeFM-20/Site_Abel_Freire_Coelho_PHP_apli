<?php
session_start();
require_once "DAO.classes.php";
$con = new Conexao();
$email = $_POST['email'];
$senha= $_POST['senha'];
if($con->veriEma($email) == 1){
    $con->veriExcPro($email,$senha);
}else{
    $_SESSION['veri'] = 1;
    header('Location: Exclui.php');
}