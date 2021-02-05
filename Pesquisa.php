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
                        <h3>Professor pesquisado</h3>
                    </div>
                </div>     
            </div>
        </div>
    <div class="popular-course-details-area wow fadeInUp" data-wow-delay="300ms">
                <center><img src="img/bg-img/pesq2.png" width="200px" height="200px"></center>
                <?php for($i = 0 ;$i < 3;$i++){echo"<br>";}?>
                
            <div class="single-top-popular-course d-flex align-items-center flex-wrap">
                    <div class="popular-course-content">
                    <?php
                                include 'cone.php';
                                $pesquisar = trim($_POST['Prof']);
                                $resul_prof="SELECT * FROM professores WHERE nome LIKE '%$pesquisar%' LIMIT 5";
                                $achado = mysqli_query($cone, $resul_prof);
                                if($rows_prof = mysqli_fetch_array($achado)){
                                    if($rows_prof['sexo'] == 'Ma'){
                                        echo'<img src="img/bg-img/professor.jpg" class="imgprof" style=" border-radius: 10px; width: 400px; height: 400px;" > <br><br>';      
                                    }elseif($rows_prof['sexo'] == 'Fe'){
                                        echo'<img src="img/bg-img/professora.jpg" class="imgprof" style=" border-radius: 10px;"><br><br>'; 
                                    }
                                    echo "Nome do professor: ".$rows_prof['nome']."<br>";
                                    echo "Matéria do professor: ".$rows_prof['materia']."<br>";
                                    echo "Email: ".$rows_prof['email']."<br>";
                                }else{
                                    echo'<img src="img/bg-img/erro.png" width="200px" higth="200px">';
                                    echo'<p class="erro">Erro, professor pesquisado não foi encontrado!</p>';
                                }
                                ?><br>
                                <a href="contatos.php" class="btn academy-btn btn-sm">Voltar</a>
                    </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/arpe.jpeg);"></div>
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