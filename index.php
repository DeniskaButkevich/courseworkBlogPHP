<!DOCTYPE html>
<html lang="en">

<?php
   require_once "functions.php";

   $total_rows = NumNews();

   $rpp = 6;
   // This tells us the page number of our last page
   $last = ceil($total_rows/$rpp);
   // This makes sure $last cannot be less than 1
   if($last < 1){
      $last = 1;
   }
?>
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
   <script>
      var rpp = <?php echo $rpp; ?>; // results per page
      var last = <?php echo $last; ?>; // last page number
      function request_page(pn){
         var results_box = document.getElementById("results_box");
         var pagination_controls = document.getElementById("pagination_controls");
         results_box.innerHTML = "loading results ...";
         var hr = new XMLHttpRequest();
         hr.open("POST", "pagination_parser.php", true);
         hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         hr.onreadystatechange = function() {
            if(hr.readyState == 4 && hr.status == 200) {
               var dataArray = hr.responseText.split("||");
               var html_output = "";
               for(i = 0; i < dataArray.length - 1; i++){
                  var itemArray = dataArray[i].split("|");
                  html_output += "ID: "+itemArray[0]+" "+itemArray[1]+" "+itemArray[2]+"</b><hr>";
               }
               results_box.innerHTML = html_output;
            }
         }
         hr.send("rpp="+rpp+"&last="+last+"&pn="+pn);
         // Change the pagination controls
         var paginationCtrls = "";
         // Only if there is more than 1 page worth of results give the user pagination controls
         if(last != 1){
            if (pn > 1) {
               paginationCtrls += '<button onclick="request_page('+(pn-1)+')">&lt;</button>';
            }
            paginationCtrls += ' &nbsp; &nbsp; <b>Page '+pn+' of '+last+'</b> &nbsp; &nbsp; ';
            if (pn != last) {
               paginationCtrls += '<button onclick="request_page('+(pn+1)+')">&gt;</button>';
            }
         }
         pagination_controls.innerHTML = paginationCtrls;
      }
   </script> 
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
  
               <?php
                  for($i = 0; $i < count($news); $i++) {
                     if($i%3==0)
                        echo '<div class="row mb-4 wow fadeIn">';
                     echo '<!--Grid row-->
                          <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4">
         
                           <!-- Card -->
                           <div class="card">
         
                              <!-- Card image -->
                              <div class="view overlay">
                                 <img class="card-img-top" src="img/items/'.$news[$i]{"id"}.'.jpg"
                                    alt="Card image cap">
                                 <a href="post-page.php">
                                    <div class="mask rgba-white-slight"></div>
                                 </a>
                              </div>
         
                              <!-- Button -->
                              <a href="post-page.php" class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                                    class="fas fa-chevron-right pl-1"></i></a>
         
                              <!-- Card content -->
                              <div class="card-body">
         
                                 <!-- Title -->
                                 <h4 class="card-title">'.$news[$i]{"title"}.'</h4>
                                 <hr>
                                 <!-- Text -->
                                 <p class="card-text">'.$news[$i]{"intro_text"}.'</p>
         
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
                        
                     
                     <!--Grid row-->';
                  }
               ?>          
         </section>
         <!--Section: Cards-->
            <!--Pagination-->
            <div class="row" style="text-align: center;"><div class="col-12" id="pagination_controls"></div></div>
                        
                        <div id="results_box"></div>
                        <script> request_page(1); </script>
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