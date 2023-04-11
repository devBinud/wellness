<?php
  require_once('include/header.php');
  ?>

<div class="row">

  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2">PRODUCT REQUEST</h3>
  </div>
  <div class="col-md-12">

    <div class="row mt-4">
      <div class="col-md-12 table-responsive mt-3">

        <div class="card" style="border:1px solid #c4b8b7; border-radius:10px;">
          <div class="col-md-12 mt-4">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body" style=" box-shadow:0 0.25rem 1rem rgba(0,0,0,0.2)">
                  <form class="forms-sample" action="#" method="POST" id="addPatient" enctype="multipart/form-data">
                    <input type="hidden" name="" value="">
                    <div class="row">
                      <div class="col-md-12">
                        <h4 class="text-primary mb-3">Request Details :</h4>
                        <hr>

                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="name">Requested by <span class="text-danger"> *</span> </label>
                              <input type="text" name="name" class="form-control" id="name"
                                placeholder="Enter the name" required>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="name">Products Name<span class="text-danger"> *</span> </label>
                              <input type="text" name="name" class="form-control" id="name"
                                placeholder="Enter product name" required>
                            </div>
                           
                          </div>
                       
                          <div class="col-md-4 mt-4">
                           <button type="submit" class="btn btn-primary">Add More +</button>
                          </div>
                          <div class="col-md-4 mt-3">
                            <div class="form-group">
                              <label for="name">Company Name <span class="text-danger"> *</span> </label>
                              <input type="text" name="name" class="form-control" id="name"
                                placeholder="Enter company name" required>
                            </div>
                          </div>
                       
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="remarks">Remarks</label>
                              <input type="textarea" name="name" class="form-control" id="name"
                                placeholder="">
                            </div>
                          </div>

                        </div>
                        <div class="row">
                          <div class="col-md-12 text-center mb-4">
                            <button type="submit" class="btn btn-danger " id="submit">Request now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-3 mr-1 d-flex align-items-center justify-content-between p-2">
            <div class="col-md-6">

            </div>
            <div class="col-md-5">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search by company Name or Product Name"
                  aria-label="">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-primary" type="button">Search</button>
                </div>
              </div>
            </div>
          </div>

          <div class="card-body table-responsive">

            <table class="table table-bordered table-hover text-center">
              <thead class="bg-primary text-white">
                <tr>
                  <th>#</th>
                  <th>Request By</th>
                  <th>Product Name</th>
                  <th>Company</th>
                  <th>Remarks</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>1</td>
                  <td style="line-height: 22px;">Pradyut Rabha <br> Executive, Jorhat Store</td>
                  <td>Licorice root</td>
                  <td>Company XYZ</td>
                  <td style="line-height: 22px;">please improve the <br> packaging quality</td>
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