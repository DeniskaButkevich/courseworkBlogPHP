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

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5 pt-5">
        <div class="container">

            <hr class="my-5">

            <!-- Section: Contact v.3 -->
<section class="contact-section my-5">

        <!-- Form with header -->
        <div class="card">
      
          <!-- Grid row -->
          <div class="row">
      
            <!-- Grid column -->
            <div class="col-lg-8">
      
              <div class="card-body form">
      
                <!-- Header -->
                <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Write to us:</h3>
      
                <!-- Grid row -->
                <div class="row">
      
                  <!-- Grid column -->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="form-contact-name" class="form-control">
                      <label for="form-contact-name" class="">Your name</label>
                    </div>
                  </div>
                  <!-- Grid column -->
      
                  <!-- Grid column -->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="form-contact-email" class="form-control">
                      <label for="form-contact-email" class="">Your email</label>
                    </div>
                  </div>
                  <!-- Grid column -->
      
                </div>
                <!-- Grid row -->
      
                <!-- Grid row -->
                <div class="row">
      
                  <!-- Grid column -->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="form-contact-phone" class="form-control">
                      <label for="form-contact-phone" class="">Your phone</label>
                    </div>
                  </div>
                  <!-- Grid column -->
      
                  <!-- Grid column -->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="form-contact-company" class="form-control">
                      <label for="form-contact-company" class="">Your company</label>
                    </div>
                  </div>
                  <!-- Grid column -->
      
                </div>
                <!-- Grid row -->
      
                <!-- Grid row -->
                <div class="row">
      
                  <!-- Grid column -->
                  <div class="col-md-12">
                    <div class="md-form mb-0">
                      <textarea id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                      <label for="form-contact-message">Your message</label>
                      <a class="btn-floating btn-lg mdb-color darken-2">
                        <i class="far fa-paper-plane"></i>
                      </a>
                    </div>
                  </div>
                  <!-- Grid column -->
      
                </div>
                <!-- Grid row -->
      
              </div>
      
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-lg-4">
      
              <div class="card-body contact text-center h-100 white-text">
      
                <h3 class="my-4 pb-2">Contact information</h3>
                <ul class="text-lg-left list-unstyled ml-4">
                  <li>
                    <p><i class="fas fa-map-marker-alt pr-2"></i>New York, 94126, USA</p>
                  </li>
                  <li>
                    <p><i class="fas fa-phone pr-2"></i>+ 01 234 567 89</p>
                  </li>
                  <li>
                    <p><i class="fas fa-envelope pr-2"></i>contact@example.com</p>
                  </li>
                </ul>
                <hr class="hr-light my-4">
                <ul class="list-inline text-center list-unstyled">
                  <li class="list-inline-item">
                    <a class="p-2 fa-lg tw-ic">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="p-2 fa-lg li-ic">
                      <i class="fab fa-linkedin-in"> </i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="p-2 fa-lg ins-ic">
                      <i class="fab fa-instagram"> </i>
                    </a>
                  </li>
                </ul>
      
              </div>
      
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row -->
      
        </div>
        <!-- Form with header -->
      
      </section>
      <!-- Section: Contact v.3 -->
            <hr class="my-5">
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