<?php
  require_once('include/header.php');
?>

<div class="row">

  <div class="col-12 col-xl-12 mb-4 mb-xl-0 d-flex justify-content-between">
        <div class="title">
            <h3 class="font-weight-bold text-primary mb-2" style="font-size: 22px;">VIEW ALL STOCKS</h3>
            <p class="text-secondary">view all the stocks</p>

        </div>
        <div class="title__button">
            <!-- <a href="addItemStocks.php" class="btn btn-primary">Add Item to Stocks<i class="fa fa-plus ml-2"></i></a> -->
        </div>

    </div>

  <div class="col-md-12">

    <div class="row mt-4">
      <div class="col-md-12 table-responsive mt-3">
        <div class="card">
          <div class="card-body table-responsive">

            <table class="table table-bordered table-hover text-center">
              <thead class="bg-secondary">
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>SKU</th>
                  <th>Available</th>
                  <th>On Hand</th>
                  <th>MRP</th>
                  <th>Date</th>
                  <th>Status</th>

                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td>Dacarbazine</td>
                  <td>00120001</td>
                  <td>2342</td>
                  <td>6342</td>
                  <td>₹ 218.00</td>
                  <td>10/10/2022</td>
                  <td><span class="badge badge-primary">Available</span></td>
                </tr>


                <tr>
                  <td>1</td>
                  <td>Hydrocodone</td>
                  <td>00120002</td>
                  <td>2142</td>
                  <td>5342</td>
                  <td>₹ 322.00</td>
                  <td>06/08/2022</td>
                  <td><span class="badge badge-danger">sold</span></td>
                </tr>



                <tr>
                  <td>1</td>
                  <td>Antihistamines</td>
                  <td>00120003</td>
                  <td>3011</td>
                  <td>1212</td>
                  <td>₹ 409.00</td>
                  <td>02/03/2022</td>
                  <td><span class="badge badge-primary text-white">Available</span></td>
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