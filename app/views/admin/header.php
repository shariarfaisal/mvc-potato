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
<div id="main" class="container">
  <div class="row">
    <div class="col-3" style="height: 500px;">
      <h4 class="text-dark"><a href="<?php echo BASE_URL.'Admin/home'; ?>" class="ml-5">Dashboard</a></h4>
      <hr class="mb-0">
      <ul class="nav flex-column">
          <li class="nav-item"><a href="" data-toggle="collapse" data-target="#list1" class="nav-link">Home</a></li>
            <div class="collapse" id="list1">
              <ul class="nav flex-column">
                <li class="nav-item pl-3"><a href="<?php echo BASE_URL.'Admin/service'; ?>" class="nav-link">Services</a></li>
                <li class="nav-item pl-3"><a href="<?php echo BASE_URL.'Admin/member'; ?>" class="nav-link">Members</a></li>
              </ul>
            </div>
          <li class="nav-item"><a href="" data-toggle="collapse" data-target="#list2" class="nav-link">Blog</a></li>
            <div class="collapse" id="list2">
              <ul class="nav flex-column">
                <li class="nav-item pl-3"><a href="<?php echo BASE_URL.'Admin/category'; ?>" class="nav-link">Category</a></li>
                <li class="nav-item pl-3"><a href="<?php echo BASE_URL.'Admin/home'; ?>" class="nav-link">Post</a></li>
              </ul>
            </div>
          <li class="nav-item"><a href="" data-toggle="collapse" data-target="#list3" class="nav-link">Services</a></li>
                <div class="collapse" id="list3">
                  <ul class="nav flex-column">
                    <li class="nav-item pl-3"><a href="" class="nav-link">Services</a></li>
                    <li class="nav-item pl-3"><a href="" class="nav-link">Members</a></li>
                  </ul>
                </div>

      </ul>
    </div>
    <div class="col-8">
