<?php
  require_once('include/header.php');
?>

<style>
  .info-card {
    border: 1px solid rgba(112, 129, 252, 0.5);
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
    background: #cccbff;
  }

  .span_small {
    color: rgb(72, 71, 71);
    font-size: 13px;
    font-weight: 300;
  }
</style>

<div class="row">

  <div class="col-12 col-xl-12 mb-4 mb-xl-0 d-flex justify-content-between">
    <div class="title">
      <h3 class="font-weight-bold text-primary mb-2" style="font-size:20px;">INVENTORY REPORT</h3>
      <!-- <p class="text-secondary mb-3">Reports of all inventory</p> -->
    </div>
    <div class="title__button">
    </div>
  </div>
</div>


<h4 class="mt-4 text-dark">Inventory Summary :</h4>
<div class="row mt-4">
  <div class="col-xxl-4 col-md-4">
    <div class="card info-card doctor-card">
      <div class="card-body">
        <h5 class="card-title text-primary">All Stocks</h5>

        <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          </div>
          <div class="p-2 ml-2">
            <h3 class="text-center text-dark">22345</h3>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="col-xxl-4 col-md-4">
    <div class="card info-card revenue-card">

      <div class="card-body">
        <h5 class="card-title text-primary">Delivered Stocks</h5>

        <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          </div>
          <div class="p-2 ml-5">
            <h3 class="text-dark">461</h3>

          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="col-xxl-4 col-md-4">
    <div class="card info-card revenue-card">

      <div class="card-body">
        <h5 class="card-title text-primary">Low Stocks Items</h5>

        <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          </div>
          <div class="p-2 ml-5">
            <h3 class="text-dark">64</h3>

          </div>
        </div>
      </div>

    </div>
  </div>

</div>


<div class="row mt-3 d-flex justify-content-between">
    <div class="col-md-12">

        <div class="card-body table-responsive mt-3">
            <h4 class="mb-3 text-primary">Inventory Details (Centerwise)</h4>


            <div class="row col-md-8 mx-auto mt-5">
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="department">Select Center <span class="text-danger"> *</span>
                        </label>
                        <select name="department[]" class="form-control js-example-basic-single" id="department"
                            required>
                            <option value="">Select Center</option>
                            <option value="1">Guwahati Center</option>
                            <option value="2">Silchar Center</option>
                            <option value="3">Jorhat Center</option>
                        </select>
                    </div>

                </div>
                <div class="col-md-1 mt-4">
                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>


            </div>
        </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-12 table-responsive">
        <div class="card">
          <div class="card-body table-responsive">

            <table class="table table-bordered table-hover text-center">
              <thead>
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
                  <td>Dacarbazine (Dtic-Dome)</td>
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


<?php
require_once('include/footer.php');
?>