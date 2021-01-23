
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-cube"></i>&nbsp;&nbsp;Products</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">Products</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div> <!-- /.Content header -->
    
    <!-- Content Main-->
    <div class="content">
      <div class="container-fluid">

        <div class="row mt-3">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-header row">
                <h2 class="card-title col">List of Products:</h2>
                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#add">+ Add new Product</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>Product name</th>
                      <th>Image</th>
                      <th>Link text</th>
                      <th>Link</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php foreach ($data as $d){?>
                      <tr>
                        <td><?=$d->name?></td>
                        <td><img src="<?=base_url()."assets/images/$d->img_src"?>" alt="Image" height="50" style="object-fit:cover;"></td>
                        <td><?=$d->link_text?></td>
                        <td><a href="<?=$d->link_src?>" target="_blank"><?=$d->link_src?></a></td>
                        <td>
                          <a href="<?=base_url('Delete/Product/'.$d->id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete Product"><i class="fa fa-trash-alt"></i></a>
                          <button class="btn btn-primary mb-1" data-toggle="modal" data-target="#edit<?=$d->id?>" title="Edit Product"><i class="fa fa-edit"></i></button>
                        </td>
                      </tr>

                      <!-- edit modal -->
                        <div class="modal fade" id="edit<?=$d->id?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"> <i class="fa fa-edit"></i> &nbsp; Edit Product:</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post" action="<?php echo base_url();?>Edit/Product/<?=$d->id?>" enctype="multipart/form-data">
                                      <div class="col">
                                        <div class="form-group">
                                          <label for="img" class="m-0">Image <small>(SVG file recommended)</small> :</label>
                                          <p class="m-0 text-muted">( Choose only if you want to change the current image )</p>
                                          <p class="text-sm text-muted mt-0 mb-2">( Max image size : 300kb )</p>
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="img" accept=".svg, .jpg, .jpeg, .png" name="img">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="heading" class="m-0">Product name:</label>
                                            <p class="text-sm text-muted m-0">(Max. 30 Characters)</p>
                                            <input type="text" class="form-control mt-2" maxlength="30" name="name" value="<?=$d->name?>" id="heading" required>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="heading" class="m-0">Link text:</label>
                                                <input type="text" class="form-control mt-2" maxlength="30" name="link_text" value="<?=$d->link_text?>" id="heading" required>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="heading" class="m-0">Link:</label>
                                                <input type="url" class="form-control mt-2" name="link_src" value="<?=$d->link_src?>" required>
                                            </div>
                                        </div>
                                      </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-recycle"></i>&nbsp; Update</button>
                                    </form>
                                </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                      <!-- /edit modal -->

                    <?php }?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->


 <!-- Add modal -->
  <div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">+ Add Product:</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form role="form" method="post" action="<?php echo base_url();?>Add/Product" enctype="multipart/form-data">
              <div class="col">
                <div class="form-group">
                  <label for="img" class="mb-2">Image <small>(SVG file recommended)</small> :</label>
                  <p class="text-sm text-muted mt-0 mb-2">( Max image size : 300kb )</p>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input m-0" id="img" name="img" accept=".svg, .jpg, .jpeg, .png" required>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                </div>
                <div class="form-group">
                    <label for="heading" class="m-0">Product name:</label>
                    <p class="text-sm text-muted">(Max. 30 Characters)</p>
                    <input type="text" class="form-control" name="name" maxlength="30" required>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="content" class="m-0">Link text:</label>
                    <input type="text" class="form-control" name="link_text" maxlength="30" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="content" class="m-0">Link:</label>
                        <input type="url" class="form-control" name="link_src" required>
                    </div>
                </div>
              </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">+ Add</button>
            </form>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<!-- /Add modal -->

<!-- DataTable assets -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>


<script>

// Init Datatable
  $(function () {
    $('#bookdt').DataTable({
      "pageLength": 10,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      // "ordering": true,
      "info": true,
      "autoWidth": true,
      "scrollX": true
    });
  });


// Name of the file appearing on selecting image
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

</script>
