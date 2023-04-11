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
      <h3 class="font-weight-bold text-primary mb-2" style="font-size:20px;">CHALLAN REPORT</h3>
      <!-- <p class="text-secondary mb-3">Reports of all inventory</p>   -->
    </div>
    <div class="title__button">
    </div>
  </div>
</div>


<h4 class="mt-3 font-weight-bold">Challan Summary :</h4>
<div class="row mt-4">
  <div class="col-xxl-4 col-md-4">
    <div class="card info-card doctor-card">
      <div class="card-body">
        <h5 class="card-title text-primary">Arrival Challan</h5>

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
        <h5 class="card-title text-primary">Challan Requested</h5>

        <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          </div>
          <div class="p-2 ml-3">
            <h3 class="text-dark">46</h3>

          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="col-xxl-4 col-md-4">
    <div class="card info-card revenue-card">

      <div class="card-body">
        <h5 class="card-title text-primary">Cancelled Challan</h5>
        <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          </div>
          <div class="p-2 ml-3">
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
            <h4 class="mb-3 text-primary">Challan Details (centerwise)</h4>


            <div class="row col-md-8 mx-auto">
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
                    <th>Challan No</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Total Price</th>
                    <th>View Details</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>1</td>
                    <td>YU8999001</td>
                    <td>20 Jun, 2022</td>
                    <td><span class="badge btn-primary">Active</span></td>
                    <td>₹ 98221.00</td>
                    <td><a href="#"><i class="fa fa-eye mr-2 text-primary" data-toggle="modal" data-target="#exampleModal"></i></a></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>YU8999003</td>
                    <td>20 Jun, 2022</td>
                    <td><span class="badge btn-primary">Active</span></td>
                    <td>₹ 43200.00</td>
                    <td><i class="fa fa-eye mr-2 text-primary"></i></td>
                </tr>


                <tr>
                    <td>4</td>
                    <td>YU8999004</td>
                    <td>20 Jun, 2022</td>
                    <td><span class="badge btn-primary">Active</span></td>
                    <td>₹ 23000.00</td>

                    <td><i class="fa fa-eye mr-2 text-primary"></i></td>
                </tr>


            </tbody>
        </table>

    </div>

</div>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-primary" id="exampleModalLabel">Challan Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <h4>Hello world</h4> -->
        <h4 class="text-primary">Challan Details : <span class="text-danger">YU8999001</span></h4>
        <h4 class="text-primary">Date : <span class="text-dark">20 June, 2022</span></h4>
        <h4 class="text-primary">Total Price : <span class="text-dark">₹ 98221.00</span></h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?php
require_once('include/footer.php');
?>