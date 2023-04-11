                                 
<?php
  require_once('include/header.php');
?>

<div class="row">

  <div class="col-12 col-xl-12 mb-4 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2" style="font-size:22px;">VIEW LOW STOCKS
    </h3>
    <p class="text-danger">( low stocks )</p>
    <!-- <a class="btn btn-primary" href="newInventory.php">New Inventory</a> -->

  </div>
  <div class="col-md-12">

    <div class="row mt-4">
      <div class="col-md-12 table-responsive mt-3">
        <div class="card" style="border:1px solid #a4aec4">
          <div class="card-body table-responsive">

            <table class="table table-bordered table-hover text-center">
              <thead class="bg-secondary">
                <tr>
                  <th>#</th>
                  <th>Item Name</th>
                  <th>Center Name</th>
                  <th>SKU</th>
                  <th>Available</th>
                  <th>Status</th>

                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td>Dacarbazine (Dtic-Dome)</td>
                  <td>Guwahati Center</td>
                  <td>001202131</td>
                  <td>43222</td>
                  <td><span class="badge badge-danger">low stocks</span></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Omeprazole</td>
                  <td>Jorhat Center</td>
                  <td>00120065</td>
                  <td>55555</td>
                  <td><span class="badge badge-danger">low stocks</span></td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>Hydrochlorothiazide</td>
                  <td>Dibrugarh Center</td>
                  <td>01232870</td>
                  <td>11222</td>
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