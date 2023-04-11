<?php
  require_once('include/header.php');
  ?>

<div class="row">

  <div class="col-12 col-xl-8 mb-2 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2"> ALL CHALLANS</h3>
    <!-- <p class="mb-2 text-secondary">List Ofthe bills</p> -->
  </div>
  <div class="col-md-12">

    <div class="row mt-4">
      <div class="col-md-12 table-responsive mt-3">
        <div class="card">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col-md-6">
            <a href="createNewChallan.php" class="btn btn-primary"><i class="fa fa-plus mr-2"></i> New Challan</a>
            </div>
        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search by Challan No or Store"
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
                  <th>CHALLAN NO</th>
                  <th>STORE / CENTER</th>
                  <th>STATUS</th>
                  <th>TYPE</th>
                  <th>TOTAL PRICE</th>
                  <th>ACTION</th>
                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td>AYUR-22/00001</td>
                  <td>Guwahati Store</td>
                  <td><span class="badge btn btn-success">Active</span></td>
                  <td>Dispatch</td>
                  <td>₹ 10220.00</td>
                  <td><button class="btn btn-danger btn-sm">Canceled</button></td>
                </tr>

                <tr>
                  <td>1</td>
                  <td>AYUR-22/00002</td>
                  <td>Jorhat Store</td>
                  <td><span class="badge btn btn-danger">Cancel</span></td>
                  <td>Return</td>
                  <td>₹ 10220.00</td>
                  <td><button class="btn btn-danger btn-sm">Cancel</button></td>
                </tr>


                <tr>
                  <td>1</td>
                  <td>AYUR-22/00003</td>
                  <td>Silchar Store</td>
                  <td><span class="badge btn btn-success">Active</span></td>
                  <td>Dispatch</td>
                  <td>₹ 10220.00</td>
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