<ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item ">Home</li>
        <li class="breadcrumb-item active">Service</li>
</ol>
<div class="row">
      <div class="col-12 pl-5 pt-4">
          <div class="card">
            <div class="card-header">
              <h4>Add Service</h4>
            </div>
            <div class="card-body">
              <form class="" action="<?php echo BASE_URL.'Admin/addService';?>" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Service name..." name="serv_name" value="">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Service logo name..." name="serv_logo" value="">
                </div>
                <div class="form-group">
                  <textarea name="serv_desc" class="form-control" placeholder="Service Description..." rows="5" cols="80"></textarea>
                </div>
                <input type="submit" class="btn btn-sm btn-primary" name="" value="Add Service">
              </form>
            </div>
          </div>
      </div>
      <div class="col-12 pl-5 py-5">
        <table class="table table-striped table-hover bg-light table-bordered text-center">
          <thead class="bg-dark text-light">
            <tr>
              <th>No</th>
              <th> Name</th>
              <th>Description</th>
              <th>Logo</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>

      <?php
      $i = 0;
        foreach ($service as $key => $value) {
          $i++;
        ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $value['serv_name']; ?></td>
                <td><?php echo $value['serv_desc']; ?></td>
                <td><?php echo $value['serv_logo']; ?></td>
                <td>
                  <a class="" data-toggle="modal" data-target="#service<?php echo $value['serv_id']; ?>" href="<?php echo BASE_URL."Admin/editService/".$value['serv_id']; ?>"><i class="fa fa-pencil-square-o "></i></a>
                  <a class="" onclick="window.confirm('Are you sure you want to delete this service category?')" href="<?php echo BASE_URL."Admin/deleteService/".$value['serv_id']; ?>"><i class="fa fa-trash-o  text-danger"></i></a>
                </td>
              </tr>


              <div class="modal" id="service<?php echo $value['serv_id'];?>">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4>Edit Service</h4>
                      <button type="button" class="close" data-dismiss="modal" name="button">&times;</button>
                    </div>
                    <form class="" action="<?php echo BASE_URL.'Admin/updateService/'.$value['serv_id'];?>"  method="post">
                        <div class="modal-body">
                                <div class="form-group">
                                  <input type="text" class="form-control"  name="serv_name" value="<?php echo $value['serv_name']; ?>">
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control"  name="serv_logo" value="<?php echo $value['serv_logo']; ?>">
                                </div>
                                <div class="form-group">
                                  <textarea name="serv_desc" class="form-control" rows="5" cols="80"><?php echo $value['serv_desc']; ?></textarea>
                                </div>
                                <input type="hidden" name="serv_id" value="<?php echo $value['serv_id']; ?>">
                        </div>
                        <div class="modal-footer">
                          <input type="submit" class="btn btn-primary btn-sm" name="" value="update">
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
