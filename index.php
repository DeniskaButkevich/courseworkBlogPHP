<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
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
</head>

<body>

   <!--Main Navigation-->
   <header>

      <?php require('header.php') ?>


      <!--Carousel Wrapper-->
      <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
         <!--Indicators-->
         <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
         </ol>
         <!--/.Indicators-->
         <!--Slides-->
         <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
               <div class="view">
                  <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
                     alt="First slide">
                  <div class="mask rgba-black-light"></div>
               </div>
               <div class="carousel-caption">
                  <h1 class="carousel-h1">Почему Ruby — идеальный язык для начинающего разработчика</h1>
                  <h2 class="carousel-h2">Руководитель и стратег в студии веб-дизайна и контент-маркетинга Svoemedia Александра Иващенко рассказала блогу Нетологии, как её команда использует Tilda в работе.</h2>
                  <h3 class="carousel-h3"></h3>
                  <div></div>
                  <a class="carousel-a" href="#"><p>Читать</p></a>
               </div>
            </div>
            <div class="carousel-item">
               <!--Mask color-->
               <div class="view">
                  <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
                     alt="Second slide">
                  <div class="mask rgba-black-strong"></div>
               </div>
               <div class="carousel-caption">
                     <h1 class="carousel-h1">Почему Ruby — идеальный язык для начинающего разработчика</h1>
                     <h2 class="carousel-h2">Руководитель и стратег в студии веб-дизайна и контент-маркетинга Svoemedia Александра Иващенко рассказала блогу Нетологии, как её команда использует Tilda в работе.</h2>
                     <h3 class="carousel-h3"></h3>
                     <div></div>
                     <a class="carousel-a" href="#"><p>Читать</p></a>
                  </div>
            </div>
            <div class="carousel-item">
               <!--Mask color-->
               <div class="view">
                  <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
                     alt="Third slide">
                  <div class="mask rgba-black-slight"></div>
               </div>
               <div class="carousel-caption">
                     <h1 class="carousel-h1">Почему Ruby — идеальный язык для начинающего разработчика</h1>
                     <h2 class="carousel-h2">Руководитель и стратег в студии веб-дизайна и контент-маркетинга Svoemedia Александра Иващенко рассказала блогу Нетологии, как её команда использует Tilda в работе.</h2>
                     <h3 class="carousel-h3"></h3>
                     <div></div>
                     <a class="carousel-a" href="#"><p>Читать</p></a>
                  </div>
            </div>
         </div>
         <!--/.Slides-->
         <!--Controls-->
         <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
         </a>
         <!--/.Controls-->
      </div>
      <!--/.Carousel Wrapper-->

   </header>
   <!--Main Navigation-->

   <!--Main layout-->
   <main class="mt-5">
      <div class="container">



         <hr class="my-5">

         <!--Section: Cards-->
         <section class="text-center">

            <!--Grid row-->
            <div class="row mb-4 wow fadeIn">

               <!--Grid column-->
               <div class="col-lg-4 col-md-12 mb-4">

                  <!-- Card -->
                  <div class="card">

                     <!-- Card image -->
                     <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg"
                           alt="Card image cap">
                        <a>
                           <div class="mask rgba-white-slight"></div>
                        </a>
                     </div>

                     <!-- Button -->
                     <a href="post-page.php" class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3 "><i
                           class="fas fa-chevron-right pl-1"></i></a>

                     <!-- Card content -->
                     <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title">Card title</h4>
                        <hr>
                        <!-- Text -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                           the
                           card's content.</p>

                     </div>

                     <!-- Card footer -->
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
                  <!-- Card -->

               </div>
               <!--Grid column-->

               <!--Grid column-->
               <div class="col-lg-4 col-md-6 mb-4">

                  <!-- Card -->
                  <div class="card">

                     <!-- Card image -->
                     <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg"
                           alt="Card image cap">
                        <a>
                           <div class="mask rgba-white-slight"></div>
                        </a>
                     </div>

                     <!-- Button -->
                     <a href="contact-us.html" class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                           class="fas fa-chevron-right pl-1"></i></a>

                     <!-- Card content -->
                     <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title">Card title</h4>
                        <hr>
                        <!-- Text -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                           the
                           card's content.</p>

                     </div>

                     <!-- Card footer -->
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
                  <!-- Card -->

               </div>
               <!--Grid column-->

               <!--Grid column-->
               <div class="col-lg-4 col-md-6 mb-4">

                  <!-- Card -->
                  <div class="card">

                     <!-- Card image -->
                     <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg"
                           alt="Card image cap">
                        <a>
                           <div class="mask rgba-white-slight"></div>
                        </a>
                     </div>

                     <!-- Button -->
                     <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                           class="fas fa-chevron-right pl-1"></i></a>

                     <!-- Card content -->
                     <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title">Card title</h4>
                        <hr>
                        <!-- Text -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                           the
                           card's content.</p>

                     </div>

                     <!-- Card footer -->
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
                  <!-- Card -->

               </div>
               <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row mb-4 wow fadeIn">

               <!--Grid column-->
               <div class="col-lg-4 col-md-12 mb-4">

                  <!-- Card -->
                  <div class="card">

                     <!-- Card image -->
                     <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg"
                           alt="Card image cap">
                        <a>
                           <div class="mask rgba-white-slight"></div>
                        </a>
                     </div>

                     <!-- Button -->
                     <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                           class="fas fa-chevron-right pl-1"></i></a>

                     <!-- Card content -->
                     <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title">Card title</h4>
                        <hr>
                        <!-- Text -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                           the
                           card's content.</p>

                     </div>

                     <!-- Card footer -->
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
                  <!-- Card -->

               </div>
               <!--Grid column-->

               <!--Grid column-->
               <div class="col-lg-4 col-md-6 mb-4">

                  <!-- Card -->
                  <div class="card">

                     <!-- Card image -->
                     <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg"
                           alt="Card image cap">
                        <a>
                           <div class="mask rgba-white-slight"></div>
                        </a>
                     </div>

                     <!-- Button -->
                     <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                           class="fas fa-chevron-right pl-1"></i></a>

                     <!-- Card content -->
                     <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title">Card title</h4>
                        <hr>
                        <!-- Text -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                           the
                           card's content.</p>

                     </div>

                     <!-- Card footer -->
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
                  <!-- Card -->

               </div>
               <!--Grid column-->

               <!--Grid column-->
               <div class="col-lg-4 col-md-6 mb-4">

                  <!-- Card -->
                  <div class="card">

                     <!-- Card image -->
                     <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg"
                           alt="Card image cap">
                        <a>
                           <div class="mask rgba-white-slight"></div>
                        </a>
                     </div>

                     <!-- Button -->
                     <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                           class="fas fa-chevron-right pl-1"></i></a>

                     <!-- Card content -->
                     <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title">Card title</h4>
                        <hr>
                        <!-- Text -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                           the
                           card's content.</p>

                     </div>

                     <!-- Card footer -->
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
                  <!-- Card -->

               </div>
               <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Pagination-->
            <nav class="d-flex justify-content-center wow fadeIn">
               <ul class="pagination pg-blue">

                  <!--Arrow left-->
                  <li class="page-item disabled">
                     <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                     </a>
                  </li>

                  <li class="page-item active">
                     <a class="page-link" href="#">1
                        <span class="sr-only">(current)</span>
                     </a>
                  </li>
                  <li class="page-item">
                     <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                     <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                     <a class="page-link" href="#">4</a>
                  </li>
                  <li class="page-item">
                     <a class="page-link" href="#">5</a>
                  </li>

                  <li class="page-item">
                     <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                     </a>
                  </li>
               </ul>
            </nav>
            <!--Pagination-->

         </section>
         <!--Section: Cards-->

      </div>
   </main>
   <!--Main layout-->

   <!--Footer-->
    <?php require('footer.php')  ?>
   <!--/.Footer-->

   <!-- SCRIPTS -->
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