<?php
  require_once('include/header.php');
  ?>


<div class="row">

  <div class="col-12 col-xl-12 mb-2 mb-xl-0 d-flex justify-content-between">
    <div class="title">
      <h3 class="font-weight-bold text-primary mb-2">INWARD CHALLANS</h3>
      <p class="mb-2 text-secondary">List Of all Inward Challans</p>
    </div>
    <div class="title__button">
    </div>
  </div>
  <div class="col-md-12">

    <div class="row mt-4">
      <div class="col-md-12 table-responsive mt-3">
        <div class="card" style="border:1px solid #a4aec4;">
          <div class="row d-flex justify-content-between mt-3 p-2">
            <div class="col-md-6">
            </div>
            <div class="col-md-5">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search by challan No" aria-label="">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-primary mr-3" type="button">Search</button>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body table-responsive">

            <table class="table table-bordered table-hover text-center">
              <thead class="bg-primary text-white">
                <tr>
                  <th>#</th>
                  <th>Date</th>
                  <th>Challan No</th>
                  <th>View</th>
                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td>20 Jun, 2022</td>
                  <td>000001</td>
                  <td>
                  <a class="text-primary" href="viewInwardChallan.php">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                  </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>22 Juy, 2022</td>
                  <td>000002</td>
                  <td>
                  <a class="text-primary" href="viewInwardChallan.php">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                  </td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>30 Sept, 2022</td>
                  <td>000003</td>
                  <td>
                    <a class="text-primary" href="viewInwardChallan.php">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
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

