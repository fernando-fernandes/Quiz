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
        <div class="row">
            <div class="col-3 header">
                <div class="logo d-flex justify-content-center">
                    <img src="assets/img/logo_mobil.png" width="50%" alt="" srcset="">
                </div>
                <div class="structures d-flex justify-content-center">
                    <ul>
                        <li><?= $m0_icone ?><a href="index.php?p=m0"> Home</a></li>
                        <li><?= $m1_icone ?><a href="index.php?p=m1"> Módulo 1</a></li>
                        <li><?= $m2_icone ?><a href="index.php?p=m2"> Módulo 2</a></li>
                        <li><?= $e1_icone ?><a href="index.php?p=e1"> Atividade Extra</a></li>
                        <li><?= $m3_icone ?><a href="index.php?p=m3"> Módulo 3</a></li>
                        <li><i class="fas fa-lock ml-3"></i><a href=""> 1a Revisao</a></li>
                        <li><i class="fas fa-lock ml-3"></i><a href=""> Módulo 4</a></li>
                        <li><i class="fas fa-lock ml-3"></i><a href=""> Atividade Extra</a></li>
                        <li><i class="fas fa-lock ml-3"></i><a href=""> Módulo 5</a></li>
                        <li><i class="fas fa-lock ml-3"></i><a href=""> Módulo 6</a></li>
                        <li><i class="fas fa-lock ml-3"></i><a href=""> 2a Revisão</a></li>
                        <li><i class="fas fa-lock ml-3"></i><a href=""> Módulo 7</a></li>
                        <li><i class="fas fa-lock ml-3"></i><a href=""> Módulo 8</a></li>
                        <li><i class="fas fa-lock ml-3"></i><a href=""> Revisão final</a></li>
                        <li><a href="">Ranking</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-9 quizSection d-flex justify-content-center">
                <div class="quizCard shadow ">
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


        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>