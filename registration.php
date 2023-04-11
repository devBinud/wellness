<?php
  require_once('include/header.php');
?>


<div class="col-12 col-xl-8 mb-4 mb-xl-0">
  <h3 class="font-weight-bold text-primary mb-2">REGISTRATION</h3>
</div>

<div class="col-md-12 mt-5">
  <div class="col-md-12">
    <div class="row d-flex align-items-center justify-content-between">
      <div class="col-md-6 mt-2">
        <a href="registrationInpatient.php" style="text-decoration:none;">
          <div class="registration__left">
            <h4>In-patient</h4>
            <p class="text-secondary">Registration for In-patient</p>
          </div>
        </a>
      </div>
      
      <div class="col-md-6 mt-2">
        <a href="registrationOutpatient.php" style="text-decoration:none;">
          <div class="registration__right">
            <h4>Out-patient</h4>
            <p class="text-secondary text-center">Registration for Out-patient</p>
          </div>
        </a>
      </div>

      <div class="col-md-6 mt-2">
        <a href="registeredPatient.php" style="text-decoration:none;">
          <div class="registration__right">
            <h4>Registered Patient</h4>
            <p class="text-secondary text-center">Entry for already registered patient</p>
          </div>
        </a>
      </div>


      <div class="col-md-6 mt-3 mx-auto">
        <a href="prebooking.php" style="text-decoration:none;">
          <div class="prebooking">
            <h4>Pre-booking</h4>
            <p class="text-secondary text-center">Book an appointment</p>
          </div>
        </a>
      </div>

    </div>
  </div>
</div>

</div>


<?php
require_once('include/footer.php');
?>