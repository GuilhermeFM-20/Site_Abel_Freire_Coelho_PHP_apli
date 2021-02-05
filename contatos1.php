<!DOCTYPE html>
<html lang="pt-br">

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
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                            </div>
                            <div class="login-content">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Inicio</a></li>
                                    <li><a href="#">Sobre</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Inicio</a></li>
                                            <li><a href="about-us.html">Espaços</a></li>
                                            <li><a href="course.html">Informações</a></li>
                                            <li><a href="Ensino médio.html">Ensino</a></li>
                                            <li><a href="contatos.php">Contatos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="eventos.html">Eventos</a></li>
                                    <li><a href="radio.html">Rádio</a></li>
                                    <li><a href="contact.html">Downloads</a></li>
                                </ul>

                            </div>
                            <!-- Nav End -->
                        </div>
                        <!-- Rede sociais-->
                        <div class="redesSociais">
                                <table>
                                 <tr>   
                                <td><div class="redes">
                                        <a href="https://www.facebook.com/pages/Escola-Estadual-Professor-Abel-Freire-Coelho/693309054135861" target="_blank"><img src="img/core-img/iconf2.png" alt="" width="50" height="50" style="border-radius: 15px;"></a>
                                </div></td>
                                <td><div class="redes">
                                        <a href="https://www.instagram.com/geam_ac/?hl=pt-br" target="_blank"><img src="img/core-img/iconi.png" alt="" width="50" height="50" style="border-radius: 15px;"></a>
                                </div></td>
                                </tr>
                                </table>
                            </div>
                        <!--Redes fim-->
                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+654563325568889"><i class="icon-telephone-2"></i> <span>(84) 3315-5668 </span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" >
        <div class="bradcumbContent">
            <h2>Contatos</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>Informações sobre os professores</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="prof">
                    <br><br>
                    <h2>Lista de Professores<h2>
                        <p>E para contato com os professores caso tenha alguma necessidade acadêmica, estão embaixo e-mails e nomes dos professores do Abel.</p>
                        <br>
                        <table>
                             <tr>
                                 <?php
                                 include 'cone.php';
                                 $lista = "SELECT * FROM professores ORDER BY nome";
                                 $resu = mysqli_query($cone,$lista);
                                 $i = 0;
                                 while($rows = mysqli_fetch_array($resu)){
                                    /*
                                        if($i > 3){
                                            echo "</tr> <tr>";
                                            $i = 0;
                                        }else{
                                            $i++;
                                        }
                                    */
                                    echo '<center><div class="prof profw" style="border-radius:10px; border-color: rgb(172, 164, 164);
                                    border-style: solid;
                                    border-width: 1px;">';
                                    if($rows['sexo'] == 'Ma'){
                                        echo'<img src="img/bg-img/professor.jpg" class="imgprof" style=" border-radius: 10px;"> <br><br>';      
                                    }elseif($rows['sexo'] == 'Fe'){
                                        echo'<img src="img/bg-img/professora.jpg" class="imgprof" style=" border-radius: 10px;"><br><br>'; 
                                    }
                                    echo "<p>Nome do professor: ".$rows['nome']."</p>";
                                    echo "<p>Matéria do professor: ".$rows['materia']."</p>";
                                    echo "<p>Email: ".$rows['email']."</p>";
                                    echo '</div></center><br>';
                                 }
                                 ?>
                                
                                <!-- <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Ismael Izidio de Almeida</p>
                                    <P>Matéria: Ciência da Computação</P>
                                    <p>Contato: ismaelzidio@hotmail.com</p>
                                </div></td>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professora.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Regina Lucia de Oliveira Matias</p>
                                    <P>Matéria: Física</P>
                                    <p>Contato: reginamatias32@hotmail.com</p>
                                </div></td>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>José André Penaforte Rodrigues</p>
                                    <p>Matéria: Biologia</p>
                                    <P>Contato: andre.p.penaforte@gmail.com</P>
                                </div></td>
                                </tr>

                                <tr>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>José Roberto da Silva</p>
                                    <p>Matéria: História</p>
                                    <P>Contato: josefranciscano@hotmai.com</P>
                                </div></td>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professora.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Vilcelania Alves Costa</p>
                                    <P>Matéria: Geografia</P>
                                    <p>Contato: vilcelaniaalves@hotmaip.com</p>
                                </div></td>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professora.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Sara Louise Aquino Almeida Peixoto</p>
                                    <P>Matéria: Filosofia</P>
                                    <p>Contato: saralouisepeixoto@gmail.com</p>
                                </div></td>
                                </tr>
                                <tr>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professora.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Gloria Cristiana de Oliveira Morais</p>
                                    <P>Matéria: Sociologia</P>
                                    <p>Contato: gloricomorais@bol.com.br</p>
                                </div></td>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Tiaggo Miranda</p>
                                    <p>Matéria: Artes</p>
                                    <P>Contato: tiaggo.miranda.hotmail.com</P>
                                </div></td>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Hallysson Henrique Fagundes Duarte</p>
                                    <p>Matéria: Ciência da Computação</p>
                                    <P>Contato: hallyssonduarte@gmail.com</P>
                                </div></td>
                                </tr>
                                <tr>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Rocelito Fernandes Soares</p>
                                    <p>Matéria: Educação Física</p>
                                    <P>Contato: celitofernandes@hotmail.com</P>
                                </div></td>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>José Cláudio de Fariass</p>
                                    <p>Matéria: Geografia</p>
                                    <P>Contato: gclaudio1511@gmail.com</P>
                                </div></td>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Tiago Gleidson de Lima Barra</p>
                                    <p>Matéria: Língua Portuguesa</p>
                                    <P>Contato: tiagogleidson@hotmail.com</P>
                                </div></td>
                                </tr>
                                <tr>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Antonio Edmar de Palharess</p>
                                    <p>Matéria: Matemática</p>
                                    <P>Contato: edpalh@hotmail.com</P>
                                </div></td>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Mansinho Veríssimo</p>
                                    <p>Matéria: Matemática</p>
                                    <P>Contato: jrmansinhojr@gmail.com</P>
                                </div></td>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Lenilton Maia de Lima</p>
                                    <p>Matéria: Língua Portuguesa</p>
                                    <P>Contato: leniltonml@hotmail.com</P>
                                </div></td>
                                </tr>
                                <tr>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professora.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Ana Celi Alves de Lima</p>
                                    <P>Matéria: Quimica</P>
                                    <p>Contato: anacelyalves@gmail.com</p>
                                </div></td>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professora.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Josirranny Priscilla da Silva</p>
                                    <P>Matéria: Língua Espanhola</P>
                                    <p>Contato: josirranny-priscilla@hotmail.com</p>
                                </div></td>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>José Pio Granjeiro Batista</p>
                                    <p>Matéria: Geografia</p>
                                    <P>Contato: bradpio10@gmail.com</P>
                                </div></td>
                                </tr>
                                <tr>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Francisco Elizeldo Lopes da Silva</p>
                                    <p>Matéria: Música</p>
                                    <P>Contato: elizeldoguitar@gmail.com</P>
                                </div></td>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Francisco José Alencar de Paiva</p>
                                    <p>Matéria: História</p>
                                    <P>Contato: fjalencar2009@hotmail.com</P>
                                </div></td>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professora.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Antonia Selma de Oliveira Câmara</p>
                                    <P>Matéria: Sociologia</P>
                                    <p>Contato: aselmadeoliveiraliberdade@gmail.com</p>
                                </div></td>
                                <tr>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Ramilson Saldanha</p>
                                    <p>Matéria: Língua Inglesa</p>
                                    <P>Contato: ramilson23@gmail.com</P>
                                </div></td>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>José Valter Rebouças</p>
                                    <p>Matéria: Língua Portuguesa</p>
                                    <P>Contato: josevalterr@hotmail.com</P>
                                </div></td>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Eber Maia Dantas</p>
                                    <p>Matéria: Língua Inglesa</p>
                                    <P>Contato: ebermai40@hotmail.com</P>
                                </div></td>
                                </tr>
                                <tr>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Alderi Batista Pereira</p>
                                    <p>Matéria: Física</p>
                                    <P>Contato: alderi61@gmail.com</P>
                                </div></td>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Andeyerlly de Paiva Lima</p>
                                    <p>Matéria: Física</p>
                                    <P>Contato: andeyerly@hotmail.com</P>
                                </div></td>
                                <td><div class="prof profw">
                                <img src="img/bg-img/professor.jpg" height="100px" width="300px" style="border-radius: 10px;">
                                    <p>Marcos Antonio de Oliveira</p>
                                    <P>Matéria: Língua Portuguesa</P>
                                    <p>Contato: professor.jpg_marcosantonio@hotmail.com</p>
                                </div></td> -->
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Team Area Start ##### -->
    
    <!-- ##### Features Area Start ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">

        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <script>
                                    document.write(new Date().getFullYear());
                            </script> E.E Professor Abel freire Coelho | Rua Dr. João Marcelino
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>