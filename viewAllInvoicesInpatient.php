<?php
  require_once('include/header.php');
  ?>


<div class="row">

  <div class="col-12 col-xl-12 mb-2 mb-xl-0 d-flex justify-content-between">
    <div class="title">
      <h3 class="font-weight-bold text-primary mb-2">VIEW ALL INVOICES</h3>
      <p class="mb-2 text-secondary">List Of All the Invoices</p>
    </div>
    <div class="title__button">
    </div>
  </div>
  <div class="col-md-12">

    <div class="row mt-4">
      <div class="col-md-12 table-responsive mt-3">
        <div class="card">
          <div class="row d-flex justify-content-between mt-3">
            <div class="col-md-6">
              <a href="createNewInvoiceInpatient.php" class="btn btn-primary">Create New Invoice <i class="fa fa-plus ml-2"></i></a>

            </div>
            <div class="col-md-4">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search by UHID or name" aria-label="">
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
                  <th>Invoice No</th>
                  <th>UHID</th>
                  <th>Total Price</th>
                  <th>Action</th>
                  <th>Download</th>
                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td><a href="#" class="text-primary">000001</a></td>
                  <td>000001</td>
                  <td>₹ 12320.00</td>
                  <td><a href="createInvoice.php"><i class="fa fa-eye text-primary"></i></a></td>

                  <td>
                    <a class="btn btn-sm btn-primary" target="_blank" href="#">
                      <i class="fa fa-download" aria-hidden="true"></i>
                      Download
                    </a>
                  </td>
                </tr>


                <tr>
                  <td>2</td>
                  <td><a href="#" class="text-primary">000002</a></td>
                  <td>000002</td>
                  <td>₹ 17623.00</td>
                  <td><a href="#"><i class="fa fa-eye text-primary"></i></a></td>

                  <td>
                    <a class="btn btn-sm btn-primary" target="_blank" href="#">
                      <i class="fa fa-download" aria-hidden="true"></i>
                      Download
                    </a>
                  </td>
                </tr>

                <tr>
                  <td>3</td>
                  <td><a href="#" class="text-primary">000003</a></td>

                  <td>000003</td>
                  <td>₹ 20900.00</td>
                  <td><a href="#"><i class="fa fa-eye text-primary"></i></a></td>
                  <td>
                    <a class="btn btn-sm btn-primary" target="_blank" href="#">
                      <i class="fa fa-download" aria-hidden="true"></i>
                      Download
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