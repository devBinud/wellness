<?php
  require_once('include/header.php');
  ?>

<div class="row">

  <div class="col-12 col-xl-8 mb-2 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2">DELIVERY AGENTS</h3>
    <p class="mb-2 text-secondary">List Of Delivery Agents</p>
  </div>
  <div class="col-md-12">

    <div class="row mt-4">
      <div class="col-md-12 table-responsive mt-3">
        <div class="card">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col-md-6">
            <button type="button" class="btn text-uppercase font-weight-bold text-primary">
                All agents <span class="badge text-bg-secondary font-weight-bold">( 34 )</span>
                </button>
            </div>
        <div class="col-md-6">
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
                  <th>Agents Name</th>
                  <th>Center Name</th>
                  <th>Phone No</th>
                  <th>Vehicle No</th>

                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td>Manash Saha</td>
                  <td>Guwahati Center</td>
                  <td>95372 09872</td>     
                  <td>AS 04 2323 XX43</td>

                </tr>


                <tr>
                  <td>2</td>
                  <td>Ramgopal Singh</td>
                  <td>Silchar Center</td>
                  <td>8768323654</td>
                  <td>AS 22 0012 XX43</td>
                </tr>



                <tr>
                  <td>3</td>
                  <td>Pradyut Phukan</td>
                  <td>Jorhat Center</td>
                  <td>8763723563</td>
                  <td>AS 06 2112 XX43</td>
                </tr>

                <tr>
                  <td>4</td>
                  <td>Rahul Sharma</td>
                  <td>Dibrugarh Center</td>
                  <td>9876736282</td>
                  <td>AS 03 4872 XX43</td>
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