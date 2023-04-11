<?php
  require_once('include/header.php');
  ?>

<div class="row">
  <div class="col-12 col-xl-12 mb-4 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2">ADD NEW EMPLOYEE</h3>
    <p class="text-secondary">Add employee and their Designation/Role</p>
  </div>

  <div class="col-md-12 mt-4">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body" style="border:1px solid #c4b8b7; border-radius:10px;">
          <form class="forms-sample" action="#" method="POST" id="addPatient" enctype="multipart/form-data">
            <input type="hidden" name="" value="">
            <div class="row">
              <div class="col-md-12">
                <h4 class="text-primary mb-3">Employee Details :</h4>
                <hr>

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name">Employee Name <span class="text-danger"> *</span> </label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Enter Employee name"
                        required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name">Father's Name<span class="text-danger"> *</span> </label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Enter Father's name"
                        required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name">Mother's Name <span class="text-danger"> *</span> </label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Enter Mother's name"
                        required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="phone">Phone No <span class="text-danger"> *</span> </label>
                      <input type="tel" name="name" class="form-control" id="name" placeholder="Enter Phone No"
                        required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="phone">Alternate No </label>
                      <input type="tel" name="name" class="form-control" id="name" placeholder="Enter Alternate No"
                        required>
                    </div>
                  </div>


                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name">Email Id <span class="text-danger"> *</span></label>
                      <input type="text" name="" class="form-control" id="" placeholder="Enter email ID">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name">DOB<span class="text-danger"> *</span></label>
                      <input type="date" name="" class="form-control" id="" placeholder="" required>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="gender">Blood Group<span class="text-danger"> *</span></label>
                      <select name="designation" class="form-control" id="" required>
                        <option value="">Select Blood Group</option>
                        <option value="">A+</option>
                        <option value="">A-</option>
                        <option value="">B+</option>
                        <option value="">B-</option>
                        <option value="">O+</option>
                        <option value="">O-</option>
                        <option value="">AB+</option>
                        <option value="">AB-</option>
                      </select>
                    </div>
                  </div>


                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="gender">Employee Designation/Role<span class="text-danger"> *</span></label>
                      <select name="designation" class="form-control" id="" required>
                        <option value="">Select Designation</option>
                        <option value="M">Ward Boy</option>
                        <option value="F">Delivery Agents</option>
                        <option value="O">Center Executive</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <h4 class="text-primary mb-3">Address :</h4>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Present Address <span class="text-danger">*</span></label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>
              <div class="col-md-3" style="margin-left: 20px;margin-bottom: 10px;">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Same as present address
                  </label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Permananent Address <span
                      class="text-danger">*</span></label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>
            </div>
            <hr>

            <div class="row">

              <div class="col-md-6" style="border-right: 1px solid rgb(184, 184, 184);">
                <div class="row">
            <h4 class="text-primary mb-5">Document Details :</h4>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">PAN No<span class="text-danger"> *</span></label>
                      <input type="text" name="" class="form-control" id="" placeholder="Enter PAN No">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Upload file<span class="text-danger"> *</span></label>
                      <input type="file" name="" class="form-control" id="" placeholder="" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Adhaar No<span class="text-danger"> *</span></label>
                      <input type="text" name="" class="form-control" id="" placeholder="Enter Adhaar No">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Upload file<span class="text-danger"> *</span></label>
                      <input type="file" name="" class="form-control" id="" placeholder="" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Driving Licence</label>
                      <input type="text" name="" class="form-control" id="" placeholder="Enter DL No">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Upload file</label>
                      <input type="file" name="" class="form-control" id="" placeholder="" required>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">

                <div class="row">
            <h4 class="text-primary mb-5">Employee Account Details :</h4>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="name">Account No <span class="text-danger"> *</span></label>
                      <input type="text" name="" class="form-control" id="" placeholder="Enter Bank Account No">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="name">IFSC Code<span class="text-danger"> *</span></label>
                      <input type="text" name="" class="form-control" id="" placeholder="Enter IFSC Code">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <hr>
            <h4 class="text-primary mb-3">Referrence Details :</h4>

            <div class="row">
              <div class="col-md-6" style="border-right: 1px solid rgb(184, 184, 184);">
                <h5 class="text-light bg-success p-3 text-center mb-4">Referrence 1</h5>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="name">Name<span class="text-danger"> *</span></label>
                      <input type="text" name="" class="form-control" id="" placeholder="Enter Name">
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="phone">Phone No<span class="text-danger"> *</span></label>
                      <input type="text" name="" class="form-control" id="" placeholder="Enter Phone No" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Address <span class="text-danger">*</span></label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </div>
                </div>
            

              </div>
              <div class="col-md-6">
                <h5 class="text-light bg-success p-3 text-center mb-4">Referrence 2</h5>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="name">Name<span class="text-danger"> *</span></label>
                      <input type="text" name="" class="form-control" id="" placeholder="Enter Name">
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="phone">Phone No<span class="text-danger"> *</span></label>
                      <input type="text" name="" class="form-control" id="" placeholder="Enter Phone No" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Address <span class="text-danger">*</span></label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-5">
              <div class="col-md-12 text-center mb-4">
                <button type="submit" class="btn btn-primary " id="submit">Save</button>
                <button type="#" class="btn btn-danger " id="cancel">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
  require_once('include/footer.php');
  ?>