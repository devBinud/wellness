<?php
  require_once('include/header.php');
?>

<div class="row">

  <div class="col-12 col-xl-12 mb-4 mb-xl-0 d-flex justify-content-between">
    <div class="title">
      <h3 class="font-weight-bold text-primary mb-2" style="font-size:20px;">OUTWARD CHALLAN</h3>
      <p class="text-secondary">Create your outward challan</p>
    </div>
    <div class="title__button">
      <a href="viewAllChallans.php" class="btn btn-primary">View All Challans <i class="fa fa-eye ml-2"></i></a>
    </div>
  </div>

  <div class="col-md-12">

    <div class="row mt-4">
      <div class="col-md-12 table-responsive mt-3">
        <div class="card" style="border:1px solid #a4aec4;">
          <div class="row mt-3 mr-1 d-flex align-items-center justify-content-center p-2">
            <div class="col-md-6">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Scan SKU" aria-label="">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-primary" type="button">Scan</button>
                </div>
              </div>
            </div>
         
          </div>
          <div class="card-body table-responsive mt-3">

            <table class="table table-bordered table-hover text-center">
              <thead class="bg-primary text-white" >
                <tr>
                  <th>#</th>
                  <th>Product Name</th>
                  <th>Company</th>
                  <th>Category</th>
                  <th>Batch No</th>
                  <th>Expiry Date</th>
                  <th>MRP</th>
                  <th>Quantity</th>
                  <th>Status</th>
                  <th>Action</th>

                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td>Bitter melon</td>
                  <td>Baidyanath</td>
                  <td>Classical</td>
                  <td>AGT-M10000</td>
                  <td>09/26</td>
                  <td>645.00</td>
                  <td>60</td>
                  <td>
                    <select name=""
                    id="" class="" required style="margin-left:3px;padding:0 26px; width:160px;">
                    <option value="">Received full</option>
                    <option value="">Shortage</option>
                     </select>
                 
                  </td>
                  <td>
                   <a href="viewOutwardChallan.php" class="text-primary"> <i class="fa fa-eye"></i></a>
                  </td>

                </tr>
              </tbody>
            </table>

          </div>

          <div class="pagination__box">
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <span class="page-link"><i class="fa-solid fa-angles-left"></i></span>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                  <span class="page-link">
                    2
                    <span class="sr-only">(current)</span>
                  </span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fa-solid fa-angles-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php
require_once('include/footer.php');
?>