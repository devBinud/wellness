<?php
  require_once('include/header.php');
  ?>

<div class="row">

  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2">DOCTkORS</h3>
    <p class="mb-2 text-secondary">Doctors List</p>
  </div>
  <div class="col-md-12">

    <div class="row mt-4">
      <div class="col-md-12 table-responsive mt-3">
        <div class="card">
      <div class="row mt-3 mr-1 d-flex align-items-center justify-content-between">
        <div class="col-md-8">
          <p>Hello World , This is paragraph</p>
        <!-- <a href="addNewDoctor.php" class="btn btn-primary"><i class="fa fa-plus mr-1"></i> Add New Doctor </a> -->
        </div>
        <div class="col-md-4">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search by name or phone No"
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
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Specialization</th>
                  <th>Experience</th>
                  <th>Email</th>
                  <th>Mobile No</th>

                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td>Manash Saha</td>
                  <td>Male </td>
                  <td>Radiologist</td>
                  <td>09 Years</td>
                  <td>manash@gmail.com</td>
                  <td>98763 36289</td>
                </tr>


                <tr>
                  <td>2</td>
                  <td>Runumi Dutta</td>
                  <td>Female </td>
                  <td>Paediatrician</td>
                  <td>12 Years</td>
                  <td>runumi@gmail.com</td>
                  <td>91763 6342</td>

                </tr>



                <tr>
                <td>3</td>
                  <td>Ramgopal Singh</td>
                  <td>Male </td>
                  <td>Clinical Oncologist</td>
                  <td>04 Years</td>
                  <td>ram@gmail.com</td>
                  <td>76563 36222</td>

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