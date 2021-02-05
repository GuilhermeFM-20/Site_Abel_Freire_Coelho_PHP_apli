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
    <link rel="icon" href="img/icon.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="Php_Adm/style.Adm.css">
</head>
<body class="admin">
    <div class="box-ico"><img src="img\core-img\logo.png" class="img-ico"></div>
    <div class="login-adm"> 
        <h1 class="h1-adm">Login</h1>
        <?php
				session_start();	
				if(isset($_SESSION['veri']) == 1){
					echo'<p class="avis btn-sm">Usuário ou senha incorreta ⚠️</p>';
				}	
				unset($_SESSION['veri']);
			?>
        <form action="Php_Adm\VeriL.php" method="POST" class="box-form">
        <label class="lab">Login  </label><input type="text" name="login" required="" class="text-adm"><br>
        <label class="lab">Senha</label><input type="password" id="senha" name="senha" required="" class="text-adm"><label class="lab" onclick="visuSen()">👁</label>
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
        <input type="submit" value="Entrar" class="btn academy-btn btn-sm" id="btn-adm">
        </form>
    </div>
</body>
</html>