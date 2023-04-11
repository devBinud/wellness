<?php
  require_once('include/header.php');
?>


<div class="col-12 col-xl-8 mb-4 mb-xl-0">
  <h3 class="font-weight-bold text-primary mb-2">INVOICES</h3>
</div>

<div class="col-md-12 mt-5">
  <div class="col-md-12">
    <div class="row d-flex align-items-center justify-content-between">
      <div class="col-md-6 mt-2">
        <a href="inpatientInvoice.php" style="text-decoration:none;">
          <div class="registration__left">
            <h4>In-patient</h4>
            <p class="font-italic">Invoices of In-patients</p>
          </div>
        </a>
      </div>
      <div class="col-md-6 mt-2">
        <a href="outpatientInvoice.php" style="text-decoration:none;">
          <div class="registration__right">
            <h4>Out-patient</h4>
            <p class="font-italic text-center text-white">Invoices of Out-patients</p>
          </div>
        </a>
      </div>

    </div>
  </div>

</div>


<?php
require_once('include/footer.php');
?>