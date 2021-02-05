<!DOCTYPE html>
<html lang="en">
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
    <div id="login-adm">
    <h1 class="h3-adm">Dados para exclusão</h1>
        <?php
			    if(isset($_SESSION['veri']) == 1){
					echo'<p class="avis btn-sm">E-mail não encontrado ⚠️</p>';
                }elseif(isset($_SESSION['verio']) == 2){
                    echo'<p class="avis btn-sm">Senha incorreta ⚠️</p>';
                }	
                    unset($_SESSION['veri']);
                    unset($_SESSION['verio']);
            ?>
        <h2 class="h2-adm">Digite od dados pedidos para excluir o professor do sistema</h2>
        <form action="excl.php" method="POST" class="box-form">
        <label class="lab">E-mail<input type="text" required="" name="email" class="text-adm"></label><br>
        <label class="lab">Senha<input type="password" required="" id="senha" name="senha" class="text-adm"></label><label class="lab" onclick="visuSen()">👁</label>
            <script>
                function visuSen(){
                        var senha = document.getElementById('senha');
                        if(senha.type == "password"){
                            senha.type = "text";
                        }else{
                            senha.type = "password";
                        }
                    }
            </script><br>
        <input type="submit" value="Excluir" class="btn academy-btn btn-sm" id="btn-adm"><br>
        <a href="Menu.php"><input type="button" value="Voltar" class="btn academy-btn btn-sm" id="btn-adm"></a>
        </form>
    </div>
</body>
</html>
