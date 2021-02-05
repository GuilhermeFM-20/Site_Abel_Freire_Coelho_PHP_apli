<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
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
    <div class="menu-adm">
            <h1 class="h1-adm">Cadastro</h1>
			<form action="cadas.php" method="post" class="form">
           
            <?php 
			 if(isset($_SESSION['avi']) == 1){
				 echo'<div class="avis"><p>E-mail já em uso ⚠️</p></div><br>';
			 }	
				 unset($_SESSION['avi']);
		 	?>
			<label class="lab">Nome:
			<input type="text" name="nome" class="text-adm"  min="8" max="8" required="" value=""></label><br>
			<label class="lab">Matéria:
			<input type="text" name="materia" required="" class="text-adm"></label><br>
			<label class="lab">E-mail:
			<input type="email" name="email" required="" class="text-adm"></label><br>
			<label class="lab">Sexo:
			<input type="radio" name="sex" value="Ma" class="mar" checked>
			<label class="lab">Mas</label>
			<input type="radio" name="sex" value="Fe" class="mar">
            <label class="lab">Fem</label><br>
            <label class="lab">Senha
            <input type="password" id="senha" required="" name="senha" class="text-adm"></label><label class="lab">👁<input type="checkbox" id="chek" onclick="visuSen()"></label>
            <script>
                function visuSen(){
                        var senha = document.getElementById('senha');
                        if(senha.type == "password"){
                            senha.type = "text";
                        }else{
                            senha.type = "password";
                        }
                    }
            </script>
            <br>      
			<input type="submit" name="btn"  value="Enviar" id="btn-adm"><br>
			<a href="Menu.php"><input type="button" value="Voltar" id="btn-adm"></a>
            </form>
            
    </div>
</body>
</html>