<?php
  require_once('include/header.php');
?>


<div class="row">

  <div class="col-lg-12 stretch-card mt-2">
    <div class="card mt-3" style="border:1px solid #c9c8c8">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="text-dark ml-3" style="font-size: 18px;">Patient Information</h3>
              <hr>
              <div class="table-responsive table-borderless">
                <table class="table table-sm">
                  <tbody>
                    <tr class="mb-2">
                      <th style="font-size: 14px">UHID:</th>
                      <td class="font-weight-bold">
                        <a href="#" class="text-primary">RC1243350001</a>
                      </td>
                    </tr>
                    <tr>
                      <th style="font-size: 14px">Patient Name:</th>
                      <td>Kapil Das</td>
                    </tr>
                    <tr>
                      <th style="font-size: 14px">Age:</th>
                      <td>31</td>
                    </tr>
                    <tr>
                      <th style="font-size: 14px">Gender:</th>
                      <td>Male</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

          </div>

          <div class="col-md-6">
            <div class="card px-2">
              <h3 class="text-dark ml-3" style="font-size: 18px;">Reference Doctor's details</h3>
              <hr>
              <div class="table-responsive table-borderless">
                <table class="table table-sm">
                  <tbody>
                    <tr>
                      <th style="font-size: 14px">Doctor's Name :</th>
                      <td>Dr Sunil Yadav</td>
                    </tr>
                    <tr>
                      <th style="font-size: 14px">Hospital Name :</th>
                      <td>MMCH</td>
                    </tr>
                    <tr>
                      <th style="font-size: 14px">Phone No :</th>
                      <td>98737 87632</td>
                    </tr>

                  </tbody>
                </table>

              </div>
            </div>

          </div>

          <div class="row mt-4">
                    <div class="col-md-12 table-responsive mt-3">
                      <div class="card">
                        <div class="card-body table-responsive">
          
                          <table class="table table-bordered table-hover text-center">
                            <thead>
                              <tr>
                                <th>Sl No</th>
                                <th>Medicine Name</th>
                                <th>MRP</th>
                                <th>Quntity</th>
                                <th>Total</th>
                                <th>Action</th>
                              </tr>
                            </thead>
          
                            <tbody>
          
                              <tr>
                                <td>1</td>
                                <td>Ashwagandha</td>
                                <td>₹ 232.00</td>
                                <td>2</td>
                                <td>₹ 464.00</td>
                                <td>
                                  <a href=""><i class="fa fa-trash text-danger"></i></a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
          
                        </div>
          
                      </div>
                    </div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-md-12 text-center mb-4">
                        <button type="submit" class="btn btn-primary " id="submit"><i class="bi bi-file-earmark-medical me-2"></i>Save as pdf</button>
                        <button type="#" class="btn btn-danger " id="cancel"><i class="bi bi-printer me-2"></i>Print</button>
                    </div>
                </div>
      </div>
    </div>


  </div>

</div>



  <?php
require_once('include/footer.php');
?>