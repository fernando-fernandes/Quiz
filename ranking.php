<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#114FA8">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="fonts/css/all.min.css">
    <link rel="stylesheet" href="css/styles.min.css">
    <!-- <link rel="stylesheet" href="assets/css/index.css"> -->
    <title>Quiz</title>

</head>



<body>
    <div class="wrapper">
        <button type="button" class="sidebar-btn"><i class="fal fa-bars"></i></button>
        <div class="sidebar">
            <button type="button" class="sidebar-btn"><i class="fal fa-bars"></i></button>
            <span class="logo">
                <img src="images/Logo-mobil.svg" alt="Logo Mobil">
            </span>

            <div class="container-menu d-flex justify-content-center">
                <ul>
                    <li class="nav-item">
                        <a href="index.php?p=m0">
                            <i class="fas fa-home icon-defult"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?p=m1">
                            <i class="fas fa-motorcycle icon-defult"></i>
                            <i class="fas fa-lock icon-lock"></i>
                            <span>Módulo 1</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?p=m2">
                            <i class="fas fa-motorcycle icon-default"></i>
                            <i class="fas fa-lock icon-lock"></i>
                            <span>Módulo 2</span>
                        </a>
                    </li>
                    <li class="nav-subitem">
                        <a href="index.php?p=e1">
                            <i class="fas fa-flag-alt icon-default"></i>
                            <i class="fas fa-lock icon-lock"></i>
                            <span>Atividade extra</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?p=m3">
                            <i class="fas fa-motorcycle icon-default"></i>
                            <i class="fas fa-lock icon-lock"></i>
                            <span>Módulo 3</span>
                        </a>
                    </li>
                    <li class="nav-subitem">
                        <a href="">
                            <i class="fas fa-traffic-cone icon-default"></i>
                            <i class="fas fa-lock icon-lock"></i>
                            <span>1<sup>a</sup> Revisão</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <i class="fas fa-motorcycle icon-default"></i>
                            <i class="fas fa-lock icon-lock"></i>
                            <span>Módulo 4</span>
                        </a>
                    </li>
                    <li class="nav-subitem">
                        <a href="">
                            <i class="fas fa-flag-alt icon-default"></i>
                            <i class="fas fa-lock icon-lock"></i>
                            <span>Atividade extra</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <i class="fas fa-motorcycle icon-default"></i>
                            <i class="fas fa-lock icon-lock"></i>
                            <span>Módulo 5</span>
                        </a>
                    </li>
                    <li class="nav-item nav-disabled">
                        <a href="">
                            <i class="fas fa-motorcycle icon-default"></i>
                            <i class="fas fa-lock icon-lock"></i>
                            <span>Módulo 6</span>
                        </a>
                    </li>
                    <li class="nav-subitem nav-disabled">
                        <a href=""><i class="fas fa-traffic-cone icon-default"></i>
                            <i class="fas fa-lock icon-lock"></i>
                            <span>2<sup>a</sup> Revisão</span></a>
                        <a class="sublink" href=""><span>Podcast</span></a>
                        <a class="sublink" href=""><span>Game case</span></a>
                    </li>
                    <li class="nav-item nav-disabled">
                        <a href="">
                            <i class="fas fa-motorcycle icon-default"></i>
                            <i class="fas fa-lock icon-lock"></i>
                            <span>Módulo 7</span>
                        </a>
                    </li>
                    <li class="nav-item nav-disabled">
                        <a href="">
                            <i class="fas fa-motorcycle icon-default"></i>
                            <i class="fas fa-lock icon-lock"></i>
                            <span>Módulo 8</span>
                        </a>
                    </li>
                    <li class="nav-subitem nav-disabled">
                        <a href="">
                            <i class="fas fa-traffic-cone icon-default"></i>
                            <i class="fas fa-lock icon-lock"></i>
                            <span>Revisão final</span>
                        </a>
                    </li>
                    <li class="nav-item nav-disabled">
                        <a href="">
                            <i class="fas fa-trophy icon-default"></i>
                            <i class="fas fa-lock icon-lock"></i>
                            <span>Ranking</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="content d-flex justify-content-center align-items-center">
            <div class="quizCard quizCard-light">
                <div class="title-card">
                    <h1>Título do Quiz</h1>
                    <div class="logo-card">
                        <img src="images/Logo-mobil-card.svg" alt="Mobil">
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="div-ranking">
                            <span class="num-ranking">1</span>
                            <img class="img-ranking" src="images/ouro.png">
                            <button type="button" class="participantes">Ver participantes (15)</button>
                            <p class="pontos-ranking">88888 Km</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="div-ranking">
                            <span class="num-ranking">2</span>
                            <img class="img-ranking prata" src="images/prata.png">
                            <button type="button" class="participantes">Ver participantes (132)</button>
                            <p class="pontos-ranking">4233 Km</p>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="div-ranking">
                            <span class="num-ranking">3</span>
                            <img class="img-ranking bronze" src="images/bronze.png">
                            <button type="button" class="participantes">Ver participantes (888)</button>
                            <p class="pontos-ranking">200 Km</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="div-ranking outro-ranking">
                            <span class="num-ranking">15</span>
                            <button type="button" class="participantes">Ver participantes (1973)</button>
                            <p class="pontos-ranking">30 Km<span>Sua colocação</span></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>