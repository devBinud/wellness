<?php
require_once('include/header.php')
?>

<div class="col-12 col-xl-8 mb-4 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2" style="font-size: 21px;">CREATE OUTWARD CHALLAN</h3>
    <p class="mb-2 text-secondary">Create new outward challan</p>
</div>


<div class="col-md-12">

<div class="row mt-4">
  <div class="col-md-12 table-responsive mt-3">
    <div class="card">
      <div class="card-body table-responsive ">
        <table class="table table-bordered table-hover text-center" >
          <thead class="bg-primary text-white">
            <tr>
              <th>#</th>
              <th>Date</th>
              <th>To (Center)</th>
              <th>Remarks</th>
              <th>Create</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>1</td>
              <td>
                <input type="date">
              </td>
              <td>
              <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Enter center name" name="" id="">
            </div>
              </td>
              <td>
              <div class="input-group">
             <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
              </td>
              <td><a href="productList.php" class="badge badge-danger text-white">Create now +</a></td>
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
require_once('include/footer.php')
?>