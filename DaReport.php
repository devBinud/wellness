<?php
  require_once('include/header.php');
?>

<style>
.info-card{
    border: 1px solid rgba(112, 129, 252,0.5);
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
    background: #cccbff;
}
.span_small{
    color: rgb(72, 71, 71);
    font-size: 13px;
    font-weight: 300;
}
</style>

<div class="row">

    <div class="col-12 col-xl-12 mb-4 mb-xl-0 d-flex justify-content-between">
        <div class="title">
            <h3 class="font-weight-bold text-primary mb-2" style="font-size:20px;">DELIVERY AGENTS REPORT</h3>
            <p class="text-secondary mb-3">Reports of all delivery agents</p>
        </div>
        <div class="title__button">
            <!-- <a href="viewAllInvoices.php" class="btn btn-primary">View All Invoices <i class="fa fa-eye ml-2"></i></a> -->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xxl-4 col-md-6">
         <div class="card info-card doctor-card">
           <div class="card-body">
             <h5 class="card-title text-primary">Total Delivery <span class="span_small">| Today</span></h5>

             <div class="d-flex align-items-center">
               <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
               </div>
               <div class="p-2 ml-4">
                 <h3 class="text-center text-dark">145</h3>
               </div>
             </div>
           </div>

         </div>
       </div><!-- End doctor report Card -->

       <div class="col-xxl-4 col-md-6">
         <div class="card info-card revenue-card">

           <div class="card-body">
             <h5 class="card-title text-primary">Total Delivery <span class="span_small">| This Month</span></h5>

             <div class="d-flex align-items-center">
               <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
               </div>
               <div class="p-2 ml-3">
                 <h3 class="text-dark">964</h3>

               </div>
             </div>
           </div>

         </div>
       </div>

       <!-- End doctor report Card -->
</div>
<div class="row mt-3">
    <div class="col-xxl-4 col-md-6">
         <div class="card info-card doctor-card">
           <div class="card-body">
             <h5 class="card-title text-primary">Total Collection <span class="span_small">| Today</span></h5>

             <div class="d-flex align-items-center">
               <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
               </div>
               <div class="p-2 ml-4">
                 <h3 class="text-center text-dark">₹ 34500.00</h3>
               </div>
             </div>
           </div>

         </div>
       </div><!-- End doctor report Card -->

       <div class="col-xxl-4 col-md-6">
         <div class="card info-card revenue-card">

           <div class="card-body">
             <h5 class="card-title text-primary">Total Collection <span class="span_small">| This Month</span></h5>

             <div class="d-flex align-items-center">
               <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
               </div>
               <div class="p-2 ml-3">
                 <h3 class="text-dark">₹ 10964.00</h3>

               </div>
             </div>
           </div>

         </div>
       </div>

       <!-- End doctor report Card -->
</div>


    <div class="row mt-3 d-flex justify-content-between">
        <div class="col-md-12">

            <div class="card-body table-responsive mt-3">
                      <h4 class="mb-3 text-primary">Recent Delivery Agents :</h4>
                <table class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Agents Name</th>
                            <th>Distance Covered</th>
                            <th>Date</th>
                            <th>Delivery Location</th>
                            <th>Revenue Collection</th>


                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>Kamal Saikia</td>
                            <td>4.2 KM</td>
                            <td>10 Jun , 2022</td>
                            <td>Lokhra, Guwahati</td>
                            <td>₹ 487.00</td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>Rahul Dasgupta</td>
                            <td>3.4 KM</td>
                            <td>09 Jun , 2022</td>
                            <td>Borbari, Guwahati</td>
                            <td>₹ 240.00</td>
                        </tr>


                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <?php
require_once('include/footer.php');
?>