<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php $title = "О нас"; echo $title; ?></title>
    <?php require_once "function/head.php"; ?>
<body>
    <header> 
    <?php require('function/header.php') ?>
    </header>
    <hr>
    <hr>
    <hr>
    <hr>    
    <section id="about">
    <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
      <div class="row">
        <div class="col-md-12 about_text">
          <h3 class="section-title">О нас</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
      <div class="row">

        <div class="col-lg-6 about-img">
          <img height="360px" src="img/about-img.jpg" alt="">
        </div>

        <div class="col-md-6 about-content">
          <h2 class="about-title">We provide great services and ideass</h2>
          <p class="about-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate
          </p>
          <p class="about-text">
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
            id est laborum
          </p>
          <p class="about-text">
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt molli.
          </p>
        </div>
      </div>
    </div>
  </section>
    
    <?php require('function/footer.php')  ?>
</body>
</html>
