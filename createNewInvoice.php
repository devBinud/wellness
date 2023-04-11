<?php
  require_once('include/header.php');
?>


<div class="row">

  <div class="col-12 col-xl-12 mb-4 mb-xl-0 d-flex justify-content-between">
    <div class="title">
      <h3 class="font-weight-bold text-primary mb-2" style="font-size:20px;">CREATE NEW INVOICE FOR OUTPATIENT</h3>
      <p class="text-secondary">Inpatient invoice</p>
    </div>
    <div class="title__button">
      <a href="#" class="btn btn-primary">View All Invoices <i
          class="fa fa-eye ml-2"></i></a>
    </div>
  </div>




  <div class="col-md-12">

    <div class="row mt-4">
      <div class="col-md-12 table-responsive mt-3">
        <div class="card">
          <div class="row d-flex justify-content-between mt-3">
            <div class="col-md-6">
              <!-- <a href="createNewInvoiceInpatient.php" class="btn btn-primary">Create New Invoice <i class="fa fa-plus ml-2"></i></a> -->

            </div>
            <div class="col-md-4">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search by UHID or name" aria-label="">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-primary" type="button">Search</button>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body table-responsive">

            <table class="table table-bordered table-hover text-center">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Patient Name</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td>
                    <div class="col-md-12">
                      <div class="form-group">
                        <!-- <label for="maritalStatus">Marital Status <span class="text-danger"> *</span></label> -->
                        <select name="marital_status" class="form-control" id="maritalStatus" required>
                          <option value="">Select Patient</option>
                          <option value="">Karnel Deori</option>
                          <option value="">Amal Sinha</option>
                          <option value="">Sima Saikia</option>
                        </select>
                      </div>
                    </div>

                  </td>
                  <td><a href="createInvoice.php" class=" btn btn-danger text-white">Create</a></td>

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
</div>

<?php
require_once('include/footer.php');
?>