<ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item ">Blog</li>
        <li class="breadcrumb-item active">Category</li>
      </ol>
      <div class="row">
        <div class="col-12 pl-5 pt-4">
            <div class="card">
              <div class="card-header">
                <h4>Add Category</h4>
              </div>
              <div class="card-body">
                <form class="" action="<?php echo BASE_URL.'Admin/addCategory'; ?>" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Category name..." name="category" value="">
                  </div>
                  <input type="submit" class="btn btn-sm btn-primary" name="" value="Add Category">
                </form>
              </div>
            </div>
        </div>
        <div class="col-12 pl-5 py-5">
          <table class="table table-striped table-hover bg-light table-bordered text-center">
            <thead class="bg-dark text-light">
              <tr>
                <th>No</th>
                <th>Category Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 0;
                foreach ($cat as $key => $value) {
                  $i++;
                  ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $value['cat_name']; ?></td>
                    <td>
                      <a class="mx-3" data-toggle="modal" data-target="#editCategory<?php echo $value['cat_id'];?>" href="<?php echo BASE_URL.'Admin/catEdit/'.$value['cat_id'];; ?>"><i class="fa fa-pencil-square-o "></i></a>
                      <a class="mx-3" href="<?php echo BASE_URL.'Admin/catDelete/'.$value['cat_id'];; ?>"><i class="fa fa-trash-o  text-danger"></i></a>
                    </td>
                  </tr>

                  <div class="modal" id="editCategory<?php echo $value['cat_id'];?>">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4>Edit Category</h4>
                          <button type="button" class="close" data-dismiss="modal" name="button">&times;</button>
                        </div>
                        <form class="" action="<?php echo BASE_URL.'Admin/updateCat/'.$value['cat_id'];?>"  method="post">
                        <div class="modal-body">
                            <div class="form-group">
                              <input type="text" class="form-control" name="category" value="<?php echo $value['cat_name'];?>">
                              <input type="hidden" name="catId" value="<?php echo $value['cat_id'];?>">
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary btn-sm" name="button">Edit</button>
                          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"  name="button">close</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>





                  <?php
                }
               ?>

            </tbody>
          </table>
        </div>
      </div>

<!-- Modal Box -->
