<?php
  require_once('include/header.php');
?>

<div class="row">

  <div class="col-12 col-xl-12 mb-4 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2" style="font-size:20px;">ADD NEW DOCTOR</h3>
    <p class="text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto, voluptatibus?</p>
  </div>

  <div class="col-md-12 mt-5">
    <div class="col-md-12">
      <div class="card" style="border:1px solid #a4aec4; padding:10px;">
        <div class="card-body">
          <form class="forms-sample" action="#" method="POST" id="addPatient" enctype="multipart/form-data">
            <input type="hidden" name="" value="">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="name">Name of the Doctor <span class="text-danger"> *</span> </label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Enter doctor's name"
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
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="gender">Gender <span class="text-danger"> *</span></label>
                      <select name="gender" class="form-control" id="gender" required>
                        <option value="">Select gender</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                        <option value="O">Other</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="phone">Email<span class="text-danger"> *</span> </label>
                      <input type="text" name="" class="form-control" id="name" placeholder="Enter the email" required>
                    </div>
                  </div>
           
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="degree">Degree<span class="text-danger"> *</span> </label>
                      <input type="text" name="" class="form-control" id="" placeholder="Add Degree of Doctor"
                        required>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="designation">Designation<span class="text-danger"> *</span> </label>
                      <input type="text" name="" class="form-control" id="" placeholder="Designation of Doctor">
                    </div>
                  </div>
                  <div class="col-md-4">
                   <div class="form-group ms-5">
                    <label for="dob">Specialization<span class="text-danger"> *</span> </label>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin-left:4px;">
                      <label class="form-check-label" for="flexCheckDefault">
                        Anesthesiology
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked  style="margin-left:4px;">
                      <label class="form-check-label" for="flexCheckChecked" >
                        Dermatology
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"  style="margin-left:4px;">
                      <label class="form-check-label" for="flexCheckChecked" >
                        Radiology
                      </label>
                    </div>
                   </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="degree">Registration No of Doctors<span class="text-danger"> *</span> </label>
                      <input type="text" name="" class="form-control" id="" placeholder="Enter the Ragistration No"
                        required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="dob">Joining Date <span class="text-danger"> *</span> </label>
                      <input type="date" name="" class="form-control" id="dob" placeholder="Choose date of Joining">
                    </div>
                  </div>

                </div>

              </div>

            </div>

            <div class="row mt-2">
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