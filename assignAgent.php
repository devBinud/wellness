<?php
  require_once('include/header.php');
  ?>


<div class="row">

  <div class="col-12 col-xl-8 mb-2 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2">ASSIGN AGENT TO AREA</h3>
    <p class="mb-2 text-secondary">List Of Delivery Agents</p>
  </div>
  <div class="col-md-12">

    <div class="row mt-8">
      <div class="col-md-12 table-responsive mt-3">
        <div class="card">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col-md-6"></div>
        <div class="col-md-4">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search by name or phone No"
              aria-label="doctors">
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
                  <th>Agents Name</th>
                  <th>Phone No</th>
                  <th>Vehicle Name</th>
                  <th>Vehicle No</th>
                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td>Manash Saha</td>
                  <td>95372 09872</td>     
                  <td>Hero Glamour</td>
                  <td>
                 <a href="viewAssignedAgent.php"
                class="btn btn-sm btn-primary w-80 mx-auto mt-2">View Assigned Agent</a> 
                </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>Ramgopal Singh</td>
                  <td>8768323654</td>
                  <td>Honda Active 6G</td>
                  <td>
                 <a href="viewAssignedAgent.php"
                class="btn btn-sm btn-primary w-80 mx-auto mt-2">View Assigned Agent</a> 
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
  
</div>




<?php
  require_once('include/footer.php');
  ?>