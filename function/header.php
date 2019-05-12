
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <a class="navbar-brand waves-effect my-class" href="index.php">
        <strong style="color: #2e3951!important;">Неотология</strong>
    </a>
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul id="ul-header" class="navbar-nav mr-auto" style="text-align: center; position: absolute; left: 44%;">
                <li class="nav-item <?php if($title == "Неотология") echo "active" ?>">
                    <a class="nav-link waves-effect" href="index.php">Новости</a>
                </li>
                <li class="nav-item <?php if($title == "Связаться с нами") echo "active" ?>">
                    <a class="nav-link waves-effect" href="contact-us.php">Связаться</a>
                </li>
                <li class="nav-item <?php if($title == "О нас") echo "active" ?>">
                    <a class="nav-link waves-effect" href="about-us.php">О нас</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
