<ol class="breadcrumb">
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item ">Blog</li>
      <li class="breadcrumb-item active">Add Post</li>
    </ol>

  <div class="row ml-5">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3>Add new post</h3>
        </div>
        <div class="card-body">
          <form class="" action="<?php echo BASE_URL.'Admin/insertPost'; ?>" method="post">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Post title..." name="title" value="">
            </div>
            <div class="form-group">
              <textarea name="content" class="form-control" placeholder="Post content..." rows="5" cols="80"></textarea>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Author name..." name="author" value="">
            </div>
            <div class="form-group">
              <select class="form-control" name="category">
                <option>Select One</option>
                <?php
                  foreach ($category as $key => $value) {
                    ?>
                    <option value="<?php echo $value['cat_id']; ?>"><?php echo $value['cat_name']; ?></option>
                    <?php
                  }
                 ?>
              </select>
            </div>
            <input type="submit" class="btn btn-sm btn-primary" name="addpost" value="post">
          </form>
        </div>
      </div>
    </div>
  </div>
