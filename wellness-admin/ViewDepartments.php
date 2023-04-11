<?php
  require_once('include/header.php');
  ?>

<div class="row">

  <div class="col-12 col-xl-8 mb-2 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2">VIEW ALL DEPARTMENTS</h3>
    <p class="mb-2 text-secondary">List Of all departments</p>
  </div>
  <div class="col-md-12">

    <div class="row mt-4">
      <div class="col-md-12 table-responsive mt-3">
        <div class="card">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col-md-6">
            <button type="button" class="btn text-uppercase font-weight-bold text-primary">
                All departments <span class="badge text-bg-secondary font-weight-bold">( 26 )</span>
                </button>
            </div>
        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search by center or departments"
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
                  <th>Center Name</th>
                  <th>Phone No</th>
                  <th>Email Id</th>

                </tr>
              </thead>

              <tbody>


                <tr>
                  <td>2</td>
                  <td>Cardiology</td>
                  <td>Guwahati Center</td>
                  <td>8768323654</td>
                  <td>ghycardio@gmail.com</td>
                </tr>



                <tr>
                  <td>3</td>
                  <td>Neurology</td>
                  <td>Silchar Center</td>
                  <td>8763723563</td>
                  <td>silneu33@gmail.com</td>
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