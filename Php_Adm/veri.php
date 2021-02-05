<?php
session_start();
if(!$_SESSION['$login']){
 header('Location: ../Admin.php');
}
?>