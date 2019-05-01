<?php require_once "functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</head>

<body>
    <header>
        <?php require('header.php') ?>

        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php
               for($i = 0; $i < 3; $i++){
                  if($i==0)
                     echo '<div class="carousel-item active">';
                  else
                     echo '<div class="carousel-item">';
                  echo '<div class="view">
                     <img class="d-block w-100" src="img/slider/'. ($i+1) .'.jpg"
                        alt="First slide">
                     <div class="mask rgba-black-light"></div>
                  </div>
                  <div class="carousel-caption">
                     <h1 class="carousel-h1">Почему Ruby — идеальный язык для начинающего разработчика</h1>
                     <h2 class="carousel-h2">Руководитель и стратег в студии веб-дизайна и контент-маркетинга Svoemedia Александра Иващенко рассказала блогу Нетологии, как её команда использует Tilda в работе.</h2>
                     <h3 class="carousel-h3"></h3>
                     <div></div>
                     <a class="carousel-a" href="post-page.php"><p>Читать</p></a>
                  </div>
               </div>';
               }   
            ?>
            </div>
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <main class="mt-5">
        <div class="container">
            <div class="my-5">
                <section class="text-center">
                    <div class="row mb-4 wow fadeIn">
                        <?php
                     
                           $p = isset($_GET["p"]) ? (int) $_GET["p"] : 0;

                           $news = getNews($p);

                           for($i = 0; $i < count($news); $i++) {
                              if($i%3 == 0)
                                 echo '</div><div class="row mb-4 wow fadeIn">';

                              echo '
                              <div class="col-lg-4 col-md-12 mb-4">
                                 <div class="card">
                                    <div class="view overlay">
                                       <img class="card-img-top" src="img/items/'.$news[$i]{"id"}.'.jpg"
                                          alt="Card image cap">
                                       <a href="post-page.php">
                                          <div class="mask rgba-white-slight"></div>
                                       </a>
                                    </div>
                                    <a href="post-page.php" class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                                          class="fas fa-chevron-right pl-1"></i></a>
                                    <div class="card-body">
                                       <h4 class="card-title">'.$news[$i]{"title"}.'</h4>
                                       <hr>
                                       <p class="card-text">'.$news[$i]{"intro_text"}.'</p>
                                    </div>
                                    <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                                       <ul class="list-unstyled list-inline font-small">
                                          <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
                                          <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                   class="far fa-comments pr-1"></i>12</a></li>
                                          <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                   class="fab fa-facebook-f pr-1">
                                                </i>21</a></li>
                                          <li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1">
                                                </i>5</a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>';
                           }
                     ?>

                </section>
                <nav class="d-flex justify-content-center wow fadeIn"
                    style="visibility: visible; animation-name: fadeIn;">
                    <ul class="pagination pg-blue">
                        <li class="page-item <?php if($p == 1) echo " disabled"?>">
                            <a class="page-link waves-effect waves-effect" href="?p=<?= $p-1?>" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <?php for($i = 0; $i < $last_page; $i++){ ?>
                        <li class="page-item <?php if($i+1 == $p) echo " active"?>">
                            <a class="page-link waves-effect waves-effect" href="?p=<?= $i+1?>"><?= $i+1?></a>
                        </li>
                        <?php } ?>
                        <li class="page-item">
                            <a class="page-link <?php if($p == $last_page) echo " disabled"?> waves-effect waves-effect"
                                href="?p=<?= $p+1?>" aria-label="Next">
                                <span aria-hidden="true">»</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>
    <?php require('footer.php')  ?>
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
    // Animations initialization
    new WOW().init();
    </script>
</body>

</html>
