<?php
require_once("include/header.php")
?>

<div class="col-12 col-xl-12 mb-4 mb-xl-0 d-flex justify-content-between">
    <h3 class="font-weight-bold text-primary mb-2">REGISTERED PATIENT</h3>
    <div class="new_registration">
        <!-- <a href="registrationInpatient.php" class="btn btn-primary">+ New Registration</a> -->
    </div>
</div>

<div class="col-md-12 mt-4" style="margin-bottom:5rem;">
        <div class="card" style="border:1px solid #a4aec4">
            <div class="card-body">
                <form class="forms-sample" action="#" method="POST" id="addPatient" enctype="multipart/form-data">
                    <input type="hidden" name="" value="">
                    <div class="row">
                        <div class="col-md-8  mx-auto">
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Registered Mobile No <span class="text-danger"> *</span></label>
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            placeholder="Enter registered phone number" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4">
                                    <button class="btn btn-primary">
                                     Check
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php
require_once("include/footer.php")
?>