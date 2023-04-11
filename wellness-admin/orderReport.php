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
      <h3 class="font-weight-bold text-primary mb-2" style="font-size:20px;">ORDER REPORT</h3>
      <p class="text-secondary mb-3">Reports of all the orders</p>  
    </div>
    <div class="title__button">
    </div>
  </div>
</div>


<h4 class="mt-3 font-weight-bold">Order Summary</h4>
<div class="row mt-4">
  <div class="col-xxl-4 col-md-4">
    <div class="card info-card doctor-card">
      <div class="card-body">
        <h5 class="card-title text-primary">No of Order <span class="span_small"> | Today</span></h5>

        <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          </div>
          <div class="p-2 ml-4">
            <h3 class="text-center text-dark">145</h3>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="col-xxl-4 col-md-4">
    <div class="card info-card revenue-card">

      <div class="card-body">
        <h5 class="card-title text-primary">Todays Collection</h5>

        <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          </div>
          <div class="p-2 ml-3">
            <h3 class="text-dark">₹ 23008.00</h3>

          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="col-xxl-4 col-md-4">
    <div class="card info-card revenue-card">

      <div class="card-body">
        <h5 class="card-title text-primary">Monthly Collections</h5>

        <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          </div>
          <div class="p-2 ml-3">
            <h3 class="text-dark">₹ 54900.00</h3>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<div class="row mt-3 d-flex justify-content-between">
    <div class="col-md-12">

        <div class="card-body table-responsive mt-3">
            <h4 class="mb-3 text-primary">Order Details (Centerwise)</h4>


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

    <div class="card-body table-responsive">

        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr class="bg-light">
                    <th>#</th>
                    <th>Order Id</th>
                    <th>Ordered On</th>
                    <th>Order Total</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>1</td>
                    <td>IB00-22/001</td>
                    <td>20 June, 2022</td>
                    <td>₹ 98722.00</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>IB00-22/002</td>
                    <td>12 July, 2022</td>
                    <td>₹ 76527.00</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>IB00-22/003</td>
                    <td>09 August, 2022</td>
                    <td>₹ 99819.00</td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>IB00-22/004</td>
                    <td>15 Sept, 2022</td>
                    <td>₹ 34552.00</td>
                </tr>
            </tbody>
        </table>

    </div>

</div>


<?php
require_once('include/footer.php');
?>