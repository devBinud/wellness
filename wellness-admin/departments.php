<?php
  require_once('include/header.php');
  ?>

<div class="row">

  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2">DEPARTMENTS</h3>
    <p class="mb-2 text-secondary">List of all departments</p>
  </div>
  <div class="col-md-12">

    <div class="row mt-4">
      <div class="col-md-12 table-responsive mt-3">
        <div class="card" style="border:1px solid #a4aec4;">
      <div class="row mt-3 mr-1 d-flex align-items-center justify-content-between">
        <div class="col-md-5">
        <a href="#" class="btn btn-primary ml-3" data-toggle="modal" data-target="#addDepartment"><i class="fa fa-plus mr-2"></i>Add New Department</a>

        </div>
        <div class="col-md-5">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search departments"
              aria-label="doctors">
            <div class="input-group-append">
              <button class="btn btn-sm btn-primary" type="button">Search</button>
            </div>
          </div>
         </div>
      </div>
          <div class="card-body table-responsive">

            <table class="table table-bordered table-hover text-center">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Department Name</th>
                  <th>Speciality</th>
                  <th>Action</th>

                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td>Radiology</td>
                  <td>MRI</td>
                  <td><a href="#"><i class="fa fa-trash text-danger mr-2"></i></a></td>

                </tr>

                <tr>
                  <td>2</td>
                  <td>Kaya Chikitsa</td>
                  <td>Vajikarana</td>
                  <td><a href="#"><i class="fa fa-trash text-danger mr-2"></i></a></td>
                </tr>


              </tbody>
            </table>

          </div>

          <div class="pagination__box">
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <span class="page-link"><i class="fa-solid fa-angles-left"></i></span>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                  <span class="page-link">
                    2
                    <span class="sr-only">(current)</span>
                  </span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fa-solid fa-angles-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="addDepartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary font-weight-bold" id="exampleModalLabel">New Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
                    <div class="form-group">
                      <label for="name">Add Department Name<span class="text-danger"> *</span> </label>
                      <input type="text" name="" class="form-control" id="name" placeholder="Enter Department Name"
                        required>
                    </div>
                  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>



<?php
  require_once('include/footer.php');
  ?>