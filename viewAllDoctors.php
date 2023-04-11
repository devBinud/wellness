<?php
  require_once('include/header.php');
?>


<div class="row">

  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2">DOCTORS</h3>
    <p class="mb-2 text-secondary">View all the list of Doctors</p>
  </div>
  <div class="col-md-12">

    <div class="row mt-4">
      <div class="col-md-12 table-responsive">

        <div class="card" style="border:1px solid #a4aec4;">
        <div class="row mt-3 mr-1 d-flex align-items-center justify-content-between">
              <div class="col-md-6">
              </div>
              <div class="col-md-5">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search by name or phone No" aria-label="doctors">
                  <div class="input-group-append">
                    <button class="btn btn-sm btn-primary" type="button">Search</button>
                  </div>
                </div>
              </div>
            </div>

          <div class="card-body table-responsive">
          
            <table class="table table-bordered table-hover text-center mt-4">
              <thead class="bg-primary text-white">
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Phone No</th>
                  <th>Specialization</th>
                  <th>Availability</th>
                  <th>Time</th>

                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td>Pradyut Phukan</td>
                  <td>+91 98782 56467</td>
                  <td>Opthamologist</td>
                  <td>
                   <input type="date">
                  </td>
                  <td>06:00-08:00 PM</td>
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