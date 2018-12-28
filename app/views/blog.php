<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="inc/css/bootstrap.css">
  <link rel="stylesheet" href="inc/css/font-awesome.min.css">
  <link rel="stylesheet" href="inc/css/style.css">
  <title>Potato Squad</title>
</head>
<body>
<!-- Navigation Var -->
<nav id="navigation" class="navbar navbar-dark navbar-expand-md fixed-top">
  <div class="container">
    <a href="#" class="navbar-brand">Potato Squad</a>
    <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav" name="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <form class="">
          <div class="input-group input-group-sm">
            <input type="email" class="form-control" placeholder="Email" name="" value="">
            <div class="input-group-append">
              <span class="input-group-text"><button><i class="fa fa-search"></i></button></span>
            </div>
          </div>
      </form>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Works</a></li>
        <li class="nav-item"><a class="nav-link navActive" href="<?php echo BASE_URL.'Blog'; ?>">Blogs</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
      </ul>

    </div>
  </div>
</nav>
<!-- Content Section  -->
<section id="content-blog">
  <div class="container">
    <div class="row" >
      <div id="left-section" class="col-md-3 clearfix">
          <h5>Learn Latest Technologies</h5>
          <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="">HTML 5</a></li>
            <li class="nav-item"><a class="nav-link" href="">CSS 3</a></li>
            <li class="nav-item"><a class="nav-link" href="">JavaScript</a></li>
            <li class="nav-item"><a class="nav-link" href="">PHP</a></li>
            <li class="nav-item"><a class="nav-link" href="">Python</a></li>
            <li class="nav-item"><a class="nav-link" href="">SQL</a></li>
          </ul>
      </div>
      <div id="middle-section" class="col-12 col-md-6 clearfix">

        <?php
          foreach($blogPost as $key => $value){
?>
              <div class="card mb-2">
                <div class="card-body">
                  <h5><?php echo $value['post_title']; ?></h5>
                  <small class="text-muted"><strong>Author :</strong> <a href="" class="text-muted"><?php echo $value['post_author']; ?></a></small>
                  <hr>
                  <p><?php echo $value['post_content']; ?></p>
                </div>
              </div>
<?php
          }
         ?>

      </div>
      <div id="right-section" class="col-md-3 clearfix">
          <div id="category" class="row">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5>Categories</h5>
                  <ul class="list-group">

                    <?php
                        foreach ($blogCat as $key => $value) {
                          ?>
                            <li class="list-group-item list-group-item-action">
                              <a href="#"><?php echo $value['cat_name']; ?></a>
                            </li>

                          <?php
                        }

                     ?>

                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div id='latest-post' class="row mt-2">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5>Latest Post</h5>
                  <ul class="list-group">
                    <li class="list-group-item list-group-item-action"><a href="#">What is SEO?</a></li>
                    <li class="list-group-item list-group-item-action"><a href="#">What is Programming?</a></li>
                    <li class="list-group-item list-group-item-action"><a href="#">What is SASS?</a></li>
                    <li class="list-group-item list-group-item-action"><a href="#">What is Node js?</a></li>
                    <li class="list-group-item list-group-item-action"><a href="#">What is npm?</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
<footer id='footer'class="">
  <p class="text-center text-muted">Potato Squad &copy; 2018</p>
</footer>
<script src="inc/js/jquery.min.js"></script>
<script src="inc/js/popper.min.js"></script>
<script src="inc/js/bootstrap.min.js"></script>
</body>
</html>
