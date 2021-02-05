<?php
session_start();
include "DAO.classes.php";
$con = new Conexao();
$logi = mysqli_real_escape_string($con->conexaoAtri(), $_POST['login']);
$sen = mysqli_real_escape_string($con->conexaoAtri(), $_POST['senha']);
$con->verificaLogin($logi,$sen);
