<?php
  require_once('include/header.php');
  ?>

<div class="row">

  <div class="col-12 col-xl-8 mb-2 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2">VIEW ALL USERS</h3>
    <p class="mb-2 text-secondary">List of all the users</p>
  </div>
  <div class="col-md-12">

    <div class="row mt-4">
      <div class="col-md-12 table-responsive mt-3">
        <div class="card">
        <div class="row d-flex justify-content-between mt-2 container">
            <div class="col-md-6">
             <a href="addNewUsers.php" class="btn btn-primary"><i class="fa fa-plus mr-2"></i>Add New User</a>
            </div>
        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search by name or phone No"
              aria-label="">
            <div class="input-group-append">
              <button class="btn btn-sm btn-primary" type="button">Search</button>
            </div>
          </div>
         </div>
        </div>
          <div class="card-body table-responsive">

            <table class="table table-bordered table-hover text-center">
              <thead>
                <tr class="bg-light">
                  <th>#</th>
                  <th>Profile</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Designation/Role</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td><img src="./images/faces/face15.jpg" alt=""></td>
                  <td>Ram sharma</td>
                  <td>88767 98980</td>
                  <td>Store User</td>
                  <td>Active</td>
                  <td><button class="btn btn-danger btn-sm">Cancel</button></td>
                </tr>

                <tr>
                  <td>2</td>
                  <td><img src="./images/faces/face10.jpg" alt=""></td>
                  <td>Biplab Gogoi</td>
                  <td>99876 24518</td>
                  <td>Admin</td>
                  <td>Active</td>
                  <td><button class="btn btn-danger btn-sm">Cancel</button></td>
                </tr>


                <tr>
                  <td>3</td>
                  <td><img src="./images/faces/face11.jpg" alt=""></td>
                  <td>Abhisekh Goswami</td>
                  <td>98786 56483</td>
                  <td>Store User</td>
                  <td>Active</td>
                  <td><button class="btn btn-danger btn-sm">Cancel</button></td>
                </tr>

  
                <tr>
                  <td>4</td>
                  <td><img src="./images/faces/face18.jpg" alt=""></td>
                  <td>Abhisekh Goswami</td>
                  <td>98786 56483</td>
                  <td>Admin</td>
                  <td>Active</td>
                  <td><button class="btn btn-danger btn-sm">Cancel</button></td>
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




<?php
  require_once('include/footer.php');
  ?>