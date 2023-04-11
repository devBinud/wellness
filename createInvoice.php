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
              <h3 class="text-dark ml-3" style="font-size: 18px;">Prescribing Doctor's details</h3>
              <hr>
              <div class="table-responsive table-borderless">
                <table class="table table-sm">
                  <tbody>
                    <tr>
                      <th style="font-size: 14px">Doctor's Name :</th>
                      <td>Dr Sunil Yadav</td>
                    </tr>
                    <tr>
                      <th style="font-size: 14px">Phone No :</th>
                      <td>+91 88724 12313</td>
                    </tr>
                    <tr>
                      <th style="font-size: 14px">Department :</th>
                      <td>Neurology</td>
                    </tr>

                  </tbody>
                </table>

              </div>
            </div>

          </div>

          <table class="table table-bordered mt-4">
            <thead>
              <tr class="bg-light text-dark">
                <th scope="col" class="text-center">SL No</th>
                <th scope="col" class="text-center">ITEM NAME</th>
                <th scope="col" class="text-center">QUANTITY</th>
                <th scope="col" class="text-center">PRICE</th>
                <th scope="col" class="text-center">ACTION</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">01</td>
                <td class="text-center">Secukinumab</td>
                <td class="text-center">
                    <div class="form-group">
                      <input type="number" name="name" class="form-control" id="name" placeholder="Add Quantity"
                        required>
                    </div>
                </td>
                <td class="text-center">₹ 320.00</td>
                <td class="text-center"><a href="#"><i class="text-danger fa fa-trash"></i></a></td>
              </tr>
              <tr>
                <td class="text-center">02</td>
                <td class="text-center">Pantoprazole</td> 
                <td class="text-center">
                    <div class="form-group">
                      <input type="number" name="name" class="form-control" id="name" placeholder="Add Quantity"
                        required>
                    </div>
                </td>
                <td class="text-center">₹ 185.50</td>
                <td class="text-center"><a href="#"><i class="text-danger fa fa-trash"></i></a></td>
              </tr>
            
              <tr>
                <td colspan="3" class="text-center font-weight-bold">Grand Total </td>
                <td colspan="3" class="text-center font-weight-bold">₹ 505.50</td>
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