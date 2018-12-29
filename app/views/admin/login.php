<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="inc/css/bootstrap.css">
  <link rel="stylesheet" href="inc/css/font-awesome.min.css">
  <link rel="stylesheet" href="inc/css/admin.css">
  <title>Potato Squad</title>
</head>
<body>
<!-- Navigation bar -->
<nav id="navigation" class="navbar navbar-dark">
  <div class="container">
    <a href="#" class="navbar-brand">Potato Squad</a>
  </div>
</nav>
<!-- Main Section -->
<section id="login" class="">
  <div class="card">
    <div class="card-header">
      <h3 class="text-center">Login</h3>
    </div>
    <div class="card-body">
      <form class="" action="<?php echo BASE_URL.'Login/loginAuth'; ?>" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" placeholder="Username..." name="username" value="">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" placeholder="Password..." name="password" value="">
        </div>
        <input type="submit" class="btn btn-sm btn-primary" name="login" value="Login">
      </form>
    </div>
  </div>
</section>
<script src="inc/js/jquery.min.js"></script>
<script src="inc/js/popper.min.js"></script>
<script src="inc/js/bootstrap.min.js"></script>
</body>
</html>
