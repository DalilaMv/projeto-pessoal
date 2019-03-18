<?php
require_once('common/navbar.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> Famous Love </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Logo na Aba do Navegador -->
    <link rel="shortcut icon" href="Imgs/logo1.png">
    <!--Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- Import estilo.css -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

    <!-- Jquery-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!--Materialize JS-->
    <script src="js/materialize.min.js"></script>

</head>

<body>
    <br><br><br>

    <div class="conter">
        <div class="row">
            <div class="col s9">
                <nav id="principal" class="nav-extended rd1">
                    <div class="nav-content">
                        <ul class="tabs tabs-transparent rd1">
                            <li class="tab rd6"><a href="#home"> Home </a></li>
                            <li class="tab rd5"><a href="#capitulo"> Capítulo </a></li>
                            <li class="tab rd5"><a href="#ap"> Apartamento </a></li>
                            <li class="tab rd5"><a href="#shop"> Shopping </a></li>
                            <li class="tab rd5"><a href="#leilao"> Leilão </a></li>
                            <li class="tab rd5"><a href="#forum"> Fórum </a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div id="usr" class="col s3 rd1">
                <br>
                <div class="col s12 m12 l12">
                    <div class="col s12 m6 l6"><img src="Imgs/user.jpg" alt="" class="circle" style="height: 50px; width: 50px;"></div>
                    <div class="col s12 m6 l6">
                        <div class="row"><span class="title">MistyHarmon <br>Nível 100 </span></div>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 112 conter z-depth-5 rd2">
                <div class="card-panel z-depth-5 rd2">
                    <div id="home" class="row">
                        <div class="col s12 m12 l12">
                            <br><br>
                            <div class="col s12 m6 l6">
                                <div class="row">
                                    <div class="col s12 m6 l6">
                                        <div class="video-container">
                                            <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pretium, nunc faucibus pellentesque pretium, quam risus ornare turpis, dictum vulputate orci neque et dolor. Integer consectetur ipsum in aliquet rhoncus. Duis scelerisque orci ut pulvinar posuere.
                                    </div>
                                </div>
                                <div class="row rd3">
                                    <div class="col s12 m6 l6">
                                        <img class="responsive-img" src="Imgs/star.png" style="height: 150px; width: 150px;">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <p><a class="waves-effect waves-light btn btn1" style="background: #800080;" onClick=""><i class="material-icons right">check</i> Continuar Capítulo </a></p>
                                        <p>
                                            <h5 class="col s2 right-align">70%</h5>
                                            <div class="progress" style="background: #A9A9A9;">
                                                <div class="determinate" style="width: 70%; background: #FFD700;"></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6 rd4">
                                <h4 class="center">FÓRUM</h4>
                                <h5> Destaques </h5>
                                <p class="topicos">
                                    <i class="tiny material-icons"> chevron_right </i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus id arcu eget semper.
                                </p>
                                <p class="topicos">
                                    <i class="tiny material-icons"> chevron_right </i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus id arcu eget semper.
                                </p>
                                <h5> Post oficiais </h5>
                                <p class="topicos">
                                    <i class="tiny material-icons"> chevron_right </i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus id arcu eget semper.
                                </p>
                                <p class="topicos">
                                    <i class="tiny material-icons"> chevron_right </i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus id arcu eget semper.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div id="capitulo" class="row">
                        <embed src="Monogatari/index.html" style="width:100%; height: 100%;">
                    </div>

                    <div id="ap" class="row">
                        <div class="col s12 m12 l12">
                            Apartamento
                        </div>
                    </div>
                    <div id="shop" class="row">
                        <div class="col s12 m12 l12">
                            Shopping
                        </div>
                    </div>
                    <div id="leilao" class="row">
                        <div class="col s12 m12 l12">
                            Leilão
                        </div>
                    </div>
                    <div id="forum" class="row">
                        <div class="col s12 m12 l12">
                            Fórum
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
    <?php
        require_once('common/footer.php');
        ?>
    <!-- Jquery-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!--Materialize JS-->
    <script src="js/materialize.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.tabs').tabs();
        });

    </script>
    <script>
        $(document).ready(function() {
            $('.materialboxed').materialbox();
        });

    </script>

</body>

</html>
