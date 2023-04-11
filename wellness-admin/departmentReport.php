<?php
  require_once('include/header.php');
?>

<style>
  .chartContainer{
    margin-top: 30px;
  }
</style>

<div class="row">

  <div class="col-12 col-xl-12 mb-4 mb-xl-0 d-flex justify-content-between">
    <div class="title">
      <h3 class="font-weight-bold text-primary mb-2" style="font-size:20px;">DEPARTMENT REPORT</h3>
      <p class="text-secondary">Reports of all the department</p>
    </div>
    <div class="title__button">
      <!-- <a href="viewAllInvoices.php" class="btn btn-primary">View All Invoices <i class="fa fa-eye ml-2"></i></a> -->
    </div>
  </div>


  <div class="row">
    <div class="col-md-8 mx-auto">

        <div id="chartContainer" class="chartContainer" style="height: 400px; max-width: 1000px; margin-right: 4rem;"></div>


    </div>
  </div>  
</div>



  <?php
  require_once('include/footer.php');
  ?>