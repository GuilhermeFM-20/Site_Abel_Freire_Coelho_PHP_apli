<?php
/*incluindo a classe DAO*/
require_once "DAO.classes.php";
/*criando um objeto da classe Conexao*/
$con = new Conexao();
/*Atributos*/
$profNome = $_POST['nome'];
$profMateria = $_POST['materia'];
$profEmail = $_POST['email'];
$profSexo = $_POST['sex'];
$profSenha = $_POST['senha'];

/*método de inserção no banco*/
if($con->veriEma($profEmail) == 1){
    session_start();
    $_SESSION['avi'] = 1;
    header('Location: Add_prof.php');
}else{
    $con->formCads($profNome, $profMateria, $profEmail, $profSexo, $profSenha);
}
/*---fim---*/
