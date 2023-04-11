<?php
  require_once('include/header.php');
  ?>



<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 class="font-weight-bold text-primary">PATIENT</h3>
      <h6 class="font-weight-normal mb-0 text-muted">Add patient case</h6>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <form action="#" method="GET">
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="uhid">UHID</label>
                  <input type="text" name="uhid" class="form-control form-control-sm" id="uhid" placeholder="">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control form-control-sm" id="name" placeholder="">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="regDate">Registration Date <span class="text-danger"> *</span> </label>
                  <input type="date" name="reg_date" class="form-control form-control-sm" id="regDate" placeholder="">
                </div>
              </div>
              <div class="col-md-2 m-auto">
                <div class="form-group m-auto ">
                  <button type="submit" class="btn btn-primary " id="" data-toggle="tooltip" data-placement="top"
                    title="Search Patients"><i class="fa-solid fa-search"></i></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-12 add-case-div  mt-2">
      <div class="card">
        <div class="card-body ">
          <form class="forms-sample" action="#" method="POST" id="addPatientCase" enctype="multipart/form-data">
            <input type="hidden" name="" value="#">

            <div class="row">
              <div class="col-md-12 mb-2">
                <h3 class="text-dark">Prakash Boul</h3>

              </div>
              <div class="col-md-3">
                <h6 class="text-muted">UHID: AYUR0000001</h6>
              </div>
              <div class="col-md-2">
                <h6 class="text-muted">Gender: Male
                </h6>
              </div>
              <div class="col-md-3">
                <h5 class="text-muted">Blood Group : O-</h5>
              </div>
              <div class="col-md-4">
                <h6 class="text-muted">Age : 32 years as on 19 Apr, 22 </h6>
              </div>

            </div>
            <hr>
            <div class="row mt-4">
              <div class="col-md-4 a">
                <div class="form-group">
                  <label for="attendent">Attendent Name </label>
                  <input type="text" name="attendent" class="form-control" id="attendent"
                    placeholder="Enter attendent name">
                </div>
              </div>
              <div class="col-md-4 a">
                <div class="form-group">
                  <label for="attendentPhone">Attendent's Phone No </label>
                  <input type="text" name="attendent_phone" class="form-control" id="attendentPhone"
                    placeholder="Enter attendent phone">
                </div>
              </div>
              <div class="col-md-4 a">
                <div class="form-group">
                  <label for="attendentRel">Attendent's Relation </label>
                  <select name="attendent_rel[]" class="form-control js-example-basic-single" id="attendentRel">
                    <option value="">Select Attendent's Relation</option>
                    <option value="Grand Father">Grand Father</option>
                    <option value="Grand Mother">Grand Mother</option>
                    <option value="Father">Father</option>
                    <option value="Mother">Mother</option>
                    <option value="Brother">Brother</option>
                    <option value="Sister">Sister</option>
                    <option value="Friend">Friend</option>
                    <option value="Uncle">Uncle</option>
                    <option value="Aunt">Aunt</option>
                    <option value="Others">Others(Please Specify)</option>

                  </select>
                </div>
              </div>
              <div class="col-md-4 attendent-rel-1 d-none">
                <div class="form-group">
                  <label for="attendentRel1">Attendent Relation (other) </label>
                  <input type="text" name="attendent_rel[]" class="form-control" id="attendentRel1"
                    placeholder="Enter attendent's relation">
                </div>
              </div>

            </div>
            <hr>
            <div class="row mt-4 patient-case-input">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="department">Department <span class="text-danger"> *</span> </label>
                  <select name="department[]" class="form-control js-example-basic-single" id="department" required>
                    <option value="">Select Department</option>
                    <option value="1">Cardiology</option>
                    <option value="2">Gynocology</option>
                    <option value="3">Dermatology</option>
                    <option value="4">E.N.T</option>
                    <option value="5">Gastroenterology</option>
                    <option value="6">Medicine</option>
                    <option value="7">Nephrology</option>
                    <option value="8">Neurology</option>
                    <option value="9">Radiology</option>
                    <option value="10">Urology</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-right">
                <a href="viewAllPatients.html" class="btn btn-secondary"> Back</a>
                <button type="submit" class="btn btn-primary " id="submit">Submit</button>
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