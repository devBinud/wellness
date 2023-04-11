<?php
  require_once('include/header.php');
  ?>

<div class="row">

    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold text-primary mb-2">PRESCRIPTIONS</h3>
        <p class="mb-2 text-secondary">Add or view prescriptions</p>
    </div>
    <div class="col-md-12">

        <div class="row mt-4">
            <div class="col-md-12 table-responsive mt-3">
                <div class="card" style="border:1px solid #a4aec4;">
                    <div class="row mt-3 mr-1 d-flex align-items-center justify-content-between p-3">
                        <div class="col-md-7"></div>
                        <div class="col-md-5">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search by Prescription No or UHID"
                                    aria-label="doctors">
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
                                    <th>UHID No</th>
                                    <th>Prescription No</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>ARC1243350001</td>
                                    <td>000001</td>
                                    <td>
                                        <a href="viewPrescription.php" class="fa fa-eye text-primary"></a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>ARC1243350002</td>
                                    <td>000002</td>
                                    <td>
                                        <a href="viewPrescription.php" class="fa fa-eye text-primary"></a>
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


</div>


<?php
  require_once('include/footer.php');
  ?>