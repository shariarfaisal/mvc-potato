<ol class="breadcrumb">
  <li class="breadcrumb-item">Dashboard</li>
  <li class="breadcrumb-item ">Blog</li>
  <li class="breadcrumb-item active">Posts</li>
</ol>
<div class="row mb-5">
<div class="col-12">
  <div class="w-50 float-right">
    <form class="" action="index.html" method="post">
      <input type="text" class="form-control" placeholder="search..." name="" value="">
    </form>
  </div>
</div>
</div>
<div id="accordion"  class="row ml-5 mb-5" >
<div class="col">

<?php
$i=0;
foreach ($posts as $key => $value) {
  $i++;
  ?>

  <div class="card">
    <div class="card-header">
      <h3 class="float-left"><a style="font-size: 20px;color:black;" data-toggle="collapse" data-target="#post<?php echo $value['post_id']; ?>" href=""><?php echo $value['post_title']; ?></a></h3>
      <small class="float-right mt-2 text-muted"><?php echo $value['post_time']; ?></small>
    </div>
    <div class="collapse <?php echo ($i == 1)?'show':''; ?>" id="post<?php echo $value['post_id']; ?>" data-parent="#accordion">
      <div class="card-body">
        <small class="text-muted"><strong>Author: </strong><?php echo $value['post_author']; ?></small>
        <p class="my-3 lead" style="font-size: 18px;"><?php echo $value['post_content']; ?></p>

        <button href="#" data-toggle="modal" data-target="#post<?php echo $value['post_id']; ?>" class="btn btn-sm btn-primary" >edit</button>
        <a href="#" class="btn btn-sm btn-danger">delete</a>
      </div>
    </div>
  </div>

  <?php
}
 ?>




</div>
</div>
