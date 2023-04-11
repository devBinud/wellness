<?php
  require_once("include/header.php")
?>

<div class="row">

    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold text-primary mb-2">PRE-BOOKING</h3>
        <p class="mb-2 text-secondary">Book an Appointment</p>
    </div>
    <div class="col-md-8 mt-4">
        <div class="card" style="border:1px solid #a4aec4">
            <div class="card-body">
                <form class="forms-sample" action="#" method="POST" id="addPatient" enctype="multipart/form-data">
                    <input type="hidden" name="" value="">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="text-dark font-weight-bold text-uppercase">Patient's Details</h6>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name <span class="text-danger"> *</span> </label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter patient's name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone <span class="text-danger"> *</span></label>
                                        <input type="text" name="phone" class="form-control" id=""
                                            placeholder="Enter phone number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="age">Age (years) <span class="text-danger"> *</span></label>
                                        <input type="number" name="" class="form-control" id="" placeholder="Enter Age"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="speciality">Select Speciality <span class="text-danger"> *</span></label>
                                        <select name="" class="form-control" id="" required>
                                            <option value="">Select speciality</option>
                                            <option value="">Medicine</option>
                                            <option value="">Neurologist</option>
                                            <option value="">Radiology</option>
                                            <option value="">Cardiology</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Date of Appointment <span class="text-danger"> *</span></label>
                                        <input type="date" name="" class="form-control" id=""
                                            placeholder="" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12 text-center mb-4">
                    <!-- <button type="submit" class="btn btn-primary " id="submit">Confirm Booking</button> -->
                         <a href="selectDoctor.php" class="btn btn-primary">Confirm Booking</a>
                </div>
            </div>

            </form>
        </div>
    </div>
    <div class="col-md-4 mt-4">
        <div class="card" style="border:1px solid #a4aec4">
            <div class="card-body">
                <form class="forms-sample" action="#" method="POST" id="addPatient" enctype="multipart/form-data">
                    <input type="hidden" name="" value="">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="text-dark font-italic">Already prebooking?</h5>
                            <span class="text-danger"> Enter Referrence ID</span>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mt-4">
                                        <label for="name">Referrence Id <span class="text-danger"> *</span> </label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter referrence Id" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center mb-4">
                    <button type="submit" class="btn btn-primary " data-toggle="modal" data-target="#viewDetailsModal" id="submit">View Details</button>
                </div>
            </div>

            </form>

        </div>
    </div>
</div>
</div>

<!-- Modal -->

<div class="modal fade" id="viewDetailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-primary" id="exampleModalLabel">Pre-booking Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-dark">Patients Name : Matilal Hade</p>
        <p class="text-dark">Age : 34 Yrs</p>
        <p class="text-dark">Sex : Male</p>
        <p class="text-dark">Phone No : +91 98767 32879</p>
        <p class="text-dark">Speciality : Radiology</p>
        <p class="text-dark">Date of Appointment : 26-11-2022</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<?php
  require_once("include/footer.php")
?>