<?php
  require_once('include/header.php');
  ?>


<div class="row">

  <div class="col-12 col-xl-8 mb-2 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2">ALL EMPLOYEES</h3>
    <p class="mb-2 text-secondary">List Of all employees (center)</p>
  </div>
  <div class="col-md-12">

    <div class="row mt-4">
      <div class="col-md-12 table-responsive mt-3">
        <div class="card" style="border:1px solid #a4aec4;">
        <div class="row d-flex justify-content-between mt-3 p-2">
            <div class="col-md-6">
            <button type="button" class="btn text-uppercase font-weight-bold text-primary">
                <!-- All agents <span class="badge text-bg-secondary font-weight-bold">( 34 )</span> -->
                </button>
            </div>
        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search by name or phone No"
              aria-label="doctors">
            <div class="input-group-append">
              <button class="btn btn-sm btn-primary mr-3" type="button">Search</button>
            </div>
          </div>
         </div>
        </div>
          <div class="card-body table-responsive">

            <table class="table table-bordered table-hover text-center">
              <thead class="bg-primary text-white">
                <tr>
                  <th>#</th>
                  <th>Employee Name</th>
                  <th>Phone No</th>
                  <th>Designation/ Role</th>
                  <th>Email Id</th>
                  <th>Action</th>

                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td>Manash Saha</td>
                  <td>95372 09872</td>  
                  <td>Center Executive</td>   
                  <td>Manash@aarush.in</td>
                  <td><a href="#"><i class="text-primary fa fa-eye"></i><i class="text-danger fa fa-trash ml-2"></i></a></td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>Ramgopal Singh</td>
                  <td>8768323654</td>
                  <td>Delivery Agents</td>
                  <td>ramgopal32@aarush.in</td>
                  <td><a href="#"><i class="text-primary fa fa-eye"></i><i class="text-danger fa fa-trash ml-2"></i></a></td>
                </tr>


                <tr>
                  <td>3</td>
                  <td>Rahul Sharma</td>
                  <td>9876736282</td>
                  <td>Ward Boy</td>
                  <td>rahul12@aarush.in</td>
                  <td><a href="#"><i class="text-primary fa fa-eye"></i><i class="text-danger fa fa-trash ml-2"></i></a></td>
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