<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>E.E Professor Abel Freire Coelho </title>

    <!-- Favicon -->
    <link rel="icon" href="../img/icon.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.Adm.css">
    <?php include 'veri.php';?>
</head>
<body class="admin">

    <div class="box-ico"><img src="..\img\core-img\logo.png" class="img-ico"></div>
    <center><a  href="Menu.php"><input type="button" id="btn-adm" value="Voltar" style="background:#1f2a8b"></a></center><br>
    <center><table>
    <tr>
   <?php
        include "DAO.classes.php";
        $mos = new Conexao();
        $mos->exibePro();
    ?>
    </tr>
    </table></center>
</body>
</html>