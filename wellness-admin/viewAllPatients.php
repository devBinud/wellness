<?php
require_once('include/header.php');
?>

<div class="row">

      <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold text-primary mb-2">PATIENT</h3>
        <p class="mb-2 text-secondary">All Patient</p>
      </div>
      <div class="col-md-12">

        <div class="row mt-4">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <form action="#" method="GET">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="uhid">UHID</label>
                        <input type="text" name="uhid" class="form-control form-control-sm" id="uhid" value=""
                          placeholder="">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control form-control-sm" id="name" value=""
                          placeholder="">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="regDate">Registration Date <span class="text-danger"> *</span> </label>
                        <input type="date" name="reg_date" class="form-control form-control-sm" id="regDate" value=""
                          placeholder="">
                      </div>
                    </div>
                    <div class="col-md-2 m-auto">
                      <div class="form-group m-auto ">
                        <button type="submit" class="btn btn-primary " id="submit" data-toggle="tooltip"
                          data-placement="top" title="Search Patients"><i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                        <!-- <a href="#" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Reset"><i class="bi bi-arrow-counterclockwise"></i> </a> -->
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-12 table-responsive mt-3">
            <div class="card">
              <div class="card-body table-responsive">

                <table class="table table-bordered table-hover text-center">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>UHID</th>
                      <th>Phone</th>
                      <th>DOB</th>
                      <th>Age</th>
                      <th>Register Case</th>

                    </tr>
                  </thead>

                  <tbody>

                    <tr>
                      <td>1</td>
                      <td><a class="text-left text-primary" href="prakashBoul.php"> Prakash Boul </a></td>
                      <td>AYUR0000001</td>
                      <td>1234567890</td>
                      <td>01-01-1998 </td>
                      <td>32 years as on 19 Apr, 22 </td>
                      <td>
                        <a href="registerCase.php" class="btn btn-primary btn-sm add-case-btn">Register</a>
                      </td>
                    </tr>


                    <tr>
                      <td>2</td>
                      <td><a class="text-left text-primary" href="#"> Devi Das </a></td>
                      <td>AYUR0000002</td>
                      <td>1234567890</td>
                      <td>01-01-1996 </td>
                      <td>31 years as on 19 Apr, 22 </td>
                      <td>
                        <a href="#" class="btn btn-primary btn-sm add-case-btn">Register</a>
                      </td>
                    </tr>


                    <tr>
                      <td>3</td>
                      <td><a class="text-left text-primary" href=" #"> Juri Talukdar </a></td>
                      <td>AYUR0000002</td>
                      <td>1234567890</td>
                      <td>21-01-1998 </td>
                      <td>29 years as on 19 Apr, 22 </td>
                      <td>
                        <a href="#" class="btn btn-primary btn-sm add-case-btn">Register</a>
                      </td>
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