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
    <h1 id="h1-adm" >Recadastro</h1>
    <h2 class="h2-adm"></h2>
    <form action="veri_sen.php" method="POST" class="box-form">
    <?php
			    if(isset($_SESSION['avi']) == 1){
					echo'<p class="avis btn-sm">Senha errada ⚠️</p>';
                }
                    unset($_SESSION['avi']);
                   
            ?>
        <div class="cent">
        <label class="lab">Senha Adm <input type="password" id="senha1" name="senha_adm" required="" class="text-adm"></label><label class="lab" onclick="visuSen1()">👁</label>
            <script>
                function visuSen1(){
                        var senha = document.getElementById('senha1');
                        if(senha.type == "password"){
                            senha.type = "text";
                        }else{
                            senha.type = "password";
                        }
                    }
            </script><br>
        <label class="lab">Nova senha<input type="password" id="senha2" name="senha" required="" class="text-adm"></label><label class="lab" onclick="visuSen2()">👁</label>
            <script>
                function visuSen2(){
                        var senha = document.getElementById('senha2');
                        if(senha.type == "password"){
                            senha.type = "text";
                        }else{
                            senha.type = "password";
                        }
                    }
            </script></label><br>
        </div>
        <input type="submit" value="Entrar" class="btn academy-btn btn-sm" id="btn-adm">
        <a href="Menu.php"><input type="button" value="Voltar" id="btn-adm"></a>
    </form>
</div>
</body>
</html>