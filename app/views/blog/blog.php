
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
                  <h5><a href="<?php echo BASE_URL.'Blog/singlePost/'.$value['post_id']; ?>"><?php echo $value['post_title']; ?></a></h5>
                  <small class="float-right text-muted"><?php echo $value['post_time']; ?></small>
                  <small class="text-muted"><strong>Author :</strong> <a href="" class="text-muted"><?php echo $value['post_author']; ?></a></small>

                  <hr>
                  <p><?php echo Helper::cutPost($value['post_content']); ?></p>
                  <a href="<?php echo BASE_URL.'Blog/fullSinglePost/'.$value['post_id']; ?>" class="btn btn-sm text-primary">more</a>
                </div>
              </div>

<?php
          }
         ?>
<button  type="button" class="btn btn-sm btn-secondary btn-block" name="button">See More Post</button>

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
                              <a href="<?php echo BASE_URL.'Blog/postByCategory/'.$value['cat_id']; ?>"><?php echo $value['cat_name']; ?></a>
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

                      <?php
                        foreach ($latestPost as $key => $value) {
                          ?>
                          <li class="list-group-item list-group-item-action"><a href="<?php echo BASE_URL.'Blog/fullSinglePost/'.$value['post_id']; ?>"><?php echo $value['post_title']; ?></a></li>
                          <?php
                        }

                       ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
