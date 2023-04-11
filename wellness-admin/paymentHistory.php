<?php
  require_once('include/header.php');
  ?>

<div class="row">

  <div class="col-12 col-xl-8 mb-2 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2">PAYMENT HISTORY</h3>
    <!-- <p class="mb-2 text-secondary">List of p</p> -->
  </div>
  <div class="col-md-12">

    <div class="row mt-4">
      <div class="col-md-12 table-responsive mt-3">
        <div class="card">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col-md-6">
            <!-- <button type="button" class="btn text-uppercase font-weight-bold text-primary">
                Total Payments <span class="badge text-bg-secondary font-weight-bold">( 74 )</span>
                </button> -->
            </div>
        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search by Invoice or date"
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
                  <th>Invoice </th>
                  <th>Amount</th>
                  <th>Payment Method</th>
                  <th>Date</th>

                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td><a href="#" class="text-primary">Invoice A/01</a></td>
                  <td>₹ 5555.00</td>
                  <td><i class="fa-regular fa-credit-card mr-2"></i>***** 3242</td>
                  <td>Jun 22 , 2022</td>

                </tr>


                <tr>
                  <td>2</td>
                  <td><a href="#" class="text-primary">Invoice A/02</a></td>
                  <td>₹ 9888.00</td>     
                  <td><i class="fa-regular fa-credit-card mr-2"></i>***** 0098</td>
                  <td>Sept 04 , 2022</td>
                </tr>



                <tr>
                  <td>3</td>
                  <td><a href="#" class="text-primary">Invoice A/03</a></td>
                  <td>₹ 8773.00</td>
                  <td><i class="fa-regular fa-credit-card mr-2"></i>***** 9876</td>
                  <td>Oct 11 , 2022</td>
                </tr>

                <tr>
                  <td>4</td>
                  <td><a href="#" class="text-primary">Invoice A/04</a></td>
                  <td>₹ 4433.00</td>
                  <td><i class="fa-regular fa-credit-card mr-2"></i>***** 7623</td>
                  <td>Nov 01 , 2022</td>
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