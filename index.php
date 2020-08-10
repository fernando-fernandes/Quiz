<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#114FA8">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/css/all.min.css">
    <link rel="stylesheet" href="css/styles.min.css">
    <!-- <link rel="stylesheet" href="assets/css/index.css"> -->
    <title>Quiz</title>

</head>

<?php
/*include_once 'open_db.php';  
        $id = 1;  
        $sql = "select * from tracking where id_usuario = ".$id;
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {    
            while($row = mysqli_fetch_assoc($result)) {
                $e1_id_questao_quizz = $row["e1_id_questao_quizz"];
                include("monta_menu.php");
            }
        } else {
            $sql = "insert into tracking (id_usuario, m0_status, m1_status, e1_status, e1_id_questao_quizz, m3_status) values ".
            "(".$id.", 'A','A','F',0,'F')";
            $result = mysqli_query($conn, $sql);
        }*/
?>

<body>
    <div class="container-fluid">
        <!-- <div class="row">
            <div class="col-12 col-md-3 logo">
                <img src="images/Logo-mobile.svg" alt="">
            </div>
        </div> -->

        <div class="row">
            <div class="col-12 col-md-3 sidebar">
                <!-- <div class="logo d-flex justify-content-center">
                    <img src="assets/img/logo_mobil.png" width="50%" alt="" srcset="">
                </div> -->
                <a href="" class="logo">
                    <img src="images/Logo-mobile.svg" alt="Logo Mobil">
                </a>

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

            <div class="col-12 col-md-9 d-flex justify-content-center align-items-center">
                <div class="quizCard">
                    <?php
                    // $par = $_GET["p"];
                    // switch ($par) {
                    //     case "m0":
                    //         include_once("home.html");
                    //         break;
                    //     case "m1":
                    //         include_once("mod1.php");
                    //         break;
                    //     case "m1a":
                    //         include_once("mod1a.php");
                    //         break;                                
                    //     case "m2":
                    //         include_once("mod2.php");
                    //         break;
                    //     case "m2a":
                    //         include_once("mod2a.php");
                    //         break;                                
                    //     case "e1":
                    //         include_once("extra1.php");
                    //         break;
                    //     case "e1a":
                    //         include_once("quizz.php");
                    //         break;
                    //     case "e1f":
                    //         include_once("quizz-feedback.php");
                    //         break;
                    //     case "e1q":
                    //         include_once("quizz-quadro.php");
                    //         break;
                    //     case "m3":
                    //         include_once("mod3.html");
                    //         break;
                    //     default:
                    //         include_once("home.html");
                    //         break;
                    // }
                    ?>
                </div>
            </div>
        </div>
    </div>




    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>