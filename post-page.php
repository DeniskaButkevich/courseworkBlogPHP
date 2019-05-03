<?php 
    require_once "functions.php";
    $new_on_page = getNew($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $new_on_page{"title"}?></title>
  <?php require_once "head.php"; ?>
</head>

<body class="grey lighten-3">

  <header>
  <?php require('header.php') ?>
  </header>

  <main class="mt-5 pt-5">
    <div class="container">
      <section class="mt-4">
        <div class="row">
          <div class="col-md-8 mb-4">
            <div class="card mb-4 wow fadeIn">
              <img src="img/slider/<?php echo $new_on_page{"id"}?>.jpg" class="img-fluid" alt="">
            </div>
            <!--Card-->

            <div class="card mb-4 wow fadeIn">
              <div class="card-body text-center">
                <p class="h5 my-4"><?php echo $new_on_page{"title"}?></p>
                <p><?php echo $new_on_page{"intro_text"}?></p>
              </div>
            </div>
            <!--/.Card-->

            <div class="card mb-4 wow fadeIn">
              <div class="card-body">
                <p><?php echo $new_on_page{"full_text"}?></p>
              </div>
            </div>
            

            <div class="card mb-4 wow fadeIn">
              <div class="card-header font-weight-bold">
                <span>About author</span>
                <span class="pull-right">
                  <a href=""><i class="fab fa-facebook-f mr-2"></i></a>
                  <a href=""><i class="fab fa-twitter mr-2"></i></a>
                  <a href=""> <i class="fab fa-instagram mr-2"></i></a>
                  <a href=""><i class="fab fa-linkedin-in mr-2"></i></a>
                </span>
              </div>

              <div class="card-body">
                <div class="media d-block d-md-flex mt-3">
                  <img class="d-flex mb-3 mx-auto z-depth-1" src="img/photo_author/<?php echo $new_on_page{"id"}?>.jpg"
                    alt="Generic placeholder image" style="width: 100px;">
                  <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0 font-weight-bold"><?php echo $new_on_page{"name_author"}?></h5>
                    <?php echo $new_on_page{"about_author"}?>
                  </div>
                </div>
              </div>
            </div>

            <div class="card card-comments mb-3 wow fadeIn">
              <div class="card-header font-weight-bold">3 comments</div>
              <div class="card-body">

                <div class="media d-block d-md-flex mt-4">
                  <img class="d-flex mb-3 mx-auto " src="https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg" alt="Generic placeholder image">
                  <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0 font-weight-bold">Miley Steward
                      <a href="" class="pull-right"><i class="fas fa-reply"></i> </a>
                    </h5>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <div class="media d-block d-md-flex mt-3">
                      <img class="d-flex mb-3 mx-auto " src="https://mdbootstrap.com/img/Photos/Avatars/img (27).jpg"
                        alt="Generic placeholder image">
                      <div class="media-body text-center text-md-left ml-md-3 ml-0">
                        <h5 class="mt-0 font-weight-bold">Tommy Smith
                          <a href="" class="pull-right">
                            <i class="fas fa-reply"></i>
                          </a>
                        </h5>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque
                        ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                        sunt explicabo.
                      </div>
                    </div>

                    <!-- Quick Reply -->
                    <div class="form-group mt-4">
                      <label for="quickReplyFormComment">Your comment</label>
                      <textarea class="form-control" id="quickReplyFormComment" rows="5"></textarea>

                      <div class="text-center">
                        <button class="btn btn-info btn-sm btn-light" type="submit">Post</button>
                      </div>
                    </div>

                    <div class="media d-block d-md-flex mt-3">
                      <img class="d-flex mb-3 mx-auto " src="https://mdbootstrap.com/img/Photos/Avatars/img (21).jpg"
                        alt="Generic placeholder image">
                      <div class="media-body text-center text-md-left ml-md-3 ml-0">
                        <h5 class="mt-0 font-weight-bold">Sylvester the Cat
                          <a href="" class="pull-right"><i class="fas fa-reply"></i></a>
                        </h5>
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                        sed quia non numquam eius modi
                        tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media d-block d-md-flex mt-3">
                  <img class="d-flex mb-3 mx-auto " src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg" alt="Generic placeholder image">
                  <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0 font-weight-bold">Caroline Horwitz
                      <a href="" class="pull-right"> <i class="fas fa-reply"></i> </a>
                    </h5>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti atque corrupti
                    quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                    similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                    fuga.
                  </div>
                </div>
              </div>
            </div>

            <div class="card mb-3 wow fadeIn">
              <div class="card-header font-weight-bold">Leave a reply</div>
              <div class="card-body">
                <form>

                  <div class="form-group">
                    <label for="replyFormComment">Your comment</label>
                    <textarea class="form-control" id="replyFormComment" rows="5"></textarea>
                  </div>

                  <label for="replyFormName">Your name</label>
                  <input type="email" id="replyFormName" class="form-control">
                  <br>
                  <label for="replyFormEmail">Your e-mail</label>
                  <input type="email" id="replyFormEmail" class="form-control">

                  <div class="text-center mt-4">
                    <button class="btn btn-info btn-md" type="submit">Post</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card mb-4 text-center wow fadeIn">
              <div class="card-header">Do you want to get informed about new articles?</div>

              <div class="card-body">
                <form>
                  <label for="defaultFormEmailEx" class="grey-text">Your email</label>
                  <input type="email" id="defaultFormLoginEmailEx" class="form-control">
                  <br>
                  <label for="defaultFormNameEx" class="grey-text">Your name</label>
                  <input type="text" id="defaultFormNameEx" class="form-control">
                  <div class="text-center mt-4">
                    <button class="btn btn-info btn-md" type="submit">Sign up</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="card mb-4 wow fadeIn">
              <div class="card-header">Related articles</div>
              <div class="card-body">
                <ul class="list-unstyled">
                  <li class="media">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <a href=""><h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5></a>
                      Cras sit amet nibh libero, in gravida nulla (...)
                    </div>
                  </li>
                  <li class="media my-4">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="An image">
                    <div class="media-body">
                      <a href=""><h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5></a>
                      Cras sit amet nibh libero, in gravida nulla (...)
                    </div>
                  </li>
                  <li class="media">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <a href=""><h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5></a>
                      Cras sit amet nibh libero, in gravida nulla (...)
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <!--Footer-->
  <?php require('footer.php')  ?>
</body>

</html>
