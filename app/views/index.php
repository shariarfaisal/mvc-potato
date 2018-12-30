
<!--  Slider Section ...  -->
<section id="content-home">
  <section id="about" class="text-center text-light">
    <div class="dark-overlay">
      <div class="container">
        <h1 class="display-4">Potato Squad</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis tempora porro delectus eum quos, doloremque ad cupiditate veniam odit, possimus sequi. Tenetur omnis nostrum mollitia vero, quisquam fugit iste. Nam!</p>
      </div>
    </div>
  </section>
  <section class=" py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h4 class="my-3">What we do?</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium similique culpa odit beatae expedita voluptas! Quaerat dolore adipisci natus saepe autem temporibus dicta in eum optio? Labore consectetur, quisquam facere!</p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h4 class="my-3">What shall we do?</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium similique culpa odit beatae expedita voluptas! Quaerat dolore adipisci natus saepe autem temporibus dicta in eum optio? Labore consectetur, quisquam facere!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="services" class="py-3">
    <div class="container">
      <h2 class="text-center mb-5">Our Services</h2>
      <div class="row text-center">

    <?php
      foreach ($service as $key => $value) {
        ?>

        <div class="col-4">
          <div class="card">
            <div class="card-body">
              <h4><?php echo $value['serv_name']; ?></h4>
              <p><?php echo $value['serv_desc']; ?></p>
            </div>
          </div>
        </div>

        <?php
      }
     ?>
      </div>
    </div>
  </section>
  <section id="member" class="mb-5">
    <div class="container">
      <h3 class=" text-center">Meet The Members</h3>
      <div class="row">

<?php

  foreach ($member as $key => $value) {
    ?>

    <div class="col-3 mb-4">
      <div class="card text-center">
        <div class="card-body">
          <img src="img/afofo.jpg" class="img-fluid rounded-circle card-img-top" alt="">
          <h5><?php echo $value['member_name']; ?></h5>
          <p><?php echo $value['member_work']; ?></p>
          <div class="row justify-content-center" >
            <div class="col-6 d-flex flex-row justify-content-between">
              <div class="">
                <a href="<?php echo $value['member_facebook']; ?>"><i class="fa fa-facebook"></i></a>
              </div>
              <div class="">
                <a href="<?php echo $value['member_twitter']; ?>"><i class="fa fa-twitter"></i></a>
              </div><div class="">
                <a href="<?php echo $value['member_linkedin']; ?>"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <?php
  }
 ?>
      </div>
    </div>
  </section>




</section>
