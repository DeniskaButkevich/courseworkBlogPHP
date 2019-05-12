<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php  $title = "Связаться с нами"; echo $title; ?></title>
    <?php require_once "function/head.php"; ?>
</head>
    
<body>
    <header> 
    <?php require('function/header.php') ?>
    </header>
    <main id="for_footer" class="mt-5 pt-5">
        <div class="container">
            <hr class="my-5">
    <section  class="contact-section my-5 wow fadeIn">
        <!-- Form with header --> 
        <div class="card">
                <div class="row">
            <div class="col-lg-8">
              <div class="card-body form">
                <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Напишите нам:</h3>
                <div class="row">
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input autocomplete="off" id="name" name="name" type="text" id="form-contact-name" class="form-control">
                      <label  for="form-contact-name" class="">Имя</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input  id="email"  type="text" id="form-contact-email" class="form-control">
                      <label for="form-contact-email" class="">Email</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input id="subject" name="subject" type="text" id="form-contact-phone" class="form-control">
                      <label for="form-contact-phone" class="">Тема сообщения</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="form-contact-company" class="form-control">
                      <label for="form-contact-company" class="">Ваша компания</label>
                    </div>
                  </div>
                </div>
                      <div class="row">
                        <div class="col-md-12">
                    <div class="md-form mb-0">
                      <textarea  id="message" name="message"  class="form-control md-textarea" rows="3"></textarea>
                      <label for="form-contact-message">Ваше сообщение</label>
                      <a id="done" value="Отправить" class="btn-floating btn-lg mdb-color darken-2">
                        <i class="far fa-paper-plane"></i>
                      </a>
                      <div id="messageShow" class="for-error"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>      
            <!-- Grid column -->
            <div class="col-lg-4">
      
              <div class="card-body contact text-center h-100 white-text">
      
                <h3 class="my-4 pb-2">Контакты  </h3>
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
          </div>
        </div>
      
      </section>
            <hr class="my-5">
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <?php require('function/footer.php')  ?>
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