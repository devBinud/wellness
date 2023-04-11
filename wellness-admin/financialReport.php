<?php
  require_once('include/header.php');
?>


<div class="row">

  <div class="col-12 col-xl-12 mb-4 mb-xl-0 d-flex justify-content-between">
    <div class="title">
      <h3 class="font-weight-bold text-primary mb-2" style="font-size:20px;">FINANCIAL REPORT</h3>
      <p class="text-secondary">Reports of all financial deals</p>
    </div>
    <div class="title__button">
      <!-- <a href="viewAllInvoices.php" class="btn btn-primary">View All Invoices <i class="fa fa-eye ml-2"></i></a> -->
    </div>
  </div>

  <div class="row mt-3 d-flex justify-content-between">
  <div class="col-md-6">
   
  <div class="card-body table-responsive mt-3">

<table class="table table-bordered table-hover text-center">
  <thead>
    <tr>
      <th>SL No</th>
      <th>Month</th>
      <th>Total Sales (Rs)</th>
   

    </tr>
  </thead>

  <tbody>
    <tr>
      <td>1</td>
      <td>January</td>
      <td>₹ 19000.00</td>
    </tr>
  
    <tr>
      <td>2</td>
      <td>February</td>
      <td>₹ 230000.00</td>
    </tr>

    <tr>
      <td>3</td>
      <td>March</td>
      <td>₹ 140000.00</td>
    </tr>

    <tr>
      <td>4</td>
      <td>April</td>
      <td>₹ 200000.00</td>
    </tr>

    <tr>
      <td>5</td>
      <td>May</td>
      <td>₹ 123210.00</td>
    </tr>

  </tbody>
</table>

</div>
  </div>
  <div class="col-md-6 stretch-card">
              <div class="card">
                <div class="card-body">
                 <div class="d-flex justify-content-between">
                  <p class="card-title">Financial Report</p>
                  <a href="#" class="text-primary">View all</a>
                 </div>
                  <p class="font-weight-500">The total number of eonsectetur adipisicing elit. Fugiat, alias.</p>
                  <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                  <canvas id="sales-chart"></canvas>
                </div>
              </div>
            </div>
  </div>


  <?php
require_once('include/footer.php');
?>