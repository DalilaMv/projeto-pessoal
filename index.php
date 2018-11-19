<?php
require_once('navbar.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title> Famous Love </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS-->
    <link rel="stylesheet" href="css/materialize.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Kalam|Nunito|Patrick+Hand|Roboto+Mono|Raleway" rel="stylesheet">

    <!-- Jquery-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!--Materialize JS-->
    <script src="js/materialize.min.js"></script>

    <style>
        /* Fonte */
        li {
            font-family: 'Raleway';
        }


        /* Centraliza o NavBar */
        .nav-wrapper ul.center {
            display: block;
            width: auto;
        }

        .nav-wrapper>ul.center li {
            float: none;
            display: inline-block;
        }

        /* Distância do topo do NavBar */
        .lina {
            margin-top: 25px;
        }

        /*Cards Colors*/
        #card1 {
            background-color: rgba(109, 204, 163, 0.9);
        }

        #card2 {
            background-color: rgba(13, 178, 107, 0.9);
        }

        #card3 {
            background-color: rgba(9, 119, 71, 0.9);
        }

        /* Cor verde do texto "Cuide..." */
        #cuide,
        #Atfooter {
            color: #0DB26B;
        }

        /*Fonte para esse tipo de tags*/
        p,
        span,
        h5,
        h4,
        #Atfooter {
            font-family: raleway, sans-serif;
        }

        .topicos {
            color: #605E5E;
        }

        body {
            overflow-x: hidden;
        }

    </style>
</head>

<body class="grey lighten-3">
    <br><br><br>

    <div class="container">
        <div class="row">
            <div class="col s9">
                <nav class="nav-extended green darken-3">
                    <div class="nav-content">
                        <ul class="tabs tabs-transparent">
                            <li class="tab"><a href="#home"> Home </a></li>
                            <li class="tab"><a href="#capitulo"> Capítulo </a></li>
                            <li class="tab"><a href="#ap"> Apartamento </a></li>
                            <li class="tab"><a href="#shop"> Shopping </a></li>
                            <li class="tab"><a href="#leilao"> Leilão </a></li>
                            <li class="tab"><a href="#forum"> Fórum </a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col s3">

            </div>
            <div class="col s12 m12 112 container z-depth-5">
                <div class="card-panel z-depth-5">
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
                                <br><br>
                                <div class="row">
                                    <div class="col s12 m6 l6">
                                        <img class="responsive-img" src="Imgs/star.png" style="height: 200px; width: 200px;">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <p><a class="waves-effect waves-light btn" onClick=""><i class="material-icons right">check</i> Continuar Capítulo </a></p>
                                        <p>
                                            <h5 class="col s2 right-align">70%</h5>
                                            <div class="progress">
                                                <div class="determinate" style="width: 70%"></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <h4 class="center">FÓRUM</h4>
                                <h5> Destaques </h5>
                                <p class="topicos">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus id arcu eget semper.
                                </p>
                                <p class="topicos">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus id arcu eget semper.
                                </p>
                                <h5> Post oficiais </h5>
                                <p class="topicos">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus id arcu eget semper.
                                </p>
                                <p class="topicos">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus id arcu eget semper.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div id="capitulo" class="row">
                        <div class="col s12 m12 l12">
                            Capítulo
                        </div>
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
        require_once('footer.php');
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
