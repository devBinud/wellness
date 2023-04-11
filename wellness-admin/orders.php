<?php
  require_once('include/header.php');
  ?>

<div class="row">

  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2">ORDERS</h3>
    <p class="mb-2 text-secondary">View order details</p>
  </div>
  <div class="col-md-12">

    <div class="row mt-4">
      <div class="col-md-12 table-responsive mt-3">
        <div class="card" style="border:1px solid #d0d2d9">
      <div class="row mt-3 mr-1 d-flex align-items-center justify-content-between">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search by order Id or name"
              aria-label="doctors">
            <div class="input-group-append">
              <button class="btn btn-sm btn-primary" type="button">Search</button>
            </div>
          </div>
         </div>
      </div>
          <div class="card-body table-responsive">

            <table class="table table-bordered table-hover text-center" >
              <thead>
                <tr>
                  <th>#</th>
                  <th>Store Name</th>
                  <th>Ordered On </th>
                  <th>Order Total</th>
                  <th>View Details</th>

                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td>Guwahati Store</td>
                  <td>12 June, 2022</td>
                  <td>21032.00</td>
                  <td><button class="bg-primary btn-sm text-white border-0">View <i class="fa fa-eye"></i></button></td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>Silchar Store</td>
                  <td>30 July, 2022</td>
                  <td>34322.00</td>
                  <td><button class="bg-primary btn-sm text-white border-0">View <i class="fa fa-eye"></i></button></td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>Jorhat Store</td>
                  <td>03 March, 2022</td>
                  <td>12112.00</td>
                  <td><button class="bg-primary btn-sm text-white border-0">View <i class="fa fa-eye"></i></button></td>
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