<?php
  require_once('include/header.php');
?>

<div class="row">

  <div class="col-12 col-xl-12 mb-4 mb-xl-0 d-flex justify-content-between">
        <div class="title">
            <h3 class="font-weight-bold text-primary mb-2" style="font-size: 22px;">VIEW ALL STOCKS</h3>

        </div>
        <div class="title__button">
            <!-- <a href="addItemStocks.php" class="btn btn-primary">Add Item to Stocks<i class="fa fa-plus ml-2"></i></a> -->
        </div>
    </div>
  <div class="col-md-12">

    <div class="row mt-4">
      <div class="col-md-12 table-responsive mt-3">
        <div class="card" style="border:1px solid #a4aec4; padding:5px;">
          <div class="card-body table-responsive">

            <table class="table table-bordered table-hover text-center">
              <thead class="bg-primary text-white">
                <tr>
                  <th>#</th>
                  <th>Product Name</th>
                  <th>Available Quantity</th>
                  <th>MRP</th>
                  <th>Batch No</th>
                  <th>Status</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>1</td>
                  <td>Dacarbazine</td>
                  <td>3321</td>
                  <td>₹ 742.00</td>
                  <td> AGT-M10000</td>
                  <td><span class="badge badge-primary">Available</span></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Brahmi</td>
                  <td>121</td>
                  <td>₹ 456.00</td>
                  <td> AGT-L30000</td>
                  <td><span class="badge badge-danger">low stocks</span></td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
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


<?php
    require_once('include/footer.php');
?>