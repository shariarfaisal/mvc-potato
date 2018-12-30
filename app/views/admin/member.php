<ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item ">Home</li>
        <li class="breadcrumb-item active">Member</li>
</ol>
<div class="row">
      <div class="col-12 pl-5 pt-4">
          <div class="card">
            <div class="card-header">
              <h4>Add Member</h4>
            </div>
            <div class="card-body">
              <form class="" action="<?php echo BASE_URL."Admin/addMember"; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Member name..." name="member_name" value="">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Member work..." name="member_work" value="">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Facebook profile link..." name="member_facebook" value="">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Twitter profile link..." name="member_twitter" value="">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Linkedin profile link..." name="member_linkedin" value="">
                </div>
                <div class="form-group">
                  <input type="file" class="form-control-file" placeholder="Linkedin profile link..." name="" value="">
                </div>
                <input type="submit" class="btn btn-sm btn-primary" name="" value="Add Member">
              </form>
            </div>
          </div>
      </div>
      <div class="col-12 pl-5 py-5">
        <div class="row">


          <?php foreach ($member as $key => $value) {
          ?>
              <div class="col-6 mb-2">
                <div class="card bg-light">
                  <div class="card-body">
                    <img src="../img/img-1.jpg" class="img-fluid card-img-top" alt="">
                    <h5 class="my-3"><?php echo $value['member_name']; ?></h5>
                    <p><?php echo $value['member_work']; ?></p>
                    <p><i class="fa fa-facebook"></i><small class="ml-3"><?php echo $value['member_facebook']; ?></small></p>
                    <p><i class="fa fa-twitter"></i><small class="ml-3"><?php echo $value['member_twitter']; ?></small></p>
                    <p><i class="fa fa-linkedin"></i><small class="ml-3"><?php echo $value['member_linkedin']; ?></small></p>
                    <button type="submit" data-toggle="modal" data-target="#member<?php echo $value['member_id']; ?>" class="btn btn-primary btn-sm " name="button"><i class="fa fa-pencil-square-o"></i> edit</button>

                    <a class="mx-3 btn btn-sm btn-danger"  onclick="window.confirm('Are you sure you sure you want to deltee this category?')" href="<?php echo BASE_URL.'Admin/memberDelete/'.$value['member_id'];; ?>"><i class="fa fa-trash-o"> delete</i></a>
                  </div>
                </div>
              </div>


              <div class="modal" id="member<?php echo $value['member_id']; ?>">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3>Update Member Address</h3>
                      <button type="button" class="close" data-dismiss="modal" name="button">&times;</button>
                    </div>
                    <form class="" action="<?php echo BASE_URL.'Admin/updateMember/'.$value['member_id']; ?>" method="post">
                      <div class="modal-body">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Member name..." name="member_name" value="<?php echo $value['member_name']; ?>">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Member work..." name="member_work" value="<?php echo $value['member_work']; ?>">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Facebook profile link..." name="member_facebook" value="<?php echo $value['member_facebook']; ?>">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Twitter profile link..." name="member_twitter" value="<?php echo $value['member_twitter']; ?>">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Linkedin profile link..." name="member_linkedin" value="<?php echo $value['member_linkedin']; ?>">
                        </div>
                        <div class="form-group">
                          <input type="file" class="form-control-file" placeholder="Linkedin profile link..." name="" value="">
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-sm btn-primary" name="button">update</button>
                        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" name="button">close</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>




          <?php
          } ?>


        </div>
      </div>
    </div>
