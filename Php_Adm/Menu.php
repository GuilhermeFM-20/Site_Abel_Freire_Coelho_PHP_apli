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

    <?php 
            
        if(isset($_SESSION['suce']) && $_SESSION['suce'] == 1){
            echo"<script>alert('Sucesso!');</script>";
        }

        unset($_SESSION['suce']); 

    ?>
    
</head>
<body class="admin">    
    
    <div class="box-ico"><img src="..\img\core-img\logo.png" class="img-ico"></div>
    <center><a  href="verides.php"><input type="button" id="btn-adm" value="Desconectar" style="background:#1f2a8b"></a></center>
    <div class="menu-adm">
        <div class="add-prof"><br><br>
            <a href="Add_prof.php"><img src="img/adicionar-amigo.png" class="img-prof"></a>
            <p class="p">Adicionar novos professores ao sistema.</p>
        </div>
        <div class="add-prof"><br><br>
            <a href="Exclui.php"><img src="img/excluir.png" class="img-prof"></a>
            <p class="p">Excluir professor do sistema.</p>
        </div>
        <div class="add-prof"><br><br>
            <a href="visuPro.php"><img src="img/visualizador.png" class="img-prof"></a>
            <p class="p">visualizar professores cadastrados.</p>
        </div>
        <div class="add-prof"><br><br>
            <a href="trocLog.php"><img src="img/documentos-google.png" class="img-prof"></a>
            <p class="p">Trocar login do professor.</p>
        </div>
        
    </div>
</body>
</html>